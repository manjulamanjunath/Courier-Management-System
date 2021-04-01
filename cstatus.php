<html>
<head>
<style>
body{
  background-image: url("c.png");
  background-attachment: fixed;
  background-size: 100% 100%;
  opacity: 0.8;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body><br>
<center><h2>Status Details</h2></center>
  <?php
  require("db.php");

  ?>

  <table class="table table-dark">
    <thead>
      <tr>

        <th scope="col">CID</th>
        <th scope="col">Status</th>
        <th scope="col">Operations</th>
      </tr>
    </thead>
    <tbody>
      <?php
  		$q = "select * from status";
  		$r = mysqli_query($con,$q);
  		while($d = mysqli_fetch_assoc($r))
  		{
  			$n = $d['cid'];
  			echo "<tr>";
  			echo "<td>".$d['cid']."</td>";
  		  echo "<td>".$d['status']."</td>";
  		  echo "<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href='deletestatus.php?na=$n'>
        <i class='fa fa-trash'></i></a>";
  		}
  	?>
  </tr>
      </thead>
      <tbody>
    </tbody>
  </table>
  </body>
  </head>
  </html>
