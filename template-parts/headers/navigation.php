<?php

/**
 * Partial for the navbar.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aquinas
 */
?>

<nav id="site-navigation" class="main-navigation">
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'quicklinks',
            'menu_id'        => 'quick-links',
        )
    );
    ?>
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
        )
    );
    ?>
</nav><!-- #site-navigation -->