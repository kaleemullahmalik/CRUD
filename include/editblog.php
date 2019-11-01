<?php
// Initialize the session
session_start();


if(isset($_SESSION['email']) && $_SESSION['password']){
 
  

}
else{
   header("location: ../index.php");
}
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
      
  <div class="form-group" >
 

  <?php require_once 'adddeleteblog.php'; ?>
  <form action ="adddeleteblog.php" method="POST">

  <label for="name">ID</label>
    <input type="text" name="id" class="form-control"    value="<?php echo $id ?>" >
  
    <label for="name">Name</label>
    <input type="text" class="form-control" required  id="name" name="fname" value="<?php echo $name ?>" placeholder="Name">
   
    <label for="name" >Message</label>
<textarea id="name" type="textarea" class="form-control" name="description" rows="3"><?php echo $description ?></textarea>



  <button type="submit" name="update"  class="btn btn-default" style="margin-top:10px;"> Update </button>
  

</form>
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