
<?php
session_start();
if(isset($_POST["verify"]) and isset($_POST['var'])) {
    $code = $_POST["var"];
    echo $_SESSION['email'];
    echo $_SESSION['random'];
    if ($code == $_SESSION['random']) {
        echo "<script> alert(' correct code')</script>";
        header("Location:newpass.php");
    }
    else{
        echo "<script> alert('Not correct code')</script>";
    }

}
?>

<!DOCTYPE html>
<html style="width: 100%; height: 100%">
<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        body {
            background: linear-gradient(45deg, #1f5662, #06996d, #505f75);
            font-family: Arial, sans-serif;
        }

        .container {
            margin: 50px auto;
            width: 800px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            display: flex;
            flex-direction: row;
        }

        .form {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        h1 {
            text-align: center;
            color: #06996d;
            margin-bottom: 30px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"], input[type="email"] {
        //  padding: 10px;
        //  margin-bottom: 20px;
        //  border-radius: 5px;
        //  border: none;
        // border-bottom: 1px solid #000000;
        //  padding:2px 2px;
        //  outline: none;
        //  background: none; transition: 0.4s;
        ///
        position: absolute;
            width: 100%;
        // height: 100%;
            background: none;
            border: none;
            outline: none;
            border-bottom: 3px solid #06996d;
            padding: 0;
            font-size: 20px;
            font-weight: 600;
            color: #151111;
            transition: 0.4s;




        }


        .back-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            position: absolute;
        //  bottom: 10px;
        //  left: 50%;
        //  transform: translateX(-50%);
        }

        .back-btn i {
            margin-right: 10px;
        }



        input[type="submit"] {
            background: linear-gradient(45deg, #1f5662, #06996d, #505f75);
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out;

        }

        input[type="submit"]:hover {
            background-color: #06996d;
        }

        .form-image {
            flex: 1;
            margin-left: 20px;
            max-width: 50%;
        }

        .form-image img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            .container {
                width: 90%;
                flex-direction: column;
                margin: 30px auto;
            }

            .form-image {
                margin-left: 0;
                margin-top: 20px;
                max-width: 600px;
            }
        }
    </style>
</head>
<body>
<div class="container" style="margin-top: 250px; background: linear-gradient(45deg, #888888, #888888, #505f75);width: 900px; height: 470px">
    <div class="form" style="margin-top: 50px">
        <h1 style="margin-top: 50px; font-family: 'Times New Roman'">Verity Code</h1>
        <form style="padding-left: 70px; padding-top: 15px" method="post" action="verity.php">
            <label for="email" style="font-size: 20px; font-family: 'Times New Roman'">Email</label>
            <input type="email" id="email" name="email1" style="padding-top: 15px; margin-bottom: 18px" value="<?php echo $_SESSION['email']?>" required>

            <label for="verity" style="font-size: 20px; font-family: 'Times New Roman'">verity code</label>
            <input type="text" id="verify" name="var" style="padding-top: 15px"  required>

            <input type="submit" style="margin-left: 75px; margin-top: 40px; height: 40px" value="Verity Code" name="verify">


        </form>
    </div>
    <div class="form-image">
        <img src="key2.png" id="myImage" style="width: 490px; height: 500px;" alt="Image">
    </div>

</div>
<script>
    function goBack() {
        window.history.back();
    }
</script>
<script type="text/javascript">
    var img = document.getElementById("myImage");
    img.style.position = "relative";
    img.style.top = "0px";
    var moveUp = true;

    function moveImage() {
        if (moveUp) {
            img.style.top = parseInt(img.style.top) - 1 + "px";
            if (parseInt(img.style.top) <= -20) {
                moveUp = false;
            }
        } else {
            img.style.top = parseInt(img.style.top) + 1 + "px";
            if (parseInt(img.style.top) >= 23) {
                moveUp = true;
            }
        }
    }

    setInterval(moveImage, 40);
</script>
</body>
</html>