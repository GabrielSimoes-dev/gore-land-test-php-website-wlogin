<title>Gore Land | Sign up</title>
<?php
 include_once 'header.php';
?>
    <head>
    <link rel="stylesheet" type="text/css" href="../homestylegore.css">
    <link rel="stylesheet" href="signupstyle.css?v=<?php echo time(); ?>">
    </head>
        <div class="text">
    <section class="signup-form">
    <h2>Become a member!</h2>
        </div>
        <div class="placeholders">
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="name" placeholder="Your name"></input>
                <input type="text" name="email" placeholder="E-mail"></input>
                <input type="text" name="uid" placeholder="Username"></input>
                <input type="password" name="pwd" placeholder="Password"></input>
                <input type="password" name="pwdrepeat" placeholder="Repeat password"></input>
        </div>
                <button class="submit-btn" type="submit" name="submit">Register</button>

            </form>
    <div class="error-messages">
            <?php 
    if (isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p>All fields needs to be Fill!</p>";
        }
        else if ($_GET["error"] == "invaliduid") {
            echo "<p>Invalid Username!</p>";
        }

        else if ($_GET["error"] == "invalidemail") {
            echo "<p>Invalid Email!</p>";
        }
        else if ($_GET["error"] == "passworddontmatch") {
            echo "<p>Incorrect passwords!</p>";
        }
        else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something is a bit wrong!</p>";
        }
        else if ($_GET["error"] == "usernametaken") {
            echo "<p>Username exists</p>";
        }
        else if ($_GET["error"] == "none") {
            echo "<p>Thanks for tunning in!</p>";
        }
    }
    ?>
    </div>

    </section>
<?php
 include_once 'footer.php'
?>