<?php
$servername = "localhost";
$username = "root";
$password_db = "";
$dbname = "moviedb";

$conn = mysqli_connect($servername, $username, $password_db, $dbname);

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$sql = "INSERT INTO users (name, email, phone, password) VALUES ('$name', '$email', '$phone','$password')";
if ((mysqli_query($conn, $sql))) {
    header('Location: view_users.php');
} else {
    echo "Error: " . mysqli_error($conn);
    exit();
}
mysqli_close($conn);
?>