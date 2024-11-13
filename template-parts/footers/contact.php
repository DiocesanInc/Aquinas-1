<?php

/**
 * Template part for displaying contact info on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aquinas
 */
 
?>

<div class="contact-container">
    <div class="left-contact-container has-secondary-background-color">
        <h3 class="left-header has-white-color"><?php echo get_field('left_heading','options');?></h3>
        <?php if(have_rows('contact_buttons','options')): ?>
            <div class="contact-buttons">
                <?php while(have_rows('contact_buttons','options')) : the_row();
                echo acfLink(get_sub_field('button'), "the-button has-primary-background-color");
                endwhile; ?>
            </div>
        <?php endif;?>
        <div class="crosses small">
            <?php get_template_part("/template-parts/svgs/crosses","small");?>
        </div>
    </div>
    <div class="right-contact-container has-tertiary-background-color">
        <h3 class="right-header"><?php echo get_field('right_heading','options');?></h3>
        <?php if(have_rows('contact_social','options')): ?>
            <div class="contact-buttons">
                <?php while(have_rows('contact_social','options')) : the_row();?>
                    <?php if (get_sub_field("link")) : 
                            $link = get_sub_field("link")["url"] ?? '';
                            $target = get_sub_field("link")["target"] ?? '';
                            $title = get_sub_field("link")["title"] ?? '';?>
                            <a href="<?php echo $link; ?>" class="contact-social" target="<?php echo $target;?>" title="<?php echo $title;?>">
                                <i class="<?php echo get_sub_field('icon');?>"></i>
                            </a>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        <?php endif;?>
    </div>
</div>