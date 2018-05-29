<?php get_header(); ?>

    <?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

    <!-- Page title section STARTS -->
    <div class="page-title">
        <div class="container">
            <h1><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                '[:en]All news[:]
                [:rs]Sve vesti[:]'
            ); ?></h1>
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

                <div class="col-lg-6 col-12 mt-20 mb-20">

                    <?php wp_pagenavi(); ?>

                </div>

                <?php endif; wp_reset_query(); ?>
            </div>

        </div>
    </section>
    <!-- Content section ENDS -->

<?php get_footer(); ?>
