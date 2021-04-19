<?php
/**
 * Template part for displaying a post's preview
 *
 * @package vintage-catalogue
 */
?>

<a href="<?php the_permalink(); ?>"
    class="post-preview"
    style="background-image: url('<?php esc_url(the_post_thumbnail_url()); ?>')"
>
    <div class="background">
        <h2><?php the_title(); ?></h2>
        <?php the_excerpt(); ?>
    </div>
</a>
