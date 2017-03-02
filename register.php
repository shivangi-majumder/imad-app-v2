<?php
ob_start();
require('heder.php');
?>
<html>
<head>
<h1>User Registration</h1>
</head>
<body>
<font size="2">
<form method="post">
<label>First Name: &nbsp&nbsp&nbsp&nbsp&nbsp</label><input type="text" name="fname"><br/><br/>
<label>Last Name: &nbsp&nbsp&nbsp&nbsp&nbsp</label><input type="text" name="lname"><br/><br/>
<label>Phone Number: </label><input type="number" min="5000000000" max="9999999999" name="pn"><br/><br/>
<label>Gender: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label><input type="radio" name="sex" value="Male">Male<input type="radio" name="sex" value="Female">Female<br/><br/>
<label>Email ID:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label><input type="email" name="email" placeholder="email@login"><br/><br/>
<label>Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label><input type="password" name="pass"><br/><br/>
<input type="submit" value="Register" name="submit"><br/><br/>
<?php
require('config.php');
if(!empty($_REQUEST['submit'])){
	$email=$_REQUEST['email'];
	$pass=md5($_REQUEST['pass']);
	$fname=$_REQUEST['fname'];
	$lname=$_REQUEST['lname'];
	$sex=$_REQUEST['sex'];
	$pn=$_REQUEST['pn'];

	$sql="SELECT * FROM register";
	$result=mysql_query($sql);
	$row = mysql_fetch_array($result) or die(mysql_error());
	if($fname==""||$lname==""||$email==""||$pass==""||$pn=="")
	{
		echo "<script> alert('Values should not be null'); </script>";
	}
	else if($row['email']==$email)
			echo "<script> alert('Email ID already in use'); </script>";
	 else if($row['pn']==$pn)
			echo "<script> alert('Phone Number already in use'); </script>";
	else{	
	$sql="INSERT INTO register VALUES('','$fname','$lname','$email','$pass','$pn','$sex',NULL)";
	mysql_query($sql);
	echo "<script> alert('Registration is successful'); </script>";
	}
}
?>
</form>
</font>
<?php require('footer.php');?>
</body>
</html>