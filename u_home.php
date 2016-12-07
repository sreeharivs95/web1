<?php
session_start();
include('connection.php');
if(!isset($_SESSION['username']))
{
    header('Location:registration.php');
}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Road Safety</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		
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
		
                <style type="text/css">
    .box{
        padding: 20px;
        display: none;
        margin-top: 20px;
        border: 1px solid #000;
    }
   
   

</style>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            if($(this).attr("value")=="red"){
                $(".box").not(".red").hide();
                $(".red").show();
            }
            else if($(this).attr("value")=="green"){
                $(".box").not(".green").hide();
                $(".green").show();
            }
            else if($(this).attr("value")=="blue"){
                $(".box").not(".blue").hide();
                $(".blue").show();
            }
            else{
                $(".box").hide();
            }
        });
    }).change();
});
function image12()
    {
        document.getElementById('image1').style.display="block";
          document.getElementById('img12').style.display="block";
        
       
        

        
    }
    
</script>

<script>
document.getElementById("selector").addEventListener("change",function(){
document.getElementById("files").innerHTML=
document.getElementById("selector").files[0].name;
});
</script>
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
			<div class="span4">

				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				

<li><a href="logout.php">Logout</a></li>			
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
                                                    <li><a href="u_home.php">HOME</a>

							</li>	
                                                        <li><a href="check_test.php">Online Learing Test</a>	
                                                                
                                                        </li>
                                                            
										
							<li><a href="http://localhost:50000/">Play Online Games</a>
								
							</li>	
                                                        	<li><a href="downloadapp.php">Downdload Apps</a>
								
							</li>		
                                                        <li><a href="changepassword.php">Change Password</a>
								
							</li>

							
						</ul>
					</nav>
				</div>
                        </section>			
	
                    <section class="main-content " style=" background-color: white;">
                            <div class="row" style="  width: 100%; margin: 0% 0% 0% 0%;">
                            <div style=" width: 100%; height: 737px;;">
                                                             
                            
                                <div style=" width:30%; height:150px;   background-color: whitesmoke;float: left; margin: 10px 0px 0px 0px;">
                  <?php
                            include 'connection.php';
                            
                             if(isset($_POST['submit']))
                             {
                                 $user=$_SESSION['username'];
                                 
                                $target=rand().".jpg";
	$target1="img/".$target;
	move_uploaded_file($_FILES['change']['tmp_name'],$target1);
	

	mysql_query("update  registration set image='$target' where username='$user'");
        
    }
 
                          ?>
    <?php
    $user=$_SESSION['username'];
  $select="select * from registration where username='$user'";
  $select_query=  mysql_query($select)or die(mysql_error());
 while($row=  mysql_fetch_array($select_query))
{
$image= $row['image']; 
}
    
    ?>
                                               
                                    
                                    
                                    <form method="post" enctype="multipart/form-data">
                                    <div style=" background-color:blueviolet; border-radius:15px; width:150px;height:45px;position:absolute; margin: 0% 0% 0% 0%;" id="files"> <img src="themes/images/user/change1.png"></div>
                                    <input type="file"  name="change" style="position:absolute;width:200px;height:30px;opacity:0;" id="selector"/>
                                    
                                    <input type="submit" name="submit" value="Upload" style="background-color:black;  color: white; width: 25%; height: 35px;margin: 20% 0% 0% 7%; float: left; border-radius: 5px;">
                                    <div><img src="img/<?php echo $image;?>" style=" border-radius: 300px; width: 30%; height: 100px; margin: 3% 0% 0% 20%;"></div>
                               
                                    </form>
                                </div> 
                              
                                <div style=" width:68%; height:150px;  background-color:whitesmoke;  margin: 10px 0px 0px 15px; float: left;">
                                    
                                    <div style=" width: 90%; height: 100px;  margin: 3% 0% 0% 3%;"><b>
                                             <label style=" font-size: 20px; margin:10px 0px 0px 5px;"><b>welcome</b> <b><?php echo $_SESSION['username'];?></b> </label>
                                    <p style=" text-align: justify; font-size: 15px;">Road traffic safety refers to methods and measures for reducing the risk of a person using the road network for being killed or seriously injured. The users of a road include pedestrians, cyclists, motorists, their passengers, and passengers of on-road public transport, mainly buses and trams. </p>
                                        </b> </div>
                                </div><br>
                              
                                <div style=" width:100%; height:auto;  background-color: whitesmoke;  margin: 13% 0% 0% 0%;">
                                     <?php  


                include 'connection.php';
              $user=$_SESSION['username'];
              $select="select * from registration where username='$user'";
              $select_query=  mysql_query($select)or die(mysql_error());
              while($row=  mysql_fetch_array($select_query))
              {
                 
                  $db_date=$row['issuedate'];
              }




