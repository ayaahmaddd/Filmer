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
    <title>Account Settings UI Design</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
<div class="section">
    <?php
    $servername = "localhost";
    $username = "root";
    $password_db = "";
    $dbname = "moviedb";

    $conn = new mysqli($servername, $username, $password_db, $dbname);
    $property_id=$_SESSION['email'];
    if($_SESSION['type'] == 0)
    {
        $sql="SELECT * from users where id = ".$id;
    }
    else
    {
        $sql="SELECT * from adminapp where id = ".$id;

    }

    $query=mysqli_query($conn,$sql);
    $rows=mysqli_fetch_assoc($query);
    ?>

    <form class="container" method="POST" action="update.php" enctype="multipart/form-data">
        <h1 class="mb-5">Account Settings</h1>
        <div class="bg-white shadow rounded-sm d-block d-sm-flex">
            <div class="profile-tab-nav border-right" style="background: #EDE4E3" >
                <div class="p-4">
                    <div class="img-circle text-center mb-3">


                        <?php
                        if($rows['photo']==NULL){
                            ?>
                            <img src="person.png" alt="Image" class="shadow" >
                        <?php }
                        else {
                        ?>
                        <img src="<?php echo $rows['photo']; ?>" alt="Image" class="shadow" >
                        <?php } ?>
                    </div>

                    <h4 class="text-center"><?php echo $rows['name']; ?> </h4>
                </div>
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
                        <i class="fa fa-home text-center mr-1"></i>
                        Account
                    </a>
                    <a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
                        <i class="fa fa-key text-center mr-1"></i>
                        Password
                    </a>
                    <a class="nav-link" id="security-tab" data-toggle="pill" href="#security" role="tab" aria-controls="security" aria-selected="false">
                        <i class="fa fa-user text-center mr-1"></i>
                        Security
                    </a>

                    <a class="nav-link" id="notification-tab" data-toggle="pill" href="#notification" role="tab" aria-controls="notification" aria-selected="false">
                        <i class="fa fa-bell text-center mr-1"></i>
                        Notification
                    </a>
                </div>
            </div>
            <form >
            <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                    <h3 class="mb-4">Account Settings</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="<?php echo "{$rows['name']}"?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" id="email" name="email" class="form-control" value="<?php echo "{$rows['email']}"?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone number</label>
                                <input type="text"  name="phone" class="form-control" value="<?php echo "{$rows['phone']}"?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company</label>
                                <input type="text" name="company" class="form-control" value="<?php echo "{$rows['company']}"?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="des" class="form-control" value="<?php echo "{$rows['designation']}"?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Bio</label>
                                <textarea class="form-control" name="bio" rows="4"><?php echo "{$rows['bio']}"?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="btn-primary1">
                        <p>Profile Picture:</p>
                      <p>         <input type="file" name="fileToUpload" id="fileToUpload"> </p>
                    </div>



                    <div>
                        <button name="update"  class="btn btn-primary" style="width: 98px">Update</button>
                        <button class="btn btn-light" ><a href="http://localhost/f1/filmer/filmer/project/Home/home.php">Cancel</a></button>
                        <button id="admin-btn" class="btn btn-light" style="display:none;"><a href="http://localhost/f1/filmer/filmer/project/Home/home.php">AdminPage</a></button>
                    </div>



                </div>
                <form method="POST">
                <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab" >
                    <h3 class="mb-4">Password Settings</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Old password</label>
                                <input  name="old" type="password" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>New password</label>
                                <input name="new" type="password" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Confirm new password</label>
                                <input  name="confirm" type="password" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary" name="update1">Update</button>
                        <button  class="btn btn-light"><a href="http://localhost/f1/filmer/filmer/project/Home/home.php">Cancel</a></button>
                    </div>
                </div>
                </form>


            </div>
            </form>
        </div>
    </form>
</div>
<script>
    function cancel() {
        const email = document.getElementById('email').value;
       // const  href = "http://localhost/web%20programming/adminpage.php";
        if($_SESSION['type'] == 1) {
         //   alert("valid email, good.");
            console.log("Before redirect");
            window.location.href = "http://localhost/f1/filmer/filmer/project/update.php";
            console.log("After redirect");
            window.location.href = "http://localhost/web%20programming/adminpage.php";
        } else {
            alert("Invalid email, please try again.");
        }
    }
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>