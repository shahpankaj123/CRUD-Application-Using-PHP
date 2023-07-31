<?php
include "nav.php";
include "connect.php";
if($_SERVER['REQUEST_METHOD']=='POST')
{
 $rl=$_POST['id'];
 $sql="DELETE FROM `cruddata` WHERE `cruddata`.`ROLLNO` = $rl";
 $result=mysqli_query($con,$sql);
 header("location:/aryan/curd_project/index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Delete Data</title>
</head>
<body>
	<div class="container"><hr>
  	<h2>ENTER ROLLNO OF STUDENT</h2><hr>
  	<form action="/aryan/curd_project/delete.php" method='POST'>
  	<div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">ENTER ROLLNO OF STUDENT</label>
    <input type="number" class="form-control mb-3" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" required>
    <button type="submit" class="btn btn-primary mb-3">Delete Data</button>
    </div>
  	</form>
  </div>	

</body>
</html>