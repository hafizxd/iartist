<?php

    function blankslate_enqueue_styles() {
        wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), wp_get_theme()->get('Version'));
    }

    add_action('wp_enqueue_scripts', 'blankslate_enqueue_styles');

    function my_login_logo_one() {
        ?>
        <style>
            body.login div#login h1 a {
                background-image: url("<?php bloginfo('stylesheet_directory'); ?>/login_logo.jpg");
            }
        </style>

        <?php
    }
    add_action('login_enqueue_scripts', 'my_login_logo_one');

    ?>