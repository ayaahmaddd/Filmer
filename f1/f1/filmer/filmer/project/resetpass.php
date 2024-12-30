<?php
session_start();
if(isset($_POST["email"]) and isset($_POST['send'])) {
    $to = "ibtisamkharrosheh@gmail.com";
    $email = $_POST["email"];
    $_SESSION['email']=$email;
    $receiver = $email;
    $digits = 5;
    $rand= rand(pow(10, $digits-1), pow(10, $digits)-1);
    $x=$rand;
    $_SESSION['random']=$rand;
    $body = "The verification code = ".$rand;
    $subject = "Reset Password";
    $headers = "From:" .$to. "\r\n" .
        "CC: somebodyelse@example.com";
    if (mail($receiver, $subject, $body, $headers)) {
        echo "<script> alert('Message sent successfully')</script>";
       header("Location:verity.php");
    }
    else {
        echo "<script> alert('Message Not Send')</script>";
    }
}
?>

