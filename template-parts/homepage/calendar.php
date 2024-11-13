<?php

/**
 * Template part for displaying the calendar on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aquinas
 */

?>

<?php if (get_field("calendar")) : ?>
<div class="calendar-container limit-width">
    <?php if (get_field("calendar_heading")) : ?>
    <h1 class="calendar-heading has-text-decoration text-decoration-is-centered">
        <?php echo get_field("calendar_heading"); ?>
    </h1>
    <?php endif; ?>
    <?php if (get_field("calendar_link")) : ?>
    <div class="view-all-link-wrapper">
        <a href="<?php echo get_field("calendar_link")["url"]; ?>">
            <?php echo get_field("calendar_link")["title"]; ?>
        </a>
    </div>
    <?php endif; ?>
    <div class="calendar-inner">
        <?php echo get_field("calendar");?>
    </div>
</div>
<?php endif; ?>