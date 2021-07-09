
 
    <link rel="stylesheet" href="cssgore/comment.css?v=<?php echo time(); ?>">
   <?php 
    date_default_timezone_set('America/Sao_Paulo');
    include 'includes/dbh.inc.php';
    include_once   'includes/comments.inc.php';
    
  

    


  $cid = $_POST['cid'];
  $uid = $_POST['uid'];
  $date = $_POST['date'];
  $message = $_POST['message'];

  

    echo    "<form method='POST' action='".editComments($conn)."'>
                <input type='hidden' name='cid' value='".$cid."'>
                <input type='hidden' name='uid' value='".$uid."'>
                <input type='hidden' name='date' value='".$date."'>
                <textarea name='message'>".$message."</textarea><br>
                <button type='submit' name='commentSubmit'>Edit</button>
             </form>";
         


