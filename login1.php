<style>
<?php include "login1.css";?></style>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>transparent login form</title>
	<link rel="stylesheet" type="text/css" href="login1.css">
	<style>
a{
margin-left:30px;
background-color:none;
padding:10px;
color:red;
font-size:22px;
text-decoration:none;
width: 10px;
}
</style>

</head><br><br>
<body background="bg2.jpg">
	<?php
	 echo "<a href='userform.html'><img src='ic.png' width='40px' height='35px'/></a>";
?>

<div class="loginBox">
<img src="avatar.jpg" class="userr">
<h2>Employee Login</h2>

<form action="login2.php" method="POST">
   <p>USERNAME</p>
  <input type="text" name="username"  placeholder="">
     <p>PASSWORD</p>
  <input type="password" name="password" placeholder="">
  <input type="submit" name="" value="submit">
</form>
</div>

<div class="loginBox1">
<img src="avatar.jpg" class="userr1">
<h2>Admin Login</h2>

<form action="login11.php" method="POST">
   <p>USERNAME</p>
  <input type="text" name="username"  placeholder="">
     <p>PASSWORD</p>
  <input type="password" name="password" placeholder="">
  <input type="submit" name="" value="submit">
</form>
</div>
</body>
