<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name='robots' content='max-image-preview:large' />
        <title>Basilio García</title>
        <!--<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css' type='text/css' media='all' />-->
        <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/style.css?ver=2.0.0' type='text/css' media='all' />
    </head>
    <body>
        <header>
            <?php
                $args = [
                    "theme_location" => "main",
                    "container" => "nav",
                    'container_id'   => '',
                    'container_class'=> 'container',
                    'menu_id'        => 'main-menu',
                    'menu_class'     => 'main-menu',
                ];
                wp_nav_menu($args)
            ?>
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/prueba.jpeg" alt=""> -->
        </header>
        <main>
            <?php
            while(have_posts()): the_post();
                the_title();
                the_content();
            endwhile;
            ?>
        </main>
    </body>
</html>

