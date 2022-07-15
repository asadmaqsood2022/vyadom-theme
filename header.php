<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vyadom
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'vyadom' ); ?></a>
    <!-- header section starts here -->
    <div class="header">
        <div class="header-top">
            <div class="container">
                <div class="header-top-inner">
                    <div class="vyadom">
					<?php if( get_field('top_bar_text', 'options') ): ?>
                        <p><?php the_field('top_bar_text', 'options'); ?></p>
						<?php endif; ?>
                    </div>
                    <div class="vyadom-contact">
                        <ul>
							<?php if( get_field('email', 'options') ): ?>
                           	 <li><a href="mailto:<?php the_field('email', 'options'); ?>"> <?php the_field('email', 'options'); ?></a></li>
							<?php endif; ?>
							<?php if( get_field('phone', 'options') ): ?>
                           	 <li><a href="tel:<?php the_field('phone', 'options'); ?>"> <?php the_field('phone', 'options'); ?></a></li>
							<?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-bar">
            <div class="container">
                <div class="menu-inner">
                    <div class="logo">
					<?php the_custom_logo(); ?>
                    </div>
                    <!-- <ul>
                        <li><a href="javascript:void(0);">home</a></li>
                        <li><a href="javascript:void(0);">about us</a></li>
                        <li><a href="javascript:void(0);">products</a></li>
                        <li><a href="javascript:void(0);">contact us</a></li>
                    </ul> -->
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
					?>
                    <a class="mobilemenu-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- header section ends here -->
	