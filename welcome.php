<?php
require('config.php');
$fname=$_SESSION['fname'];
  if(empty($fname))
    header("Location: login.php");
  else{
?>
<html>
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <?php echo "Welcome $fname";
      //session_destroy();
         ?>
      <a href = "login.php" <?php
        //session_destroy();?>
        >Sign Out</a>
      </body>
<?php } ?>
</html>