<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vintage-catalogue
 */

get_header();
?>
	<main id="primary" class="site-main">
		<?php
        the_post();

        get_template_part('template-parts/content', get_post_type());

        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;
		?>
	</main>
    <?php get_template_part('template-parts/related'); ?>
<?php
get_footer();
