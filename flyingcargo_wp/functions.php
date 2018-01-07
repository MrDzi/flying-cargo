<?php

    function theme_styles() {
        wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/assets/css/vendor/bootstrap.min.css');
        wp_enqueue_style('font_awesome', get_template_directory_uri() . '/assets/css/vendor/font-awesome.min.css');
        wp_enqueue_style('materialdesignicons', get_template_directory_uri() . '/assets/css/vendor/materialdesignicons.min.css');
        wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/vendor/normalize.css');
        wp_enqueue_style('main_css', get_template_directory_uri() . '/assets/css/main.css');
    }
    add_action('wp_enqueue_scripts','theme_styles');

    function theme_scripts(){
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/vendor/jquery-3.2.1.min.js');
        wp_enqueue_script( 'popper_js', get_template_directory_uri() . '/assets/js/vendor/popper.js');
        wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js', array('jquery'), '', true);
        wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.js', array(), '', true);
    }
    add_action('wp_enqueue_scripts','theme_scripts');

    function import_script() {
        if (is_page('import')) {
            wp_enqueue_script('import_js', get_template_directory_uri() . '/assets/js/import.js', array('jquery'), '', true);
        }
        if (is_front_page()) {
            wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDtnSCN8MGSd0R3vfVVdZtJhkoLh7bxBLg&callback=initMap', array('main_js'), '', true);
        }
    }
    add_action('wp_enqueue_scripts', 'import_script');

    add_theme_support('post-thumbnails', array('post'));
    set_post_thumbnail_size(100, 75);

?>
