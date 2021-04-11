<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- make this IOS compatible -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="La Pizzeria Restaurant">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() ?>/apple-touch-icon.jpg" />

     <!-- make this Android compatible -->
     <meta name="theme-color" color="a61206" />
     <meta name="mobile-web-app-capable" content="yes">
     <meta name='application-name' content="La Pizzeria Restaurant" />
     <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/icon.png" size="192x192" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La Pizzeria</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
        <div class="container">

        
        <div class="logo">
            <a href="<?php echo home_url('/'); ?>">
            <?php 
            if(function_exists("the_custom_logo")) {
                the_custom_logo();
            }
            
            ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" class="logoimage" alt="">
            </a>
        </div>
        <div class="header-information">
        <div class="social-menu">
            <?php 
                $args = array(
                    "theme_location"=> "social-menu",
                    "container"   => "nav",
                    "container_class" => "socials",
                    "container_id" => "socials",
                    "link_before" => "<span class='sr-text'>",
                    "link_after"   =>"</span>"
                );
                wp_nav_menu($args);
            ?>


        </div>
        <div class="address">
            <p><?php echo esc_html( get_option("lapizzeria_location") ); ?></p>
            <p>Phone Number: <?php echo esc_html( get_option("lapizzeria_phonenumber") ); ?></p>
        
        </div>
        </div>
        </div>

</header>

<div class="main-menu">
    <div class="mobile-menu">
        <a href="#" class="mobile"><i class="fa fa-bars"></i> Menu</a>
    </div>

    <div class="navigation container">
        <?php 
        
            $args = array(
                "theme_location"=> "header-menu",
                "container" => "nav",
                "container_class" => "site-nav"
            );

            wp_nav_menu( $args );
        
        ?>
    </div>

</div>