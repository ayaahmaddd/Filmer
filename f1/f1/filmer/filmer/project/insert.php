<?php


//upload
if(isset($_POST['addFilm'])) {
    $servername = "localhost";
    $username = "root";
    $password_db = "";
    $dbname = "moviedb";

    $conn = new mysqli($servername, $username, $password_db, $dbname);
    $title = $_POST['FileName'];
    $cat = $_POST['cat'];
    $type = $_POST['type'];
    $trending = $_POST['trending'];

    $time = $_POST['time'];
    $rating = $_POST['rating'];
    $year = $_POST['year'];

    $description = $_POST['description'];
    $image_url = $_POST['file'];
    $video_url = $_POST['file1'];






        $query = "INSERT INTO movie (name, imageurl, movieurl, rating, cat_id, disc, year, type, time, trending) 
              VALUES ('$title', '$image_url', '$video_url', '$rating', '$cat', '$description', '$year', '$type', '$time', '$trending')";
        $result = mysqli_query($conn, $query);

        mysqli_close($conn);

        if ($result) {

            if ($cat == 1){
                if($type == 0){
                    if($trending == 1){
                        header('Location: Home/home.php');
                    }
                    elseif ($trending == 0){
                        header('Location: Home/home.php');
                    }
                }
                elseif ($type == 1){
                    if($trending == 1){
                        header('Location: Home/home.php');
                    }
                    elseif ($trending == 0){
                        header('Location: Home/home.php');
                    }
                }
                elseif ($type ==2){
                    if($trending == 1){
                        header('Location: Home/home.php');
                    }
                    elseif ($trending == 0){
                        header('Location: Home/home.php');
                    }
                }

            }
            elseif ($cat == 2 ){
                if($type == 0){
                    if($trending == 1){
                        header('Location: Home/home.php');
                    }
                    elseif ($trending == 0){
                        header('Location: Home/home.php');
                    }
                }
                elseif ($type == 1){
                    if($trending == 1){
                        header('Location: Home/home.php');
                    }
                    elseif ($trending == 0){
                        header('Location: Home/home.php');
                    }
                }
                elseif ($type ==2){
                    if($trending == 1){
                        header('Location: Home/home.php');
                    }
                    elseif ($trending == 0){
                        header('Location: Home/home.php');
                    }
                }
            }
            elseif ($cat == 3 ){
                if($type == 0){
                    if($trending == 1){
                        header('Location: Home/home.php');
                    }
                    elseif ($trending == 0){
                        header('Location: Home/home.php');
                    }
                }
                elseif ($type == 1){
                    if($trending == 1){
                        header('Location: Home/home.php');
                    }
                    elseif ($trending == 0){
                        header('Location: Home/home.php');
                    }
                }
                elseif ($type ==2){
                    if($trending == 1){
                        header('Location: Home/home.php');
                    }
                    elseif ($trending == 0){
                        header('Location: Home/home.php');
                    }
                }
            }
            elseif ($cat == 4 ){
                if($type == 0){
                    if($trending == 1){
                        header('Location: Home/home.php');
                    }
                    elseif ($trending == 0){
                        header('Location: Home/home.php');
                    }
                }
                elseif ($type == 1){
                    if($trending == 1){
                        header('Location: Home/home.php');
                    }
                    elseif ($trending == 0){
                        header('Location: Home/home.php');
                    }
                }
                elseif ($type ==2){
                    if($trending == 1){
                        header('Location: Home/home.php');
                    }
                    elseif ($trending == 0){
                        header('Location: Home/home.php');
                    }
                }
            }
        } else {
            echo "Failed to add film!";
        }



}
?>