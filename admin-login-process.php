<?php
session_start();

include("db-connection.php");


if(!empty($_POST["admin-email"]) AND !empty($_POST["admin-pass"])){

$admin_email = $_POST['admin-email'];
$admin_password = md5($_POST['admin-pass']);

$query = "SELECT * FROM `login` WHERE  email = '".$admin_email."' AND password = '".$admin_password."'";

$exe = mysqli_query($mysqli,$query);

$rowcount = mysqli_num_rows($exe);

if ($rowcount > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($exe)) {
    $_SESSION['email'] =  $row["email"];
  
}
}
if($rowcount > 0){
    
    $_SESSION['email'] = $admin_email;
    header ("Location: main-page.php");
}
else{
    echo "<script>
    alert('Email or Password is incorrect!');
    document.location='index.php'
    </script>";
}    
    
}
else{
    echo "<script>
    alert('Account not found');
    document.location='index.php'
    </script>";
}

?>