<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aquinas
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php get_template_part("/template-parts/headers/page-header"); ?>

    <div class="entry-content limit-width">
        <?php if(has_post_thumbnail()) { 
                echo "<h1 class='entry-title has-text-decoration'>" . get_the_title() . "</h1>";
            } else { 
                ''; 
            }?>
        <?php
        the_content();
        wp_link_pages();

        ?>
    </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->