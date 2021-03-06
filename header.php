<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-32x32.png" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-32x32.pngs" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
      // conditionizr.com
      // configure environment tests
      conditionizr.config({
          assets: '<?php echo get_template_directory_uri(); ?>',
          tests: {}
      });
    </script>

	</head>
	<body <?php body_class(); ?>>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bootstrap-nav-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            <img alt="Brand" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" height="25px">
          </a>        
        </div><!-- /. navbar-header -->
        <!-- Collect the nav links from WordPress -->
        <div class="collapse navbar-collapse" id="bootstrap-nav-collapse">         
          <?php 
            $args = array(
              'theme_location' => 'header-menu',
              'depth' => 0,
              'container' => '',
              'menu_class'  => 'nav navbar-nav',
              'walker'  => new BootstrapNavMenuWalker()
            );
            wp_nav_menu($args);
          ?>
        </div><!-- ./collapse -->
      </div><!-- /.container -->
    </nav>

