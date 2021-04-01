<?php


$username=$_POST['username'];
$password=$_POST['password'];


$connection = mysqli_connect('localhost','root','','wtmini');
if(!$connection)
{
	die("database connection failed".mysqli_error($connection));
}
$select_db=mysqli_select_db($connection,'wtmini');
if(!$select_db)
{
	die("database selection failed".mysqli_error($connection));
}

$query="SELECT  name,pass FROM emp WHERE name='$username' and pass='$password'";
	$result=mysqli_query($connection,$query) or die(mysqli_error($connection));
	$count=mysqli_num_rows($result);
	if($count==1)
	{
		echo "Login successful";
		exit(header("refresh:0;url=emplog.php"));
	}
	else
		echo "Invalid login";
?>
