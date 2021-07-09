<title>Gore Land | Login</title>
<?php
 include_once 'header.php';
?>
    <head>
    <title>Gore Land | Login</title>
    <link rel="stylesheet" type="text/css" href="../homestylegore.css">
    <link rel="stylesheet" href="signupstyle.css?v=<?php echo time(); ?>">
    </head>
        
     <?php
    echo "<div class='text'>
    <section class='signup-form'>
    <h2>Login</h2>
        </div>

        
            <div class='placeholders'>
            <form action='includes/login.inc.php' method='POST' action='".getLogin($conn)."'>
                <input type='text' name='uid' placeholder='Username/E-mail'></input>            
                <input type='password' name='pwd' placeholder='Password'></input>
        </div>
                <button class='submit-btn'  type='submit' name='submit'>Login</button>

            </form>"
    ?>

<?php
      
    if (isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p>All fields needs to be Fill!</p>";
        }
        else if ($_GET["error"] == "invaliduid") {
            echo "<p>Invalid Username!</p>";
        }
        else if($_GET["error"] == "checkPwd") {
            echo "<p>Invalid password</p>";
        }
    
    }
    ?>

    </section>

  
<?php
 include_once 'footer.php'
?>

