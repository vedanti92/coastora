<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Coastora">
    <meta name="author" content="https://vedanti.netlify.app">
    <link rel="shortcut icon" href="/wp-content/themes/coastora-theme/assets/images/logo.png">

    <?php
    wp_head();
    ?>

</head>

<body>

    <header class="header text-center">
        <a class="site-title pt-lg-4 mb-0" href="/"><?php echo get_bloginfo('name'); ?></a>

        <nav class="navbar navbar-expand-lg navbar-dark">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navigation" class="collapse navbar-collapse flex-column">
                <?php
                if (function_exists('the_custom_logo')) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);
                }
                ?>
                <img class="my-3 mx-auto logo" src="<?php echo $logo[0] ?>" alt="logo">

                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul id="" class="navbar-nav flex-column text-sm-center text-md-left">%3$s</ul>'
                    )
                )
                    ?>

                <hr>

                <?php
                dynamic_sidebar('sidebar-1');
                ?>
            </div>
        </nav>
    </header>
    <div class="main-wrapper">
        <header class="page-title theme-bg-light text-center gradient py-5">
            <h1 class="heading">
                <?php
                if (is_home() || is_archive()) {
                    echo "Blogs";
                } else {
                    the_title();
                }
                ?>
            </h1>
        </header>