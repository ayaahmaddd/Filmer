<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "conniction.php";
    $query = "SELECT * FROM category";
    $req = mysqli_query($conn , $query);
    $result = mysqli_fetch_all($req);
    echo $result[0][1];
    ?>
   <p></p> 
</body>
</html>