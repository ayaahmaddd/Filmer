<?php 
if(isset($_GET['name']))
{
    $name = $_GET['name'];
    $imageurl = $_GET['image'];
    $category = $_GET['category'];
    $decription = $_GET['description'];
    $movieurl = $_GET['movie'];
    $rating = 0;
    include "conniction.php";
   $query = "INSERT INTO `movie` (`id`, `name`, `imageurl`, `movieurl`, `rating`, `cat_id`, `disc`)
    VALUES (NULL, '$name', '$imageurl', '$movieurl', '$rating', '1', '$decription');";
    $req = mysqli_query($conn , $query);
}

?>