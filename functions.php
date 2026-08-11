<?php
function nova_agency_enqueue_assets() {
    wp_enqueue_style(
        'nova-agency-style',
        get_stylesheet_uri()
    );
}

add_action('wp_enqueue_scripts', 'nova_agency_enqueue_assets');