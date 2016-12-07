<?php

?>



<!DOCTYPE HTML>
<html>
<head>
<title>Wings Of Care | Login</title>
<link rel="icon" href="images/wingscare_icon.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/login_validation.js" type="text/javascript"></script>

<script>
function blinking_header()
{
if (!document.getElementById('blink').style.color)
{
document.getElementById('blink').style.color="yellow";
}
if (document.getElementById('blink').style.color=="yellow")
{
document.getElementById('blink').style.color="black";
}
else 
{
document.getElementById('blink').style.color="yellow";
}

timer=setTimeout("blinking_header()",100);
}

function stoptimer()
{
clearTimeout(timer);
}
</script>
</head>
<body  onload=""id="login" style="background-image: url('images/login.jpg');
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
   /* Set rules to fill background */
  min-height: 100%;
  min-width: 1024px;
	
  /* Set up proportionate scaling */
  width: 100%;
  height: auto;
	
  /* Set up positioning */
  position: fixed;
  top: 0;
  left: 0;
  
  ">
   
  <div class="login-logo">
<!--    <a href="index.html"><img src="images/logo.png" alt=""/></a>-->
      
      <h1 style="color:rgb(1, 200, 136);font-size: 50px;font-family: Algerian;">Wings Of Care</h1>
  </div>
    <h2 class="form-heading" style="color: white;font-family: Swis721 BdOul BT;">login</h2>
    <div style="width: 20%;height: 325px;background-color: red;float: left;">
        
    </div>
    <div style="width: 20%;height: 325px;background-color: red;float: right;">
        
    </div>
    <div class="app-cam">
	  <form>
               <input type="hidden" name="status" id="status" value="1"> 
              <input type="text" name="username" id="username" class="text" placeholder="Enter Your UerId" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter UserId';}">
              <input type="password" name="password" id="password" placeholder="Enter Your Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Password';}">
              <div class="submit"><input type="button" onclick="admin_validate();agent_validate();" value="Login"></div>
                <div id="loginn" name="loginn" align="center" style="color:red;">
            </div>

		<ul class="new">
                    <li class="new_left"><p><a href="forgot.php" style="color: white;">Forgot Password ?</a></p></li>
                    <li class="new_right"><p class="sign" style="color: white;">New here ?<a href="agent_reg.php" style="color: white;"> Sign Up</a></p></li>
			<div class="clearfix"></div>
		</ul>
	</form>
  </div>
    

    
    
    <div class="copy_layout login">
        <p style="color: white;">Copyright &copy; <?php echo date('Y'); ?> Modern. All Rights Reserved | Design by <a href="http://okeydoke.in/" target="_blank" style="color:#01c888;">Okeydoke Software Solution</a> </p>
   
    
    </div>
    
    
</body>
</html>
