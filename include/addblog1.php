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
        <form method="post">
  <div class="form-group" >

<?php require_once 'adddeleteblog.php'; ?>
<form action="adddeleteblog.php" method="POST">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" required  id="name"  placeholder="Name">
   
    <label for="name" >Message</label>
<textarea id="name" type="text" name="description"  required class="form-control" rows="3"></textarea>


  
<button type="submit" name="add" class="btn btn-default"  style="margin-top:10px;">  Add 
 </button>

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