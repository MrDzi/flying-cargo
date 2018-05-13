<?php get_header(); ?>

<!-- Hero section START -->
<section class="section section--hero d-flex flex-column justify-content-center align-items-center">
    <div class="moto">
        <span><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
            '[:en]This is moto in English[:]
            [:rs]Ovo je moto na srpskom[:]'
        ); ?></span>
    </div>
    <div class="tracking-block">
        <div class="d-flex justify-content-between align-items-center mt-2">
            <input class="input input--tracking" type="text" id="trackingNumbers" name="trackingNumbers" placeholder="Enter tracking number(s)"></input>
            <button id="trackingNumbersButton" class="button button--primary button--big">Track package</button>
        </div>
        <!-- <div class="tracking-block__info">
            Track up to 10 numbers at a time, separate with a comma or Enter.
        </div> -->
    </div>
</section>
<!-- Hero section START -->

<!-- Content section START -->
<section class="section section--content">
    <div class="container">
        <div class="news-block-wrapper">
            <div class="row">
                <?php
                $i = 1;
                if ( have_posts() ) : while ( have_posts() && $i < 4 ) : the_post();

                    get_template_part( 'content', get_post_format() );

                $i++; endwhile; endif;
                ?>
            </div>
            <div class="text-center pt-20">
                <button class="button button--inverse button--big" href="<?php echo esc_url( get_permalink( get_page_by_title( 'All News'))); ?>" class="color-yellow">All news <i class="mdi mdi-chevron-right"></i></button>
            </div>
        </div>
    </div>
</section>
<!-- Content section END -->

<!-- Content section START -->
<section class="section" style="height: 500px">

</section>
<!-- Content section END -->

<!-- Map section START -->
<section class="section section--contact">
    <div id="map"></div>
</section>
<!-- Map section END -->

<?php get_footer(); ?>
