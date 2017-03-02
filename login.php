<?php
ob_start();
require('config.php');
?>
<html>
<head>
<title></title>
</head>
<body>
<table>
<tr>
<form action="" method="post">
<td>Email ID:</td>
<td><input name="email" type="text" /></td>
</tr>
<tr>
<td>Password:</td>
<td><input name="pass" type="password" /></td>
</tr><tr>
<td><input type="submit" name="login" value='Login'></td></tr>
</tr>

<?php
if(!empty($_REQUEST['login']))
  {
    $email=$_REQUEST['email'];
    $pass=md5($_REQUEST['pass']);
    $sql="SELECT fname,email,pass FROM register where email='$email' and pass='$pass'";
    $result=mysql_query($sql) or die(mysql_error());
    $row = mysql_fetch_array($result) or die(mysql_error());
    if($email=$row[1]&&$pass=$row[2]) {
         //session_register("myusername");
        //echo "\n $row[1] \t $row[2] \t $row[0]";
        $_SESSION['email'] = $row[1];
        header("location: welcome.php");

    }
      else{
        echo "Your Login Name or Password is invalid";
        //echo "\n $row[1]";
    }

}
?>
</table>
</form>
</body>
</html>