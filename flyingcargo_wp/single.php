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
		echo '<div class="page-title page-title--has-overlaping-block" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('. $url.')">
				<div class="container">
					<h1>'.$title.'</h1>
				</div>
			</div>';
	?>

<?php endwhile; endif; ?>

<!-- Content section STARTS -->
<div class="container pb-50">
    <div class="row">
        <div class="col-8">
            <section class="section section--single">
				<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
                <div class="post-excerpt">
					<?php the_excerpt(); ?>
				</div>
				<?php the_content(null, true); ?>
				<div class="date"><?php the_date('d/m/Y'); ?></div>
				<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'All News'))); ?>" class="button button--inverse mt-40">Go to all posts</a>
				<?php endwhile; endif; ?>

    		</section>
		</div>
		<div class="col-4">
	        <div class="main-sidebar">
	            <div class="info-block info-block--news">
	                <h3>Recent News</h3>
	                <ul class="news-list list-unstyled">

						<?php

						$args = array('numberposts' => 3, 'post__not_in' => array( $post->ID ));

						$myposts = get_posts( $args );

						foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
						<li class="mb-3">
						    <article class="news-list__article--sidebar">
						        <a href="<?php the_permalink(); ?>" class="d-flex flex-start">
						            <?php
						                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
						                echo '<div class="news-list__thumb" style="background-image: url('. $url.')"></div>';
						            ?>
						            <div class="news-list__article-content">
						                <h4><?php the_title(); ?></h4>
						                <span class="date"><?php the_date('d/m/Y'); ?></span>
						            </div>
						        </a>
						    </article>
						</li>
						<?php endforeach;
						wp_reset_postdata();?>

					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Content section ENDS -->

<?php get_footer(); ?>
