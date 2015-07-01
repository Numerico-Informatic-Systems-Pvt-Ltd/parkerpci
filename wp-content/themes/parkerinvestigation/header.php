<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon" />
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
	
	<!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
      
      	<div class="item banner_height active">
          <img src="<?php bloginfo( 'template_url' ); ?>/images/banner1.jpg" alt="Banner" class="banner_height_img">
          <div class="container">
            <div class="carousel-caption">
              <h1>Choose Parker</h1>
              <p class="lead">30 years of Law Enforcement Experience <img src="<?php bloginfo( 'template_url' ); ?>/images/arrow.png" alt="" />  Licensed and Insured in GA & S.C.</p>
              <!--<div class="more_btn"><a href="#">Read More</a></div>-->
            </div>
          </div>
        </div>
      
        <div class="item banner_height">
			<img src="<?php bloginfo( 'template_url' ); ?>/images/banner4.jpg" alt="Banner" class="banner_height_img">
          
          <div class="container">
            <div class="carousel-caption">
              <h1>The Justice You Deserve</h1>
              <p class="lead">Criminal Investigation  <img src="<?php bloginfo( 'template_url' ); ?>/images/arrow.png" alt="" />  Police Use of Force  <img src="<?php bloginfo( 'template_url' ); ?>/images/arrow.png" alt="" />    Polygraphs</p>
              <!--<div class="more_btn"><a href="#">Read More</a></div>-->
            </div>
          </div>
        </div>
        <div class="item banner_height">
          <img src="<?php bloginfo( 'template_url' ); ?>/images/banner2.jpg" alt="Banner" class="banner_height_img">
          <div class="container">
            <div class="carousel-caption">
              <h1>Child Custody Investigations</h1>
              <p class="lead">Child Abuse <img src="<?php bloginfo( 'template_url' ); ?>/images/arrow.png" alt="" /> Child custody <img src="<?php bloginfo( 'template_url' ); ?>/images/arrow.png" alt="" /> Child Neglect</p>
              <!--<div class="more_btn"><a href="#">Read More</a></div>-->
            </div>
          </div>
        </div>
        <div class="item banner_height">
          <img src="<?php bloginfo( 'template_url' ); ?>/images/banner3.jpg" alt="Banner" class="banner_height_img">
          <div class="container">
            <div class="carousel-caption">
              <h1>Get The Proof You Need</h1>
              <p class="lead"> Divorce/Domestic <img src="<?php bloginfo( 'template_url' ); ?>/images/arrow.png" alt="">   Undercover Surveillance</p>
              <!--<div class="more_btn"><a href="#">Read More</a></div>-->
            </div>
          </div>
        </div>
        
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
<!-- /.carousel -->
<!--Brown Service Area Part-->
<div class="row-fluid service_area_wrap">
	<div class="container">
    	<div class="span3">
        	<h2>Service</h2>
            <img src="<?php bloginfo( 'template_url' ); ?>/images/pattern.png" alt="Pattern" class="area_marg" />
            <h2>Areas</h2>
        </div>
        <div class="span9">
        	<div class="span6">
            	<div class="area_box_wrap">
                	<div class="area_box">
                    	<a href="/georgia/">Georgia</a>
                    </div>
                </div>
            </div>
            <div class="span6">
            	<div class="area_box_wrap">
                	<div class="area_box">
                    	<a href="/south-carolina/">South Carolina</a>
                    </div>
                </div>
            </div>            
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--Brown Service Area Part End-->
