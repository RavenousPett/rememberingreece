<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Maisha
 * @since Maisha 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if(get_theme_mod('maisha_header_layout') == 'standard-header') : ?>
	<div class="headerblock standard">
		<div class="content site-content">
			<a class="skip-link screen-reader-text" href="#site"><?php esc_html_e( 'Skip to content', 'maisha' ); ?></a>
			<header id="masthead" class="site-header" role="banner">
				<div class="header-inner">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Remebering-Reece-Logo-450x194.jpg" id="header-image" />
                    </a>
					<?php if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
				<?php if ( has_nav_menu( 'primary' ) ) : ?>
					<div id="secondary">
					<nav id="site-navigation" class="navigation-main" role="navigation">
					<button class="menu-toggle anarielgenericon" aria-controls="primary-menu" aria-expanded="false"><span><?php esc_html_e( 'Primary Menu', 'maisha' ); ?></span></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'nav-menu' ) ); ?>
					</nav><!-- #site-navigation -->
					</div>
				<?php endif; ?>
				</div>
			</header><!-- .site-header -->
		</div><!-- .site-content -->
	</div><!-- .headerblock -->
	<?php if(!get_theme_mod('maisha_search_top')) : ?>
    <!-- <div class="search-toggle">
		<a href="#search-container" class="screen-reader-text" aria-expanded="false" aria-controls="search-container"><?php /* esc_html_e( 'Search', 'maisha' ); */ ?></a>
	</div> -->
	<div id="search-container" class="search-box-wrapper hide">
		<div class="search-box">
			<?php get_search_form(); ?>
		</div>
	</div>
	<?php endif; ?>
<?php elseif(get_theme_mod('maisha_header_layout') == 'alternative-header') : ?>
	<div class="headerblock alternative">
		<div class="content site-content">
			<a class="skip-link screen-reader-text" href="#site"><?php esc_html_e( 'Skip to content', 'maisha' ); ?></a>
			<header id="masthead" class="site-header" role="banner">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Remebering-Reece-Logo-450x194.jpg" id="header-image" />
                    </a>
                    <?php if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
				<?php if ( has_nav_menu( 'primary' ) ) : ?>
					<div id="secondary">
					<nav id="site-navigation" class="navigation-main" role="navigation">
					<button class="menu-toggle anarielgenericon" aria-controls="primary-menu" aria-expanded="false"><span><?php esc_html_e( 'Primary Menu', 'maisha' ); ?></span></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'nav-menu' ) ); ?>
					</nav><!-- #site-navigation -->
					</div>
				<?php endif; ?>
			</header><!-- .site-header -->
		</div><!-- .site-content -->
	</div><!-- .headerblock -->
	<?php if(!get_theme_mod('maisha_search_top')) : ?>
    <!-- <div class="search-toggle">
		<a href="#search-container" class="screen-reader-text" aria-expanded="false" aria-controls="search-container"><?php /* esc_html_e( 'Search', 'maisha' ); */ ?></a>
	</div> -->
	<div id="search-container" class="search-box-wrapper hide">
		<div class="search-box">
			<?php get_search_form(); ?>
		</div>
	</div>
	<?php endif; ?>
<?php else: ?>
	<div class="fixed">
		<div class="headerblock">
			<div class="content site-content">
				<a class="skip-link screen-reader-text" href="#site"><?php esc_html_e( 'Skip to content', 'maisha' ); ?></a>
				<header id="masthead" class="site-header" role="banner">
				<div class="header-inner">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Remebering-Reece-Logo-450x194.jpg" id="header-image" />
                    </a>
                    <?php if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
					<?php if ( has_nav_menu( 'primary' ) ) : ?>

                        <div id="secondary">

                        <div id="header-donate">

                            <!-- Just Giving Button -->
                            <a class="justgiving-dontate-btn" href="//widgets.justgiving.com/Button/Redirect?p=eyJJZCI6ImU1NGVkYWJkLTA1OTYtNDNhMi1hNDQwLTE2YTk5ZDQ1YmJhNSIsIkNoYXJpdHlJZCI6MTgzMDkyLCJTaXplIjoicyIsIlJlZmVyZW5jZSI6IiIsIlR5cGUiOiJEb25hdGUifQ=="><img src="//widgets.justgiving.com/Button?p=eyJJZCI6ImU1NGVkYWJkLTA1OTYtNDNhMi1hNDQwLTE2YTk5ZDQ1YmJhNSIsIkNoYXJpdHlJZCI6MTgzMDkyLCJTaXplIjoicyIsIlJlZmVyZW5jZSI6IiIsIlR5cGUiOiJEb25hdGUifQ==" /></a>

                            <!-- Facebook -->
                            <a href="https://facebook.com" class="social-icon facebook">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fb-logo-50x50.png" />
                            </a>

                            <!-- Twitter -->
                            <a href="https://twitter.com" class="social-icon twitter">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter-logo-50x50.png" />
                            </a>

                        </div>

						<nav id="site-navigation" class="navigation-main" role="navigation">
						<button class="menu-toggle anarielgenericon" aria-controls="primary-menu" aria-expanded="false"><span><?php esc_html_e( 'Primary Menu', 'maisha' ); ?></span></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'nav-menu' ) ); ?>
						</nav><!-- #site-navigation -->
						</div>
					<?php endif; ?>
				</div>
				</header><!-- .site-header -->
			</div><!-- .site-content -->
		</div><!-- .headerblock -->
		<?php if(!get_theme_mod('maisha_search_top')) : ?>
		<!-- <div class="search-toggle">
			<a href="#search-container" class="screen-reader-text" aria-expanded="false" aria-controls="search-container"><?php /* esc_html_e( 'Search', 'maisha' ); */ ?></a>
		</div> -->
		<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php get_search_form(); ?>
			</div>
		</div>
		<?php endif; ?>
	</div>
<?php endif; ?>
<div id="site">
