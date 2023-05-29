<?php
session_start();
include '../config/connection.php';

$dishName = $_POST['dishName'];
$shortDesc = $_POST['shortDesc'];
$dishCat = $_POST['dishCat'];
$price = $_POST['price'];


$sqlInsAdminAcc = "INSERT INTO menu_list (dishName, shortDesc, dishCat, price) VALUES ('" . mysqli_real_escape_string($conn, $dishName) . "', '" . mysqli_real_escape_string($conn, $shortDesc) . "', '$dishCat', '$price')";
$result22=mysqli_query($conn, $sqlInsAdminAcc);

if($result22){
    $_SESSION['logoStatus'] = "Dish added succesfully!";
    header("Location:../content-control/menu.php");
}

?>