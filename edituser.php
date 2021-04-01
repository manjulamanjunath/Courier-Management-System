<html>
<head>
<style>
body{
  background-image: url("c16.jpg");
  background-size: 100% 100%;

}

</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

  <?php
  require("db.php");
  $n = $_REQUEST['na'];
  $q = "select * from stock where uname='$n'";
  $r = mysqli_query($con,$q);
  if($d=mysqli_fetch_assoc($r))
  {
  	$c = $d['cid'];
  	$na = $d['uname'];
  	$ad = $d['addr'];
  	$p = $d['phone'];
  	//$ta = $d['toadd'];

  }
  ?>
  <form style="margin:30px" action="updateuser.php">
  <h1>Update User Details</h1>
  <br><br>
   <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">CID</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="c" id="inputEmail3" placeholder=""
  	  value="<?php echo $c ?>" readonly>
      </div>
    </div>

    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">UName</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="na" id="inputPassword3" placeholder=""
  	  value="<?php echo $na ?>">
      </div>
    </div>
      <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="ad" id="inputPassword3" placeholder=""
  	  value="<?php echo $ad ?>">
      </div>
    </div>
  	<div class="form-group row">
  	<label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
  	<div class="col-sm-10">
  		<input type="number" class="form-control" name="pa" id="inputPassword3" placeholder=""
  	value="<?php echo $p ?>">
  	</div>
  </div>
     <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary" name="log">Update</button>
      </div>
    </div>
  </form>

  </body>
  </head>
  </html>
