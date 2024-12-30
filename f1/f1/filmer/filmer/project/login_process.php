<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moviedb";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$usernamee = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT id FROM users WHERE email = '$usernamee' AND password = '$password'";
$sql1 = "SELECT id FROM adminapp WHERE email = '$usernamee' AND password = '$password'";
$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn,$sql1);

if ((mysqli_num_rows($result) > 0)) {

    $row = mysqli_fetch_assoc($result);

    $_SESSION['email'] = $usernamee;
    $_SESSION['password'] = $password;
    $_SESSION['ID'] = $row['id'];
    $_SESSION['type'] = 0 ;
    unset( $_SESSION['error']);
    unset( $_SESSION['name']);
    header('Location: Home/home.php');
   
}
elseif(((mysqli_num_rows($result1) > 0)) ){
    $row = mysqli_fetch_assoc($result1);
    $_SESSION['email'] = $usernamee;
    $_SESSION['password'] = $password;
    $_SESSION['ID'] = $row['id'];
    $_SESSION['type'] = 1 ;
    unset( $_SESSION['error']);
    unset( $_SESSION['name']);

    header('Location: Home/home.php');
}
else{
    $_SESSION['error'] = 1;
    unset( $_SESSION['name']);
    header('Location: index.php');
   
}

mysqli_close($conn);
?>
