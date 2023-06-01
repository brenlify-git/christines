<?php 
session_start();
include '../config/connection.php';

$Username = $_POST['Username'];
$Pass = $_POST['Pass'];

$select = mysqli_query($conn, "SELECT * FROM users WHERE BINARY username = '$Username' AND BINARY password = '$Pass'");
$row = mysqli_fetch_array($select);

if(is_array($row)){
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['firstName'] = $row['firstName'];
    $_SESSION['lastName'] = $row['lastName'];
    $_SESSION['userID'] = $row['userID'];
    $_SESSION['messageLogin'] = 'Successfully Logged In!';
    header("Location:../dashboards/dashboard.php");
    exit();
}
else{
    $_SESSION['unameused'] = $Username;
    $_SESSION['messageLogin'] = "Invalid login credentials, try again!";
    header("Location:login.php");
    exit();
}
?>
