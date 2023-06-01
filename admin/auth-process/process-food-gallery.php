<?php
include '../config/connection.php';

$imageID = $_POST['galleryID'];
$profilePicture = $_FILES['newImagePath'];

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

if (isset($_FILES['newImagePath'])) {
    $file = $_FILES['newImagePath'];
    
    if ($file['error'] === UPLOAD_ERR_OK) {
        $uploadDir = '../../assets/img/gallery/';
        $fileName = "gallery-" . $imageID . '.jpg'; 
        
        $destination = $uploadDir.$fileName;
        
        if (move_uploaded_file($file['tmp_name'], $destination)) {
            $_SESSION['logoStatus'] =  'Image uploaded and copied successfully.';
        } else {
            $_SESSION['logoStatus'] = 'Failed to copy the uploaded image.';
        }
    } else {
        $_SESSION['logoStatus'] = 'Error uploading the image. Please try again.';
    }
}   

$uploadDir = 'assets/img/gallery/'. $fileName;

$sqlInsAdminAcc = "UPDATE imagegallery SET imagePath='$uploadDir' WHERE galleryID = '$imageID'";
$result22=mysqli_query($conn, $sqlInsAdminAcc);


if($result22){
    $_SESSION['logoStatus'] = "Image succesfully updated!";
    header("Location:../content-control/food-gallery.php");
}

?>