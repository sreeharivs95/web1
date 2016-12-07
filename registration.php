<?php
session_start();
?>
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
		
                
               
<script type="text/javascript" src="themes/js/licence.js">
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
							<li><a href="Contact.html">Contact Us</a></li>
							
						</ul>
					</nav>
				</div>
			</section>		
			<section class="header_text sub">
                            <img class="pageBanner" src="themes/images/carousel/register.png" alt="New products" >
				<h4><span>Login or Regsiter</span></h4>
			</section>			
			<section class="main-content">				
				<div class="row">
					<div class="span5">					
						<h4 class="title"><span class="text"><strong>Login</strong> Form</span></h4>
                                                <form action="registration.php" name="regi" method="post">
							<input type="hidden" name="next" value="/">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Username</label>
									<div class="controls">
                                                                            <input type="text" placeholder="Enter your username" id="username"  name="loginuser"class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">password</label>
									<div class="controls">
                                                                            <input type="password" placeholder="Enter your password" id="password" name="loginpassword" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
                                                                    <input tabindex="3" class="btn btn-inverse large" name="sub" type="submit" value="Sign into your account">
									<hr>
									
								</div>
							</fieldset>
						</form>
                                                
                                                <?php
include 'connection.php';


//login button name is sub
if(isset($_POST["sub"])) 
{
$username=$_POST['loginuser'];

$Pass=$_POST['loginpassword'];
//echo $Password;

//login
$select="select * from registration where username='$username'";
$selectquery=mysql_query($select) or die (mysql_error());


while($row=mysql_fetch_array($selectquery))
        {
    $user=$row['username'];
            $password2=$row['pass'];
            //$Name=$row['first_name'];
            
        }
$num=mysql_num_rows($selectquery);

//echo $num;
if($num!=0)
{
if($Pass==$password2)
        {
                
             $_SESSION['username']=$username;
            // $_SESSION['name']=$Name;
           header('Location:u_home.php');
            echo "sucess";
        }
        else
        {
            echo'invalid username or password';
          header('refresh:3,url=registration.php');
        }
}
}

?>
                                                
					</div>
					<div class="span7">					
						<h4 class="title"><span class="text"><strong>Register</strong> Form</span></h4>
                                                
                                  <?php
                                  include 'connection.php';

if(isset($_POST['submit']))
{
$username=$_POST['username'];
//echo $username;

    $pass=$_POST['password'];
   // echo $pass;
    $licence=$_POST['licence'];
  //  echo $licence;
    $licenceno=$_POST['licenceno'];
  //  echo $licenceno;
    $issuedate=$_POST['issuedate'];
  //  echo $issuedate;
    $email=$_POST['email'];
   // echo $email;
       $phone=$_POST['phoneno'];
     //  echo $phone;
       
    $target=rand().".jpg";
	$target1="img/".$target;
	move_uploaded_file($_FILES['upload']['tmp_name'],$target1);
        
       // echo $target;

        $r=mysql_query("select * from registration");

while($r1=mysql_fetch_array($r))
{
$a=$r1['username'];
}
if($a==$username)
{
    ?>
                                                <b style=" color: darkorange; font-size: 20px;">Username Already Exist</b>
                                                <?php
                                                 header('refresh:3,url=registration.php');
}
else
{
     $insert="insert into registration(username ,pass, licence ,licenceno, issuedate ,email, phone ,image)values('$username','$pass','$licence','$licenceno','$issuedate','$email','$phone','$target')";
        $insert_query=mysql_query($insert) or die(mysql_error());
        header("Location:registration.php");
}
                

}             
       
        
        

?>
                                                <form  method="post"  name="mobvalidate" enctype="multipart/form-data" class="form-stacked">
							<fieldset>
								<div class="control-group">
									<label class="control-label" >Username</label>
									<div class="controls">
                                                                            <input type="text" required name="username" placeholder="Enter your username" class="input-xlarge">
									</div>
                                                                        	
								</div>
                                                            <div class="control-group">
									<label class="control-label" >Password:</label>
									<div class="controls">
                                                                            <input type="password" required name="password" placeholder="Enter your password" class="input-xlarge">
									</div>
								</div>
                                                            <div   class="control-group">
									<label class="control-label" >Do You Have Licence?</label>
									<div class="controls">
                                                                            <select name="licence" required>
            <option>Select Option</option>
            <option  id="myavu" onclick="kichu()" value="no">No</option>
            <option class="yes" id="yes1" onclick="achu()" value="yes">Yes</option>
            
        </select>
<!--										<input type="password" placeholder="Enter your email" class="input-xlarge">-->
									</div>
                                                                        <div id="foggy"  style=" margin: 0px 0px 0px 20px; display: none;">
                                                                        <div>
                                                                            <label  style=" color: red;"  class=" control-label">Licence No</label>
                                                                            <div class="controls">
                                                                            <input type="text"  name="licenceno" placeholder="Enter your Licence No"  class="input-xlarge">
                                                                            </div>
                                                                        </div>
                                                                        <div id="apr">
                                                                            <label   style=" color: red;"   class=" control-label">Issue Date</label>
                                                                            <div class="controls">
                                                                            <input type="text" name="issuedate" placeholder="Enter Issue Date" class="input-xlarge">
                                                                            </div>
                                                                        </div>
								</div>
                                                            </div>
								<div class="control-group">
									<label class="control-label" >Email address:</label>
									<div class="controls">
                                                                            <input type="email" required="" name="email" placeholder="Enter your email" class="input-xlarge">
									</div>
								</div>
                                                            <div class="control-group" >
                                                                <label class="control-label"  >Phone No:</label>
									<div class="controls">
                                                                            <input type="text"  required name="phoneno" placeholder="Enter your Mobile No" pattern="[789][0-9]{9}" class="input-xlarge">
									</div>
								</div>
                                                            <div class="control-group" >
                                                                <label class="control-label"  >Upload Profile Pic</label>
									<div class="controls">
                                                                            <input type="file"  required name="upload" placeholder="Upload Profile Pic" class="input-xlarge">
									</div>
								</div>
                                                            
														                            
								<div class="control-group">
									
								</div>
								<hr>
								<div class="actions"><input tabindex="9"    class="btn btn-inverse large"  name="submit" type="submit" value="Create your account"></div>
							</fieldset>
                                                    
                                                    
						</form>	
                                                


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
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
		</script>
                
                
    </body>
</html>

