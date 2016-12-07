<?php
session_start();
include('connection.php');
$username=$_SESSION['username'];

$new_pass=$_POST['new_pass'];

$update="update registration set pass='$new_pass' where username='$username'";
$updatequery=  mysql_query($update) or die (mysql_error());                         
header('Location:changepassword.php');

?>