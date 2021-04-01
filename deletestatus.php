<?php
require("db.php");

$n = $_REQUEST['na'];
echo $n;
$q = "delete from status where cid='$n'";

$r = mysqli_query($con,$q);

if($r)
{
	//echo "<script>alert('Deleted Success!')</script>";
	header("location:cstatus.php");
}
else
{
	echo mysqli_error($con);
}




?>
