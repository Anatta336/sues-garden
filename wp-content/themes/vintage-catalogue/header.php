<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vintage-catalogue
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital@0;1&family=Scheherazade:wght@700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

</body>
</html>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="site-branding">
            <?php
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            }
            ?>
            <h1 class="site-title">
                <a
                    href="<?php echo esc_url( home_url( '/' ) ); ?>"
                    rel="home"
                >
                    <?php bloginfo( 'name' ); ?>
                </a>
            </h1>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<?php
            if (is_active_sidebar('sidebar-1')) {
                ?>
                <div class="primary-sidebar widget-area">
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
                <?php
            }
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav>
	</header>
