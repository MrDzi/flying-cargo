<?php
    /* Template Name: All news */
?>

<?php get_header(); ?>

<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

<!-- Page title section STARTS -->
<div class="page-title">
    <div class="container">
        <h1>All news</h1>
    </div>
</div>
<!-- Page title section ENDS -->

<!-- Content section STARTS -->
<section class="section section--regular">
    <div class="container">
        <div class="row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

                get_template_part( 'article' );

            endwhile; ?>

            <div class="navigation">
    			<span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
    		</div>

            <?php endif; wp_reset_query(); ?>
        </div>

    </div>
</section>
<!-- Content section ENDS -->

<?php get_footer(); ?>
