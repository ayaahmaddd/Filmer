<?php
session_start();
$servername = "localhost";
$username = "root";
$password_db = "";
$dbname = "moviedb";

if (isset($_POST['update'])) {
    // Retrieve session variables
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $bio = $_POST['bio'];
    $description = $_POST['des'];
    
    // Database connection details
   
    // Create connection
    $conn = new mysqli($servername, $username, $password_db, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if($_FILES["fileToUpload"]["name"] != NULL)
    {    // Handle file upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".<br>";
            $uploadOk = 1;
        } else {
            echo "File is not an image.<br>";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.<br>";
        $uploadOk = 0;
    }

    // Check file size (limit to 5MB for example)
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        echo "Sorry, your file is too large.<br>";
        $uploadOk = 0;
    }

    // Allow certain file formats
    $allowed_types = ['jpg', 'png', 'jpeg', 'gif'];
    if (!in_array($imageFileType, $allowed_types)) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.<br>";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.<br>";
        } else {
            echo "Sorry, there was an error uploading your file.<br>";
        }
    }
    if ($_SESSION['type'] == 0) {
        $sql = "UPDATE `users` SET `photo`='$target_file' WHERE email='$email'";
    } else {
        $sql = "UPDATE `adminapp` SET `photo`='$target_file' WHERE email='$email'";
    }
    
    if ($conn->query($sql) === TRUE) {
        header("Location: account.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }

    }
    // Update the database with the new details
    if ($_SESSION['type'] == 0) {
        $sql = "UPDATE `users` SET `name`='$name', `phone`='$phone', `bio`='$bio', `company`='$company', `designation`='$description' WHERE email='$email'";
    } else {
        $sql = "UPDATE `adminapp` SET `name`='$name', `phone`='$phone', `bio`='$bio', `company`='$company', `designation`='$description' WHERE email='$email'";
    }

    if ($conn->query($sql) === TRUE) {
        header("Location: account.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Close the connection
    $conn->close();
}

if(isset($_POST['update1'])){    
    $email = $_SESSION['email'];
    $old = $_POST['old'];
    $new = $_POST['new'];
    $conf = $_POST['confirm'];
    $conn = new mysqli($servername, $username, $password_db, $dbname);
    if($_SESSION['type'] == 0)
    {
        $sql1 = $conn->query("SELECT password FROM users WHERE email = '$email'");
    }
    else
    {
        $sql1 = $conn->query("SELECT password FROM adminapp WHERE email = '$email'");

    }
    $row = mysqli_fetch_array($sql1);
        echo $old;
        print_r($row['password']);

          if ($old === $row['password'])
           {
            if($new == $conf)
            {
                if($_SESSION['type'] == 0)
                {
                  $sqlnew = "UPDATE `users` SET `password`='$new' WHERE email='$email'";
                }
                else
                {
                  $sqlnew = "UPDATE `adminapp` SET `password`='$new' WHERE email='$email'";  
                }
                    if (($conn->query($sqlnew) === TRUE) ) 
                    {
                        header("Location: account.php");
                        echo "well done ";
                        echo "good job";
                    }
                    else
                    {
                        echo "not connect";
                    }
            }
            }
              else
              {
                  echo "Incorrect password ";
              }

           
    mysqli_close($conn);
        
}


?>