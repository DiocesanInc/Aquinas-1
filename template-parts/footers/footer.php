<?php

/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aquinas
 */

?>

<div class="footer-wrapper limit-width">
    <div class="hidden-laptop">
        <?php get_template_part("template-parts/footers/footer", "logo"); ?>
    </div>
    <?php get_template_part("template-parts/footers/footer", "address"); ?>
    <?php get_template_part("template-parts/footers/footer", "quicklinks-bottom"); ?>
    <div class="hidden-mobile">
        <?php get_template_part("template-parts/footers/footer", "logo"); ?>
    </div>
</div>