

<?php
// Check if the email parameter is set
if (isset($_GET['email'])) {
    // Get the email from the URL parameter
    $email = $_GET['email'];

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "moviedb";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Fetch user data based on the email
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Assuming you have columns named 'name', 'phone', and 'lastname' in your table
        $email = $row['email'];
        $name = $row['name'];
        $phone = $row['phone'];
    } 
    else {
        // If no matching record found, handle it accordingly
        echo "No user found with the given email.";
        exit;
    }

    mysqli_close($conn);
} else {
    // If the email parameter is not set, redirect back to the main page or display an error message
    header("Location: view-users.php"); // Replace index.php with the actual file name or URL
    exit;
}
?>



<!DOCTYPE html>
<html style="height: 100% ; width: 100%">
<head>
    <title>Edit User</title>
    <style>
        body {
            font-family: "Times New Roman";
            background: linear-gradient(45deg,#1f5662,#06996d,#505f75);
        }

        h1 {
            font-family: "Times New Roman";
            text-align: center;
            margin-top: 10px;
        }

        form {
            background: azure;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            margin: 0 auto;
            max-width: 400px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="password"]{
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #06996d;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 15px;
        }

        input[type="submit"]:hover {
            background: -webkit-linear-gradient(left , #505f75 , #06996d);
        }
    </style>
</head>
<body>
<h1>Edit User</h1>
<form id="edit-form" method="post" action="update_user.php" style="height: 500px;">
    <input type="hidden" name="email" id="email" value="<?php echo $email; ?>" required>
    <br><br>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="<?php echo $name; ?>" required>
    <br><br>
    <label for="phone">Phone:</label>
    <input type="tel" name="phone" id="phone" value="<?php echo $phone; ?>" required>
    <br><br>
    <input type="submit" value="Save Changes">
</form>
</body>
</html>