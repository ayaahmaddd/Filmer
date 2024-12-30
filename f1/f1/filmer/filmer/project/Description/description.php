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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="description.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Description Movie</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Action Movie/action.css">

</head>
<body>
<?php
if(isset($_GET['id']))
{
    include "../backend/conniction.php";
    $query ="SELECT movie.* , category.name AS catname FROM movie
    JOIN category ON category.id = movie.cat_id WHERE movie.id = ".$_GET['id'];
    $REQ = mysqli_query($conn , $query);
    $result = mysqli_fetch_assoc($REQ);
} ?>

<header style="background-image: url('../imagesuploaded/<?php echo $result['imageurl'] ?>');">
    <?php include "../nav.php" ?>

    <div class="content">
        <h6>Duration: <span id="header_dur"> <?php echo $result['time'] ?> </span></h6>
        <h3 id="header_gen"><i class="fas fa-star"></i><?php echo $result['rating'] ?>
            <span> <?php echo $result['catname'] ?>  </span>
            <span> <?php echo $result['year'] ?>  </span>

        </h3>
        <h1 id="header_title"><?php echo $result['name'] ?></h1>
        <p id="header_pra"><?php echo $result['disc'] ?></p>
        <div class="btns">
            <a href="#video">
                <button onclick='document.location="http://localhost/f1/filmer/filmer/project/Vedio/vedio.php?id=<?php echo $result['id'] ?>"'><i class="fas fa-play" id="play_btn"></i> Watch</button>
            </a>
            <a download href="<?php echo $result['movieurl'] ?>">
                <button > <i class="fas fa-plus"> </i> Download</button>
            </a>
            <a href="http://localhost/f1/filmer/filmer/project/Description/addfav.php?uid=<?php echo $id ?>&mid=<?php echo $result['id'] ?>">
                <button ><i class="fas fa-heart"> Favorite</i></button>
            </a>

        </div>
    </div>

    <!-- <div class="slider_btns">
        <h6 class="slider"></h6>
        <h6 class="slider"></h6>
        <h6 class="slider"></h6>
        <h6 class="slider"></h6>
    </div>-->
</header>

<!-- trending box start  -->
<div class="tranding_bx">
    <li><a href="#" class="active"><i class="fas fa-angle-double-up"></i> Top Cast Of Film <span></span></a></li>
</div>

<!-- category box start  -->
<div class="cato_bx" id="cato_bx">
    <button>Chris Hemsworth (Thor)</button>
    <button>Natalie Portman(Jane Foster)</button>
    <button>Christian Bale(Gorr)</button>
    <button>Tessa Thompson(King Valkyrie) </button>
    <button>Taika Waititi(Korg"voice")</button>
    <button>Russell Crowe(Zeus)</button>
    <button>Jaimie Alexander(Sif)</button>
    <button>Idris Elba(Heimdall)</button>
    <button>Chris Pratt(Peter Quill)</button>
    <button>Bradley Cooper(Rocket"voice")</button>
    <button>Vin Diesel(Groot"voice")</button>
    <button>Sean Gunn(Kraglin)</button>
    <!-- all button copyed  -->
    <div class="cato_left_right">
        <i class="fas fa-angle-down" id="left_scroll"></i>
    </div>
    <div class="cato_left_right">
        <i class="fas fa-angle-down" id="right_scroll"></i>
    </div>
</div>
<!-- movies box strat  -->
<div class="tranding_bx">
    <li><a href="#" class="active"><i class="fas fa-angle-double-up"></i> Suggestion<span></span></a></li>
