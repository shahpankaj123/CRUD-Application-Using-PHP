<?php
include "nav.php";
include "connect.php";
$name="";
$faculty="";
$phonenumber="";

 if($_SERVER['REQUEST_METHOD']=='POST')
 {
 $rl=$_POST['id'];
 $sql="SELECT * FROM `cruddata` WHERE ROLLNO='$rl'";
 $result=mysqli_query($con,$sql);
 $num=mysqli_num_rows($result);
 if($num==1)
 {
 	$row=mysqli_fetch_assoc($result);
 	$name=$row['NAME'];
 	$faculty=$row['FACULTY'];
 	$phonenumber=$row['PHONE NUMBER'];
 }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Modify Data</title>
</head>
<body>
  <div class="container"><hr>
  	<h2>ENTER ROLLNO OF STUDENT</h2><hr>
  	<form action="/aryan/curd_project/modify.php" method='POST'>
  	<div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">ENTER ROLLNO OF STUDENT</label>
    <input type="number" class="form-control mb-3" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" required>
    <button type="submit" class="btn btn-primary mb-3">Show Data</button>
    </div>
  	</form>
  </div>	
  <div class="container box1"><hr>
  <h2>MODIFY DATA OF STUDENT</h2><hr>
  <form action="/aryan/curd_project/edit.php" method='POST'>
  <div class="mb-3">
  	<input type="number" name="id" value="<?php echo $rl ?>" hidden>
    <label for="exampleInputEmail1" class="form-label">NAME OF STUDENT</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="<?php echo $name?>" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">FACULTY</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="faculty" value="<?php echo $faculty ?>" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">PHONE NUMBER</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone" value="<?php echo $phonenumber ?>" required>
  </div>
  
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>