<?php
session_start();
if (!isset($_SESSION['ID'])) 
{
    header('Location: ../index.php');
}
else
{
    $id = $_SESSION['ID'];
}
if(isset($_GET['id']))
{
    $conn = new mysqli('localhost' ,'root' , '' , 'moviedb');
    $query = "INSERT INTO watch (users_id, movie_id) VALUES ('".$id."', '".$_GET['id']."');";
    $REQ = mysqli_query($conn,$query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title> Filme Vedio </title>
  <link rel="stylesheet" href="vedio.css">
  <!---Box Icons--->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- For menu-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/ css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR +ZOhtI1ON19GIKS57V1MyNsYpYcUrUeQc9vNfzswfV281aLL3196P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../Action Movie/action.css">

</head>
<body>

<div class="hero">        <!-- start class hero-->
<?php include "../nav.php" ?>

</div><!-- End class hero-->
<br>
<!-- Filme -->
<br>
<br>
<br>
<br>
<?php
if(isset($_GET['id']))
{
    include "../backend/conniction.php";
    $query ="SELECT name , movieurl FROM movie WHERE id = ".$_GET['id'];
    $REQ = mysqli_query($conn , $query);
    $result = mysqli_fetch_assoc($REQ);
} ?>
<h1 class="heading"> <?php echo $result['name'] ?> </h1>
<br>
<br>
<!-- video box start-->
<!-- video box start  -->
<div class="video_bx">
  <video src="../moviesuploaded/<?php echo $result['movieurl'] ?>"  controls id="video"></video>
  <h4 class="title_video"><?php echo $result['name'] ?></h4>
  <span class="watching"><i class="fas fa-eye"></i>Watching</span>
  <div class="video_list">
    <img src="Thor1.jpg" alt="" class="video_1">
    <img src="Thor2.jpg" alt="" class="video_1">
    <img src="Thor3.jpg" alt="" class="video_1">
  </div>
</div>



<!-- Footer -->
<section class="footer">
  <div class="social">
    <a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a>
    <a href="https://twitter.com/"><i class='bx bxl-twitter' ></i></a>
    <a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a>
    <a href="https://www.tiktok.com/"><i class='bx bxl-tiktok' ></i></a>
  </div>
</section>

<script src="app.js"></script>
</body>
</html>