$date1 = date("Y-m-j");
//$date2 = "2016-04-6";




$newdate = strtotime ( '+1 month' , strtotime ( $db_date ) ) ;
$newdate = date ( 'Y-m-j' , $newdate );
 
//echo $newdate."<br>";

$timestamp1 = strtotime($date1);
$timestamp2 = strtotime($newdate);

//echo $timestamp1."<br>";
//echo $timestamp2."<br>";

if($timestamp1 == $timestamp2)
    {
    ?>
                                      <marquee><h2>
                                              renew your licenseettooi
                                        </h2></marquee>
                                    <?php
                                    
    }
                                        
    
else{
    echo "";
}
?> 
                                          
                                    
                                </div>
                                <div style=" width:100%; height:534px; background-color: whitesmoke;  margin: 25px 0px 0px 0px; float: left;" >
                                    
                                    <h1 style=" text-align: center;">Road Safety</h1>
                                    
                                    <div style=" width: 90%; height: 100px; float: left; margin: 3% 0% 0% 3%; ">
                                        <div style=" float: left; width: 30%; height: 180px;">
                                        <img src="themes/images/user/road.jpg">
                                        
                                    </div>
                                        <div style=" float: left;width: 68%; margin: 0% 0% 0% 2%;">
                                        <p style=" text-align: justify;  font-size: 15px; line-height: 30px;"><b>Road traffic safety refers to methods and measures for reducing the risk of a person using the road network for being killed or seriously injured. The users of a road include pedestrians, cyclists, motorists, their passengers, and passengers of on-road public transport, mainly buses and trams. Best-practice road safety strategies focus upon the prevention of serious injury and death crashes in spite of human fallibility[1] (which is contrasted with the old road safety paradigm of simply reducing crashes assuming road user compliance with traffic regulations).
                                            </b></p></div>
                                        <div style=" width: 100%; margin: 0% 0% 0% 0%;"><b><p style=" text-align: justify;  font-size: 15px; line-height: 30px;">
                                                user compliance with traffic regulations). Safe road design is now about providing a road environment which ensures vehicle speeds will be within the human tolerances for serious injury and death wherever conflict points exist.
                                        <br><br>The basic strategy of a Safe System approach is to ensure that in the event of a crash, the impact energies remain below the threshold likely to produce either death or serious injury. This threshold will vary from crash scenario to crash scenario, depending upon the level of protection offered to the road users involved. For example, the chances of survival for an unprotected pedestrian hit by a vehicle diminish rapidly at speeds greater than 30 km/h, whereas for a properly restrained motor vehicle occupant the critical impact speed is 50 km/h (for side impact crashes) and 70 km/h (for head-on crashes).
                                            </b> </p> </div>
                                    </div>
                                    
                                </div>
                                </div>
				</div>
			</section>			
			<section id="footer-bar">
				<div class="row">
					
                                    <div class="span4" style=" margin: 0px 79px;">
						
                                              
						<ul class="nav">
                                                    <li><a href="u_home.php">Homepage</a></li>  
                                                    <li><a href="check_test.php">Online Learing Test</a></li>
							<li><a href="online_game.php">Play Game Online</a></li>
							
                                                        <li><a href="logout.php">Logout</a></li>							
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
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
		</script>		
    </body>
</html>