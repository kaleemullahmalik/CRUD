
 <?php
 session_start();
 require('include/connection.php');
 $fmsg ="";
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['email']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
$email = $_POST['email'];
$password = $_POST['password'];
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM `user` WHERE email='$email' and password='$password'";

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));


$count = mysqli_num_rows($result);

//3.1.2 If the posted values are equal to the database values, then session will be created for the user.


if ($count == 1){
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;


}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
}
}
//3.1.4 if the user is logged in Greets the user with message

if (isset($_SESSION['email']) && ($_SESSION['password']) ){
   header("location: include/dashboard.php");
$email = $_SESSION['email'];
$password = $_SESSION['password'];



echo "Hy " . $email . "
";
echo "This is the Members Area"
;

echo "<a href='logout.php'>Logout</a>";
 

}else{
//3.2 When the user visits the page first time, simple login form will be displayed.


}
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gallery</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body>


<div class="container">
<div class="row" >
<div class="col-md-8 col-md-offset-2" style="padding:180px">
<form name="myForm" action="" onsubmit="return validateForm()" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
    <?php echo $fmsg ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"  name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    <?php echo $fmsg ?>
  </div>
  
  <button type="submit"  value="Submit" class="btn btn-primary">Submit</button>
</form>

</div>

</div>
</div>



 



    </div>   

<script src="js/jquery-3.1.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/npm.js"></script>

<script>
function validateForm() {
  var x = document.forms["myForm"]["email"].value;
  var y = document.forms["myForm"]["password"].value;
  if (x == "" || y=="") {
    alert("fields must be filled out");
    return false;
  }
}
</script>

</body>
</html>