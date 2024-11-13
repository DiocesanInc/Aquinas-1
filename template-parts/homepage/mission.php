<?php

/**
 * Template part for displaying the mission on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aquinas
 */

$backgroundImage = get_field("mission_background_image")["url"];
$position = get_field("mission_content_position");
$header = get_field("mission_header");
$content = get_field("mission_content");
?>


<div class="mission-container">
    <img class="mission-image" src="<?php echo $backgroundImage; ?>">
    <div class="mission-content-wrapper hidden-lightweight right">
        <?php if ($header) : ?>
        <h1 class="mission-heading has-text-decoration">
            <?php echo $header; ?>
        </h1>
        <?php endif; ?>
        <?php if ($content) : ?>
        <div class="mission-content">
            <?php echo $content; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
<div class="mission-content-wrapper hidden-desktop">
    <?php if ($header) : ?>
    <h1 class="mission-heading has-text-decoration">
        <?php echo $header; ?>
    </h1>
    <?php endif; ?>
    <?php if ($content) : ?>
    <div class="mission-content">
        <?php echo $content; ?>
    </div>
    <?php endif; ?>
</div>