<html>
<head>
<style>
body{
  background-image: url("c15.jpg");
  background-size:100% 100%;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body bgcolor="wheat">
  <?php
  require("db.php");
  if(isset($_REQUEST['log']))
  {
  	$n =$_REQUEST['id'];
  	$e = $_REQUEST['name'];
  	$p = $_REQUEST['pass'];
  	$a = $_REQUEST['phone'];
    $t = $_REQUEST['email'];
  	$q = "insert into emp values('$n','$e','$p','$a','$t')";
  	$r = mysqli_query($con,$q);
  	if($r)
  	{
  		echo "<script>alert('Employee Added Successfully!')</script>";
      header("location:viewemp.php");
  	}
  }
  ?>

<form style="margin:30px">
<h1>Add Employee</h1>
<br><br>
<div class="form-group row">
  <label for="inputEmail3" class="col-sm-2 col-form-label">ID</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="id" id="inputEmail3" placeholder="">
  </div>
</div>
<div class="form-group row">
  <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="">
  </div>
</div>
<div class="form-group row">
  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
  <div class="col-sm-10">
    <input type="password" class="form-control" name="pass" id="inputPassword3" placeholder="">
  </div>
</div>
  <div class="form-group row">
  <label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
  <div class="col-sm-10">
    <input type="number" class="form-control" name="phone" id="inputPassword3" placeholder="">
  </div>
</div>
<div class="form-group row">
<label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
<div class="col-sm-10">
  <input type="email" class="form-control" name="email" id="inputPassword3" placeholder="">
</div>
</div>
 <div class="form-group row">
  <div class="col-sm-10">
    <button type="submit" class="btn btn-primary" name="log">Add</button>
  </div>
</div>
</form>

  </body>
  </head>
  </html>
