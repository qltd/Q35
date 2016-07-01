<?php
/**
* The template for displaying the footer.
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package _q
*/

?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="site-info">
                <div class="row text-center medium-text-left large-text-left align-middle">

                    <div class="column small-12 medium-7 large-8">
                        <img src="<?php bloginfo('template_directory'); ?>/img/q-footer-logo.svg" />
                    </div>

                    <div class="column small-12 medium-5 large-4">
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/QLTDdesign" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://plus.google.com/109152261638729886652" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="https://twitter.com/qltd" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="http://www.flickr.com/photos/28113117@N04/" target="_blank"><i class="fa fa-flickr"></i></a></li>
                            <li><a href="http://instagram.com/qltd" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/groups/3001215/profile" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <p>&copy; <?php echo date('Y'); ?> QLTD. All rights reserved.</p>
                    </div>

                </div>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->

    <script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/foundation-sites/dist/foundation.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/visible.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/app.js"></script>
    <?php wp_footer(); ?>

    </body>
</html>