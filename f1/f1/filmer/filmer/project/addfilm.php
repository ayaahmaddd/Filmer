<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE = edge">
    <meta name="viewport" content="width = device-width,initial-scale = 1.0">
    <title>Form </title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <style>


        .file-input {
            height: 60px;
            width: 150px;
            padding-top: 22px;
        }


    </style>


</head>
<body>
<div class="login" >
<div class="login__content">







    <form action="insert.php" class="login__create " id="login-up" method="POST" style="border-radius: 20px; overflow-y: auto;    overflow-x: hidden; width: 600px; height: 720px" >
        <h1 class="login__tittle" > <h2 >ADDING NEW FILM </h2></h1>
        <div class="login__box">
            <i class='bx bx-movie' ></i>
            <!-- class='bx bx-user login__icon'></>-->
            <input type="text" placeholder="Movie name" class="login__input" name="FileName" required>

        </div>


        <div class="login__box">
            <i class='bx bxs-folder-plus' ></i>
            <!-- i class='bx bx-at login__icon'></i> -->
            <select name="cat" id="cat">
                <option value="1">action</option>
                <option value="2">horror</option>
                <option value="3">comedy</option>
                <option value="4">drama</option>
            </select>
        </div>
        <div class="login__box">
            <i class='bx bxs-folder-plus' ></i>
            <!-- i class='bx bx-at login__icon'></i> -->
            <select name="type" id="type">
                <option value="0">movie</option>
                <option value="1">series</option>
                <option value="2">anime</option>

            </select>
        </div>
        <div class="login__box">
            <i class='bx bxs-folder-plus' ></i>
            <!-- i class='bx bx-at login__icon'></i> -->
            <select name="trending" id="cars">
                <option value="1">trending</option>
                <option value="0">not trending</option>
            </select>
        </div>
        <div class="login__box1" >

           
            <i class='bx bxs-comment-dots' ></i>
            <textarea rows="2" cols="40" placeholder="Describe about film here..." class="login__input" name="description" required></textarea>
        </div>
        <div class="login__box">
            <i class='bx bxs-clock'></i>
            <input type="time" placeholder="Time" class="login__input" name="time" required>
        </div>
        <div class="login__box">
            <i class='bx bxs-calendar'></i>
            <input type="date" placeholder="Date" class="login__input" name="year" min="1900" max="2099" required>
        </div>
        <div class="login__box">
            <i class='bx bxs-star'></i>
            <input type="text" placeholder="Rating" class="login__input" name="rating" required>
        </div>
       <p align="left">Choose photo</p>



        <div class="file-input" style=" height: 60px;
    margin-right: 550px;
    width: 150px;
    padding-top: 22px;">
            <label for="file">Upload Image</label>
        <input id="file" name="file"  type="file" required>
        </div>


        <p align="left">Choose video</p>
        <div class="file-input" style=" height: 60px;
    margin-right: 550px;
    width: 150px;
    padding-top: 22px;">
            <label >Upload video</label>
            <input id="file1" name="file1" type="file">
        </div>


        <input type="submit" name="addFilm" style="width: 500px;"  class="login_button1" value="UPLOAD">



        <div class="login__social" >

            <a href="login__social-icon" >
                <i class='bx bxl-facebook-circle' ></i>
            </a>

            <a href="login__social-icon" >
                <i class='bx bxl-twitter' ></i>
            </a>

            <a href="login__social-icon" >
                <i class='bx bxl-google' ></i>
            </a>


        </div>
        <div class="bullets">
            <span class = "active" data-value = "1">
            </span>
            <span data-value="2" ></span>
        </div>
    </form>















</div>


</div>
<script src="app.js"></script>

</body>



</html>