<?php
// Initialize the session
session_start();


if(isset($_SESSION['email']) && $_SESSION['password']){
 

}
else{
   header("location: ../index.php");
}
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


<?php
if(isset($_POST['submit'])){
  if(isset($_POST['id'])){
    foreach($_POST['id'] as $id){
      $query="DELETE FROM testtable WHERE id='$id'";
      mysqli_query($conn,$query);
      header('Location: '.$_SERVER['REQUEST_URI']);
    }
  }
}

?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>navbar</title>
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">


<script type="text/javascript">
function checkAll(){
  var parent=document.getElementById("parent");
  
  var input=document.getElementsByTagName("input");
  var count=0
  if(parent.checked === true){
    for (var i=0;i<input.length;i++){
      if(input[i].type=="checkbox" && input[i].checked==false){
        input[i].checked=true;
        count++;
      }
    }

  }

  
  else if(parent.checked === false){
    for (var i=0;i<input.length;i++){
      if(input[i].type=="checkbox" && input[i].checked==true){
        input[i].checked=false;
        count++;
      }
    }

  }
  

  


}

</script>
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
<div class="bg-light border-right" >
   
<table class="table">

  <thead>
  <tr >
  <td style="margin:10px">
  <a href="addblog1.php"><button type="button" class="btn btn-primary">Add</button> </a> 
  </td>
  <td>

  <form  method="POST">
  

     <button type="submit" name="submit" value="Delete" onclick="return confirm('are u sure u want to delete')" class="btn btn-danger">Delete</button></td>

  </tr>
    <tr>
    <th><input type="checkbox" onclick="checkAll()"  id="parent" scope="col" >CHECKBOXES</th>
  
      <th scope="col">ID</th>
      <th scope="col">Blog Name</th>
      <th scope="col">Actions</th>
      
    </tr>
  </thead>
  <tbody>

 
  <?php 
if ($resultchk > 0) {
while($row = mysqli_fetch_assoc($result)) { ?>
  <tr>
  <td>
  
                  <input type="checkbox"  id="child_chkbx" value="<?php echo $row["id"];?>" name="id[]" ></td>
      <th scope="row"> <?php echo $row["id"];?></th>
        <td>
       <?php echo $row["name"];?>
     
         </td>

      <td>
     
      <a href="editblog.php?edit=<?php echo $row["id"]; ?>"> <button type="button" class="btn btn-primary">Edit</button> </a>
      <a href="adddeleteblog.php?delete=<?php echo $row["id"]; ?>"> <button type="button" class="btn btn-danger">Delete</button> </a>
     
    </tr>
    <?php

} }
?>


   
  </tbody>
</table>

 </div>

</div>


</div>

</form>

 
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