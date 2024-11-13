<?php

/**
 * Template part for displaying the stats on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aquinas
 */


$parallax = get_field("stats_bg_is_parallax") ? "background-attachment: fixed;" : "";
$bannerType = get_field("banner_content_type") ? "mass-times" : "stats";
?>
<div class="banner-container <?php echo "$bannerType-container"; ?>"
    style="background-image: url(); <?php echo $parallax; ?>">
    <div class="crosses">
        <?php get_template_part("/template-parts/svgs/crosses","small");?>
    </div>
    <div class="banner-content-wrapper hidden-laptop <?php echo $bannerType; ?>">
        <?php if (get_field("banner_heading")) : ?>
        <h1 class="banner-heading has-text-decoration"><?php echo get_field("banner_heading"); ?>
        </h1>
        <?php endif; ?>
        <?php if (get_field("banner_content")) : ?>
        <div class="banner-content"><?php echo get_field("banner_content"); ?>
        </div>
        <?php endif; ?>
        <?php if (get_field("banner_button")) : 
              echo acfLink(get_field('banner_button'), "the-button banner-button");?>
        <?php endif; ?>
    </div>
    <img src="<?php echo get_field("stats_background_image")["url"]; ?>">

    <div class="banner-content-wrapper hidden-mobile <?php echo $bannerType; ?>">
        <?php if (get_field("banner_heading")) : ?>
        <h1 class="banner-heading has-text-decoration"><?php echo get_field("banner_heading"); ?>
        </h1>
        <?php endif; ?>
        <?php if (get_field("banner_content")) : ?>
        <div class="banner-content"><?php echo get_field("banner_content"); ?>
        </div>
        <?php endif; ?>
        <?php if (get_field("banner_button")) : 
              echo acfLink(get_field('banner_button'), "the-button banner-button");?>
        <?php endif; ?>
    </div>
    <div class="crosses small">
        <?php get_template_part("/template-parts/svgs/crosses","small");?>
    </div>
</div>