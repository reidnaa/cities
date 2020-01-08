<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php wp_title('');?><?php if (wp_title(' ' ,false)) {echo ' : ' ;}?></title>
        <?php wp_head(); ?>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body <?php body_class(); ?>>

        <div id="page">
         
        <header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="logo">
				<a href="<?php echo esc_url(home_url('/')); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg">
				</a>
			</div> <!--.logo -->
			
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
			</nav>

		</div> <!--.container -->
		
	</header>

                <div id="container">