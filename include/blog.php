<?php
// Initialize the session
session_start();
require('connection.php');

// // // Check if the user is logged in, if not then redirect him to login page
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: index.php");
//     exit;
// }



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT id, name, description FROM testtable;";

$result = mysqli_query($conn ,$sql);
$resultchk=mysqli_num_rows($result);





 

?>
 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>navbar</title>
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container" >
<div class="row">
<?php include('nav.php'); ?>
</div>

<div class="row">


<div class="col-md-3 " style="margin-top:20px;" >
  <!-- Sidebar -->
  <div class="bg-light border-right" >
   
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">View</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Update</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">View</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Update</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">View</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Update</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Update</a>
       
      </div>
    </div>
    </div>

<div class="col-md-9" style="margin-top:20px;">


    
        <h1 style="text-align:center;">Welcome User</h1>
        <form>
  <div class="form-group" >
  <?php 
  if ($resultchk > 0) {
  while($row = mysqli_fetch_assoc($result)) { ?>
    
    <label for="id">ID</label>
    <input type="name" class="form-control" required  id="id" value="<?php echo $row["id"];?>" placeholder="ID">
  

    <label for="name">Name</label>
    <input type="name" class="form-control" required  id="name" value="<?php echo $row["name"];?>" placeholder="Name">
   
    <label for="name" >Message</label>
<textarea id="name" type="name" class="form-control" rows="3"><?php echo $row["description"];?></textarea>


  <?php
  
 } }
  ?>
  <a href="dashboard.php" <button type="submit"  class="btn btn-default" style="margin-top:10px;">Return to main page</button>
</a>
</div>


</div>



 
<div class="row">
<?php include('footer.php'); ?>
</div>


</div>
<script src="../js/jquery-3.1.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/npm.js"></script>
</body>
</html>