<?php
require("db.php");

$n = $_REQUEST['na'];
echo $n;
$q = "delete from user where name='$n'";

$r = mysqli_query($con,$q);

if($r)
{
	//echo "<script>alert('Deleted Success!')</script>";
	header("location:userview1.php");
}
else
{
	echo mysqli_error($con);
}




?>
