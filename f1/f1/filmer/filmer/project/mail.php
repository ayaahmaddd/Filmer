<?php
$subject = "email test via php using localhost";
$body ="hi, there ... this is a test email sender from localhost";
$to = "ayakhmous2003@gmail.com";

if(isset($_POST['message']) and isset($_POST['name']) and isset($_POST['email']) and isset($_POST['send'])){
    $name = $_POST['name'];
    $emailUser = $_POST['email'];
    $message = $_POST['message'];
    $headers = "From:" .$emailUser. "\r\n" .
        "CC: somebodyelse@example.com";

    $Subject = "MESSAGE FROM:" . $name;
    if($name == '' ){
        echo "field empty";
    }
    elseif ($message == ''){
        echo "message null";
    }
    elseif ($emailUser == ''){
        echo "email null";
    }
    else{
        if(mail($to, $Subject, $message, $headers)){
                header("location:contactt.php");
             }
        else{
            print_r(" not send email ") ;
        }
    }
}
?>















