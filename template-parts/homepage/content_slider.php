<?php

/**
 * Template part for displaying the content slider on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aquinas
 */
?>

 <?php if (have_rows("content_slider_slides")) : ?>
    <div class="content-slider featured-content-container">
        <h1 class="content-slider-heading has-text-decoration text-decoration-is-centered"><?php echo get_field('content_slider_heading');?></h1>

        <?php while (have_rows("content_slider_slides")) : the_row(); ?>
            <?php $bgImg = get_sub_field("image")["url"]; ?>
            <?php $link = get_sub_field("link") !== "" ? get_sub_field("link")["url"] : ""; ?>


            <a href="<?php echo $link; ?>" class="featured-content-item-wrapper" style="background-image:url(<?php echo $bgImg; ?>)">
                <div class="featured-content-heading-wrapper">
                    <h3 class="featured-content-heading">
                        <?php the_sub_field("heading"); ?>
                    </h3>
                </div>
            </a>
        <?php endwhile; ?>

    </div>
<?php endif; ?>