<?php
  include "nav.php";
  include "connect.php";
  if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $nm = $_POST['name'];
        $fac = $_POST['faculty']; 
        $ph = $_POST['phone']; 


        $sql="INSERT INTO `cruddata` (`ROLLNO`, `NAME`, `FACULTY`, `PHONE NUMBER`, `TIME`) VALUES (NULL, '$nm', '$fac', '$ph', current_timestamp())";
        $result= mysqli_query($con,$sql);
        header("location:/aryan/curd_project/index.php");
        mysqli_close($con);
        
    }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Data</title>
</head>
<body>
 <div class="container box1"><hr>
  <h2>ADD DATA OF STUDENT</h2><hr>
  <form action="/aryan/curd_project/add.php" method='POST'>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NAME OF STUDENT</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" required>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">FACULTY</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="faculty" required>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">PHONE NUMBER</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone" required>
    
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
