<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "moviedb";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Update the user data in the database
    $query = "UPDATE users  SET name='$name', phone='$phone' WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // User data updated successfully

        echo "<h1 style='margin-top: 20px'>User updated successfully!</h1>";
        echo "<img src='yes.gif' style='width: 390px; height: 500px; background-color: transparent; border: none' alt='Success'>";

    } else {
        // Error occurred while updating user data
        echo "Error updating user data: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    // If the form is not submitted, redirect back to the main page or display an error message
    header("Location: view-users.php"); // Replace index.php with the actual file name or URL
    exit;
}
?>