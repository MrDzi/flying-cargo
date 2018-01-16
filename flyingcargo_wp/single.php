<?php
/*
	The Template for displaying all single posts.
 **/
?>

<?php get_header(); ?>

	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		
		<?php 
			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			$title = get_the_title();
			echo '<div class="page-title" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('. $url.')">
					<div class="container">
						<h1>'.$title.'</h1>
					</div>
				</div>';
		?>
		<section class="excerpt">
			<div class="container">
				<?php the_excerpt(); ?>
			</div>
		</section>
		<section class="section section--regular">
			<div class="container">
				
				<?php the_content(); ?>
				<div class="date"><?php the_date('d/m/Y'); ?></div>
				
				<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'All News'))); ?>" class="button button--inverse mt-40">Go to all posts</a>
				
			</div>
		</section>
		</div>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
