<?php
/*
Template Name: Markets Page
*/
?>
<!-- Header -->
<?php get_header(); ?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<section class="inner-hero" style="background-image: url('<?php echo $image[0]; ?>')">
	<div class="container-fluid">
		<div class="main">
			<div class="flex">
				<div class="picture">
					<img src="<?php bloginfo('template_directory'); ?>/dist/images/franchise-form-img.png" alt="">
					<!-- <button class="btn-info"><a href="http://franchise.prepacadtutors.wpengine.com/get-started/">Contact Prep Academy Tutors</a></button> -->
				</div>
				<div class="form">
					<?php include (TEMPLATEPATH . '/dist/inc/contactForm.php'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>

<section class="inner-content">
	<div class="container-fluid">
		<div class="content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; else: ?>
			<?php endif; ?>
		</div>
	</div>
</section>

<section class="available-markets">
	<div class="container-fluid">
		<div class="map-bg">
			<div class="head"><h3>Available Markets</h3></div>
			<div class="market-box">
				<div>
					<img src="<?php bloginfo('template_directory'); ?>/dist/images/market-1.jpg" alt="">
					<ul>
						<li><i class="fa fa-graduation-cap"></i> Calgary</li>
						<li><i class="fa fa-graduation-cap"></i> Vancouver</li>
						<li><i class="fa fa-graduation-cap"></i> Edmonton</li>
					</ul>
				</div>
				<div>
					<img src="<?php bloginfo('template_directory'); ?>/dist/images/market-2.jpg" alt="">
					<ul>
						<li><i class="fa fa-graduation-cap"></i> Winnipeg</li>
						<li><i class="fa fa-graduation-cap"></i> Fort McCurray</li>
						<li><i class="fa fa-graduation-cap"></i> Regina</li>
						<li><i class="fa fa-graduation-cap"></i> Saskatoon</li>
					</ul>
				</div>
				<div>
					<img src="<?php bloginfo('template_directory'); ?>/dist/images/market-3.jpg" alt="">
					<ul>
						<li><i class="fa fa-graduation-cap"></i> Kitchener-Waterloo</li>
						<li><i class="fa fa-graduation-cap"></i> London</li>
						<li><i class="fa fa-graduation-cap"></i> Hamilton</li>
						<li><i class="fa fa-graduation-cap"></i> Vaughan</li>
						<li><i class="fa fa-graduation-cap"></i> Pickering</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="steps">
	<div class="container-fluid">
		<div class="flex">
			<div class="previous">
				<a href="<?php echo home_url('/opportunity'); ?>">
					<span class="arrow">
						<i class="fa fa-chevron-left"></i>
					</span>
					<div class="info">
						<p class="h5">Previous Step</p>
						<p class="step">Opportunity</p>
					</div>
				</a>
			</div>
			<div class="split">
				<div class="box"></div>
			</div>
			<div class="next">
				<a href="<?php echo home_url('/who-we-are'); ?>">
					<div class="info">
						<p class="h5">Next Step</p>
						<p class="step">Who We Are</p>
					</div>
					<span class="arrow">
						<i class="fa fa-chevron-right"></i>
					</span>
				</a>
			</div>
		</div>
	</div>
</section>
<section class="contact-us">
	<div class="container-fluid">
		<h3>Get Started</h3>
		<h2>Become Part Of Our Team!</h2>
		<div class="cta">
			<p class="call">Give us a call at <span>888.885.3968</span></p>
			<p class="or">Or</p>
			<button class="btn-info"><a href="<?php echo home_url('/get-started'); ?>">Shoot Us an Email!</a></button>
		</div>
	</div>
</section>

<!-- Footer -->
<?php get_footer(); ?>