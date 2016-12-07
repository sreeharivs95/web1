<?php
include 'connection.php';


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
    echo 'already exist';
}
else
{
     $insert="insert into registration(username ,pass, licence ,licenceno, issuedate ,email, phone ,image)values('$username','$pass','$licence','$licenceno','$issuedate','$email','$phone','$target')";
        $insert_query=mysql_query($insert) or die(mysql_error());
        header("Location:registration.php");
}
                
                
                
       
        
        

?>
