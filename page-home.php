<?php
/*
Template Name: Home Page
*/
?>
<!-- Header -->
<?php get_header(); ?>

<section class="hero">
	<div class="hero-slider">
		<div><img src="<?php bloginfo('template_directory'); ?>/dist/images/hero.jpg" alt=""></div>
	</div>
	<div class="hero-caption">
		<img src="<?php bloginfo('template_directory'); ?>/dist/images/hero-caption.png">
		<button class="btn-info"><a href="<?php echo home_url('/pat-advantage'); ?>">What is the PAT Advantage?</a></button>
	</div>
</section>
<section class="callout">
	<div class="container-fluid">
		<h2>Get The Curriculum to a Rewarding Opportunity</h2>
		<div class="see-more">
			<a href="#mainContent" class="smooth"><i class="fa fa-chevron-down"></i></a>
		</div>
	</div>
</section>
<section class="main-content">
	<div class="container-fluid">
		<div class="row">
			<section class="ctas">
				<div class="flex">
					<div class="cta-box">
						<div class="icon-box">
							<i class="fa fa-graduation-cap"></i>
						</div>
						<div class="cta-action" data-mh>
							<a href="<?php echo home_url('/who-we-are'); ?>">Find Out Who we Are</a>
						</div>
					</div>
					<div class="cta-box">
						<div class="icon-box">
							<i class="fa fa-quote-right"></i>
						</div>
						<div class="cta-action" data-mh>
							<a href="<?php echo home_url('/pat-advantage'); ?>">Learn About the PAT Advantage</a>
						</div>
					</div>
					<div class="cta-box">
						<div class="icon-box">
							<i class="fa fa-globe"></i>
						</div>
						<div class="cta-action" data-mh>
							<a href="<?php echo home_url('/available-markets'); ?>">See The Available Markets</a>
						</div>
					</div>
					<div class="cta-box">
						<div class="icon-box">
							<i class="fa fa-lightbulb-o"></i>
						</div>
						<div class="cta-action" data-mh>
							<a href="<?php echo home_url('/get-started'); ?>">Opportunity Awaits - Get Started!</a>
						</div>
					</div>
				</div>
			</section>
			<div class="col-sm-6" id="mainContent">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; else: ?>
				<?php endif; ?>
				<div class="callout-section">
					<p class="quote">Prep Academy Tutors is Looking for Driven Individuals Ready to Change the Lives of Students.</p>
				</div>
			</div>
			<div class="col-sm-6 story-section">
				<img src="<?php bloginfo('template_directory'); ?>/dist/images/franchise-carly-img.png">
				<p class="info">Working as a babysitter, facilitating children’s recreational programs, and obtaining a Master’s in Child Psychology and Education, Carly Dougherty has a strong penchant for helping children. She directed her passions towards tutoring, and upon seeing growing success in that field, opened her own business in 2010. She and her husband decided to turn their business into a franchise, seeing an opportunity to allow others to also spearhead their own tutoring companies. They instill a sense of family-oriented values in their company.</p>
				<button class="btn-info"><a href="<?php echo home_url('/our-story'); ?>">Learn More About Carly's Story</a></button>
			</div>
		</div>
	</div>
</section>
<section class="home-contact">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6" data-mh>
				<img src="<?php bloginfo('template_directory'); ?>/dist/images/contact-img.png">
			</div>
			<div class="col-sm-6" data-mh>
				<div class="footer-contact">
					<?php include (TEMPLATEPATH . '/dist/inc/contactForm.php'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Footer -->
<?php get_footer(); ?>