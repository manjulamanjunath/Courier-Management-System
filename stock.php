<html><body>
  <head>
  <style>

  </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</style></head>
<?php
require("db.php");
if(isset($_REQUEST['log']))
{
	$n = $_REQUEST['cid'];
	$e = $_REQUEST['uname'];
	$p = $_REQUEST['add'];
	$a = $_REQUEST['phone'];
	$t = $_REQUEST['toadd'];
	$q = "insert into stock values('$n','$e','$p','$a','$t')";
	$r = mysqli_query($con,$q);
	if($r)
	{
		echo "<script>alert('stock Added Successfully!')</script>";
	}
}
?>
<form style="margin:30px">
<h1>Add Stock</h1>
<br><br>
 <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">CID</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="cid" id="inputEmail3" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">UName</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="uname" id="inputEmail3" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="add" id="inputPassword3" placeholder="">
    </div>
  </div>
    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="phone" id="inputPassword3" placeholder="">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">To Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="toadd" id="inputPassword3" placeholder="">
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
