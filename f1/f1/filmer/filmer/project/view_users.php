<!DOCTYPE html>
<html style="height: 100%; width: 100%">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>View Users</title>
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background: linear-gradient(45deg,#1f5662,#06996d,#505f75);
           // background: white;
            margin: 12% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 25%;
            height: 67%;
            position: relative;
            border-radius: 15px;
        }

        .modal-iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .close {
            color: #aaa;
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        body {
            background: linear-gradient(45deg,#1f5662,#06996d,#505f75);
            padding-top: 280px;
            font-family: Arial, sans-serif;

        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0;
            font-size: 36px;
            color: #333;
        }

        .button {

            background: -webkit-linear-gradient(left , #505f75 , #06996d);
            border: none;
            color: #fff;
            padding: 12px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background:  #06996d ;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .form {
            background-color: #f2f2f2;
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
        }

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #1f5662;
        }

        .delete-button {
            background-color: #1f5662;
        }

        .edit-button {
            background-color: #4CAF50;
        }

        .error {
            color: red;
        }
        .edit-btn {
            width: 70px;
            height: 40px;
            background: -webkit-linear-gradient(left , #505f75 , #06996d);
            margin-right: 8px;
            border-radius: 7px;
            color: white;
        }
        .edit-btn:hover {
            background: -webkit-linear-gradient(left , #505f75 , #06996d);
        }
        .delete-btn {
            width: 70px;
            height: 40px;
            background: -webkit-linear-gradient(left , #505f75 , #06996d);
            margin-right: 8px;
            border-radius: 7px;
            color: white;

        }
        .delete-btn:hover {
            background: -webkit-linear-gradient(left , #505f75 , #06996d);
        }

        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        .back-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        //   color: #fff;
        //   background-color: #007bff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            position: absolute;
        //   bottom: 10px;
        //  left: 50%;
        // transform: translateX(-50%);
        }

        .back-btn i {
            margin-right: 10px;
        }

        /* Modal Content/Box */

    </style>
</head>
<body>
<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password_db = "";
$dbname = "moviedb";

$conn = mysqli_connect("localhost", "root", "", "moviedb");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
// Query the database to get all users
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit();
}
?>
<div class="container" style="width: 1000px ; height: 490px; border-radius: 20px; background: azure">
    <div class="header">
        <button  id="myBtn" class="button">Add New user</button>
    </div>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <?php ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td>
                        <button class="edit-btn" data-email="<?php echo $row['email']; ?>">Edit</button>
                        <button class="delete-btn" data-email="<?php echo $row['email']; ?>">Delete</button>
                    </td>
                </tr>
            <?php  ?>
        <?php } ?>
        </tbody>

    </table>
    <button  type="submit" style="margin-top: 80px;  width: 100px; height: 30px; font-size: 19px; font-family: 'Times New Roman'" class="back-btn">
        <i class="fas fa-arrow-left" ></i>
        <a href="http://localhost/f1/filmer/filmer/project/Home/home.php">Back</a>
    </button>
</div>


<!-- Edit User Modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <iframe id="edit-iframe" class="modal-iframe"></iframe>
    </div>
</div>




<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <iframe src="adminadduser.php" class="modal-iframe"></iframe>
    </div>
</div>



<?php mysqli_close($conn); ?>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#myBtn").click(function() {
            $("#myModal").css("display", "block");
            $.ajax({
                url: "adminadduser.php",
                success: function(result) {
                    $(".modal-content").html(result);
                }
            });
        });

        $(".close").click(function() {
            $("#myModal").css("display", "none");
        });

        $(window).click(function(event) {
            if (event.target == document.getElementById("myModal")) {
                $("#myModal").css("display", "none");
            }
        });
    });






</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        // Add event listener for delete button
        $('.delete-btn').on('click', function() {
            var email = $(this).attr('data-email');
            if (confirm('Are you sure you want to delete this user?')) {
                $.ajax({
                    url: 'delete_user.php',
                    type: 'POST',
                    data: {email: email},
                    success: function(response) {
                        alert(response);
                        window.location.reload();
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                });
            }
        });
    });
</script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        // Open edit modal and load edit form
        $(document).on('click', '.edit-btn', function () {
            var email = $(this).data('email');
            $("#edit-iframe").attr("src", "edit_user.php?email=" + email);
            $("#myModal").css("display", "block");
        });

        // Close modal when close button is clicked
        $(".close").click(function () {
            $("#myModal").css("display", "none");
        });

        // Close modal when clicked outside the modal
        $(window).click(function (event) {
            if (event.target == document.getElementById("myModal")) {
                $("#myModal").css("display", "none");
            }
        });
    });
</script>

</body>
</html>