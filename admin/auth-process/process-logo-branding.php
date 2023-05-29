<?php
session_start();
include '../config/connection.php';

$businessName = $_POST['businessName'];
$profilePicture = $_FILES['imageLogo'];

function generateRandomString($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


$randomString = generateRandomString();

if (isset($_FILES['imageLogo'])) {
    $file = $_FILES['imageLogo'];
    
    if ($file['error'] === UPLOAD_ERR_OK) {
        $uploadDir = '../../assets/img/';
        $fileName = "Christines.png"; 
        
        $destination = $uploadDir . $fileName;
        
        if (move_uploaded_file($file['tmp_name'], $destination)) {
            $_SESSION['logoStatus'] =  'Image uploaded and copied successfully.';
        } else {
            $_SESSION['logoStatus'] = 'Failed to copy the uploaded image.';
        }
    } else {
        $_SESSION['logoStatus'] = 'Error uploading the image. Please try again.';
    }
}

$logo = "assets/img/Christines.png";

$sqlInsAdminAcc = "INSERT INTO branding (brandName, imageLocation) VALUES ('" . mysqli_real_escape_string($conn, $businessName) . "', '" . mysqli_real_escape_string($conn, $logo) . "')";
$result22=mysqli_query($conn, $sqlInsAdminAcc);

if($result22){
    header("Location:../content-control/logo-branding.php");
}

?>