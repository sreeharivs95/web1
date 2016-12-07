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
            <style>
                .blink1 {
  -moz-animation-duration: 850ms;
  -moz-animation-name: blink;
  -moz-animation-iteration-count: infinite;
  -moz-animation-direction: alternate;
  
  -webkit-animation-duration: 850ms;
  -webkit-animation-name: blink;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-direction: alternate;
  
  animation-duration: 850ms;
  animation-name: blink;
  animation-iteration-count: infinite;
  animation-direction: alternate;
}

@-moz-keyframes blink {
  from {
    opacity: 1;
  }
  
  to {
    opacity: 0;
  }
}

@-webkit-keyframes blink {
  from {
    opacity: 1;
  }
  
  to {
    opacity: 0;
  }
}

@keyframes blink {
  from {
    opacity: 1;
  }
  
  to {
    opacity: 0;
  }
}
            </style>
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
function achu()
    {
        document.getElementById('foggy').style.display="block";
        document.getElementById('apr').style.display="block";
        
        document.getElementById('yes1').style.display="none";
        
    }
    function kichu()
    {
       document.getElementById('foggy').style.display="none";
        document.getElementById('apr').style.display="none";
        
        document.getElementById('yes1').style.display="block"; 
    }
</script>
<script src="test_quest.js" type="text/javascript">
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
                                                            
										
							<li><a href="online_game.php">Play Online Games</a>
								
							</li>	
                                                        	<li><a href="downloadapp.php">Downdload Apps</a>
								
							</li>		
							<li><a href="changepassword.php">Change Password</a>
								
							</li>

							
						</ul>
					</nav>
				</div>
                        </section>			

                    
                    
                    
                    
                        <?php
    $user=$_SESSION['username'];
  $select="select * from registration where username='$user'";
  $select_query=  mysql_query($select)or die(mysql_error());
 while($row=  mysql_fetch_array($select_query))
{
$image= $row['image']; 
}
    
    ?>
                    <section class="main-content " style=" background-color: white;">
                            <div class="row" style="  width: 100%; margin: 0% 0% 0% 0%;">
                            <div style=" width: 100%; height: 737px;;">
                            
                                <div style=" width:30%; height:150px;  float: left; background-color: whitesmoke; margin: 10px 0px 0px 0px;">
                                    <label style=" font-size: 20px; margin:0px 0px 0px 60px;"><b>welcome</b> <b><?php echo $_SESSION['username'];?></b> </label>
                                   <div><img src="img/<?php echo $image;?>" style=" border-radius: 300px; width: 30%; height: 100px; margin: 3% 0% 0% 20%;"></div>

                                </div> 
                                <div style=" width:68%; height:150px;  background-color: whitesmoke;  margin: 10px 0px 0px 15px; float: left;">
                                    
                                    <div style=" width: 90%; height: 100px;  margin: 3% 0% 0% 3%;"><b>
                                    <p style=" text-align: justify; font-size: 15px;">Road traffic safety refers to methods and measures for reducing the risk of a person using the road network for being killed or seriously injured. The users of a road include pedestrians, cyclists, motorists, their passengers, and passengers of on-road public transport, mainly buses and trams. </p>
                                        </b> </div>
                                </div>
                                <div style=" width:100%; height:534px; background-color: whitesmoke;  margin: 25px 0px 0px 0px; float: left;" >
                                    
                                    <h1 style=" text-align: center;">Online Learning Test</h1>
                                    
                                    <div id="main_main" style="width:100%; height: auto; background-color: white;">
                                        
                                        <!-- qu1 -->
                                        <div id="main1" style="width:100%; height: 400px; background-color: black;">
                                        <div style="width:70%; height: 400px;  float: left;">
                                            <div style="width:100%; height: 100px; ">
                                                <div style="width:30%; height: 100px; background-color: black; float: left;   color: white;  border-bottom: 1px solid white; font-family: Times New Roman;"><label style="margin:15% 0% 0% 20%;font-size: 20px;">Question No.1</label></div>
                                                <div style="width:70%; height: 100px; background-color:black; color: white; border-bottom: 1px solid white; float: left;"><label style="text-align: center; margin-top:35px;font-size: 20px;">When you see a traffic light change from green to yellow, what colour light should you expect next?</label></div>
                                                
                                                <div style="width:100%; height: 300px;  float: left;">

                                                    <button onclick="one_one()" style="width:80%; height: 40px;color: white; background-color: rgb(240,104,34);  margin: 6% 0% 0% 10%; text-align: center; ">Red</button>
                                                    <button onclick="one_two()" style="width:80%; height: 40px; color: white; background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">Green</button>
                                                    <button onclick="one_three()" style="width:80%; height: 40px; color: white; background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">Flashing red</button>
                                                    <input type="hidden" id="one_one"  value="1">
                                                    <input type="hidden" id="one_two"  value="0">
                                                    <input type="hidden" id="one_three"  value="0">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div style="width:30%; height: 400px; float: left;">
                                            <div style="width:100%; height: 50px; background-color: black; color: white; ">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 30%; margin-top: 10px;">Remaining Questions</label><input type="text" value="19" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                            </div>
                                            
                                            <div style="width:100%; height: 50px; background-color: black; color: white; border-bottom: 1px solid white; margin-top: 0px;">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 66%; margin-top: 10px;">Score</label><input type="text" id="total1" value="0" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                            </div>
                                        </div>
                                         </div>
                                        
                                        
                                        
                                        <!-- qu2 -->
                                        
                                        
                                        <div id="main2" style="width:100%; height: 400px; background-color: black;display: none;">
                                        <div style="width:70%; height: 400px;  float: left;">
                                            <div style="width:100%; height: 100px; ">
                                                <div style="width:30%; height: 100px; background-color: black;  border-bottom: 1px solid white;color: white;float: left;  font-family: Times New Roman;"><label style="margin:15% 0% 0% 20%;font-size: 20px;">Question No.2</label></div>
                                                <div style="width:70%; height: 100px; background-color: black; border-bottom: 1px solid white; color: white;float: left;"><label style="text-align: center; margin-top:35px;font-size: 20px;">When a traffic light is on red, it indicates that you should…?</label></div>
                                                
                                                <div style="width:100%; height: 300px;  float: left;">

                                                    <button onclick="two_one()" style="width:80%; height: 40px;color: white; background-color: rgb(240,104,34); margin: 6% 0% 0% 10%; text-align: center; ">Maintain your current speed</button>
                                                    <button onclick="two_two()" style="width:80%; height: 40px; color: white; background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">come to a complete stop</button>
                                                    <button onclick="two_three()" style="width:80%; height: 40px; color: white; background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">slow down</button>
                                                    <input type="hidden" id="two_one" name="two_one" value="0">
                                                    <input type="hidden" id="two_two" name="two_two" value="1">
                                                    <input type="hidden" id="two_three" name="two_three" value="0">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div style="width:30%; height: 400px; float: left;">
                                            <div style="width:100%; height: 50px; background-color: black; color: white;">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 30%; margin-top: 10px;">Remaining Questions</label><input type="text" value="18" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                            </div>
                                            
                                            <div style="width:100%; height: 50px; background-color: black; color: white; border-bottom: 1px solid white; margin-top: 0px;">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 66%; margin-top: 10px;">Score</label><input type="text" id="total2" value="" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                            </div>
                                        </div>
                                         </div>
                                        
                                        <!-- qu3 -->
                                        
                                        <div id="main3" style="width:100%; height: 400px; background-color: black;  display: none;">
                                        <div style="width:70%; height: 400px;  float: left;">
                                            <div style="width:100%; height: 100px; ">
                                                <div style="width:30%; height: 100px; background-color: black; color: white; border-bottom: 1px solid white;  float: left;  font-family: Times New Roman;"><label style="margin:15% 0% 0% 20%;font-size: 20px;">Question No.3</label></div>
                                                <div style="width:70%; height: 100px; background-color: black; color: white; border-bottom: 1px solid white; float: left;"><label style="text-align: center; margin-top:35px;font-size: 20px;">Who is the only person a learner driver may carry on a motorcycle as a passenger?</label></div>
                                                
                                                <div style="width:100%; height: 300px;  float: left;">

                                                    <button onclick="three_one()" style="width:80%; height: 40px;color: white; background-color: rgb(240,104,34); margin: 6% 0% 0% 10%; text-align: center; ">A family member</button>
                                                    <button onclick="three_two()" style="width:80%; height: 40px; color: white; background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">A spouse</button>
                                                    <button onclick="three_three()" style="width:80%; height: 40px; color: white; background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">An Instructor</button>
                                                    <input type="hidden" id="three_one"  value="0">
                                                    <input type="hidden" id="three_two"  value="0">
                                                    <input type="hidden" id="three_three"  value="1">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div style="width:30%; height: 400px; float: left;">
                                            <div style="width:100%; height: 50px; background-color: black; color: white;">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 30%; margin-top: 10px;">Remaining Questions</label><input type="text" value="17" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                            </div>
                                            
                                            <div style="width:100%; height: 50px; background-color: black; color: white; border-bottom: 1px solid white; margin-top: 0px;">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 66%; margin-top: 10px;">Score</label><input type="text" id="total3" value="" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                                
                                                
                                            </div>
                                        </div>
                                         </div>
                                        
                                        
                                        <!-- 4 -->
                                        
                                        
                                        <div id="main4" style="width:100%; height: 400px; background-color: black; display: none;">
                                        <div style="width:70%; height: 400px;  float: left;">
                                            <div style="width:100%; height: 100px; ">
                                                <div style="width:30%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white; float: left;  font-family: Times New Roman;"><label style="margin:15% 0% 0% 20%;font-size: 20px;">Question No.4</label></div>
                                                <div style="width:70%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;"><label style="text-align: center; margin-top:35px;font-size: 20px;">If a sign is rectangular in shape, what does it convey?</label></div>
                                                
                                                <div style="width:100%; height: 300px;  float: left;">

                                                    <button onclick="four_one()" style="width:80%; height: 40px;color: white;  background-color: rgb(240,104,34);  margin: 6% 0% 0% 10%; text-align: center; ">Information</button>
                                                    <button onclick="four_two()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">Instructions</button>
                                                    <button onclick="four_three()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">Warnings</button>
                                                    <input type="hidden" id="four_one"  value="1">
                                                    <input type="hidden" id="four_two"  value="0">
                                                    <input type="hidden" id="four_three"  value="0">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div style="width:30%; height: 400px; float: left;">
                                            <div style="width:100%; height: 50px; background-color: black; color: white;">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 30%; margin-top: 10px;">Remaining Questions</label><input type="text" value="16" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                            </div>
                                            
                                            <div style="width:100%; height: 50px; background-color: black; color: white; border-bottom:  1px solid white; margin-top: 0px;">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 66%; margin-top: 10px;">Score</label><input type="text" id="total4" value="" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                                
                                                
                                            </div>
                                        </div>
                                         </div>
                                        
                                        <!-- 5 -->
                                        
                                        
                                        <div id="main5" style="width:100%; height: 400px; background-color: black; display: none;">
                                        <div style="width:70%; height: 400px;  float: left;">
                                            <div style="width:100%; height: 100px; ">
                                                <div style="width:30%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;  font-family: Times New Roman;"><label style="margin:15% 0% 0% 20%;font-size: 20px;">Question No.5</label></div>
                                                <div style="width:70%; height: 100px;  background-color: black; color: white; border-bottom:  1px solid white;float: left;"><label style="text-align: center; margin-top:35px;font-size: 20px;">When driving on a ghat road, the maximum speed permitted is…?</label></div>
                                                
                                                <div style="width:100%; height: 300px;  float: left;">

                                                    <button onclick="five_one()" style="width:80%; height: 40px;color: white; background-color: rgb(240,104,34);  margin: 6% 0% 0% 10%; text-align: center; ">25 km/h</button>
                                                    <button onclick="five_two()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">35 km/h</button>
                                                    <button onclick="five_three()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">55 km/h</button>
                                                    <input type="hidden" id="five_one"  value="0">
                                                    <input type="hidden" id="five_two"  value="1">
                                                    <input type="hidden" id="five_three"  value="0">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div style="width:30%; height: 400px; float: left;">
                                            <div style="width:100%; height: 50px;  background-color: black; color: white;">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 30%; margin-top: 10px;">Remaining Questions</label><input type="text" value="15" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                            </div>
                                            
                                            <div style="width:100%; height: 50px;  background-color: black; color: white; border-bottom:  1px solid white; margin-top: 0px;">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 66%; margin-top: 10px;">Score</label><input type="text" id="total5" value="" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                                
                                                
                                            </div>
                                        </div>
                                         </div>
                                        
                                        <!-- 6 -->
                                        
                                        
                                        <div id="main6" style="width:100%; height: 400px; background-color: black; display: none;">
                                        <div style="width:70%; height: 400px;  float: left;">
                                            <div style="width:100%; height: 100px; ">
                                                <div style="width:30%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;  font-family: Times New Roman;"><label style="margin:15% 0% 0% 20%;font-size: 20px;">Question No.6</label></div>
                                                <div style="width:70%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;"><label style="text-align: center; margin-top:35px;font-size: 20px;">When near an educational institution, what is the maximum speed at which you can drive?</label></div>
                                                
                                                <div style="width:100%; height: 300px;  float: left;">

                                                    <button onclick="six_one()" style="width:80%; height: 40px;color: white;  background-color: rgb(240,104,34); margin: 6% 0% 0% 10%; text-align: center; ">35 km/h</button>
                                                    <button onclick="six_two()" style="width:80%; height: 40px; color: white; background-color: rgb(240,104,34); margin: 4% 0% 0% 10%; text-align: center; ">40 km/h</button>
                                                    <button onclick="six_three()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">25 km/h</button>
                                                    <input type="hidden" id="six_one"  value="0">
                                                    <input type="hidden" id="six_two"  value="0">
                                                    <input type="hidden" id="six_three"  value="1">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div style="width:30%; height: 400px; float: left;">
                                            <div style="width:100%; height: 50px; background-color: black; color: white; ">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 30%; margin-top: 10px;">Remaining Questions</label><input type="text" value="14" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                            </div>
                                            
                                            <div style="width:100%; height: 50px; background-color: black; color: white; border-bottom:  1px solid white; margin-top: 0px;">
                                                <label style="float:left; font-size:20px; font-family: Times New Roman; margin-left: 66%; margin-top: 10px;">Score</label><input type="text" id="total6" value="" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                                
                                                
                                            </div>
                                        </div>
                                         </div>
                                        
                                        <!-- 7 -->
                                        
                                        
                                        <div id="main7" style="width:100%; height: 400px; background-color: black; display: none;">
                                        <div style="width:70%; height: 400px;  float: left;">
                                            <div style="width:100%; height: 100px; ">
                                                <div style="width:30%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;  font-family: Times New Roman;"><label style="margin:15% 0% 0% 20%;font-size: 20px;">Question No.7</label></div>
                                                <div style="width:70%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;"><label style="text-align: center; margin-top:35px;font-size: 20px;">When you approach a bus which has stopped to collect or drop off passengers, what should you do?</label></div>
                                                
                                                <div style="width:100%; height: 300px;  float: left;">

                                                    <button onclick="seven_one()" style="width:80%; height: 40px;color: white;  background-color: rgb(240,104,34);  margin: 6% 0% 0% 10%; text-align: center; ">Stop and wait for the bus to pull away</button>
                                                    <button onclick="seven_two()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">Pass it on the right-hand side</button>
                                                    <button onclick="seven_three()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">Sound your horn to warn passengers you are there</button>
                                                    <input type="hidden" id="seven_one"  value="1">
                                                    <input type="hidden" id="seven_two"  value="0">
                                                    <input type="hidden" id="seven_three"  value="0">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div style="width:30%; height: 400px; float: left;">
                                            <div style="width:100%; height: 50px; background-color: black; color: white;">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 30%; margin-top: 10px;">Remaining Questions</label><input type="text" value="13" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                            </div>
                                            
                                            <div style="width:100%; height: 50px; background-color: black; color: white; border-bottom:  1px solid white; margin-top: 0px;">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 66%; margin-top: 10px;">Score</label><input type="text" id="total7" value="" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                                
                                                
                                            </div>
                                        </div>
                                         </div>
                                        
                                        <!-- 8 -->
                                        
                                        
                                        <div id="main8" style="width:100%; height: 400px; background-color: black; display: none;">
                                        <div style="width:70%; height: 400px;  float: left;">
                                            <div style="width:100%; height: 100px; ">
                                                <div style="width:30%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;  font-family: Times New Roman;"><label style="margin:15% 0% 0% 20%;font-size: 20px;">Question No.8</label></div>
                                                <div style="width:70%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;"><label style="text-align: center; margin-top:35px;font-size: 20px;">If you are towing another vehicle, you may not use a rope which allows it to get more than what distance away from your vehicle?</label></div>
                                                
                                                <div style="width:100%; height: 300px;  float: left;">

                                                    <button onclick="eight_one()" style="width:80%; height: 40px;color: white;  background-color: rgb(240,104,34);  margin: 6% 0% 0% 10%; text-align: center; ">15 m</button>
                                                    <button onclick="eight_two()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">5 m</button>
                                                    <button onclick="eight_three()" style="width:80%; height: 40px; color: white; background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">20 m</button>
                                                    <input type="hidden" id="eight_one"  value="0">
                                                    <input type="hidden" id="eight_two"  value="1">
                                                    <input type="hidden" id="eight_three"  value="0">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div style="width:30%; height: 400px; float: left;">
                                            <div style="width:100%; height: 50px; background-color: black; color: white; ">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 30%; margin-top: 10px;">Remaining Questions</label><input type="text" value="12" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                            </div>
                                            
                                            <div style="width:100%; height: 50px; background-color: black; color: white; border-bottom:  1px solid white; margin-top: 0px;">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 66%; margin-top: 10px;">Score</label><input type="text" id="total8" value="" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                                
                                                
                                            </div>
                                        </div>
                                         </div>
                                        
                                        
                                        <!-- 9 -->
                                        
                                        
                                        <div id="main9" style="width:100%; height: 400px; background-color: black; display: none;">
                                        <div style="width:70%; height: 400px;  float: left;">
                                            <div style="width:100%; height: 100px; ">
                                                <div style="width:30%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;  font-family: Times New Roman;"><label style="margin:15% 0% 0% 20%;font-size: 20px;">Question No.9</label></div>
                                                <div style="width:70%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;"><label style="text-align: center; margin-top:35px;font-size: 20px;">Under which of these circumstances is it permissible to use a mobile phone while driving a motor vehicle?</label></div>
                                                
                                                <div style="width:100%; height: 300px;  float: left;">

                                                    <button onclick="nine_one()" style="width:80%; height: 40px;color: white;  background-color: rgb(240,104,34);  margin: 6% 0% 0% 10%; text-align: center; ">If it is only a short call</button>
                                                    <button onclick="nine_two()" style="width:80%; height: 40px; color: white; background-color: rgb(240,104,34); margin: 4% 0% 0% 10%; text-align: center; ">If the traffic is light</button>
                                                    <button onclick="nine_three()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">None of them </button>
                                                    <input type="hidden" id="nine_one"  value="0">
                                                    <input type="hidden" id="nine_two"  value="0">
                                                    <input type="hidden" id="nine_three"  value="1">
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div style="width:30%; height: 400px; float: left;">
                                            <div style="width:100%; height: 50px; background-color: black; color: white;">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 30%; margin-top: 10px;">Remaining Questions</label><input  type="text" value="11" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                            </div>
                                            
                                            <div style="width:100%; height: 50px; background-color: black; color: white; border-bottom:  1px solid white; margin-top: 0px;">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 66%; margin-top: 10px;">Score</label><input type="text" id="total9" value="" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                                
                                                
                                            </div>
                                        </div>
                                         </div>
                                        
                                        
                                        <!-- 10 -->
                                        
                                        
                                        <div id="main10" style="width:100%; height: 400px; background-color: black; display: none;">
                                        <div style="width:70%; height: 400px;  float: left;">
                                            <div style="width:100%; height: 100px; ">
                                                <div style="width:30%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;  font-family: Times New Roman;"><label style="margin:15% 0% 0% 20%;font-size: 20px;">Question No.10</label></div>
                                                <div style="width:70%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;"><label style="text-align: center; margin-top:35px;font-size: 20px;">Which of these gives police officers a right to seize your vehicle?</label></div>
                                                
                                                <div style="width:100%; height: 300px;  float: left;">

                                                    <button onclick="ten_one()" style="width:80%; height: 40px;color: white;  background-color: rgb(240,104,34);  margin: 6% 0% 0% 10%; text-align: center; ">Not having valid registration</button>
                                                    <button onclick="ten_two()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">If you fail an emissions test</button>
                                                    <button onclick="ten_three()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">When you have been speeding</button>
                                                    <input type="hidden" id="ten_one"  value="1">
                                                    <input type="hidden" id="ten_two"  value="0">
                                                    <input type="hidden" id="ten_three"  value="0">
                                                    <input type="hidden" id="rq10"  value="1">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div style="width:30%; height: 400px; float: left;">
                                            <div style="width:100%; height: 50px;background-color: black; color: white; ">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 30%; margin-top: 10px;">Remaining Questions</label><input type="text" value="10" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                            </div>
                                            
                                            <div style="width:100%; height: 50px;background-color: black; color: white; border-bottom:  1px solid white; margin-top: 0px;">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 66%; margin-top: 10px;">Score</label><input type="text" id="total10" value="" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                                
                                                
                                            </div>
                                        </div>
                                         </div>
                                        
                                        
                                        
                                        <!-- 11 -->
                                        
                                        
                                        <div id="main11" style="width:100%; height: 400px; background-color: black; display: none;">
                                        <div style="width:70%; height: 400px;  float: left;">
                                            <div style="width:100%; height: 100px; ">
                                                <div style="width:30%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;  font-family: Times New Roman;"><label style="margin:15% 0% 0% 20%;font-size: 20px;">Question No.11</label></div>
                                                <div style="width:70%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;"><label style="text-align: center; margin-top:35px;font-size: 20px;">A cautionary traffic sign is what shape?</label></div>
                                                
                                                <div style="width:100%; height: 300px;  float: left;">

                                                    <button onclick="eleven_one()" style="width:80%; height: 40px;color: white;  background-color: rgb(240,104,34);  margin: 6% 0% 0% 10%; text-align: center; ">Circular</button>
                                                    <button onclick="eleven_two()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">Triangular</button>
                                                    <button onclick="eleven_three()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">Square</button>
                                                    <input type="hidden" id="eleven_one"  value="0">
                                                    <input type="hidden" id="eleven_two"  value="1">
                                                    <input type="hidden" id="eleven_three"  value="0">
                                                    <input type="hidden" id="rq11"  value="2">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div style="width:30%; height: 400px; float: left;">
                                            <div style="width:100%; height: 50px; background-color: black; color: white; ">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 30%; margin-top: 10px;">Remaining Questions</label><input type="text" value="9" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                            </div>
                                            
                                            <div style="width:100%; height: 50px; background-color: black; color: white; border-bottom:  1px solid white; margin-top: 0px;">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 66%; margin-top: 10px;">Score</label><input type="text" id="total11" value="" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                                
                                                
                                            </div>
                                        </div>
                                         </div>
                                        
                                        
                                        <!-- 12 -->
                                        
                                        
                                        <div id="main12" style="width:100%; height: 400px; background-color: black; display: none;">
                                        <div style="width:70%; height: 400px;  float: left;">
                                            <div style="width:100%; height: 100px; ">
                                                <div style="width:30%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;  font-family: Times New Roman;"><label style="margin:15% 0% 0% 20%;font-size: 20px;">Question No.12</label></div>
                                                <div style="width:70%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;"><label style="text-align: center; margin-top:35px;font-size: 20px;">A state driving license is valid for use…?</label></div>
                                                
                                                <div style="width:100%; height: 300px;  float: left;">

                                                    <button onclick="twelve_one()" style="width:80%; height: 40px;color: white;  background-color: rgb(240,104,34);  margin: 6% 0% 0% 10%; text-align: center; ">Only in the state of issue</button>
                                                    <button onclick="twelve_two()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">Anywhere in the world</button>
                                                    <button onclick="twelve_three()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">Anywhere in India</button>
                                                    <input type="hidden" id="twelve_one"  value="0">
                                                    <input type="hidden" id="twelve_two"  value="0">
                                                    <input type="hidden" id="twelve_three"  value="1">
                                                    <input type="hidden" id="twelve"  value="11">
                                                    <input type="hidden" id="nine"  value="0">
                                                    <input type="hidden" id="rq12"  value="3">
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div style="width:30%; height: 400px; float: left;">
                                            <div style="width:100%; height: 50px; background-color: black; color: white; ">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 30%; margin-top: 10px;">Remaining Questions</label><input type="text" value="8" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                            </div>
                                            
                                            <div style="width:100%; height: 50px; background-color: black; color: white; border-bottom:  1px solid white; margin-top: 0px;">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 66%; margin-top: 10px;">Score</label><input type="text" id="total12" value="" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                                
                                                
                                            </div>
                                        </div>
                                         </div>
                                        
                                        
                                        <!-- 13 -->
                                        
                                        
                                        <div id="main13" style="width:100%; height: 400px; background-color: black; display: none;">
                                        <div style="width:70%; height: 400px;  float: left;">
                                            <div style="width:100%; height: 100px; ">
                                                <div style="width:30%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;  font-family: Times New Roman;"><label style="margin:15% 0% 0% 20%;font-size: 20px;">Question No.13</label></div>
                                                <div style="width:70%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;"><label style="text-align: center; margin-top:35px;font-size: 20px;">A PUCC (Pollution Under Control Certificate) is valid for how long from the date of issue?</label></div>
                                                
                                                <div style="width:100%; height: 300px;  float: left;">

                                                    <button onclick="thirteen_one()" style="width:80%; height: 40px;color: white;  background-color: rgb(240,104,34);  margin: 6% 0% 0% 10%; text-align: center; ">Six months</button>
                                                    <button onclick="thirteen_two()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">Four months</button>
                                                    <button onclick="thirteen_three()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">One year</button>
                                                    <input type="hidden" id="thirteen_one"  value="1">
                                                    <input type="hidden" id="thirteen_two"  value="0">
                                                    <input type="hidden" id="thirteen_three"  value="0">
                                                    <input type="hidden" id="rq13"  value="4">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div style="width:30%; height: 400px; float: left;">
                                            <div style="width:100%; height: 50px; background-color: black; color: white;">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 30%; margin-top: 10px;">Remaining Questions</label><input type="text" value="7" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                            </div>
                                            
                                            <div style="width:100%; height: 50px;background-color: black; color: white; border-bottom:  1px solid white; margin-top: 0px;">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 66%; margin-top: 10px;">Score</label><input type="text" id="total13" value="" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                                
                                                
                                            </div>
                                        </div>
                                         </div>
                                        
                                        <!-- 14 -->
                                        
                                        
                                        <div id="main14" style="width:100%; height: 400px; background-color: black; display: none;">
                                        <div style="width:70%; height: 400px;  float: left;">
                                            <div style="width:100%; height: 100px; ">
                                                <div style="width:30%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;  font-family: Times New Roman;"><label style="margin:15% 0% 0% 20%;font-size: 20px;">Question No.14</label></div>
                                                <div style="width:70%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white; float: left;"><label style="text-align: center; margin-top:35px;font-size: 20px;">You see a pedestrian waiting at a crossing ahead. You should…?</label></div>
                                                
                                                <div style="width:100%; height: 300px;  float: left;">

                                                    <button onclick="fourteen_one()" style="width:80%; height: 40px;color: white;  background-color: rgb(240,104,34);  margin: 6% 0% 0% 10%; text-align: center; ">Speed up to be past as quickly as possible</button>
                                                    <button onclick="fourteen_two()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">Come to a complete stop and wait for them to cross   </button>
                                                    <button onclick="fourteen_three()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">Hoot to warn them not to cross</button>
                                                    <input type="hidden" id="fourteen_one"  value="0">
                                                    <input type="hidden" id="fourteen_two"  value="1">
                                                    <input type="hidden" id="fourteen_three"  value="0">
                                                    <input type="hidden" id="rq14"  value="5">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div style="width:30%; height: 400px; float: left;">
                                            <div style="width:100%; height: 50px; background-color: black; color: white; ">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 30%; margin-top: 10px;">Remaining Questions</label><input type="text" value="6" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                            </div>
                                            
                                            <div style="width:100%; height: 50px; background-color: black; color: white; border-bottom:  1px solid white; margin-top: 0px;">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 66%; margin-top: 10px;">Score</label><input type="text" id="total14" value="" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                                
                                                
                                            </div>
                                        </div>
                                         </div>
                                        
                                        
                                        <!-- 15 -->
                                        
                                        
                                        <div id="main15" style="width:100%; height: 400px; background-color: black; display: none;">
                                        <div style="width:70%; height: 400px;  float: left;">
                                            <div style="width:100%; height: 100px; ">
                                                <div style="width:30%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;  font-family: Times New Roman;"><label style="margin:15% 0% 0% 20%;font-size: 20px;">Question No.15</label></div>
                                                <div style="width:70%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;"><label style="text-align: center; margin-top:35px;font-size: 20px;">Your insurance has expired. How long can you legally drive your vehicle before you renew it?</label></div>
                                                
                                                <div style="width:100%; height: 300px;  float: left;">

                                                    <button onclick="fifteen_one()" style="width:80%; height: 40px;color: white;  background-color: rgb(240,104,34);  margin: 6% 0% 0% 10%; text-align: center; ">1 week</button>
                                                    <button onclick="fifteen_two()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">3 days</button>
                                                    <button onclick="fifteen_three()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">0 days</button>
                                                    <input type="hidden" id="fifteen_one"  value="0">
                                                    <input type="hidden" id="fifteen_two"  value="0">
                                                    <input type="hidden" id="fifteen_three"  value="1">
                                                    <input type="hidden" id="rq15"  value="6">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div style="width:30%; height: 400px; float: left;">
                                            <div style="width:100%; height: 50px; background-color: black; color: white; ">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 30%; margin-top: 10px;">Remaining Questions</label><input type="text" value="5" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                            </div>
                                            
                                            <div style="width:100%; height: 50px; background-color: black; color: white; border-bottom:  1px solid white;; margin-top: 0px;">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 66%; margin-top: 10px;">Score</label><input type="text" id="total15" value="" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                                
                                                
                                            </div>
                                        </div>
                                         </div>
                                        
                                        
                                        <!-- 16 -->
                                        
                                        
                                        <div id="main16" style="width:100%; height: 400px; background-color: black; display: none;">
                                        <div style="width:70%; height: 400px;  float: left;">
                                            <div style="width:100%; height: 100px; ">
                                                <div style="width:30%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;  font-family: Times New Roman;"><label style="margin:15% 0% 0% 20%;font-size: 20px;">Question No.16</label></div>
                                                <div style="width:70%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;"><label style="text-align: center; margin-top:35px;font-size: 20px;">You want to make a U-turn but there is a lot of traffic around. What should you do?</label></div>
                                                
                                                <div style="width:100%; height: 300px;  float: left;">

                                                    <button onclick="sixteen_one()" style="width:80%; height: 40px;color: white;  background-color: rgb(240,104,34);  margin: 6% 0% 0% 10%; text-align: center; ">Drive on until you find a less busy place</button>
                                                    <button onclick="sixteen_two()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">Make the turn as slowly as possible</button>
                                                    <button onclick="sixteen_three()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">Make the turn as quickly as possible</button>
                                                    <input type="hidden" id="sixteen_one"  value="1">
                                                    <input type="hidden" id="sixteen_two"  value="0">
                                                    <input type="hidden" id="sixteen_three"  value="0">
                                                    <input type="hidden" id="rq16"  value="7">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div style="width:30%; height: 400px; float: left;">
                                            <div style="width:100%; height: 50px; background-color: black; color: white;">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 30%; margin-top: 10px;">Remaining Questions</label><input type="text" value="4" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                            </div>
                                            
                                            <div style="width:100%; height: 50px; background-color: black; color: white; border-bottom:  1px solid white; margin-top: 0px;">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 66%; margin-top: 10px;">Score</label><input type="text" id="total16" value="" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                                
                                                
                                            </div>
                                        </div>
                                         </div>
                                        
                                        
                                        <!-- 17 -->
                                        
                                        
                                        <div id="main17" style="width:100%; height: 400px; background-color: black; display: none;">
                                        <div style="width:70%; height: 400px;  float: left;">
                                            <div style="width:100%; height: 100px; ">
                                                <div style="width:30%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;  font-family: Times New Roman;"><label style="margin:15% 0% 0% 20%;font-size: 20px;">Question No.17</label></div>
                                                <div style="width:70%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;"><label style="text-align: center; margin-top:35px;font-size: 20px;">When you are driving near a school, you should do what?</label></div>
                                                
                                                <div style="width:100%; height: 300px;  float: left;">

                                                    <button onclick="seventeen_one()" style="width:80%; height: 40px;color: white;  background-color: rgb(240,104,34);  margin: 6% 0% 0% 10%; text-align: center; ">Turn your lights on full beam</button>
                                                    <button onclick="seventeen_two()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">Reduce your speed</button>
                                                    <button onclick="seventeen_three()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">Sound your horn constantly</button>
                                                    <input type="hidden" id="seventeen_one"  value="0">
                                                    <input type="hidden" id="seventeen_two"  value="1">
                                                    <input type="hidden" id="seventeen_three"  value="0">
                                                    <input type="hidden" id="rq17"  value="8">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div style="width:30%; height: 400px; float: left;">
                                            <div style="width:100%; height: 50px; background-color: black; color: white;">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 30%; margin-top: 10px;">Remaining Questions</label><input type="text" value="3" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                            </div>
                                            
                                            <div style="width:100%; height: 50px; background-color: black; color: white; border-bottom:  1px solid white; margin-top: 0px;">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 66%; margin-top: 10px;">Score</label><input type="text" id="total17" value="" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                                
                                                
                                            </div>
                                        </div>
                                         </div>
                                        
                                        
                                        <!-- 18 -->
                                        
                                        
                                        <div id="main18" style="width:100%; height: 400px; background-color: black; display: none;">
                                        <div style="width:70%; height: 400px;  float: left;">
                                            <div style="width:100%; height: 100px; ">
                                                <div style="width:30%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;  font-family: Times New Roman;"><label style="margin:15% 0% 0% 20%;font-size: 20px;">Question No.18</label></div>
                                                <div style="width:70%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;"><label style="text-align: center; margin-top:35px;font-size: 20px;">A continuous yellow line down the middle of a road means what?</label></div>
                                                
                                                <div style="width:100%; height: 300px;  float: left;">

                                                    <button onclick="eighteen_one()" style="width:80%; height: 40px;color: white;  background-color: rgb(240,104,34);  margin: 6% 0% 0% 10%; text-align: center; ">No parking</button>
                                                    <button onclick="eighteen_two()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">Overtaking compulsory</button>
                                                    <button onclick="eighteen_three()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">No overtaking</button>
                                                    <input type="hidden" id="eighteen_one"  value="0">
                                                    <input type="hidden" id="eighteen_two"  value="0">
                                                    <input type="hidden" id="eighteen_three"  value="1">
                                                    <input type="hidden" id="rq18"  value="9">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div style="width:30%; height: 400px; float: left;">
                                            <div style="width:100%; height: 50px; background-color: black; color: white;">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 30%; margin-top: 10px;">Remaining Questions</label><input type="text" value="2" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                            </div>
                                            
                                            <div style="width:100%; height: 50px; background-color: black; color: white; border-bottom:  1px solid white; margin-top: 0px;">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 66%; margin-top: 10px;">Score</label><input type="text" id="total18" value="" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                                
                                                
                                            </div>
                                        </div>
                                         </div>
                                        
                                        <!-- 19 -->
                                        
                                        
                                        <div id="main19" style="width:100%; height: 400px; background-color: black; display: none;">
                                        <div style="width:70%; height: 400px;  float: left;">
                                            <div style="width:100%; height: 100px; ">
                                                <div style="width:30%; height: 100px;background-color: black; color: white; border-bottom:  1px solid white;float: left;  font-family: Times New Roman;"><label style="margin:15% 0% 0% 20%;font-size: 20px;">Question No.19</label></div>
                                                <div style="width:70%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;"><label style="text-align: center; margin-top:35px;font-size: 20px;">The number plate of your vehicle must be…?</label></div>
                                                
                                                <div style="width:100%; height: 300px;  float: left;">

                                                    <button onclick="nineteen_one()" style="width:80%; height: 40px;color: white;  background-color: rgb(240,104,34);  margin: 6% 0% 0% 10%; text-align: center; ">In English with Arabic numerals</button>
                                                    <button onclick="nineteen_two()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">In Arabic with English numerals</button>
                                                    <button onclick="nineteen_three()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">In the local language</button>
                                                    <input type="hidden" id="nineteen_one"  value="1">
                                                    <input type="hidden" id="nineteen_two"  value="0">
                                                    <input type="hidden" id="nineteen_three"  value="0">
                                                    <input type="hidden" id="rq19"  value="10">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div style="width:30%; height: 400px; float: left;">
                                            <div style="width:100%; height: 50px; background-color: black; color: white; ">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 30%; margin-top: 10px;">Remaining Questions</label><input type="text" value="1" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                            </div>
                                            
                                            <div style="width:100%; height: 50px; background-color: black; color: white; border-bottom:  1px solid white; margin-top: 0px;">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 66%; margin-top: 10px;">Score</label><input type="text" id="total19" value="" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                                
                                                
                                            </div>
                                        </div>
                                         </div>
                                        
                                        <!-- 20 -->
                                        
                                        
                                        <div id="main20" style="width:100%; height: 400px; background-color: black; display: none;">
                                        <div style="width:70%; height: 400px;  float: left;">
                                            <div style="width:100%; height: 100px; ">
                                                <div style="width:30%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;  font-family: Times New Roman;"><label style="margin:15% 0% 0% 20%;font-size: 20px;">Question No.20</label></div>
                                                <div style="width:70%; height: 100px; background-color: black; color: white; border-bottom:  1px solid white;float: left;"><label style="text-align: center; margin-top:35px;font-size: 20px;">To ride a motorcycle without gears, a person must be at least what age?</label></div>
                                                
                                                <div style="width:100%; height: 300px;  float: left;">

                                                    <button onclick="twenty_one()" style="width:80%; height: 40px;color: white;  background-color: rgb(240,104,34);  margin: 6% 0% 0% 10%; text-align: center; ">14</button>
                                                    <button onclick="twenty_two()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">16</button>
                                                    <button onclick="twenty_three()" style="width:80%; height: 40px; color: white;  background-color: rgb(240,104,34);  margin: 4% 0% 0% 10%; text-align: center; ">17</button>
                                                    <input type="hidden" id="twenty_one"  value="0">
                                                    <input type="hidden" id="twenty_two"  value="1">
                                                    <input type="hidden" id="twenty_three"  value="0">
                                                    <input type="hidden" id="rq20"  value="11">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div style="width:30%; height: 400px; float: left;">
                                            <div style="width:100%; height: 50px; background-color: black; color: white; ">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 30%; margin-top: 10px;">Remaining Questions</label><input type="text" value="0" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                            </div>
                                            
                                            <div style="width:100%; height: 50px;background-color: black; color: white; border-bottom:  1px solid white; margin-top: 0px;">
                                                <label style="float:left; font-size: 20px; font-family: Times New Roman; margin-left: 66%; margin-top: 10px;">Score</label><input type="text" id="total20" value="" style="width:5%;float: left; margin-top: 8px; margin-left: 1%;">
                                                
                                                
                                            </div>
                                        </div>
                                         </div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                    </div>
                                    <label id="thank" style=" margin-top: 100px;display: none; font-family: Times New Roman; font-size:40px; text-align: center; color:lightgreen;"> <p class="blink1">Congratulations You Win Thank You!.....</p></label>
                                    <label id="sorry" style=" margin-top: 100px;display: none; font-family: Times New Roman; font-size:40px; text-align: center; color: rgb(240,104,34); "> <p class="blink1">Sorry Study Well    Thank You!....</p></label>
                                    <a href="check_test2.php"> <img src="themes/images/user/try.png" id="try" style="display: none;  margin: 8% 0% 0% 42%;"></a>
                                    
                                    
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