<?php get_header(); ?>

    <!-- Page title section STARTS -->
    <div class="page-title">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
    <!-- Page title section ENDS -->

    <!-- Content section STARTS -->
    <section class="section section--regular">
        <div class="container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
             the_content();
             endwhile; endif;
            ?>
        </div>
    </section>
    <!-- Content section ENDS -->

<?php get_footer(); ?>
