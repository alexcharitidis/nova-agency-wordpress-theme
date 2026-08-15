<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">

    <div class="header-container">

    <div class="site-branding">

    <?php if ( has_custom_logo() ) : ?>

        <?php the_custom_logo(); ?>

    <?php else : ?>

        <a href="<?php echo esc_url( home_url('/') ); ?>">
            <?php bloginfo('name'); ?>
        </a>

    <?php endif; ?>

</div>

    <button class="menu-toggle" aria-label="Open navigation menu">
        ☰
    </button>

    <nav class="main-navigation">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'primary-menu',
                'menu_class'     => 'primary-menu'
            )
        );
        ?>
    </nav>

</div>

</header>