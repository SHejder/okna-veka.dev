<?php
/**
* @package   VeltheMe
* @author    http://velerbu.com
* @copyright Copyright (C) Velerbu
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

$image_alignment = $this['config']->get('post_image_align', 'top');
?>

<article id="item-<?php the_ID(); ?>" class="uk-article" data-permalink="<?php the_permalink(); ?>">

    <?php if (has_post_thumbnail() && $image_alignment != 'top') : ?>
    <div class="uk-grid" data-uk-grid-margin>
    <div class="uk-width-1-1 uk-width-medium-1-2 <?php echo $image_alignment == 'right' ? 'uk-flex-order-last-medium' : '' ?>">
    <?php endif; ?>

    <?php if (has_post_thumbnail()) : ?>
        <?php
        $width = get_option('thumbnail_size_w'); //get the width of the thumbnail setting
        $height = get_option('thumbnail_size_h'); //get the height of the thumbnail setting
        ?>
        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(array($width, $height), array('class' => '')); ?></a>
    <?php endif; ?>

    <?php if (has_post_thumbnail() && $image_alignment != 'top') : ?>
    </div>
    <div class="uk-width-1-1 uk-width-medium-1-2">
    <?php endif; ?>

    <h1 class="uk-article-title uk-margin-small-bottom"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

    <p class="uk-article-meta uk-margin-small-top">
        <?php
            $date = '<time datetime="'.get_the_date('Y-m-d').'">'.get_the_date().'</time>';
            printf(__('Written by %s on %s. Posted in %s', 'warp'), '<a href="'.get_author_posts_url(get_the_author_meta('ID')).'" title="'.get_the_author().'">'.get_the_author().'</a>', $date, get_the_category_list(', '));
        ?>
    </p>

    <div class="tm-article">
        <?php the_content(''); ?>
    </div>

    <?php edit_post_link(__('Edit this post.', 'warp'), '<p> ','</p>'); ?>


    <p data-uk-margin>

        <a class="uk-button" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php _e('Continue Reading', 'warp'); ?></a>

        <?php if(comments_open() || get_comments_number()) : ?>
            <?php comments_popup_link(__('No Comments', 'warp'), __('1 Comment', 'warp'), __('% Comments', 'warp'), "uk-button", ""); ?>
        <?php endif; ?>

    </p>

    <?php if (has_post_thumbnail() && $image_alignment != 'top') : ?>
    </div>
    </div>
    <?php endif; ?>

</article>