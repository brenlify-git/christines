<?php
session_start();
include '../config/connection.php'; 
$dishID = $_POST['menuID'];
$btn = $_POST['typeBTN'];

if($btn == 'success'){
    $sqlInsAdminAcc = "UPDATE menu_list SET dishStatus = 'hidden' WHERE menuID = '$dishID'";
    $result22=mysqli_query($conn, $sqlInsAdminAcc);
}

if($btn == 'danger'){
    $sqlInsAdminAcc = "UPDATE menu_list SET dishStatus = 'showed' WHERE menuID = '$dishID'";
    $result22=mysqli_query($conn, $sqlInsAdminAcc);
}


if($result22){
   
    header("Location:../content-control/menu.php");
}

?>