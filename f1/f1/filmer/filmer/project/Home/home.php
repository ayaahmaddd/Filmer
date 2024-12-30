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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="home.css">
    <!---Box Icons--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <!-- For menu-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/ css/all.min.css"
          integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR +ZOhtI1ON19GIKS57V1MyNsYpYcUrUeQc9vNfzswfV281aLL3196P9sdNyeRssA==" crossorigin="anonymous" />


</head>
<body >
<div class="hero">        <!-- start class hero-->
<?php
include "../nav.php";
?>
</div><!-- End class hero-->

<!--Home section-->
<section class="home swiper" id="home">
    <div class="swiper-wrapper">
        <!-- Box 1-->
        <div class="swiper-slide conatiner">
            <img src="img/home11.jpg" alt=""> <div class="home-text">
            <a href="#" class="btn">Watch Now </a>
            </a>
        </div>

        </div>
        <!-- Box 2-->
        <div class="swiper-slide conatiner"> <img src="img/home22.jpg" alt="">
            <div class="home-text">
                <a href="#" class="btn">Watch Now</a>
                </a>
            </div>
        </div>
        <!-- Box 3 -->
        <div class="swiper-slide conatiner">
            <img src="img/home33.jpg" alt="">
            <div class="home-text">
                <span>Are Miyazaki films considered anime?</span>
                <h1>Miyazaki : <br>from Home</h1>
                <a href="#" class="btn">Watch Now</a>
                </a>
            </div>
        </div>
        <!-- Box 4-->
        <div class="swiper-slide conatiner">
            <img src="img/home44.jpg" alt="">
            <div class="home-text">
                <span>Fantasy world</span>
                <h1>Dune 2021</h1>
                <a href="#" class="btn">Watch Now</a>
                </a>
            </div>
        </div>

    </div>



    <div class="swiper-pagination"></div>
</section>

<!-- Movies -->

<section class="movies" id="movies">
    <h2 class="heading">Movie Trending</h2>
    <!-- Movies Conatiner -->
<?php
include "../backend/conniction.php";
$conn = new mysqli('localhost' ,'root' , '' , 'moviedb');

$query = "SELECT movie.id , movie.imageurl , movie.year , movie.name , category.name FROM movie JOIN category ON category.id = movie.cat_id WHERE type = 0 and trending = 1";
$REQ = mysqli_query($conn,$query);
$result = mysqli_fetch_all($REQ);
?>
    <div class="movies-container">
        <!-- Box 1 -->
        <?php
        foreach($result as $val)
        {?>
 
           <div class="box">
            <div class="box-img">
                <a  style="color:white;     text-decoration: none; " href="../Description/description.php?id=<?php echo $val[0] ?>">
                    <img src="../imagesuploaded/<?php echo $val[1] ?>" alt="play">
                </a>
            </div>
            <h3><?php echo $val[3] ?></h3>
            <span><?php echo $val[2] ?></span>
            <h3>Category : <?php echo $val[4] ?></h3>


        </div>
        <?php
        }
        ?>


        
    </div>
    </div>
</section>

<!--Series-->
<section class="series" id="series">
    <h2 class="heading">Series Trending</h2>
    <!-- Movies Conatiner -->
<?php
include "../backend/conniction.php";
$query = "SELECT movie.id , movie.imageurl , movie.year , movie.name , category.name FROM movie JOIN category ON category.id = movie.cat_id WHERE type = 1 and trending = 1";
$REQ = mysqli_query($conn,$query);
$result = mysqli_fetch_all($REQ);
?>
    <div class="movies-container">
    <?php
        foreach($result as $val)
        {?>
 
           <div class="box">
            <div class="box-img">
                <a  style="color:white;     text-decoration: none; " href="../Description/description.php?id=<?php echo $val[0] ?>">
                    <img src="../imagesuploaded/<?php echo $val[1] ?>" alt="play">
                </a>
            </div>
            <h3><?php echo $val[3] ?></h3>
            <span><?php echo $val[2] ?></span>
            <h3>Category : <?php echo $val[4] ?></h3>


        </div>
        <?php
        }
        ?>







    </div>
    </div>
</section>


<!--Anime-->
<section class="anime" id="anime">
    <h2 class="heading">Anime Trending</h2>
    <!-- Movies Conatiner -->
<?php
include "../backend/conniction.php";
$query = "SELECT movie.id , movie.imageurl , movie.year , movie.name , category.name FROM movie JOIN category ON category.id = movie.cat_id WHERE type = 2 and trending = 1";
$REQ = mysqli_query($conn,$query);
$result = mysqli_fetch_all($REQ);
?>
    <div class="movies-container">
    <?php
        foreach($result as $val)
        {?>
 
           <div class="box">
            <div class="box-img">
                <a  style="color:white;     text-decoration: none; " href="../Description/description.php?id=<?php echo $val[0] ?>">
                    <img src="../imagesuploaded/<?php echo $val[1] ?>" alt="play">
                </a>
            </div>
            <h3><?php echo $val[3] ?></h3>
            <span><?php echo $val[2] ?></span>
            <h3>Category : <?php echo $val[4] ?></h3>


        </div>
        <?php
        }
        ?>


    </div>
    </div>
</section>


<!-- Footer -->
<section class="footer">
    <div class="social">
        <a href="https://www.facebook.com/aya.khmous"><i class='bx bxl-facebook'></i></a>
        <a href="https://twitter.com/"><i class='bx bxl-twitter' ></i></a>
        <a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a>
        <a href="https://www.tiktok.com/"><i class='bx bxl-tiktok' ></i></a>
    </div>
</section>






<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!--link to Custom Js-->
<script src="main.js"></script>


</body>
</html>