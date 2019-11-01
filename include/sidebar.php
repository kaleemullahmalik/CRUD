<?php



// Initialize the session

require('connection.php');

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
<link href="../css/simple-sidebar.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container" style="">

</div>
<div class="row" >
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
    
    

    




  </div>



  
  
 


  
  
   

</form>

     </div>
     
     </div>
    </div>
   
    <!-- /#sidebar-wrapper -->

<script src="../js/jquery-3.1.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/npm.js"></script>
</body>
</html>