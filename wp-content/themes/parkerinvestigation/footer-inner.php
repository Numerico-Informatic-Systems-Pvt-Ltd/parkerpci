<style>
.entry-footer{display:none;}
</style>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!--Footer Sart here--->
<div class="row-fluid footer_wrap" id="contact">
	<div class="container">
    	<div class="span8">
        	<h4>Contact Us</h4>
			
            <form action="" method="post">
            <div class="span6">
                <fieldset>
                    <label class="form_lable">First Name :</label>
                    <input type="text" placeholder="" class="form_input">
                    
                    <label class="form_lable">Email Id :</label>
                    <input type="text" placeholder="" class="form_input">
                    
                    <label class="form_lable">Phone No :</label>
                    <input type="text" placeholder="" class="form_input">
                    
                    <label class="form_lable">Best Way To Contact You:</label>
                    <input type="text" placeholder="" class="form_input">
                
                </fieldset>
            </div>
            <div class="span6">
            	<fieldset>
                	<label class="form_lable">Best Time To Contact You :</label>
                    <input type="text" placeholder="" class="form_input">
                
                	<label class="form_lable">Other Info Would You Like To Share :</label>
            		<textarea rows="3" class="form_textarea"></textarea>
            		<input type="submit" class="btn form_button" value="Submit">
                </fieldset>
            </div>
            <div class="clearfix"></div>
            </form>
        </div>
        <div class="span4">
        	<h4>Associate Members</h4>
            <div class="members_wrap">
            	<div class="members">
                	<img src="<?php bloginfo( 'template_url' ); ?>/images/logo_one.jpg" alt="Member" />
                </div>
                <div class="members">
                	<img src="<?php bloginfo( 'template_url' ); ?>/images/logo_two.jpg" alt="Member" />
                    <p>
                    	Member South Carolina Association of Legal Investigators
                    </p>
                </div>
                <div class="members">
                	<img src="<?php bloginfo( 'template_url' ); ?>/images/logo_three.jpg" alt="Member" />
                    <p>
                    	Member International Association of Professional Security Consultants
                    </p>
                </div>
                <div class="clearfix"></div>
	<div class="members_wrap">
            		<div class="span12">
                	
                
                    <p>
                    	J. DOUGLAS PARKER <br />PARKER INVESTIGATIONS <br />2602 Commons Blvd. <br />
                        Suite C <br />Augusta, Georgia 30909 <br />
                        Office: 706-955-8069 <br />
                        Fax: 706-955-8285
                    </p>
                </div>
            </div>
            
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="row-fluid copyright">
	&copy; 2015 MySocialState. All Rights Reserved.
</div>
<div class="fixed_button" id="back-top" style="display:none;"><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/bu_up_part.png" alt="Down" class="img-responsive" /></a>

<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.js"></script>



<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/script.js"></script>



<script>



$(function () {
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$('#back-top').fadeIn();
		} else {
			$('#back-top').fadeOut();
		}
	});

	// scroll body to 0px on click
	$('#back-top a').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});
	
});









</script>

<script type="text/javascript">

$(window).load(function() {
    $("#flexiselDemo1").flexisel();
    $("#flexiselDemo2").flexisel({
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
    });

    $("#flexiselDemo3").flexisel({
        visibleItems: 4,
        animationSpeed: 1000,
        autoPlay: false,
        autoPlaySpeed: 3000,            
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
    });

    $("#flexiselDemo4").flexisel({
        clone:false
    });
    
});


$("#btn").click(function() {
    $('html, body').animate({
        scrollTop: $("#contact").offset().top
    }, 2000);
});


</script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/scripts.js"></script> <!--Mega Menu Script -->
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.flexisel.js"></script>




</body>
</html>
