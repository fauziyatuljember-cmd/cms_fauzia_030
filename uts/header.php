<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="header-container">

        <!-- Tombol Sidebar -->
        <button class="sidebar-toggle"
                id="sidebarToggle"
                aria-label="Buka menu"
                aria-expanded="false">
            ☰
        </button>

        <!-- Logo dan Nama Blog -->
        <a class="site-brand" href="<?php echo esc_url(home_url('/')); ?>">
            <span class="logo-icon">F</span>

            <span class="brand-text">
                <strong>Fauzia</strong>
                <small>My Personal Blog</small>
            </span>
        </a>

        <!-- Navigasi -->
        <nav class="main-nav" aria-label="Menu utama">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav-menu',
                'fallback_cb'    => 'wp_page_menu'
            ));
            ?>
        </nav>

    </div>
</header>

<!-- Sidebar -->
<div class="sidebar-overlay" id="sidebarOverlay"></div>

<aside class="site-sidebar" id="siteSidebar">
    <div class="sidebar-heading">
        <strong>Menu Fauzia</strong>
        <button id="sidebarClose" aria-label="Tutup menu">&times;</button>
    </div>

    <nav class="sidebar-menu">
        <a href="<?php echo esc_url(home_url('/')); ?>">Beranda</a>
        <a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a>
        <a href="<?php echo esc_url(home_url('/tentang-saya/')); ?>">Tentang Saya</a>
        <a href="<?php echo esc_url(home_url('/kontak/')); ?>">Kontak</a>
    </nav>
</aside>