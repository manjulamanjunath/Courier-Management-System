<html>
<head>
<style>

body{
  background-image: url("co3.jpg");
  background-size: cover;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<?php
require("db.php");

?><br>
<center><h2>Stock Details</h2></center><a href='emplog.php?na=$n'><i class='fa fa-arrow-left'></i></a>
<table class="table table-dark">
  <thead>
    <tr>

      <th scope="col">CID</th>
      <th scope="col">UName</th>
      <th scope="col">Address</th>
	  <th scope="col">Phone</th>
    <th scope="col">To Address</th>

    </tr>
    </tr>
  </thead>
  <tbody>
    <?php
		$q = "select * from stock";
		$r = mysqli_query($con,$q);
		while($d = mysqli_fetch_assoc($r))
		{
			$n = $d['uname'];
			echo "<tr>";
			echo "<td>".$d['cid']."</td>";
			echo "<td>".$d['uname']."</td>";
			echo "<td>".$d['addr']."</td>";
      echo "<td>".$d['phone']."</td>";
      echo "<td>".$d['toadd']."</td>";
      //echo "<td><a href='deletestock.php?na=$n'><i class='fa fa-trash'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    //  &nbsp;&nbsp; <a href='editstock.php?na=$n'><i class='fa fa-pencil'></i></a>";

  }
	?>
</tr>
    </thead>
    <tbody>
  </tbody>
</table>
</body
></html>
