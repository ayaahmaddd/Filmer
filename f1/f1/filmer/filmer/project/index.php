
<!DOCTYPE html>
<html>
<head>
    <title > How to Design login & register from transition </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/bootstrap.min.css">

    <script src="https://example.com/fontawesome/v5.15.4/js/all.js" data-auto-a11y="true" ></script>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>



    <link rel="stylesheet" type="text/css" href="sstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap"   rel='stylesheet'>
</head>
<?php 
session_start();
if(isset($_SESSION['error']))
{
if($_SESSION['error'] == 1)
{ ?>
<body onload='Err()'>
<?php }}
elseif(isset($_SESSION['name']))
{
    $name = $_SESSION['name'];
?>
<body onload='MSG("<?php echo $name ; ?>")'>
<?php } else{ ?>
<body>
<?php }  ?>

<div>

    <?php

    if(isset($_POST['create'])){
        echo 'user accept';
        $email = $_POST['email'];
        $password = $_POST['password'];
        echo $email . " " . $password  ;
    }



    ?>
</div>


<!-- -->


<div class="cont" >

    <form class="form sign-in" action="login_process.php" method="POST" >
        <h2>Sign In</h2>
        <label>
            <span>Email Address</span>
            <input type="email" name="email" id="email" >

        </label>
        <label>
            <span> Password</span>
            <input type="password" name="password" id="password" >
        </label>
        <button class="submit" name="create" type="submit">Sign In</button>
        <p class="forgot-pass"><a href="http://localhost/f1/filmer/filmer/project/pass.php"> Forgot Password ?</a></p>

        <div class="social-media">
            <ul>
                <li><a href="https://ar-ar.facebook.com/"><img src="facebook.png"></a></li>
                <li><a href="https://twitter.com/?lang=en"><img src="twitter.png"></a></li>
                <li><a href="https://www.linkedin.com/"><img src="linkedin.png"></a></li>
                <li><a href="https://www.instagram.com/"><img src="instagram.png"></a></li>
            </ul>
        </div>
    </form>




    <div class="sub-cont">
        <div class="img" >
            
           
            <div class="img-btn">
                <span class="m-up">Sign Up</span>
                <span class="m-in">Sign In</span>
            </div>
        </div>

        <form class="form sign-in"  method="POST" action="login.php">
            <h2>Sign Up</h2>
            <label>
                <span>Name</span>
                <input type="text" name="name" >
            </label>
            <label>
                <span>Email</span>
                <input type="email" name="emails" >
            </label>
            <label>
                <span>Password</span>
                <input type="password" name="password" id="passwords" >
            </label>
            <label>
                <span>Confirm password</span>
                <input type="password" name="confirm" id="confirms" >
            </label>
            <div class="message">
                <?php
                // Retrieve the message from the session variable and display it
                if(isset($_SESSION['message'])) {
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                }
                ?>
            </div>
            <button type="submit" class="submit" name="sing" value="submit11" >Sign Up Now</button>
        </form>


<!-- iiiiii -->

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>
