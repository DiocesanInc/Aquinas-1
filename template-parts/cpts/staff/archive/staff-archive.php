<?php

/**
 * Template part for displaying staff member archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aquinas
 */

?>
<div class="crosses">
<?php get_template_part("/template-parts/svgs/crosses");?>
</div>

<?php
$image = get_field('staff_header_image','options')['url'];

if($image == get_field("default_featured_image", "options")){
    get_template_part("/template-parts/headers/page-header", null, array("headline" => "Our Staff"));
} else {
    get_template_part("/template-parts/headers/page-header", null, array("headline" => "Our Staff", "headerImg" => $image ? $image : ''));
}

if($image != get_field("default_featured_image", "options")) {
    echo "<h1 class='entry-title has-text-decoration limit-width'>Our Staff</h1>";
}

$noCat = array(
    'post_type' => 'staff',
    'posts_per_page' => -1,
    "orderby" => "menu_order title",
    "order" => "ASC",
    "tax_query" => array(
        array(
            "taxonomy" => "staff-group",
            "field" => "slug",
            'operator' => 'NOT EXISTS'
        )
    )
);
$the_query = new WP_Query( $noCat ); ?>

<?php if ( $the_query->have_posts() ) : ?>

    <?php while ( $the_query->have_posts() ) : $the_query->the_post();
        echo '<div class="first-staff-wrapper limit-width">';
        get_template_part('/template-parts/cpts/staff/single/staff-member');
        echo '</div>';
    endwhile; ?>

    <?php wp_reset_postdata(); ?>

<?php endif; 

$staffGroups = get_terms(array("taxonomy" => "staff-group", 'hide_empty' => false));

$staff = [];

foreach ($staffGroups as $staffGroup) {
    $order = get_field("staff_group_order", "staff-group_" . $staffGroup->term_id);

    $args = array(
        'post_type' => 'staff',
        'posts_per_page' => -1,
        "orderby" => "menu_order title",
        "order" => "ASC",
        "tax_query" => array(
            array(
                "taxonomy" => "staff-group",
                "field" => "slug",
                "terms" => $staffGroup->slug
            )
        )
    );

    $staff[$order] = ["title" => $staffGroup->name, "staffMembers" => get_posts($args)];
}

ksort($staff, SORT_NUMERIC);

foreach ($staff as $order => $group) : ?>

<div class="<?php echo get_post_type(); ?>-category limit-width">
    <h1 class="<?php echo get_post_type(); ?>-category-title has-primary-color">
        <?php echo $group['title']; ?>
    </h1>
    <div class="<?php echo get_post_type(); ?>-category-members">
        <?php foreach ($group['staffMembers'] as $post) : setup_postdata($post);
                get_template_part('/template-parts/cpts/staff/single/staff-member');
            endforeach; ?>
    </div>
</div>

<?php
endforeach;