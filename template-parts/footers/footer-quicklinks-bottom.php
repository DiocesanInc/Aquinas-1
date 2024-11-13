<?php

/**
 * The template for displaying quicklinks at the bottom of the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aquinas
 */

?>

<div class="quicklinks-bottom-container">
    <h4 class="has-white-color"><?php echo get_field('footer_links_header','options');?></h4>
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'footer-quicklinks-bottom',
            'menu_id'        => 'footer-quicklinks-bottom',
        )
    );
    ?>

</div>