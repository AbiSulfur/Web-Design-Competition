<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'><rect width='32' height='32' fill='%23050508'/><text x='16' y='22' text-anchor='middle' font-family='serif' font-size='20' font-weight='700' fill='%23e4e4e7'>A</text></svg>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="mouse-glow" id="mouseGlow"></div>
    <div class="bg-glow-orb orb-1"></div>
    <div class="bg-glow-orb orb-2"></div>

    <!-- NAVBAR -->
    <nav class="navbar" id="navbar">
        <div class="container">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><?php bloginfo('name'); ?><span>.</span></a>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav-links',
                'menu_id'        => 'navLinks',
                'fallback_cb'    => false, // Fallback menu managed in dashboard
            ) );
            ?>
            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>
