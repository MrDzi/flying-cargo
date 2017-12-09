<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo get_bloginfo( 'name' ); ?></title>
        <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <!-- <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/vendor/normalize.css">
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/vendor/materialdesignicons.min.css"> -->
        <!-- <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/main.css"> -->

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
                    <?php echo qtranxf_generateLanguageSelectCode(‘both’); ?>
                    <div class="dropdown dropdown--language">
                        <span class="dropdown-toggle dropdown-toggle--language" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SR</span>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">SR</a>
                            <a class="dropdown-item" href="#">EN</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
