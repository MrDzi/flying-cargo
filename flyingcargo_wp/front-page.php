<?php get_header(); ?>

<!-- Hero section START -->
<section class="section section--hero">
    <div class="container">
        <div class="moto-wrapper d-flex flex-column justify-content-center align-items-center">
            <div class="moto">
                <span><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                    '[:en]Welcome to FlyingCargo Serbia.[:]
                    [:rs]Dobro došli na FlyingCargo Srbija.[:]'
                ); ?></span>
            </div>
            <div class="tracking-block">
                <input class="input input--tracking" type="text" id="trackingNumbers" name="trackingNumbers" placeholder="<?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                    '[:rs]Unesi broj(eve) za praćenje odvojene zapetom[:][:en]Enter tracking number(s) separated by comma[:]'
                )?>"></input>
                <button id="trackingNumbersButton" class="button button--primary button--big"><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                    '[:rs]Prati pošiljku[:][:en]Track package[:]'
                )?></button>
                <!-- <div class="tracking-block__info">
                    Track up to 10 numbers at a time, separate with a comma or Enter.
                </div> -->
            </div>
        </div>
    </div>
</section>
<!-- Hero section START -->

<!-- Content section START -->
<section class="section section--content">
    <div class="container">
        <div class="news-block-wrapper">
            <div class="row">
                <?php $latest_post = get_posts( 'numberposts=3' );
                foreach( $latest_post as $post ) : setup_postdata( $post );

                    get_template_part( 'content', get_post_format() );

                endforeach; ?>
                <?php wp_reset_query(); ?>
            </div>
            <div class="text-center pt-20">
                <a class="button button--inverse button--big" href="<?php echo esc_url( get_permalink( get_page_by_title( 'All News'))); ?>" class="color-yellow"><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                    '[:rs]Sve vesti[:][:en]All news [:]'
                )?><i class="mdi mdi-chevron-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- Content section END -->

<!-- Documents section STARTS -->
<div class="section section--bkg-image section--documents">
    <div class="container">
        <h3><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
            '[:rs]Važna dokumenta[:][:en]Important Documents[:]'
        )?></h3>
        <div class="d-flex flex-wrap">
            <a href="<?php bloginfo('template_url'); ?>/assets/documents/isprava-o-zastupanju.doc" class="text-card-item d-flex align-items-center">
                <i class="mdi mdi-download mr-2"></i>
                <span>Isprava o zastupanju</span>
            </a>
            <a href="<?php bloginfo('template_url'); ?>/assets/documents/nalog-za-carinjenje.doc" class="text-card-item d-flex align-items-center">
                <i class="mdi mdi-download mr-2"></i>
                <span>Nalog za carinjenje</span>
            </a>
            <a href="<?php bloginfo('template_url'); ?>/assets/documents/import/izjava-o-besplatnoj-posiljci.doc" class="text-card-item d-flex align-items-center">
                <i class="mdi mdi-download mr-2"></i>
                <span>Izjava o besplatnoj pošiljci</span>
            </a>
            <a href="<?php bloginfo('template_url'); ?>/assets/documents/import/izjava-o-nameni.doc" class="text-card-item d-flex align-items-center">
                <i class="mdi mdi-download mr-2"></i>
                <span>Izjava o nameni</span>
            </a>
            <a href="<?php bloginfo('template_url'); ?>/assets/documents/import/izjava-o-realnoj-vrednosti-za-fizicka-lica.docx" class="text-card-item d-flex align-items-center">
                <i class="mdi mdi-download mr-2"></i>
                <span>Izjava o realnoj vrednosti za fizička lica</span>
            </a>
            <a href="<?php bloginfo('template_url'); ?>/assets/documents/import/izjava-za-fizicka-lica.docx" class="text-card-item d-flex align-items-center">
                <i class="mdi mdi-download mr-2"></i>
                <span>Izjava za fizička lica</span>
            </a>
            <a href="<?php bloginfo('template_url'); ?>/assets/documents/import/ovlascenje-fizicka-lica.doc" class="text-card-item d-flex align-items-center">
                <i class="mdi mdi-download mr-2"></i>
                <span>Ovlašćenje za fizička lica</span>
            </a>
            <a target="_blank" href="<?php bloginfo('template_url'); ?>/assets/documents/export/commercial-invoice_faktura.pdf" class="text-card-item d-flex align-items-center">
                <i class="mdi mdi-download mr-2"></i>
                <span>Commercial invoice - faktura</span>
            </a>
            <a target="_blank" href="<?php bloginfo('template_url'); ?>/assets/documents/export/instrukcije-za-preuzimanje-posiljke-u-inostranstvu.pdf" class="text-card-item d-flex align-items-center">
                <i class="mdi mdi-download mr-2"></i>
                <span>Instrukcije za preuzimanje pošiljke u inostranstvu</span>
            </a>
            <a target="_blank" href="<?php bloginfo('template_url'); ?>/assets/documents/export/instrukcije-za-transport-posiljke.pdf" class="text-card-item d-flex align-items-center">
                <i class="mdi mdi-download mr-2"></i>
                <span>Instrukcije za transport pošiljke</span>
            </a>
            <a target="_blank" href="<?php bloginfo('template_url'); ?>/assets/documents/export/letter-of-authorization_pismo-autorizacije.pdf" class="text-card-item d-flex align-items-center">
                <i class="mdi mdi-download mr-2"></i>
                <span>Letter of authorization - pismo autorizacije</span>
            </a>
            <a target="_blank" href="<?php bloginfo('template_url'); ?>/assets/documents/export/izjava-za-bateriju.doc" class="text-card-item d-flex align-items-center">
                <i class="mdi mdi-download mr-2"></i>
                <span>Izjava za bateriju</span>
            </a>
        </div>
    </div>
</div>
<!-- Documents section ENDS -->

<!-- Packaging section STARTS -->
<div class="section section--blue">
    <div class="container">
        <div class="d-flex justify-content-center flex-wrap">
            <button class="button button--big button--white-inverse" data-toggle="modal" data-target="#packaging-modal"><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                '[:rs]Opcije pakovanja[:][:en]Packaging options[:]'
            )?></button>
        </div>
    </div>
</div>
<div class="modal fade" id="packaging-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                    '[:rs]Opcije pakovanja[:][:en]Packaging options[:]'
                )?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="mdi mdi-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/<?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                    '[:rs]packaging[:][:en]packaging_eng[:]'
                )?>.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Packaging section ENDS -->

<!-- Map section START -->
<section class="section section--contact">
    <div id="map"></div>
</section>
<!-- Map section END -->

<?php get_footer(); ?>
