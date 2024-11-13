<?php

/**
 * Template part for displaying staff member archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aquinas
 */


$staffImage = has_post_thumbnail() ? get_the_post_thumbnail_url() : getField("default_featured_image", "options", true, get_template_directory_uri() . "/assets/img/aquinas_placeholder.png");

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content staff-member">
        <img class="staff-member-image" src="<?php echo $staffImage; ?>;" />
        <div class="staff-member-info">
            <div class="staff-member-title-wrapper">
                <?php the_title("<h5 class='staff-member-title'>", "</h5>"); ?>

                <h6 class="staff-member-position">
                    <?php echo get_field("position"); ?>
                </h6>
            </div>

            <div class="staff-member-contact-wrapper">
                <?php if (get_field("phone")) : ?>
                    <div>Phone: <a href="tel:<?php echo get_field("phone"); ?>" class="staff-member-email">
                        <?php echo get_field("phone"); ?>
                    </a></div>
                <?php endif; ?>
                <?php if (get_field("email")) : ?>
                    <div>Email: <a href="mailto:<?php echo get_field("email"); ?>" class="staff-member-email">
                        <?php echo get_field("email"); ?>
                    </a></div>
                <?php endif; ?>

            </div>
            <div><a href="<?php the_permalink(); ?>" class="staff-member-bio">
                Biography
            </a></div>

        </div>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->