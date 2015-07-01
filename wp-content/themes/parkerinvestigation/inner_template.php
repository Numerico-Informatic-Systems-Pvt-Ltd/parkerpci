<?php
/*
Template Name: My Inner Page
*/ ?>
<html <?php language_attributes(); ?> class="no-js">
	<head>	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon" />
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<title><?php bloginfo('name'); ?></title>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link type="text/css" rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.css" />
		<link type="text/css" rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap-responsive.css" />
		<link type="text/css" rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/style.css" />
		<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/mgmenu.css" type="text/css" media="screen" />
		<link type="text/css" rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/fonts/stylesheet.css" />
		<script>(function() {
				document.documentElement.className = 'js'
			})();</script>

	</head>
<body class="inner_bg">

<img src="<?php bloginfo( 'template_url' ); ?>/images/criminal_banner.jpg" alt="Banner" width="100%" />
<div class="row-fluid">
		<header>
			<div class="container">
				<div class="logo_wrap">
					<h1>Parker Investigations</h1>
				</div>
				<!-- THE MENU STARTS HERE -->
				<a class="toggleMenu" href="#">Menu</a>
				<ul class="nav">				
					<?php wp_nav_menu(array('menu' => 'Main Menu','items_wrap'=>'%3$s','container' => false)); ?>
				<li>
                        <a href="#" id="btn">Contact us</a>
                </li>
				</ul>
				<!-- THE MENU ENDS HERE -->
				<div class="logo">
					<a href="/"><img src="<?php bloginfo( 'template_url' ); ?>/images/new_logo.png" alt="Parker Investigation" /></a>
				</div>
				<div class="clearfix"></div>
			</div>
		</header>
	</div>


<div class="container-fluid">
	<div class="container">
		
            <?php if ( have_posts() ) : ?>
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php  get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>	

			<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>


       <div class="clearfix"></div>
    </div>
</div>
<?php get_footer('inner'); ?>


