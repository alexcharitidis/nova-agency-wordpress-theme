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