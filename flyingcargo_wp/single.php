<?php
/*
	The Template for displaying all single posts.
 **/
?>

<?php get_header(); ?>

	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

		<div class="page-title">
		    <div class="container">
		        <h1><?php the_title(); ?></h1>
		    </div>
		</div>

		<div class="container">
    		<section class="section section--regular">

				<?php the_content(); ?>

				<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'All News'))); ?>" class="button button--inverse">Go to all posts</a>

			</section>
		</div>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
