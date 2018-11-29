<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <article class="uk-article">
        <?php if (has_post_thumbnail()) : ?>
        <?php
        $width = get_option('thumbnail_size_w'); $height = get_option('thumbnail_size_h');
        ?>
        <?php the_post_thumbnail(array($width, $height), array('class' => '')); ?>
        <?php endif; ?>
        <?php if ($this['config']->get('page_title', true)) : ?>
        <?php endif; ?>
        <?php the_content(''); ?>
    </article>
    <?php endwhile; ?>
<?php endif; ?>