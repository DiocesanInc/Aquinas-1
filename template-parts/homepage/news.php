<?php

/**
 * Template part for displaying the news on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aquinas
 */

$news = get_field("news_category");

?>

<?php if ($news) : ?>
<div class="news-container slick-slider equal-height limit-width">
    <div class="crosses">
    <?php get_template_part("/template-parts/svgs/crosses");?>
    </div>
    <h1 class="news-heading has-text-decoration"><?php echo get_field('news_header');?></h1>
    <?php
        $posts = get_posts(array(
            "category" => $news
        ));

        foreach ($posts as $post) :
            $bgImg = has_post_thumbnail($post) ? get_the_post_thumbnail_url($post, "full") : getDefaultFeaturedImage(true);

        ?>

    <div class="post-wrapper" style="background-image: url();">
        <img class="post-content-image" src="<?php echo $bgImg; ?>">
        <div class="post-content-wrapper">
            <h4 class="post-heading">
                <?php echo $post->post_title; ?>
            </h4>

            <!-- <div class="post-excerpt">
                <?php echo $post->post_excerpt !== "" ? $post->post_excerpt : wp_trim_words($post->post_content, 125); ?>
            </div> -->

            <a href="" class="post-read-more" title="Read more">
                Read More >
            </a>
        </div>

    </div>
    <?php endforeach;
        wp_reset_postdata();
        ?>
</div>
<?php endif; ?>