<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Yemekhane an Restaurant Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Yemekhane Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo $css.'bootstrap.css'; ?>" rel='stylesheet' type='text/css' />
<link href="<?php echo $css.'style.css'; ?>" rel='stylesheet' type='text/css' />
<script src="<?php echo $js.'jquery-1.11.1.min.js'; ?>"></script>
<!----requred-js-files---->
<!----//requred-js-files---->
<link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----Calender -------->
  <link rel="stylesheet" href="css/clndr.css" type="text/css" />
  <script src="js/underscore-min.js"></script>
  <script src= "js/moment-2.2.1.js"></script>
  <script src="js/clndr.js"></script>
  <script src="js/site.js"></script>
<!----End Calender -------->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
</head>
<body>
<div class="header" id="home">
	<div class="container"> 
		<div class="logo">
            <img src="<?php echo $images.'logo.png'; ?>" alt=""/>
        </div>
	</div>
</div>
<div class="header-home">
	<div class="container">
	  <div class="fixed-header">
	     <div class="h_menu4"><!-- start h_menu4 -->
				<a class="toggleMenu" href="#">Menu</a>
				<ul class="nav">
					<li class="active"><a href="#home" class="scroll">Home</a></li>
					<li><a href="#gallery" class="scroll">Gallery</a></li>
					<li><a href="#about" class="scroll">About</a></li>
					<li><a href="#contact" class="scroll">Contact</a></li>
				</ul>
				<script type="text/javascript" src="js/nav.js"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
					</script>
				 <!--script-->
		<script>
			$(document).ready(function(){
				$(".nav li a").click(function(){
					$(this).parent().addClass("active");
					$(this).parent().siblings().removeClass("active");
				});
			});
		</script>
			<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-home").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop();
				if(scrollpos >=navoffeset){
					$(".header-home").addClass("fixed");
				}else{
					$(".header-home").removeClass("fixed");
				}
			 });

		});
		</script>
		<!-- /script-for sticky-nav -->
        </div><!-- end h_menu4 -->
       </div>
       </div>
     </div>
<div class="main">
   <div class="container">
       <div class="gallery" id="gallery">
           <h1 class="tz-title-4 tzcolor-blue">
               <span class="tzweight_Bold">Gallery</span>
           </h1>
           <div class="section_group">
               <div class="col_1_of_5 span_1_of_5">
                   <div class="col_1"><img src="images/pic1.jpg" class="img-responsive" alt=""/></div>
                   <div class="desc">
                       <h3><a href="#">Baked Chicken
                               B on the menu !</a></h3>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore mag...</p>
                   </div>
               </div>
               <div class="col_1_of_5 span_1_of_5 last">
                   <div class="col_1"><img src="images/pic2.jpg" class="img-responsive" alt=""/></div>
                   <div class="desc">
                       <h3><a href="#">Pay attention to the
                               dinner table layout.</a></h3>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore mag...</p>
                   </div>
               </div>
               <div class="col_1_of_5 span_1_of_5">
                   <div class="col_1"><img src="images/pic3.jpg" class="img-responsive" alt=""/></div>
                   <div class="desc">
                       <h3><a href="#">Ispanaklı Piliç
                               Comming Soon.</a></h3>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore mag...</p>
                   </div>
               </div>
               <div class="col_1_of_5 span_1_of_5">
                   <div class="col_1"><img src="images/pic4.jpg" class="img-responsive" alt=""/></div>
                   <div class="desc">
                       <h3><a href="#">Dinner table
                               consept amet.</a></h3>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore mag...</p>
                   </div>
               </div>
               <div class="col_1_of_5 span_1_of_5">
                   <div class="col_1"><img src="images/pic5.jpg" class="img-responsive" alt=""/></div>
                   <div class="desc">
                       <h3><a href="#">“Tiramisu”
                               on the menu.
                           </a></h3>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore mag...</p>
                   </div>
               </div>
               <div class="clearfix"> </div>
           </div>
       </div>
       <div class="about" id="about">
      	<h3 class="tz-title-2">
          <span class="tzweight_Bold">About</span>
        </h3>
        <div class="about_desc">
          <img src="images/logo.png" alt=""/>
          <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
          <p class="about_para">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
        </div>
      </div>
      <div class="contact" id="contact">
      	 <h3 class="tz-title-2">
          <span class="tzweight_Bold">Contact</span>
        </h3>
        <div class="contact_box">
        	<div class="col-md-6 contact_form">
        		<form>
					<div class="column_2">
                     	<input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
					 	<input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="margin-left:2.7%">
					 	
					</div>
					<div class="column_3">
	                   <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message:</textarea>
	                </div>
	                <div class="form-submit1">
			           <label class="btn btn-primary btn-normal btn-inline " target="_self"><input type="submit" value="Send"></label>
					</div>
					<div class="clearfix"> </div>
				  </form>
        	</div>

        	<div class="clearfix"> </div>
        </div>
      </div>
      <div class="copy">
          <p>Copyright © 2015 Template by<a href="http://w3layouts.com/" target="_blank"> W3layouts</a> & site created by Arne Ruytings </p>
	  </div>
	  <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
   <a class="scroll" href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>     
</body>
</html>