<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vintage-catalogue
 */

get_header();
?>
	<main id="primary" class="site-main">

		<?php if (have_posts()) : ?>
			<header class="page-header">
				<?php the_archive_title('<h1 class="archive-title">', '</h1>'); ?>
			</header>

			<ul class="posts-list">
                <?php
                while (have_posts()) :
                    the_post();
                    get_template_part('template-parts/content', 'preview');
                endwhile;
                ?>
            </ul>
            <?php
			the_posts_navigation();
		else :
			get_template_part('template-parts/content', 'none');
		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
