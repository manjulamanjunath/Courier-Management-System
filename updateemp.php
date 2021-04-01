<?php
require("db.php");
$c = $_REQUEST['id'];
$n = $_REQUEST['name'];
$ad = $_REQUEST['pass'];
$p = $_REQUEST['phone'];
$ta = $_REQUEST['email'];

$q = "Update emp set name='$n',pass='$ad',phone='$p',email='$ta' where id='$c'";
$r = mysqli_query($con,$q);
if($r)
{
	echo "<script>alert('Details Successfully!')</script>";
	header("location:viewemp.php");
}


?>
