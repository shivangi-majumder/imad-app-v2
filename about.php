<?php
require('config.php');
$fname=$_SESSION['fname'];
if(empty($fname))
  require('heder.php');
else
  require('Uheader.php');
?>
<html>
<head>

<title>About Us</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

<!--ABOUT US-->
<table border="0" width="800" id="navigation" style="float: center">
<tr>
	<td>
		<h1>About Us</h1>
	</td>
<tr>
	<td><font size="2">
<font size=2>The Tech Forum</b> is a discussion forum that gives information about various programming languages, general knowledge related questions, information related to Asp.net,Vb.net,Php,Os related questions. </p>

<p align="justify">This forum is useful for the beginners to get information  related to  various topics. There is a centralized database in which all the information is managed. The administrator acts as the highest authority and has the rights to update the database. There are also connected user who acts as an intermediate user who can also answer the questions of the end-user if they know it. The intermediate user can also cache the information provided by the administrator to the end-user. This cached information is useful when the same question is repeated some another user , then the intermediate user can get the information from cache memory and reply to the end-user. This reduces the response time.</p> 

<p align="justify">Whenever a question is asked by the end-user to get information ,it is received by the administrator who fetches the information from the database and reply to the end-user. Whenever the new information is arrived it is updated by the end-user. The end-user is provided with the access rights which is  managed by the administrator. The access to the database is provided to the end-user according to these rights only.</p>
	</td>
</tr>
</table>
</font>
<?php require('footer.php');?>
</body>
</html>