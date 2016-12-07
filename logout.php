
<?PHP
session_start();
unset($_SESSION["valid"]);
session_destroy();
header("location:index.php");
?>
