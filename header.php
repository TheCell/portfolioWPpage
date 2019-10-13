<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Simple_Diverse_Portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="gridcontainer">
	<!--
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'simple-diverse-portfolio' ); ?></a>
	-->
	<div class="header">
		<span class="title"><?php bloginfo( 'name' ); ?></span>
		<?php
			$simple_diverse_portfolio_description = get_bloginfo( 'description', 'display' );
		?>
		<span class="subtitle"><?php echo $simple_diverse_portfolio_description; /* WPCS: xss ok. */ ?></span>
	</div>

	<div class="search">
		<input type="text" placeholder="SEARCH" />
	</div>

	<div class="menu">
		<div class="menucontainer">
			<?php
			wp_nav_menu( array(
				'menu_id'        => 'primary-menu',
				'container'       => '',
				'items_wrap'      => '%3$s',
				'walker' => new Walker_SimpleDiversePortfolio_Nav_Menu(),
			) );
			?>
			<!--
			<span class="menuItem"><a href="postoverview1.html">Menu Item 1</a></span>
			<span class="menuItem"><a href="postoverview2.html">Menu Item 2</a></span>
			<span class="menuItem"><a href="postoverview3.html">Menu Item 3</a></span>
			<span class="menuItem"><a href="postoverview3.html">Menu Item 3</a></span>
			-->
		</div>
	</div>
	<div id="content" class="site-content content">