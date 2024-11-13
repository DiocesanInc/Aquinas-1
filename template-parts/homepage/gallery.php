<?php

/**
 * Template part for displaying the gallery on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aquinas
 */

?>
<?php if (get_field("gallery_shortcode") !== "") : ?>
<div class="gallery-container">

    <?php if (get_field("gallery_heading") !== "") : ?>
    <h1 class="gallery-heading has-text-decoration">
        <?php echo get_field("gallery_heading"); ?>
    </h1>
    <?php endif; ?>

    <div class="gallery-wrapper">
        <?php echo do_shortcode(get_field("gallery_shortcode")); ?>
    </div>

</div>
<?php endif; ?>