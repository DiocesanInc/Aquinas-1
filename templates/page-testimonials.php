<?php

/**
 * Template Name: Testimonials
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aquinas
 */

$heading = get_field("testimonials_heading");
$testimonials = /*get_field("testimonials") ? get_field("testimonials") : */get_posts(array("post_type" => "testimonial", "sort_by" => "date", "order" => "desc"));
$image = get_field("testimonial_image");

get_header();
?>

<div class="content-area" id="primary">
    <main class="site-main page-template-testimonials" id="main">
        <?php //get_template_part('template-parts/headers/page-header'); ?>

        <div class="testimonials-container">
            <?php if ($heading) : ?>
            <h1 class="testimonials-heading has-text-decoration">
                <?php echo $heading; ?>
            </h1>
            <?php endif; ?>  
            <?php if ($testimonials) : ?>
            <div class="slick-slider">
                <?php foreach ($testimonials as $testimonial) : ?>
                <div class="testimonial-wrapper">
                    <!-- <div class="testimonial-header-wrapper"> -->
                        <h4 class="testimonial-heading">
                            <?php echo $testimonial->post_title; ?>
                        </h4>
                    <!-- </div> -->

                    <div class="testimonial-content">
                        <?php echo wp_trim_words($testimonial->post_content, 70); ?>
                    </div>

                    <!-- <a href="<?php the_permalink($testimonial) ?>" class="the-button">
                        Learn More
                    </a> -->
                </div>
                <?php endforeach; ?>
            </div>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        </div>
        
        <?php if ($image): ?>
            <img class="testimonials-image" src="<?php echo $image;?>">
        <?php endif; ?>

    </main>
</div>

<?php get_footer();