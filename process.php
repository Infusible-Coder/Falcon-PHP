<?php 

include('db-connection.php');

$name = '';
$subtitle = '';

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM items WHERE id=$id");
   
    header("location:store-view.php");
}


// if(isset($_GET['edit'])){
//     $id = $_GET['id'];
//     $result = $mysqli->query("SELECT * category WHERE id=$id");

//     if(count($result)==1){
// $row = $result->fetch_array();
// $name = $row['name'];
// $subtitle = $row['subtitle'];
//     }
// }
// ?>