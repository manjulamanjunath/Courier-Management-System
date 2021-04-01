<?php
require("db.php");
$c = $_REQUEST['c'];
$n = $_REQUEST['na'];
$ad = $_REQUEST['ad'];
$p = $_REQUEST['pa'];
$ta = $_REQUEST['ta'];

$q = "Update stock set uname='$n',addr='$ad',phone='$p',toadd='$ta' where cid='$c'";
$r = mysqli_query($con,$q);
if($r)
{
	echo "<script>alert('Details Successfully!')</script>";
	header("location:stockview.php");
}


?>
