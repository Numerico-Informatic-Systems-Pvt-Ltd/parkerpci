<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Parker Investigation
 * @since Parker Investigation 1.0
 */

get_header(); ?>
<!--Service Slider Part Start-->
<div class="row-fluid">
	<div class="container">
    	<div class="services_wrap">
        	<div class="heading">
            	<div>
                	<h2>Services</h2>
                </div>
            </div>
            <!--<p>I need a black hat with a single ember drifting down or some </p>-->
            <div class="span12 service_marg">
            
            <ul id="flexiselDemo3">
				<?php   dynamic_sidebar( 'Services-Widget' ); ?>
            </ul>            
            </div>
        </div>
    </div>
</div>
<!--Service Slider Part End-->

<!--After Service Part Start-->
<div class="row-fluid testimonial_wrap">
	<div class="container">
        <img src="<?php bloginfo( 'template_url' ); ?>/images/mafia.jpg" alt="Testimonial" class="photo" />
        
        <div id="myCarousel1" class="carousel slide" data-interval="false">
          <div class="carousel-inner">
<!--            <div class="item active">
              <div class="container">
                <div class="span12">
                	<div class="testimonial">
                	“Parker Investigations is committed to providing the most professional and comprehensive investigative service for civil and criminal cases. I understand the importance of providing accurate, comprehensive, documented reports on all action taken. All cases will be handled with the highest level of confidentiality”.
                    <div class="name">J. Douglas Parker</div>
                    </div>
                    
                </div>
              </div>
            </div>
            <div class="item">
              <div class="container">
                 <div class="span12">
                	<div class="testimonial">
                	“After serving the state of Georgia for 30 years, I have gained a vast range of experience in solving the most complex of cases involving embezzlement, child molestation, assault, armed robbery, trafficking drugs, police officer "use of force" and homicide. This extensive background and working knowledge qualify me as one of the most experienced private investigators. I am thorough, persistent and and will handle your case with discretion.”
                    </div>
                    
                </div>
              </div>
            </div>-->
            <?php  dynamic_sidebar( 'Below-Service-Wiget'); ?>
          </div>
          <a class="left carousel-control" href="#myCarousel1" data-slide="prev">&lsaquo;</a>
          <a class="right carousel-control" href="#myCarousel1" data-slide="next">&rsaquo;</a>
        </div><!-- /.carousel -->
        
        
    </div>
</div>
<!--After Service Part End-->

<!--Other Service Part Start-->
<div class="row-fluid">
	<div class="container">
    	<div class="other_service">
        	<div class="heading">
            	<div>
                	<h2>Other Services</h2>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="span12">
                <div class="span3">
                    <div class="other_service_list">
                        <ul>
                            <li>School Safety Consulting</li>
                            <li>Documented Interviews</li>
                            <!--<li>Criminal/Civil Case Investigations</li>
                            <li>Statement Analysis - Verbal and Written</li>-->
                            <li>Crime Scene Reviews</li>
				<li>Medicaid Fraud/Patient Abuse Investigations</li>
                            <li class="clearfix"></li>
                        </ul>
                    </div>
                </div>
                <div class="span3">
                    <div class="other_service_list">
                        <ul>
                            <li>Evidence Reviews</li>
                            <li>Undercover Surveillance</li>
                            <li>Civil Rights Investigations</li>
                            <!--<li>Pre-Employment Backgrounds</li>-->
                            <li>Computer and Cell Phone Forensics</li>
                        </ul>
                    </div>
                </div>
                <div class="span3">
                    <div class="other_service_list">
                        <ul>
                            <li>Blood Spatter Analysis</li>
                           <!-- <li>Corporate Security Evaluations</li>
                            <li>Police Officer "Use of Force" Reviews</li>-->
                            <li>Polygraphs</li>
                            <li>Dignitary/VIP Security Plans</li>
                        </ul>
                    </div>
                </div>
                <div class="span3">
                    <div class="other_service_list">
                        <ul>
                            <li>Drug Screening/Testing</li>
                            <li>Specific Servies</li>
                            <li>Aerial and Marine Surveillance</li>
                            <li>DNA Testing and Profiling</li>
                            
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--Other Service Part End-->
<?php get_footer(); ?>
