<?php
$ii = $_SESSION['email'];
?>
<nav style="background-color: rgba(6, 153, 109, 0.8);" >
        <img src="logo14.png" class="logo" alt="" width="65" height="65">
        <!--list-->
        <ul>
            <li><a href="../Home/home.php">HOME</a></li>
            <div class="dropdown">
                <li><a href="../Action Movie/action.php?type=0">MOVIE</a></li>
                <div class="dropdown-content">
                    <a href="../Action Movie/action.php?type=0&cat=1">Action</a> <!-- action: cat=0 .... -->
                    <a href="../Action Movie/action.php?type=0&cat=2">Horror</a>
                    <a href="../Action Movie/action.php?type=0&cat=3">Comedy</a>
                    <a href="../Action Movie/action.php?type=0&cat=4">Drama</a>
                </div>
            </div>
            <div class="dropdown">
                <li><a href="../Action Movie/action.php?type=1">SERIES</a></li>
                <div class="dropdown-content">
                   <a href="../Action Movie/action.php?type=1&cat=1">Action</a> <!-- action: cat=0 .... -->
                    <a href="../Action Movie/action.php?type=1&cat=2">Horror</a>
                    <a href="../Action Movie/action.php?type=1&cat=3">Comedy</a>
                    <a href="../Action Movie/action.php?type=1&cat=4">Drama</a>
                </div>
            </div>
            <div class="dropdown">
                <li><a href="../Action Movie/action.php?type=2">ANIME</a></li>
                <div class="dropdown-content">
                   <a href="../Action Movie/action.php?type=2&cat=1">Action</a> <!-- action: cat=0 .... -->
                    <a href="../Action Movie/action.php?type=2&cat=2">Horror</a>
                    <a href="../Action Movie/action.php?type=2&cat=3">Comedy</a>
                    <a href="../Action Movie/action.php?type=2&cat=4">Drama</a>
                </div>
                </div>
        </ul>
        <br>
        <div class ="container">
            <from action="https//www.google.com/search" method="get" class="search-bar">
                <input type ="text" placeholder="Search Anything" name="m">
                <button type ="submit"><img src ="searc.png "></button>
            </from>
        </div>
        <ul>
            <li><a href="http://localhost/f1/filmer/filmer/project/about.html">ABOUT</a></li>
            <li><a href="http://localhost/f1/filmer/filmer/project/contactt.php">CONTACT</a></li>
        </ul>

        <div class="dropdown">
          <li>  <a  href="#PROFILE" onmouseover="showDropdown()" class="btn">PROFILE </a></li>
            <div class="dropdown-content" id="user">
                <a href="http://localhost/f1/filmer/filmer/project/account.php">Setting</a>
                <a href="http://localhost/f1/filmer/filmer/project/backend/logout.php">Logout</a>
                <a href="http://localhost/f1/filmer/filmer/project/fav/fav.php">Favorite</a>
                <a href="http://localhost/f1/filmer/filmer/project/fav/watched.php">watched</a>

            </div>
            <div class="dropdown-content" id="admin">
                <a href="http://localhost/f1/filmer/filmer/project/account.php">Setting</a>
                <a href="http://localhost/f1/filmer/filmer/project/backend/logout.php">Logout</a>
                <a href="http://localhost/f1/filmer/filmer/project/addfilm.php">Add Film</a>
                <a href="http://localhost/f1/filmer/filmer/project/view_users.php">View User </a>

            </div>

        </div>
    </nav>
<script>
    function showDropdown() {

        const email = "<?php echo $ii ?>";
        <?php
        if(isset($_SESSION['type']))
        {
        if ($_SESSION['type'] == 1) { ?>
            document.getElementById('admin').style.display = 'inline';
       <?php }else if($_SESSION['type'] == 0) {?>

            //   alert("You are user, not admin, so the button is not valid for you");
            document.getElementById('user').style.display = 'inline';
            document.getElementById('admin').style.display = 'none';
       <?php }}
        else
        {?>
            document.getElementById('user').style.display = 'none';
            document.getElementById('admin').style.display = 'none';
       <?php }?>
    }   
    
    function hideDropdown() {
        document.getElementById('admin-btn').style.display = 'none';
        document.getElementById('admin').style.display = 'none';
    }

</script>