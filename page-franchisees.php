<?php
/*
Template Name: Franchisees Page
*/
?>

<?php get_header(); ?>

<section class="inner-content franchisees">
	<div class="container-fluid">
		<h1>Meet our Franchisees</h1>
		<div class="franchisee-list">
			<?php 
			    $args = array( 'post_type' => 'franchisee', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => -1 );
			    $loop = new WP_Query( $args );
			    while ( $loop->have_posts() ) : $loop->the_post();
			
			    $name = types_render_field( "name", array("raw"=>"true") );
			    $bio = types_render_field("bio", array("raw"=>"html"));
			    $picture = types_render_field("picture", array("raw"=>"html"));
			?> 
			
			<div class="franchisee">
				<div class="picture">
					<?php echo $picture ?>
				</div>
				<div class="info">
					<h2><?php echo $name ?></h2>
					<p><?php echo $bio ?></p>
				</div>
			</div>
			
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>