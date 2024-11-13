<?php

/**
 * Partial for the hero overlay
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aquinas
 */

?>

<?php if (get_field("hero_overlay")) : ?>
<div class="hero-overlay" style="opacity: <?php echo get_field("hero_overlay") ?>;"></div>
<?php endif;