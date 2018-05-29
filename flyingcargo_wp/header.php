<!doctype html>
<html class="no-js" lang="<?php echo qtranxf_getLanguage() ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo get_bloginfo( 'name' ); ?></title>
        <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="icon.png">

        <?php wp_head();?>
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <header class="main-header">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <a href="<?php echo get_bloginfo( 'wpurl' );?>"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/fc-logo.jpg" alt="FlyingCargo logo"></a>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <?php
                            $args = array(
                                'menu_class' => 'nav d-flex justify-content-between',
                                'menu' => '(your_menu_id)'
                            );
                            wp_nav_menu( $args );
                            echo qtranxf_generateLanguageSelectCode(array(
                                'type'   => 'custom',
                                'format' => '<span class="language-code">%c</span>'
                            ));
                        ?>
                    </div>
                </div>
            </div>
        </header>
