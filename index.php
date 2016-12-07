
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Road Safety</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
	
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
			<div class="span4">

				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				

							<li><a href="registration.php">Login</a></li>			
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
                                    <a href="index.html" class="logo pull-left"><img src="themes/images/logo2.png" width="50" height="20"></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="index.php">HOME</a>

							</li>	
                                                        <li><a href="#">Guidlines</a>	
                                                                 <ul>
									<li><a href="pedestrian.php">Pedestrian</a></li>
                                                                            <li><a href="school.php">School Children</a></li>
                                                                            <li><a href="cyclist.php">Cyclist</a></li>
									<li><a href="motorcycle.php">Motorcycle</a></li>
                                                                           <li><a href="car.php">Car Drivers</a></li>
                                                                           <li><a href="bus.php">Bus Commuters</a></li>
									<li><a href="heavy2.php">Heavy Vehicles</a></li>	
                                                                    	
                                                                        
                                                                        
                                                                     
								</ul>
                                                        </li>
                                                            <li><a href="#">Resources</a>	
                                                                <ul>
									<li><a href="learning.php">Learning Material</a></li>									
									<li><a href="sign.php">Signs And Symbols</a></li>
									<li><a href="procedure_licence.php">Procedure For Licence</a></li>
									<li><a href="vechile.php">Vehicle Registration</a></li>	
                                                                        <li><a href="accident.php">Accident Statistics</a></li>	
                                                                        <li><a href="accidentprone.php">Accident Prone Area</a></li>	
								</ul>
							</li>
										
							<li><a href="">Directory</a>
								<ul>									
									<li><a href="driving.php">Driving Schools</a></li>
									<li><a href="help.php">Help Lines</a></li>
                                                                        
									
								</ul>
							</li>							
							<li><a href="about.php">About Us</a></li>
                                                        <li><a href="contact.html">Contact Us</a></li>
							
						</ul>
					</nav>
				</div>
			</section>
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="themes/images/carousel/1.jpg" alt="" />
                                                        <div class="intro">
								 
								 
								<p><span>When You Come To A Fork In The road,Take It</span></p>
							</div>
						</li>
						<li>
							<img src="themes/images/carousel/2.jpg" alt="" />
							<div class="intro">
								<h1>GO SLOW</h1> 
								
								<p><span>avoid Accidents</span></p>
							</div>
						</li>
                                                <li>
                                                    <img src="themes/images/carousel/3.jpg" alt="" />
                                                </li>
					</ul>
				</div>			
			</section>
			<section class="header_text">
                            Road traffic safety refers to methods and measures for reducing the risk of<br>
                            a person using the road network for being killed or seriously injured
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
                                                    <div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Latest <strong>News</strong></span></span></span>
									<span class="pull-right">
										
                                                                        </span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
                                                                    <?php
include 'connection.php';
$r=mysql_query("select * from addnews");

while($r1=mysql_fetch_array($r))
{
  
$head=$r1['heading'];

$desc=$r1['description'];




}


?>
									<div class="carousel-inner">
                                                                            
                                                                             <b style=" font-size:25px; "><?php echo $head; ?></b>
                                                                             <br><br>
                                                                            <marquee >
                                                                                
                                                                                 <p style=" font-size: 15px;"><?php echo $desc; ?></p>
                                                                                 
                                                                            </marquee>	
                                                                        </div>
									</div>							
								</div>
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Our <strong>Services</strong></span></span></span>
									<span class="pull-right">
										
									</span>
								</h4>
                                                            <div class="row">
							
							</div>	

                                                <div class="row feature_box">						
							<div class="span4">
								<div class="service">
                                                                    <a href="index.html"><div class="customize">	
										<img src="themes/images/ladies/down.png" alt="" />
										<h4>Download <strong>App</strong></h4>
										<p>Just Download Road safety App For More Fecility In this App</p>									
                                                                        </div></a>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									 <a href="registration.php"><div class="customize">			
										<img src="themes/images/ladies/online.png" alt="" />
										<h4>Online <strong>Test</strong></h4>
										<p>We Provide Free Online Learning Test, Please Click Here..</p>
                                                                             </div></a>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									 <a href="registration.php"><div class="support">	
										<img src="themes/images/ladies/game.png" alt="" />
										<h4>Online<strong>Games</strong></h4>
										<p>We  Provide Free Online Road Related Games</p>
                                                                             </div></a>
								</div>
							</div>	
						</div>	
							</div>						
						</div>
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Brief <strong>Description</strong></span></span></span>
									<span class="pull-right">
										
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
                                                                            <div style=" width: 100%; text-align: justify; font-family:sans-serif; height:auto;">
                                                                            <p style=" font-size: 15px; line-height: 1.7;">
										Road traffic safety refers to methods and measures for reducing the risk of a person using the road network for being killed or seriously injured.
                                                                                The users of a road include pedestrians, cyclists, motorists, their passengers, and passengers of on-road public transport, mainly buses and trams. Best-practice road safety strategies focus upon the prevention of serious injury and death crashes in spite of human fallibility[1] (which is contrasted with the old road safety paradigm of simply reducing crashes assuming road user compliance with traffic regulations). Safe road design is now about providing a road environment which ensures vehicle speeds will be within the human tolerances for serious injury and death wherever conflict points exist.
                                                                           
                                                                                <BR>
                                                                            The basic strategy of a Safe System approach is to ensure that in the event of a crash, the impact energies remain below the threshold likely to produce either death or serious injury. This threshold will vary from crash scenario to crash scenario, depending upon the level of protection offered to the road users involved. For example, the chances of survival for an unprotected pedestrian hit by a vehicle diminish rapidly at speeds greater than 30 km/h, whereas for a properly restrained motor vehicle occupant the critical impact speed is 50 km/h (for side impact crashes) and 70 km/h (for head-on crashes).
                                                                            <br>
                                                                            As sustainable solutions for all classes of road have not been identified, particularly lowly trafficked rural and remote roads, a hierarchy of control should be applied, similar to best practice Occupational Safety and Health. At the highest level is sustainable prevention of serious injury and death crashes, with sustainable requiring all key result areas to be considered. At the second level is real time risk reduction, which involves providing users at severe risk with a specific warning to enable them to take mitigating action. The third level is about reducing the crash risk which involves applying the road design standards and guidelines (such as from AASHTO), improving driver behaviour and enforcement.
                                                                            </p>
                                                                            </div>
									</div>							
								</div>
							</div>						
						</div>
                                                					
						</div>

					</div>	
                        </section>
				</div>
        
			

			<section id="footer-bar">
				<div class="row">
					
                                    <div class="span4" style=" margin: 0px 79px;">
						
                                                <h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.html">Homepage</a></li>  
							<li><a href="./about.html">About Us</a></li>
							<li><a href="./contact.html">Contac Us</a></li>
							
							<li><a href="./register.html">Login</a></li>							
						</ul>	
					</div>
					<div class="span5">
                                            <p class="logo"><b  style=" color: darkorange; font-size: 17px;">ROAD SAFETY</b></p>
						<p>The National Road Safety Forum is an annual event to discuss major road safety issues.</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="https://www.facebook.com/Sahrdaya/?fref=ts">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2016 Roadsafety template  All right reserved.</span>
			</section>
			<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>
