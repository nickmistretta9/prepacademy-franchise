<?php
/*
Template Name: Contact Page
*/
?>
<!-- Header -->
<?php get_header(); ?>


<section class="contact-content">
	<div class="container-fluid">
		<h3>Get Started With <span>Prep Academy Tutors!</span></h3>
		<div class="infographic">
			<div class="first-section">
				<img src="<?php bloginfo('template_directory'); ?>/dist/images/contact-red.png">
				<div class="content">
					<div class="number">1.</div>
					<div class="info">
						<p>Start The Conversation!</p>
						<p class="a">A. Chat with Carly and Adrian</p>
						<p class="b">B. Discuss our Franchise Disclosure Document</p>
					</div>
				</div>
			</div>
			<div class="second-section">
				<img src="<?php bloginfo('template_directory'); ?>/dist/images/contact-blue-1.png">
				<div class="content doubles">
					<div class="flex">
						<div class="left">
							<div class="number">2.</div>
							<div class="info">
								<p>Discuss Your Investment!</p>
								<p class="a">A. Learn what you'll need with Carly and Adrian</p>
								<p class="b">B. Determine if you are a qualified franchisee</p>
							</div>
						</div>
						<div class="right">
							<div class="number">3.</div>
							<div class="info">
								<p>Consider The Leap!</p>
								<p class="a">A. Take a few days to consider your investment</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="third-section">
				<img src="<?php bloginfo('template_directory'); ?>/dist/images/contact-tan.png" alt="">
				<div class="content doubles bottom">
					<div class="flex">
						<div class="left">
							<div class="number">4.</div>
							<div class="info">
								<p>Meet Your Support Team!</p>
								<p class="a">A. Finalize your contract</p>
								<p class="b">B. Provide your start-up fee</p>
								<p class="c">C. Begin training - learn how to generate leads and recruit tutors!</p>
							</div>
						</div>
						<div class="right">
							<div class="number">5.</div>
							<div class="info">
								<p>Get Support, Always!</p>
								<p class="a">A. Begin your business and start building you client roster!</p>
								<p class="b">B. Receive marketing materials so the community knows your name!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="fourth-section">
				<img src="<?php bloginfo('template_directory'); ?>/dist/images/contact-bottom.png" alt="">
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

<?php get_footer(); ?>