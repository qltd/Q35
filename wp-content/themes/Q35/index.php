<?php
/**
* The main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package _q
*/

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <section id="timeline">
        <div class="row">
            <div class="column">
                <div class="row align-center">
                    <div class="column small-6">
                        <h2><?php echo get_the_title(20); ?></h2>
                        <?php echo apply_filters('the_content', get_post_field('post_content', 20)); ?>
                    </div>
                </div>
                <div class="timeline">
                <?php $c=0; $r=0; while(have_rows('timeline_content', 20)): the_row(); $c++; $r++; ?>
                     <div class="column entry-<?php echo $c; ?>">
                        <div class="icon align-self-middle"><i class="fa"></i></div>
                        <div class="year"><?php the_sub_field('year'); ?></div>
                        <div class="text"><?php the_sub_field('content'); ?></div>
                    </div>
                <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>

<section class="parallax"></section>

<section id="gallery">
    <div class="row collapse">
        <div class="column">
            <div class="row align-center collapse">
                <div class="column large-6 medium-10">
                    <div class="section-icon">
                        <i class="fa"></i>
                    </div>
                    <h2><?php echo get_the_title(22); ?></h2>
                        <?php echo apply_filters('the_content', get_post_field('post_content', 22)); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="carousel">
            <div class="slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1}'>
           <?php $r=0; while(have_rows('slider', 22)): the_row(); ?>
                <div class="slide">
                <?php while(have_rows('gallery', 22)): the_row(); $r++; $img = get_sub_field('image'); ?>
                    <?php if ($r==1):?><div class="img-row"><?php endif; ?>
                    <div style="background: url(<?php echo $img['url']; ?>) no-repeat center center; background-size: cover;"></div>
                    <?php if ($r==3): ?></div><?php $r=0; endif;  ?>
                <?php endwhile; ?>
                </div>
            <?php endwhile; ?>
            </div>
    </div>
</section>

<section class="parallax"></section>

<section id="history">
    <div class="row">
        <div class="column">
            <div class="row align-center">
                <div class="column large-6 medium-10">
                     <h2><?php echo get_the_title(25); ?></h2>
                        <?php echo apply_filters('the_content', get_post_field('post_content', 25)); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row align-center">
        <div class="column small-12">
            <div class="slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1}'>
                <?php while(have_rows('slider', 25)): the_row(); $img = get_sub_field('image'); ?>
                    <div><img src="<?php echo $img['url']; ?>" /></div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>

<section class="parallax"></section>

<section id="alum">
<div class="row">
<div class="column">
    <div class="row align-center">
        <div class="column large-6 medium-10">
            <h2><?php echo get_the_title(27); ?></h2>
                        <?php echo apply_filters('the_content', get_post_field('post_content', 27)); ?>
                        <p><a href="mailto:matt@qltd.com?subject=Q Share a Memory&body=Hello"><strong>Share a memory ></strong></a></p>
        </div>
    </div>
    <div class="row align-center people">
        <div class="column large-10 medium-12 small-12">
            <div class="alum">
               <?php while(have_rows('alum_list', 27)): the_row(); ?>
                    <div class="person"><?php the_sub_field('alum'); ?></div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
</div>
</section>

<section id="interns">
<div class="row">
<div class="column">
    <div class="row align-center">
        <div class="column large-6 medium-10">
            <h2><?php echo get_the_title(29); ?></h2>
                <?php echo apply_filters('the_content', get_post_field('post_content', 29)); ?>
        </div>
    </div>
    <div class="row align-center people">
        <div class="column large-10 medium-12 small-12">
            <div class="alum">
               <?php while(have_rows('intern_list', 29)): the_row(); ?>
                    <div class="person"><?php the_sub_field('intern'); ?></div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>

<section class="parallax"></section>

<section id="party">
    <canvas id="confetti"></canvas>
    <div id="party-info">
        <div>
                        <div class="section-icon">
                            <i class="fa"></i>
                        </div>
                        <h2><?php echo get_the_title(31); ?></h2>
                        <?php echo apply_filters('the_content', get_post_field('post_content', 31)); ?>
                    </div>
    </div>
</section>

<section class="parallax"></section>

</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();