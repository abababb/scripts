<?php
/**
 * Header Template
 *
 * The header template is generally used on every page of your site. Nearly all other templates call it 
 * somewhere near the top of the file. It is used mostly as an opening wrapper, which is closed with the 
 * footer.php file. It also executes key functions needed by the theme, child themes, and plugins. 
 *
 * @package Uridimmu
 * @subpackage Template
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
<title><?php hybrid_document_title(); ?></title>

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); // wp_head ?>

</head>

<body class="<?php hybrid_body_class(); ?>">

	<?php do_atomic( 'open_body' ); // uridimmu_open_body ?>

	<div id="container">

		<?php do_atomic( 'before_header' ); // uridimmu_before_header ?>

		<header id="header">

			<?php do_atomic( 'open_header' ); // uridimmu_open_header ?>

			<div class="wrap">

                <hgroup id="branding">
                    <h1 id="site-title"><a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                    <h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
                </hgroup><!-- #branding -->

				<?php do_atomic( 'header' ); // uridimmu_header ?>

			</div><!-- .wrap -->

			<?php do_atomic( 'close_header' ); // uridimmu_close_header ?>

		</header><!-- #header -->

		<?php do_atomic( 'after_header' ); // uridimmu_after_header ?>

		<?php get_template_part( 'menu', 'primary' ); // Loads the menu-primary.php template. ?>

		<?php do_atomic( 'before_main' ); // uridimmu_before_main ?>

		<div id="main">

			<div class="wrap">

			<?php do_atomic( 'open_main' ); // uridimmu_open_main ?>

			<?php if ( current_theme_supports( 'breadcrumb-trail' ) ) breadcrumb_trail( array( 'before' => __( 'You are here:', 'uridimmu' ) ) ); ?>