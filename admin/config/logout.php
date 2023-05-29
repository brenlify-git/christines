<?php

session_start();
session_unset();
header("location:../logins/login.php"); 
session_start();
$_SESSION['messageLogin'] = 'Succesfully Logged Out!';  
exit();

?>