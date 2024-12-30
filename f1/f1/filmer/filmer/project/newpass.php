
<?php
session_start();
if(isset($_POST['update'])and isset($_POST['new-password']) and isset($_POST['confirm-password'])){
    $p=$_POST['new-password'];
    //$p=($p);
    $c=$_POST['confirm-password'];
    //$c=sha1($c);
    $email=$_SESSION['email'];
    if($p==$c){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "moviedb";
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // include 'connect.php';
        $sql = "UPDATE `singpage_up` SET `password`='$p' ,`confirmpassword`='$c' WHERE email='$email'";
        $sql1 = "UPDATE `login` SET `password`='$p' WHERE email='$email'";
        echo "<script> alert('Doneee') </script>";
        if(($conn->query($sql)===TRUE) && ($conn->query($sql1)===TRUE)){
            echo "<script>alert('Password updated successfully') </script>";

            header("location:index.php");
        }

        else {
            echo 'noo';
        }
    }
    else{
        echo "<script>alert('Miss match Password') </script>";
    }
}

?>



<!DOCTYPE html>
<html style="width: 100%; height: 100%">
<head >

<link type="text/css" rel="stylesheet" href="newpass.css">
<style>
    body{
        background: linear-gradient(45deg, #1f5662, #06996d, #505f75);
    }
</style>

</head>
<body>

<div class="form-container" style="margin-top: 200px; width: 850px; height: 470px; border-radius: 30px;  background: linear-gradient(45deg, #888888, #888888, #505f75); ">

    <form action="" method="POST" style="width: 270px; margin-left: 50px">
        <h2 style="margin-top: 0px; margin-bottom: 70px; color: #06996d; ">UPDATE Password</h2>
        <div class="input-group" style="margin-top: 50px">
            <label for="new-password" style="font-size: 23px; color: #06996d;">New Password</label>
            <input type="password" id="new-password" name="new-password" required>
        </div>
        <div class="input-group">
            <label for="confirm-password" style="font-size: 23px; color: #06996d;">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm-password" required>
        </div>
        <button type="submit" name="update" style="margin-left: 60px;margin-top: 7px; background: linear-gradient(45deg, #1f5662, #06996d, #505f75); ">Save Changes</button>
    </form>
    <div class="image-container">
        <img src="key4.png" id="myImage" alt="Password Change" />
    </div>
</div>
<script type="text/javascript">
    var img = document.getElementById("myImage");
    img.style.position = "relative";
    img.style.top = "0px";
    var moveUp = true;

    function moveImage() {
        if (moveUp) {
            img.style.top = parseInt(img.style.top) - 2 + "px";
            if (parseInt(img.style.top) <= -20) {
                moveUp = false;
            }
        } else {
            img.style.top = parseInt(img.style.top) + 1 + "px";
            if (parseInt(img.style.top) >= 50) {
                moveUp = true;
            }
        }
    }

    setInterval(moveImage, 40);
</script>

</body>
</html>