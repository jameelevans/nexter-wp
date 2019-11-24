<?php
/**
 * The main header for my theme
 *
 * @package nexter
 */
?>
	<!doctype html>
	<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>

    <body class="container">
        <div class="sidebar">
			<button class="nav-btn"></button>
		</div>

		<header class="header">
			<?php
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				if ( has_custom_logo() ) {
						echo '<img class="header__logo" src="' . esc_url( $logo[0] ) . '"' . 'alt="' . get_bloginfo( 'name' ) . '">';
				} else {
						echo get_bloginfo( 'name' );
				}
			?>
			<h3 class="heading-3">Your own home:</h3>
			<h1 class="heading-1">The ulitmate personal freedom</h1>
			<button class="btn header__btn">View our properties</button>
			<div class="header__seenon-text">Seen on</div>
			<div class="header__seenon-logos">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-bbc.png" alt="As seen on logo 1">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-forbes.png" alt="As seen on logo 2">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-techcrunch.png" alt="As seen on logo 3">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-bi.png" alt="As seen on logo 4">
			</div>
		</header>