</div>
<div class="movie_bx_1" id="mvoes_bx_1">
    <button id="left_scroll1"><i class="fas fa-angle-down"></i></i> </button>
    <button id="right_scroll1"><i class="fas fa-angle-down"></i></button>
    <!--1-->
    <div class="card">
        <a href="#">
            <img src="imgg/m1.jpg" alt="" >
            <div class="content">
                <h5>Black Panther: Wakanda Forever </h5>
                <h6>
                    <span>2022</span>
                    <div class="rate">
                        <i class="fas fa-heart"></i>
                        <i class="fas fa-eye"></i>
                        <i class="fas fa-star"></i>
                        <h6>8.3</h6>
                    </div>
                </h6>
            </div>
        </a>
    </div>
    <!--2-->
    <div class="card">
        <a href="#">
            <img src="imgg/m2.jpg" alt="" >
            <div class="content">
                <h5>Venom</h5>
                <h6>
                    <span>2018</span>
                    <div class="rate">
                        <i class="fas fa-heart"></i>
                        <i class="fas fa-eye"></i>
                        <i class="fas fa-star"></i>
                        <h6>6.6</h6>
                    </div>
                </h6>
            </div>
        </a>
    </div>
    <!--3-->
    <div class="card">
        <a href="#">
            <img src="imgg/m3.jpg" alt="" >
            <div class="content">
                <h5>Ant-Man</h5>
                <h6>
                    <span>2023</span>
                    <div class="rate">
                        <i class="fas fa-heart"></i>
                        <i class="fas fa-eye"></i>
                        <i class="fas fa-star"></i>
                        <h6>6.4</h6>
                    </div>
                </h6>
            </div>
        </a>
    </div>
    <!--4-->
    <div class="card">
        <a href="#">
            <img src="imgg/m4.jpg" alt="" >
            <div class="content">
                <h5>la la land </h5>
                <h6>
                    <span>2016</span>
                    <div class="rate">
                        <i class="fas fa-heart"></i>
                        <i class="fas fa-eye"></i>
                        <i class="fas fa-star"></i>
                        <h6>8.0</h6>
                    </div>
                </h6>
            </div>
        </a>
    </div>
    <!--5-->
    <div class="card">
        <a href="#">
            <img src="imgg/m5.jpg" alt="" >
            <div class="content">
                <h5>The Matrix Resurrections </h5>
                <h6>
                    <span>2021</span>
                    <div class="rate">
                        <i class="fas fa-heart"></i>
                        <i class="fas fa-eye"></i>
                        <i class="fas fa-star"></i>
                        <h6>5.1</h6>
                    </div>
                </h6>
            </div>
        </a>
    </div>
    <!--6-->
    <div class="card">
        <a href="#">
            <img src="imgg/m6.jpg" alt="" >
            <div class="content">
                <h5>The Shawshank Redemption</h5>
                <h6>
                    <span>1994</span>
                    <div class="rate">
                        <i class="fas fa-heart"></i>
                        <i class="fas fa-eye"></i>
                        <i class="fas fa-star"></i>
                        <h6>9.3</h6>
                    </div>
                </h6>
            </div>

        </a>
    </div>
    <!--7-->
    <div class="card">
        <a href="#">
            <img src="imgg/m7.jpg" alt="" >
            <div class="content">
                <h5>The Godfather </h5>
                <h6>
                    <span>1972</span>
                    <div class="rate">
                        <i class="fas fa-heart"></i>
                        <i class="fas fa-eye"></i>
                        <i class="fas fa-star"></i>
                        <h6>9.2</h6>
                    </div>
                </h6>
            </div>

        </a>
    </div>
    <!--8-->
    <div class="card">
        <a href="#">
            <img src="imgg/m8.jpg" alt="" >
            <div class="content">
                <h5>The Dark Knight </h5>
                <h6>
                    <span>2008</span>
                    <div class="rate">
                        <i class="fas fa-heart"></i>
                        <i class="fas fa-eye"></i>
                        <i class="fas fa-star"></i>
                        <h6>9.0</h6>
                    </div>
                </h6>
            </div>
        </a>
    </div>
    <!--9-->
    <div class="card">
        <a href="#">
            <img src="imgg/m9.jpg" alt="" >
            <div class="content">
                <h5>The Gentlemen </h5>
                <h6>
                    <span>2019</span>
                    <div class="rate">
                        <i class="fas fa-heart"></i>
                        <i class="fas fa-eye"></i>
                        <i class="fas fa-star"></i>
                        <h6>7.2</h6>
                    </div>
                </h6>
            </div>
        </a>
    </div>
    <!--10-->
    <div class="card">
        <a href="#">
            <img src="imgg/m10.jpg" alt="" >
            <div class="content">
                <h5>Gladiator</h5>
                <h6>
                    <span>2000</span>
                    <div class="rate">
                        <i class="fas fa-heart"></i>
                        <i class="fas fa-eye"></i>
                        <i class="fas fa-star"></i>
                        <h6>8.5</h6>
                    </div>
                </h6>
            </div>
        </a>
    </div>
    <!--11-->
    <div class="card">
        <a href="#">
            <img src="imgg/m11.jpg" alt="" >
            <div class="content">
                <h5>Avtar</h5>
                <h6>
                    <span>2022</span>
                    <div class="rate">
                        <i class="fas fa-heart"></i>
                        <i class="fas fa-eye"></i>
                        <i class="fas fa-star"></i>
                        <h6>7.7</h6>
                    </div>
                </h6>
            </div>
        </a>
    </div>
    <!--12-->
    <div class="card">
        <a href="#">
            <img src="imgg/m12.jpg" alt="" >
            <div class="content">
                <h5> Mission: Impossible </h5>
                <h6>
                    <span>2018</span>
                    <div class="rate">
                        <i class="fas fa-heart"></i>
                        <i class="fas fa-eye"></i>
                        <i class="fas fa-star"></i>
                        <h6>7.7</h6>
                    </div>
                </h6>
            </div>
        </a>
    </div>
</div>
<!-- movies box end  -->



<script src="apps.js"></script>
</body>
</html>