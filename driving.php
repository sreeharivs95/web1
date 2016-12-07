<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Road Safety</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
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
        <body onload="InitializeMap()">		
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
			<section class="header_text sub">
                            <img class="pageBanner" src="themes/images/carousel/driving.jpg" alt="New products" >
				<h1><span> Driving schools </span></h1>
			</section>
                    
                    
                    
                    
			<section class="main-content">
				
                            <div class="row">
                                <div style=" width: 95%; margin: 0px 48px; height:auto;">
                                    <form method="post" style=" margin: 0% 0% 0% 38%;">
                                        <label style=" font-size: 15px; float: left; " > <b>search</b></label><label style="  margin: 0% 0% 0% 2%; float: left;">
                                            <input type="text" name="search" placeholder="Search Driving school"></label>
                                        <label> <input type="submit" name="search1" value="Go" style=" background-color: darkorange;"></label> 
                                    </form><br> <br>
                                    <?php
                    include 'connection.php';
                    if(isset($_POST["search1"]))
                    {
                        
                        $search=$_POST['search'];

                       $select="select * from adddriving where location='$search'";
                       $select_query=  mysql_query($select)or die(mysql_error());
                       while($row=  mysql_fetch_array($select_query))
                       {
                           $id=$row['id'];
                           $name=$row['name'];
                           $location=$row['location'];
                           $contact=$row['contact'];
                           $lat=$row['lat'];
                           $laun=$row['laun'];
                           
                       
                        
                   
                    
                    
                    ?>
                                   <div style=" width: 70%; height: 200px; margin: 0% 0% 0% 15%; border: .5px solid lightgray; ">
                                        <div  style="width:100%; height: 149px;  float: left;">
                                            <h3  style="  margin: 23px 0px 0px 100px;"><?php echo $name; ?></h3>
                                        <b  style=" font-size: 15px; margin: 0px 0px 0px 100px;">
                                            <?php echo $location; ?></b><br>
                                            <b style=" margin: 0px 0px 0px 100px;"><?php echo $contact;  ?></b>
                                             <label style=" margin: 3% 0% 0% 50%">
                                                 <a href="map.php?id=<?php echo $id; ?>" target="blank"><input type="submit" name="map" value="MAP" style=" background-color:darkorange; width: 25%; height: 40px; border-radius: 5px; border:2px solid black;"></a>
                                             </label>
                                        </div>
                                        
                                        
                                    </div>
                                    <?php 
                       }
                    }
                                    ?>
                                   
                                     
                                    
                                    <?php
                                    include 'connection.php';
$r=mysql_query("select * from adddriving");

while($r1=mysql_fetch_array($r))
{
  $id=$r1['id'];
$name=$r1['name'];

$locaion=$r1['location'];
$phone=$r1['contact'];
$lat=$r1['lat'];
$laun=$r1['laun'];








                                    
                                    ?>
                                    

                                  
                                    <div style=" width: 70%; height: 200px; margin: 0% 0% 0% 15%; border: .5px solid lightgray; ">
                                        <div  style="width:100%; height: 149px;  float: left;">
                                            <h3  style="  margin: 23px 0px 0px 100px;"><?php echo $name; ?></h3>
                                        <b  style=" font-size: 15px; margin: 0px 0px 0px 100px;">
                                            <?php echo $locaion; ?></b><br>
                                            <b style=" margin: 0px 0px 0px 100px;"><?php echo $phone;  ?></b>
                                             <label style=" margin: 3% 0% 0% 50%">
                                                 <a href="map.php?id=<?php echo $id; ?>" target="blank"><input type="submit" name="map" value="MAP" style=" background-color:darkorange; width: 25%; height: 40px; border-radius: 5px; border:2px solid black;"></a>
                                             </label>
                                        </div>
                                        
                                        
                                    </div>
                                    <?php
                                            }
                                    ?>
                                    
                                </div>			
				</div>	
			</section>
                   <section id="footer-bar">
				<div class="row">
					
                                    <div class="span4" style=" margin: 0px 79px;">
						
                                              
						<ul class="nav">
							<li><a href="index.html">Homepage</a></li>  
							<li><a href="about.html">About Us</a></li>
							<li><a href="contact.html">Contac Us</a></li>
							
							<li><a href="register.html">Login</a></li>							
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
				<span>Copyright 2016 Roadsafety  All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>	
    </body>
</html>