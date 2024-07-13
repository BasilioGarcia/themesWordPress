<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='robots' content='max-image-preview:large' />
    <title>Basilio García</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css' type='text/css' media='all' />
    <link rel="alternate" type="application/rss+xml" title="<?php echo bloginfo('name'); ?>" href="<?php echo bloginfo('url'); ?>/feed/" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>
<body>
<header class="main-header">
    <div class="main-header__top-bar">
        <div class="tool-bar">
            <div class="tool-bar__hamburger-menu">---</div>
        </div>
    </div>
    <div class="center">
        <div class="center__content">
            <nav>
                <?php
                $args = [
                    "theme_location" => "main",
                    "container" => false,
                    'menu_id'        => 'main-menu',
                    'menu_class'     => 'main-menu',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                ];
                wp_nav_menu($args)
                ?>
            </nav>
        </div>
    </div>



    <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/prueba.jpeg" alt=""> -->
</header>