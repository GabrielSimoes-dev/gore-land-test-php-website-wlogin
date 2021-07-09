
    <link rel="stylesheet" href="cssgore/comment.css?v=<?php echo time(); ?>">
   <?php 
    date_default_timezone_set('America/Sao_Paulo');
    include 'includes/dbh.inc.php';
    include 'includes/comments.inc.php';
   ?>


<?php
    echo "<form method='POST' action='".setComments($conn)."'>
            <input type='hidden' name='uid' value='Anonymous'>
            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
            <textarea name='message'></textarea><br>
            <button type='submit' name='commentSubmit'>Comment</button>
            
         </form>";
            
getComments($conn);
?>