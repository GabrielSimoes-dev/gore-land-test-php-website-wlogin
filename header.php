<?php
 session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Gore Land | Home</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="indexstyle.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/2fd1a18c0d.js"></script>
    
</head>
<body>
    <div id="top-container">
        <div id="logo">
            <a href="home.php">
                <h1 data-text="Gore Land">Gore Land</h1> 
            </a>
            <div class="nurse">
            <img src="images/silentnurse.gif">
            </div>
        </div>


       <div id="search-box">
           <input class="search-txt" type="text" name="" placeholder="Search the Gore...">
           <a class="search-btn" href="#">
               <i class="fas fa-search"></i>
           </a>
       </div>

        <div class="side-bar">
            <ul>
                <a href="#">About us</a>
                <a href="#">Contact |</a>
                <?php 
                 if (isset($_SESSION["useruid"])) {
                        echo  "<a href='includes/logout.inc.php'>Log out</a>";
                        echo  "<a href='profile.php'>Profile</a>";
                 }
                 else {
                    echo  "<a href='login.php'>Login</a>";
                    echo  "<a href='signup.php'>Sign up</a>";
                 }
                ?>
            </ul>
        </div>

        


    </div>