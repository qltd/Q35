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
                <?php $c=0; $r=0; while(has_sub_field('timeline_content', 20)): $c++; $r++; ?>
                    <?php if ($r==1):?><div class="row align-center timeline"><?php endif; ?>
                     <div class="column small-2 entry-<?php echo $c; ?>">
                        <div class="icon align-self-middle"><i class="fa"></i></div>
                        <div class="year"><?php the_sub_field('year'); ?></div>
                        <div class="text"><?php the_sub_field('content'); ?></div>
                    </div>
                    <?php if ($r==5): ?></div><?php $r=0; endif;  ?>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

<section class="parallax"></section>

<section id="gallery">
    <div class="row collapse">
        <div class="column">
            <div class="row align-center collapse">
                <div class="column small-6">
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
        <div class="slide">

            <div class="img-row">
                <a href="http://lorempixel.com/1200/700/nature" style="background: url(http://lorempixel.com/1200/700/nature) no-repeat center center; background-size: cover;"><img src="http://lorempixel.com/800/700/nature" /></a>
                <a href="http://lorempixel.com/1200/700/nature" style="background: url(http://lorempixel.com/1200/700/nature) no-repeat center center; background-size: cover;"><img src="http://lorempixel.com/800/700/nature" /></a>
                <a href="http://lorempixel.com/1200/700/nature" style="background: url(http://lorempixel.com/1200/700/nature) no-repeat center center; background-size: cover;"><img src="http://lorempixel.com/800/700/nature" /></a>
            </div>

            <div class="img-row">
                <a href="http://lorempixel.com/1200/700/nature" style="background: url(http://lorempixel.com/1200/700/nature) no-repeat center center; background-size: cover;"><img src="http://lorempixel.com/800/700/nature" /></a>
                <a href="http://lorempixel.com/1200/700/nature" style="background: url(http://lorempixel.com/1200/700/nature) no-repeat center center; background-size: cover;"><img src="http://lorempixel.com/800/700/nature" /></a>
                <a href="http://lorempixel.com/1200/700/nature" style="background: url(http://lorempixel.com/1200/700/nature) no-repeat center center; background-size: cover;"><img src="http://lorempixel.com/800/700/nature" /></a>
            </div>

        </div>
    </div>
</section>

<section class="parallax"></section>

<section id="history">
<div class="row">
    <div class="column">
        <div class="row align-center">
            <div class="column small-6">
                <h2>Q Identity History</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed velit neque, sed placerat nibh. Duis eu lorem eu leo vulputate pellentesque. Aenean ut nibh tortor. Phasellus id velit a nisl suscipit tempor. Quisque a aliquam neque. Pellentesque viverra, sem sed porta gravida, enim nunc congue urna, nec lacinia nisl diam eget lectus. </p>
            </div>
        </div>
    </div>
</div>
</section>

<section class="parallax"></section>

