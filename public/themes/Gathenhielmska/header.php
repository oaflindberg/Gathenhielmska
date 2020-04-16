<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#6d9aea">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <nav class="navigation-under">
        <a href="localhost:8000/">
            <img class="logo" src="<?php bloginfo('template_directory') ?>/assets/images/icons/logo.svg " alt="">
        </a>
    </nav>
    <header>
        <nav role="navigation" class="navigation">
            <a href="http://localhost:8000/">
                <img class="logo" src="<?php bloginfo('template_directory') ?>/assets/images/icons/logo.svg " alt="">
            </a>
            <div class="menu">
                <?php wp_nav_menu(['theme_location' => 'navigation']); ?>
            </div>
        </nav>
    </header>
