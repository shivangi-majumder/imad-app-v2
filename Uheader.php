<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Home Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="mm_health_nutr.css" type="text/css" />

</head>
<body bgcolor="#F4FFE4">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#D5EDB3">
    <td width="382" colspan="3" rowspan="2"><img src="mm_health_photo.jpg" alt="Header image" width="382" height="101" border="0" /></td>
    <td width="378" height="50" colspan="3" id="logo" valign="bottom" align="center" nowrap="nowrap">Hello World</td>
    <td width="100%">&nbsp;</td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="51" colspan="3" id="tagline" valign="top" align="center">Hi</td>
  <td width="100%">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="7" bgcolor="#5C743D"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

  <tr>
    <td colspan="7" bgcolor="#99CC66" background="mm_dashed_line.gif"><img src="mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>
<form>
  <tr bgcolor="#99CC66">
    <td colspan="7" id="dateformat" height="20">&nbsp;&nbsp;<script language="JavaScript" type="text/javascript">
      document.write(TODAY);  </script>
     <button type="button"><a href="home.php">Home</a></button>
      <button type="button"><a href="forum.php">Forum</a></button>
    <button type="button"><a href="about.php">About</a></button>
      <button type="button"><a href="contact.php">Contact Us</a></button>
  <?php
require('config.php');
$fname=$_SESSION['fname'];
?>
<label> <?php echo "Welcome $fname"; ?>
  <input type="submit" name="logout" value='Logout'>
  <?php if(!empty($_REQUEST['logout'])){
      session_destroy();
      header("location: about.php");
  }?>
</form>
   <align="right"><a href="register.php"><input type="button" value="Sign Up" style="float: right"></a>
   </td></td>
    </tr>
  <tr>
    <td colspan="7" bgcolor="#99CC66" background="mm_dashed_line.gif"><img src="mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>

  <tr>
    <td colspan="7" bgcolor="#5C743D"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

 <tr>
    <td width="165" valign="top" bgcolor="#5C743D">
  <table border="0" cellspacing="0" cellpadding="0" width="165" id="navigation">
        <tr>
          <td width="165">&nbsp;<br />
     &nbsp;<br /></td>
        </tr>
        <tr>
          <td width="165"><a href="javascript:;" class="navText">topics</a></td>
        </tr>
        <tr>
          <td width="165"><a href="javascript:;" class="navText">PHP</a></td>
        </tr>
        <tr>
          <td width="165"><a href="javascript:;" class="navText">C</a></td>
        </tr>
        <tr>
          <td width="165"><a href="javascript:;" class="navText">C++</a></td>
        </tr>
        <tr>
          <td width="165"><a href="javascript:;" class="navText">JAVA</a></td>
        </tr>
      </table>
   <br />
    &nbsp;<br />
    &nbsp;<br />
    &nbsp;<br />  </td>
    <td width="50"><img src="mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
    <td width="305" colspan="2" valign="top"><img src="mm_spacer.gif" alt="" width="305" height="1" border="0" /><br />
  &nbsp;<br />
  &nbsp;<br />
</body>
</html>
