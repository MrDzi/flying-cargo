<?php get_header(); ?>

<!-- Hero section START -->
<section class="section section--hero">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="tracking-block">
                    <h3><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                        '[:en]Track package[:]
                        [:rs]Prati posiljku[:]'
                    ); ?></h3>
                    <textarea id="trackingNumbers" class="full-width" name="trackingNumbers" placeholder="Enter tracking number(s)"></textarea>
                    <div class="row justify-content-between align-items-center mt-2">
                        <div class="col-6 tracking-block__info">
                            Track up to 10 numbers at a time. Separate with a comma or Enter.
                        </div>
                        <div class="col-6">
                            <button class="button button--primary">Track</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="moto">
                    <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.</span>
                <div>
            </div>
        </div>
    </div>
</section>
<!-- Hero section START -->

<!-- Content section START -->
<section class="section section--content">
    <div class="container">
        <div class="row info-blocks-wrapper">

            <div class="col-md-4">
                <div class="info-block info-block--links">
                    <h3>Quick links</h3>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <a href="#" class="d-flex align-items-center">
                                <span class="links-list__icon d-flex align-items-center justify-content-center">
                                    <i class="mdi mdi-forum"></i>
                                </span>
                                <span class="links-list__text">Chat live with our support</span>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Import'))); ?>" class="d-flex align-items-center">
                                <span class="links-list__icon d-flex align-items-center justify-content-center">
                                    <i class="mdi mdi-airplane-landing"></i>
                                </span>
                                <span class="links-list__text">Import</span>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="#" class="d-flex align-items-center">
                                <span class="links-list__icon d-flex align-items-center justify-content-center">
                                    <i class="mdi mdi-airplane-takeoff"></i>
                                </span>
                                <span class="links-list__text">Export</span>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="#" class="d-flex align-items-center">
                                <span class="links-list__icon d-flex align-items-center justify-content-center">
                                    <i class="mdi mdi-domain"></i>
                                </span>
                                <span class="links-list__text">About Us</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-block info-block--news">
                    <h3>News</h3>
                    <ul class="news-list list-unstyled">
                        <?php
                        $i = 1;
            			if ( have_posts() ) : while ( have_posts() && $i < 4 ) : the_post();

            				get_template_part( 'content', get_post_format() );

            			$i++; endwhile; endif;
            			?>
                    </ul>
                    <div class="text-right pt-2">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'All News'))); ?>" class="color-yellow">All news <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-block info-block--contact">
                    <h3>Contact</h3>
                    <div class="info-block__content">
                        <h4>Flying Cargo YU doo</h4>
                        <ul class="contact-list list-unstyled">
                            <li class="d-flex align-items-center">
                                <i class="mdi mdi-map-marker small-icon mr-2"></i>
                                <span>Autoput 22, 11000 Beograd</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="mdi mdi-phone small-icon mr-2"></i>
                                <span>+381 11 3109 400</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="mdi mdi-fax small-icon mr-2"></i>
                                <span>+381 11 3109 444</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="mdi mdi-email small-icon mr-2"></i>
                                <span>csa@flying-cargo.rs</span>
                            </li>
                            <li class="d-flex align-items-top">
                                <i class="mdi mdi-clock small-icon mr-2"></i>
                                <span class="mt-1">Mon - Fri: 08:00 to 19:00</br>
                                    Sat: 08:00 to 14:00</br>
                                    Closed on Sundays and public holidays
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Content section END -->

<!-- Map section START -->
<section class="section section--contact">
    <!-- TODO Google map -->
</section>
<!-- Map section END -->

<?php get_footer(); ?>
