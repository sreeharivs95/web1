<?php
session_start();
include 'connection.php';


if(isset($_REQUEST["upload"]))
{
$photo=rand().".jpg";
	$photo1="image/".$photo;
	move_uploaded_file($_FILES['image1']['tmp_name'],$photo1);
        
        $update="update profilepic set image='$photo' ";
        $update_query=  mysql_query($update)or die(mysql_error());
        header('Location:u_home.php');
}
?>