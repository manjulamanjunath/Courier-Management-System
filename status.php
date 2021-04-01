<html><body>
  <head>
  <style>

  body{
    background-image: url("c3.jpg");
    background-size: cover;
    }

  </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</style></head><?php
require("db.php");
if(isset($_REQUEST['log']))
{
	$n = $_REQUEST['cid'];
	$e = $_REQUEST['status'];
	$q = "insert into status values('$n','$e')";
	$r = mysqli_query($con,$q);
	if($r)
	{
		echo "<script>alert('status  updated Successfully!')</script>";
	}
}
?>
<form style="margin:30px">
<h1>Update Status</h1>
<br><br>

 <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">CID</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="cid" id="inputEmail3" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
    <div class="col-sm-10">
      <select id="Status" name="status" class="col-sm-10 col-form-label">
    <option value="pending">Pending</option>
    <option value="under process">Under Process</option>
    <option value="Delivered">Delivered</option>
      </select>

    </div>
</div>
<div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="log">Update</button>
    </div>
  </div>
</form>
</body></html>
