<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package vintage-catalogue
 */

if ( ! function_exists( 'vintage_catalogue_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function vintage_catalogue_posted_on() {
        $isModified = get_the_time('U') !== get_the_modified_time('U');

		$firstPosted = sprintf(
			'<time class="published" datetime="%1$s">%2$s</time>',
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
		);

		$output = sprintf(
            '<div class="post-date">'
			    . esc_html_x( 'Posted: %s', 'post date', 'vintage-catalogue' )
                . '</div>',
			$firstPosted
		);

        if ($isModified) {
            $lastUpdated = sprintf(
                '<time class="updated" datetime="%1$s">%2$s</time>',
                esc_attr( get_the_modified_date( DATE_W3C ) ),
                esc_html( get_the_modified_date() )
            );

            $output .= sprintf(
                '<div class="update-date">'
                    . esc_html_x( 'Updated: %s', 'updated date', 'vintage-catalogue' )
                    . '</div>',
                $lastUpdated
            );
        }

		echo $output; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'vintage_catalogue_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function vintage_catalogue_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'Author: %s', 'post author', 'vintage-catalogue' ),
			'<span class="author vcard"><a class="url fn n" href="'
                . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) )
                . '">'
                . esc_html( get_the_author() )
                . '</a></span>'
		);

		echo '<div class="byline"> ' . $byline . '</div>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'vintage_catalogue_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function vintage_catalogue_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'vintage-catalogue' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<div class="cat-links">' . esc_html__( 'More posts about: %1$s', 'vintage-catalogue' ) . '</div>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'vintage-catalogue' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<div class="tags-links">' . esc_html__( 'Tags: %1$s', 'vintage-catalogue' ) . '</div>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}
	}
endif;

if ( ! function_exists( 'vintage_catalogue_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function vintage_catalogue_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php
					the_post_thumbnail(
						'post-thumbnail',
						array(
							'alt' => the_title_attribute(
								array(
									'echo' => false,
								)
							),
						)
					);
				?>
			</a>

			<?php
		endif; // End is_singular().
	}
endif;

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;
