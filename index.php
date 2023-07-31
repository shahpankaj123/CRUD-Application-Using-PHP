<?php
include "nav.php";
include "connect.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> My Curd Website</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
        <script
        src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous">
        </script>
    <style type="text/css">

        .box1{
            margin-top: 20px;
            padding: 10px;  
        }
        .box1 h2{
            margin-bottom: 20px;  
        }
    </style>
</head>
<body>
<div class="container">
    <hr>
    <h3>Information</h3>
    <hr>
    <table class="table table-striped" id="myTable">
    <thead>
      <tr>
        <th>ROLL NUMBER</th>
        <th>NAME</th>
        <th>FACULTY</th>
        <th>PHONE NUMBER</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody>
        <?php
          $sql = "SELECT * FROM `cruddata`";
          $result = mysqli_query($con, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            echo"<tr>
              <td>". $row['ROLLNO'] ."</td>
              <td>". $row['NAME'] ."</td>
              <td>". $row['FACULTY'] ."</td>
              <td>". $row['PHONE NUMBER'] ."</td>
        <td><button type='button' class='btn btn-secondary'><a href='/aryan/curd_project/modify1.php?id=".$row['ROLLNO']."' style='text-decoration:none; color:white;'>EDIT</a></button>
                  <button type='button' class='btn btn-danger'><a href='/aryan/curd_project/delete1.php?id=".$row['ROLLNO']."' style='text-decoration:none; color:white'>DELETE</a></button>
              </td>
              </tr>";
          }

        ?>
    </tbody>  

    </table>
</div>


<!-- JavaScript Bundle with Popper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>


</body>
</html>