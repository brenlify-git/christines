<?php 
include 'admin/config/connection.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

function generateRandomString($length = 8) {
    $characters = '01234567890987654321234567890987654321';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$randomString = generateRandomString();

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'noreply.christines@gmail.com';
    $mail->Password = 'zfnreeewohxjobqp';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom($_POST['email']);
    $mail->addAddress('noreply.christines@gmail.com');
    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];
    $mail->Body = "<b>Greetings!</b> <br> <br>". $_POST["message"] . "<br> <br> ". "Here is your ticket number: <b> <h3>". $randomString . "</h3></b> Sincerely, <br> <b>" . $_POST["name"] . "</b> <br> Customer";

    $mail->send();
    $mail->clearAddresses();
    $mail->setFrom($_POST['email']);
    $mail->addAddress($_POST['email']);
    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];
    $mail->Body = "<b>Greetings!</b> ". $_POST["name"] . "<br> <br> We are pleased to confirm that we have received your response. Thank you for taking the time to provide us with your feedback/input/inquiry. We greatly value your input and will review it carefully to ensure that we address your concerns or inquiries appropriately.

   Please be assured that your response has been duly noted and will be reviewed by our team. We will take the necessary steps to respond to your message in a timely manner, keeping you updated on the progress.
   Should you have any further questions or concerns, please feel free to contact us. We appreciate your patience as we work to address your feedback or inquiry.
   Once again, thank you for reaching out to us. We look forward to providing you with a satisfactory response." . "<br> <br> ". "Here is your ticket number: <b> <H3>". $randomString . "</H3></b> Sincerely, <br> <b>" . "Christine's Filipino Cuisine" . "</b> <br> Restaurant's Admin";


    $mail->send();

    $username = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    $sqlInsAdminAcc = "INSERT INTO feedbacks (username, email, subject, message) VALUES ('$username', '$email', '$subject', '$message')";
    $result22=mysqli_query($conn, $sqlInsAdminAcc);

    echo 
    "
    <script>
    alert('Sent Succesfully!');
    document.location.href='index.php';
    </script>
    ";
}



?>