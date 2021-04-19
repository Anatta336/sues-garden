<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vintage-catalogue
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title(
            sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">',
            esc_url(get_permalink())),
            '</a></h2>'
        ); ?>

		<?php if (get_post_type() === 'post') : ?>
		<div class="entry-meta">
			<?php
			vintage_catalogue_posted_on();
			vintage_catalogue_posted_by();
			?>
		</div>
		<?php endif; ?>
	</header>

	<?php vintage_catalogue_post_thumbnail(); ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>

	<footer class="entry-footer">
		<?php vintage_catalogue_entry_footer(); ?>
	</footer>
</article>
