<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name= $_POST['name'];
    $email=$_POST['emails'];
    $password=$_POST['password'];
    $confirm=$_POST['confirm'];


    $servername = "localhost";
    $username = "root";
    $password_db = "";
    $dbname = "moviedb";

    $conn = new mysqli($servername, $username, $password_db, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo "<p>Hello, Connection failed !</p>";
    }
if($password == $confirm){     

    $sql = "INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, '".$name."', '".$email."', '".$password."')";
    if (($conn->query($sql) === TRUE)) {
        $_SESSION['name'] = $name;
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
else {
    echo "<h1 style='color: blue; width: 50%;'>Registration failed....</h1>";
    echo "<h3 style='color: green; width: 80%;'>please try again  !</h3>";

}
  
}
?>
