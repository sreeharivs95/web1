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
              <script src="themes/js/change_pass.js" type="text/javascript"></script>
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
		
                <style type="text/css">
    .box{
        padding: 20px;
        display: none;
        margin-top: 20px;
        border: 1px solid #000;
    }
   
   

</style>



<style type="text/css">
.error{
margin-top: 6px;
margin-bottom: 0;
color: #fff;
background-color: #D65C4F;
display: table;
padding: 5px 8px;
font-size: 11px;
font-weight: 600;
line-height: 14px;
  }
  .green{
margin-top: 6px;
margin-bottom: 0;
color: #fff;
background-color: green;
display: table;
padding: 5px 8px;
font-size: 11px;
font-weight: 600;
line-height: 14px;
  }
</style>
<script language='javascript' type='text/javascript'>
    function check(input) {
        if (input.value != document.getElementById('new_pass').value) {
            input.setCustomValidity('Password Dont Match.');
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }
</script>

<script language='javascript' type='text/javascript'>
    function chec(input) {
        if (input.value != document.getElementById('h_pass').value) {
            input.setCustomValidity('Password Dont Match.');
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }
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
                                                            
										
							<li><a href="#">Play Online Games</a>
								
							</li>	
                                                        			
                                                        <li><a href="changepassword.php">Change Password</a>
								
							</li>

							
						</ul>
					</nav>
				</div>
                        </section>			

                    
                    
                  <section class="main-content " style=" background-color: white;">
                            <div class="row" style="  width: 100%; height: auto; margin: 0% 0% 0% 0%;">
                            <div style=" width: 100%; height: auto;">
                            
                                <div style=" width:30%; height:150px;  float: left; background-color: whitesmoke; margin: 10px 0px 0px 0px;">
                                    <label style=" font-size: 20px; margin:65px 0px 0px 60px;"><b>welcome</b> <b><?php echo $_SESSION['username'];?></b> </label>
                                   

                                </div> 
                                <div style=" width:68%; height:150px;  background-color: whitesmoke;  margin: 10px 0px 0px 15px; float: left;">
                                    
                                    <div style=" width: 90%; height: 100px;  margin: 3% 0% 0% 3%;"><b>
                                    <p style=" text-align: justify; font-size: 15px;">Road traffic safety refers to methods and measures for reducing the risk of a person using the road network for being killed or seriously injured. The users of a road include pedestrians, cyclists, motorists, their passengers, and passengers of on-road public transport, mainly buses and trams. </p>
                                        </b> </div>
                                </div>
                                <div style=" width:100%; height:auto; background-color: whitesmoke;  margin: 25px 0px 0px 0px; float: left;" >     
 
                                        <?php  
        
        
        include('connection.php');
        $user=$_SESSION['username'];
        $select1="select * from registration where username='$user'"; 
	$select_query1=mysql_query($select1) or die (mysql_error());
	while($row=mysql_fetch_array($select_query1))
        {
            $password=$row['pass'];
        }
        //echo $agent_name;
        ?>
                                    
                                    <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
                 <h3 style="font-family: BankGothic Md BT;text-align: center;"><b>Change Password </b></h3>
                 <div class="tab-content" >
                     <div class="tab-pane active" id="horizontal-form"  >
                         <form class="form-horizontal" action="password_process.php" method="post" enctype="multipart/form-data">
                                                        <input type="hidden"  id="h_pass" value="<?php echo $password; ?>">
								

                                                            
                                            
<table width="500" height="200" align="center" style="margin-top: 5%;">
    <tr>
        <td>
            
            <label><b>Old Password</b></label>
        </td>
        <td>
            <input type="password" oninput="chec(this)" id="old_pass" onkeyup="return oldpass()" placeholder="Enter Your Old Password" style="width: 80%; height: 40px;" required="required">
            <img src="themes/images/right.png" width="30" height="30" id="oldright" style="display: none;">
            <img src="themes/images/false.png" width="30" height="30" id="oldfalse" style="display: none;">
            
        </td>
    </tr>
    
    <tr>
        <td>
            
            <label><b>New Password</b></label>
        </td>
        <td>
            <input type="password" id="new_pass" name="new_pass" onkeyup="return pass()" placeholder="Enter New Password" style="width: 80%; height: 40px;" required="required">
            <img src="themes/images/right.png" width="30" height="30" id="passright" style="display: none;">
            <img src="themes/images/false.png" width="30" height="30" id="passfalse" style="display: none;">
            
        </td>
    </tr>
    
    <tr>
        <td>
             <label><b>Confirm Password</b></label>
            
        </td>
        <td>
            <input type="password" oninput="check(this)" id="con_pass" onkeyup="return conform()" placeholder="Enter Confirm Password"  style="width: 80%; height: 40px;" required="required">
            <img src="themes/images/right.png" width="30" height="30" id="conformright" style="display: none;">
            <img src="themes/images/false.png" width="30" height="30" id="conformfalse" style="display: none;">
            
        </td>
    </tr>
</table>
                                                            
							
                                                            

                                                        <div class="panel-footer" >
		<div class="row">
                    <div class="col-sm-8 col-sm-offset-2" style="text-align: center;">
                        <button class="btn-success btn" type="submit" name="submit">Submit</button>
                            <button class="btn-default btn">Cancel</button>

			</div>
		</div>
	 </div>
                                                                 
               
                                                       
    </form>
  </div>
  </div>
                 <div class="copy_layout login">

   </div>
  </div>
      </div>
      <!-- /#page-wrapper -->
      
   </div>
                                </div>
				</div>
                            </div>
                                
                      
                      </section>
                      
                </div>
    
						
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
