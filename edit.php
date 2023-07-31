<?php
include "connect.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
	$name=$_POST['name'];
	$fac=$_POST['faculty'];
	$ph=$_POST['phone'];
	$cid=$_POST['id'];

	$sql="UPDATE `cruddata` SET `NAME` = '$name', `FACULTY` = '$fac', `PHONE NUMBER` = '$ph' WHERE `cruddata`.`ROLLNO` = $cid";
	$result=mysqli_query($con,$sql);
	header("location:/aryan/curd_project/index.php");
	mysqli_close($con);
}

?>