<?php
include "connect.php";
 $ro=$_GET['id'];
 $sql="DELETE FROM `cruddata` WHERE `cruddata`.`ROLLNO` = $ro";
 $result=mysqli_query($con,$sql);
 header("location:/aryan/curd_project/index.php");
?>