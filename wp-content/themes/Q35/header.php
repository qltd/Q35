<?php
/**
* The header for our theme.
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
    *
    * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
    *
    * @package _q
    */

    ?><!DOCTYPE html>
    <html <?php language_attributes(); ?>>
        <head>
            <meta charset="<?php bloginfo( 'charset' ); ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="profile" href="http://gmpg.org/xfn/11">
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
            <link href='https://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
            <script src="https://use.typekit.net/plk3hpp.js"></script>
            <script>try{Typekit.load({ async: true });}catch(e){}</script>
            <?php wp_head(); ?>
        </head>

        <body <?php body_class(); ?>>

            <div class="logo-header">
                <div class="row">
                    <div class="columns align-self-middle">
                        <a href="/" id="logo">QLTD</a>
                    </div>
                </div>
            </div>

            <header id="masthead">
                <div class="row align-center">
                    <div class="column small-12">
                        <div class="row align-middle align-center">
                            <ul class="thirty-five scene">
                                <li id="layer1" class="layer"></li>
                                <li id="top-layer" class="layer">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/35-nobackground-v2.svg" class="mask" />
                                </li>

                            </ul>

                            <h1 class="banner-text"> Years of
                                <div class="slidingVertical">
                                    <span>Design</span>
                                    <span>Communication</span>
                                    <span>Development</span>
                                    <span>Branding</span>
                                    <span>Badassery</span>
                                </div>
                            </h1>
                        </div>
                    </div>
                </div>
                </header><!-- #masthead -->

                <div id="content" class="site-content">
