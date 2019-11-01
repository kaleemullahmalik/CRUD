<?php
// Initialize the session
//session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
$id=0;
$name="";
$description="";



if(isset($_POST['add'])){





$name=$_POST['name'];
$description=$_POST['description'];


$mysqli  ->query("INSERT INTO testtable (name, description) VALUES('$name','$description')"); 

header("location:dashboard.php");

}

if(isset($_GET['delete'])){

 $id=$_GET['delete'];
 $mysqli->query("DELETE FROM testtable WHERE id=$id");

 header("location:dashboard.php");
}



if(isset($_GET['edit'])){

  $id=$_GET['edit'];
  $result=$mysqli->query("SELECT id, name, description FROM testtable WHERE id=$id");

  // if(count($result)==1){
    $row=$result->fetch_array();
    $name=$row['name'];
    $description=$row['description'];
  // }
  
 }
 



 if(isset($_POST['update'])){


  $id=$_POST['id'];
  
  $name=$_POST['fname'];
  $description=$_POST['description'];

 $mysqli->query("UPDATE testtable SET name='$name', description='$description' WHERE id=$id") or die($mysqli->error);

  header("location:dashboard.php");
 }
 

 



?>
 