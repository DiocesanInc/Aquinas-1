<?php

/**
 * Partial for the page header.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aquinas
 */

if (isset($args["headerImg"])) {
    $headerImg = $args["headerImg"];
} else {
    if (has_post_thumbnail() && !is_archive()) {
        $headerImg = get_the_post_thumbnail_url(null, "large");
    } else {
        // $headerImg = getDefaultFeaturedImage(true) ? getDefaultFeaturedImage(true) : get_stylesheet_directory_uri() . "/assets/img/aquinas_placeholder.png";
    }
}

$headline = $args["headline"] ? "<h1 class='entry-title has-text-decoration text-decoration-is-centered'>" . $args["headline"] . "</h1>" : "<h1 class='entry-title has-text-decoration text-decoration-is-centered'>" . get_the_title() . "</h1>";
?>

<div class="entry-header page-header<?php if($headerImg): echo '" style="background-image: url('. $headerImg .')"'; else: echo ' no-header-image"'; endif;?>>
    <?php if($headerImg): ''; else: echo $headline ?? ''; endif; ?>
</div><!-- .entry-header -->