<section id="alum">
<div class="row">
<div class="column">
    <div class="row align-center">
        <div class="column small-6">
            <h2>Q Alum</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed velit neque, sed placerat nibh. Duis eu lorem eu leo vulputate pellentesque. Aenean ut nibh tortor. Phasellus id velit a nisl suscipit tempor. Quisque a aliquam neque. Pellentesque viverra, sem sed porta gravida, enim nunc congue urna, nec lacinia nisl diam eget lectus. </p>
        </div>
    </div>
    <div class="row align-center people">
        <div class="column small-10">
            <div class="row">
                <div class="column small-3">
                    Tamakia Ohman
                </div>
                <div class="column small-3">
                    Kellye Patlan
                </div>
                <div class="column small-3">
                    Beatris Kravetz
                </div>
                <div class="column small-3">
                    Gwenn Bungard
                </div>
            </div>
            <div class="row">
                <div class="column small-3">
                    Kellye Patlan
                </div>
                <div class="column small-3">
                    Beatris Kravetz
                </div>
                <div class="column small-3">
                    Gwenn Bungard
                </div>
                <div class="column small-3">
                    Tamakia Ohman
                </div>
            </div>
            <div class="row">
                <div class="column small-3">
                    Tamakia Ohman
                </div>
                <div class="column small-3">
                    Kellye Patlan
                </div>
                <div class="column small-3">
                    Beatris Kravetz
                </div>
                <div class="column small-3">
                    Gwenn Bungard
                </div>
            </div>
            <div class="row">
                <div class="column small-3">
                    Tamakia Ohman
                </div>
                <div class="column small-3">
                    Kellye Patlan
                </div>
                <div class="column small-3">
                    Beatris Kravetz
                </div>
                <div class="column small-3">
                    Gwenn Bungard
                </div>
            </div>
            <div class="row">
                <div class="column small-3">
                    Tamakia Ohman
                </div>
                <div class="column small-3">
                    Kellye Patlan
                </div>
                <div class="column small-3">
                    Beatris Kravetz
                </div>
                <div class="column small-3">
                    Gwenn Bungard
                </div>
            </div>
            <div class="row">
                <div class="column small-3">
                    Tamakia Ohman
                </div>
                <div class="column small-3">
                    Kellye Patlan
                </div>
                <div class="column small-3">
                    Beatris Kravetz
                </div>
                <div class="column small-3">
                    Gwenn Bungard
                </div>
            </div>
            <div class="row">
                <div class="column small-3">
                    Tamakia Ohman
                </div>
                <div class="column small-3">
                    Kellye Patlan
                </div>
                <div class="column small-3">
                    Beatris Kravetz
                </div>
                <div class="column small-3">
                    Gwenn Bungard
                </div>
            </div>
            <div class="row">
                <div class="column small-3">
                    Tamakia Ohman
                </div>
                <div class="column small-3">
                    Kellye Patlan
                </div>
                <div class="column small-3">
                    Beatris Kravetz
                </div>
                <div class="column small-3">
                    Gwenn Bungard
                </div>
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
        <div class="column small-6">
            <h2>Q Interns</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed velit neque, sed placerat nibh. Duis eu lorem eu leo vulputate pellentesque. Aenean ut nibh tortor. Phasellus id velit a nisl suscipit tempor. Quisque a aliquam neque. Pellentesque viverra, sem sed porta gravida, enim nunc congue urna, nec lacinia nisl diam eget lectus. </p>
        </div>
    </div>
    <div class="row align-center people">
        <div class="column small-10">
            <div class="row">
                <div class="column small-3">
                    Tamakia Ohman
                </div>
                <div class="column small-3">
                    Kellye Patlan
                </div>
                <div class="column small-3">
                    Beatris Kravetz
                </div>
                <div class="column small-3">
                    Gwenn Bungard
                </div>
            </div>
            <div class="row">
                <div class="column small-3">
                    Kellye Patlan
                </div>
                <div class="column small-3">
                    Beatris Kravetz
                </div>
                <div class="column small-3">
                    Gwenn Bungard
                </div>
                <div class="column small-3">
                    Tamakia Ohman
                </div>
            </div>
            <div class="row">
                <div class="column small-3">
                    Tamakia Ohman
                </div>
                <div class="column small-3">
                    Kellye Patlan
                </div>
                <div class="column small-3">
                    Beatris Kravetz
                </div>
                <div class="column small-3">
                    Gwenn Bungard
                </div>
            </div>
            <div class="row">
                <div class="column small-3">
                    Tamakia Ohman
                </div>
                <div class="column small-3">
                    Kellye Patlan
                </div>
                <div class="column small-3">
                    Beatris Kravetz
                </div>
                <div class="column small-3">
                    Gwenn Bungard
                </div>
            </div>
            <div class="row">
                <div class="column small-3">
                    Tamakia Ohman
                </div>
                <div class="column small-3">
                    Kellye Patlan
                </div>
                <div class="column small-3">
                    Beatris Kravetz
                </div>
                <div class="column small-3">
                    Gwenn Bungard
                </div>
            </div>
            <div class="row">
                <div class="column small-3">
                    Tamakia Ohman
                </div>
                <div class="column small-3">
                    Kellye Patlan
                </div>
                <div class="column small-3">
                    Beatris Kravetz
                </div>
                <div class="column small-3">
                    Gwenn Bungard
                </div>
            </div>
            <div class="row">
                <div class="column small-3">
                    Tamakia Ohman
                </div>
                <div class="column small-3">
                    Kellye Patlan
                </div>
                <div class="column small-3">
                    Beatris Kravetz
                </div>
                <div class="column small-3">
                    Gwenn Bungard
                </div>
            </div>
            <div class="row">
                <div class="column small-3">
                    Tamakia Ohman
                </div>
                <div class="column small-3">
                    Kellye Patlan
                </div>
                <div class="column small-3">
                    Beatris Kravetz
                </div>
                <div class="column small-3">
                    Gwenn Bungard
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>

<section class="parallax"></section>

<section id="party">
<div class="row">
<div class="column">
<div class="row align-center">
<div class="column small-6">
    <h2>Q Party</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed velit neque, sed placerat nibh. Duis eu lorem eu leo vulputate pellentesque. Aenean ut nibh tortor. Phasellus id velit a nisl suscipit tempor. Quisque a aliquam neque. Pellentesque viverra, sem sed porta gravida, enim nunc congue urna, nec lacinia nisl diam eget lectus. </p>
</div>
</div>
</div>
</div>
</section>

<section class="parallax"></section>

</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();