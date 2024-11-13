<?php

/**
 * Template Name: Homepage
 *
 * The template for displaying the Homepage Template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aquinas
 */

get_header();
?>

<div class="content-area" id="primary">
    <main class="site-main page-template-homepage" id="main">
        <?php get_template_part("template-parts/homepage/hero"); ?>

        <?php

        if (have_rows("section_order", "options")) :

            //iterate through the sections set in the template settings
            while (have_rows("section_order", "options")) : the_row();

                //get section name
                $section = get_sub_field("section");
                //load template
                get_template_part("template-parts/homepage/$section", null, array('shape' => get_field('shape_selector','options')));


            endwhile;

        else : ?>

        <?php get_template_part("template-parts/homepage/mission"); ?>
        <?php get_template_part("template-parts/homepage/featured-content", null, array('shape' => get_field('shape_selector','options'))); ?>
        <?php get_template_part("template-parts/homepage/banner", null, array('shape' => get_field('shape_selector','options'))); ?>
        <?php get_template_part("template-parts/homepage/news", null, array('shape' => get_field('shape_selector','options'))); ?>
        <?php get_template_part("template-parts/homepage/contact", null, array('shape' => get_field('shape_selector','options'))); ?>

        <?php endif; ?>
    </main>
</div>

<?php get_footer();