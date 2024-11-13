<?php

/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aquinas
 */

?>

<div class="footer-address footer-contact">
    <h4 class="has-white-color"><?php echo get_field('address_header','options');?></h4>
    <div class="address">
        <?php $href = get_field("address", "options")["url"] ?? ''; ?>
        <?php $title = get_field("address", "options")["title"] ?? ''; ?>
        <?php $target = get_field("address", "options")["target"] ?? ''; ?>
        
        <a href="<?php echo $href; ?>"
            title="<?php echo $title; ?>"
            target="<?php echo $target; ?>">
            <?php echo $title; ?>
        </a>
        <?php if (get_field("phone", "options")) : ?>
        <div class="phone">
            Phone: <?php echo phoneLink(get_field("phone", "options"), true, "has-custom-hover has-quaternary-background-color-after"); ?>
        </div>
        <?php endif; ?>

        <?php if (get_field("fax", "options")) : ?>
        <div class="fax">
            Fax: <?php echo get_field("fax", "options"); ?>
        </div>
        <?php endif; ?>

        <?php if (get_field("email", "options")) : ?>
        <div class="email">
            Email: <?php echo emailLink(get_field("email", "options"), get_field("email", "options"), "has-custom-hover has-quaternary-background-color-after"); ?>
        </div>
        <?php endif; ?>
    </div>

</div>