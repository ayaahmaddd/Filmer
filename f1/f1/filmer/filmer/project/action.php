<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Action Movie</title>
    <link rel="stylesheet" href="action.css">
    <!---Box Icons--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- For menu-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/ css/all.min.css"
          integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR +ZOhtI1ON19GIKS57V1MyNsYpYcUrUeQc9vNfzswfV281aLL3196P9sdNyeRssA==" crossorigin="anonymous" />


</head>
<body>
<div class="hero">        <!-- start class hero-->
<?php include "../nav.php" ?>

</div><!-- End class hero-->
<br>
<!-- Movies -->
<section class="movies" id="movies">
    <?php
     $type = 0 ;
     $typepara = null;
    if(isset($_GET['type']))
    {
        $type = $_GET['type'];
        if($_GET['type']== 0)
        { 
            $typepara= "Movies";
        }
        elseif($_GET['type']== 1)
        { 
            $typepara="Series";
        }
        else
        { 
            $typepara="Anime";
        }
    }
    else
    {
        $typepara="Movies"; 
    } ?>
<!-- category test id -->
<?php
     $cat = 1 ;
     $catpara = null;
    if(isset($_GET['cat']))
    {
        $cat = $_GET['cat'];
        if($_GET['cat'] == 1)
        { 
            $catpara= "Action";
        }
        elseif($_GET['cat'] == 2)
        { 
            $catpara="Horror";
        }
        elseif($_GET['cat'] == 3)
        { 
            $catpara="Comedy";
        }
        else
        { 
            $catpara="Drama";
        }
    }
    else
    {
        $catpara="Action"; 
    } ?>

   <br>
   <h2 class="heading"> <?php echo  $catpara ?>  <?php echo $typepara ?> </h2>
    <div class="movies-container">
<?php 
include "../backend/conniction.php";
$conn = new mysqli('localhost' ,'root' , '' , 'moviedb');

$query = "SELECT movie.id ,movie.name , movie.year , movie.time , movie.imageurl FROM movie JOIN category ON category.id = movie.cat_id WHERE movie.TYPE =".$type." AND category.id =".$cat." ;";
$REQ = mysqli_query($conn , $query);
 $result = mysqli_fetch_all($REQ);
 foreach($result as $val)
 {
?>
  <!-- Movies Conatiner -->
  <a style="color:white;     text-decoration: none; " href="../Description/description.php?id=<?php echo $val[0] ?>" class="box">
            <div class="box-img">
                <img src="../imagesuploaded/<?php echo $val[4] ?>" alt="">
            </div>
            <h3><?php echo $val[1] ?> </h3>
            <span> <?php echo $val[3] ?> | <?php echo $val[2] ?> </span>
    </a>
<?php
}
if(sizeof($result) == 0)
{?>

<h5> No content for this search </h5>
<?php
}
?>
    
    </div>
    </div>
</section>




<!-- Footer -->
<section class="footer">
    <div class="social">
        <a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a>
        <a href="https://twitter.com/"><i class='bx bxl-twitter' ></i></a>
        <a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a>
        <a href="https://www.tiktok.com/"><i class='bx bxl-tiktok' ></i></a>
    </div>
</section>




</body>
</html>