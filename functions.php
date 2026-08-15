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




function nova_agency_register_projects() {

    register_post_type(
        'project',
        array(
            'labels' => array(
                'name'          => 'Projects',
                'singular_name' => 'Project'
            ),
             'public'      => true,
             'has_archive' => 'projects',
             'rewrite'     => array(
            'slug' => 'projects'
        ),
            'supports'    => array(
                'title',
                'editor',
                'thumbnail'
            )
        )
    );
}

add_action(
    'init',
    'nova_agency_register_projects'
);


function nova_agency_dynamic_projects_menu_link( $items, $args ) {

    if ( $args->theme_location === 'primary-menu' ) {

        foreach ( $items as $item ) {

            if ( $item->title === 'Projects' ) {
                $item->url = get_post_type_archive_link( 'project' );
            }

        }

    }

    return $items;
}

add_filter( 'wp_nav_menu_objects', 'nova_agency_dynamic_projects_menu_link', 10, 2 );




function nova_agency_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
}

add_action(
    'after_setup_theme',
    'nova_agency_theme_setup'
);