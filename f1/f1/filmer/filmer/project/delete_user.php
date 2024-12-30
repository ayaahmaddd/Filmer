<?php
// check if the email parameter is set
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $connection = mysqli_connect("localhost", "root", "", "moviedb");

    if (!$connection) {
        http_response_code(500);
        echo 'Database connection error: ' . mysqli_connect_error();
        exit;
    }

    $sql = "DELETE FROM users WHERE email = '$email'";
    $result = mysqli_query($connection, $sql);
    if (!$result) {
        http_response_code(500);
        echo 'Database query error: ' . mysqli_error($connection);
        exit;
    }
    
    mysqli_close($connection);

    // send success response
    echo 'User deleted successfully';
} else {
    // send error response
    http_response_code(400);
    echo 'Invalid request';
}
?>