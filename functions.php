<?php

function nova_agency_enqueue_assets() {

    wp_enqueue_style(
        'nova-agency-style',
        get_stylesheet_uri()
    );

    wp_enqueue_style(
        'nova-agency-main',
        get_template_directory_uri() . '/assets/css/main.css'
    );

    wp_enqueue_script(
        'nova-agency-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        null,
        true
    );
}

add_action(
    'wp_enqueue_scripts',
    'nova_agency_enqueue_assets'
);


function nova_agency_register_menus() {
    register_nav_menus(
        array(
            'primary-menu' => 'Primary Menu',
             'footer-menu'  => 'Footer Menu'

        )
    );
}

add_action(
    'after_setup_theme',
    'nova_agency_register_menus'
);