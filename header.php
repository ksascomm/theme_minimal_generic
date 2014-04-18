<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title><?php create_page_title(); ?></title>
	<link rel="stylesheet" type="text/css" media="screen,projection" href="<?php echo get_template_directory_uri() ?>/assets/stylesheets/foundation.css" />
    <script async type="text/javascript" src="http://fast.fonts.com/jsapi/c5f514c7-d786-4bfb-9484-ea6c8fbd263f.js"></script>	
    <script async src="<?php echo get_template_directory_uri() ?>/assets/javascripts/modernizr.foundation.js"></script>
	<?php wp_enqueue_script('jquery'); ?> 
	<?php wp_head(); ?>

</head>

<body class="<?php body_class(); ?>">

<div class="banner">

	<?php wp_nav_menu( array(
	'theme_location'  => 'main_nav',
	'container'       => 'div',
	'container_class' => 'row wide',
	'container_id'    => 'globalnav',
	'menu_class'	  => 'twelve columns',
	'menu_id'         => 'menu',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'depth'           => 2,
) ); ?> 
</div><!-- .banner -->



<div id="wrapper" class="hatom">

<?php if (get_post_meta(get_the_ID(), "NoTitle", true) != "1") { ?>
    <?php if ( is_front_page()) : ?><div id="header"><?php else : ?><div
id="header-small"><?php endif ?>
		<h1 id="blog-title"><a href="<?php echo get_settings('home') ?>/" title="<?php bloginfo('name') ?>"><?php bloginfo('name') ?></a></h1>
		<div id="blog-description"><?php bloginfo('description') ?></div>
	</div><!-- #header -->
<?php } ?>

<?php if (get_post_meta(get_the_ID(), "ShowSuper", true) == "1") {
simplr_superpage(); } ?>


