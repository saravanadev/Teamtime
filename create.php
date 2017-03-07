<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>create a Team</title>
<?php
session_start();
include "header.php";
?>
<div class="container">
<?php
$check=new check(); 
$check->check();
?>
<?php
$create=new create_team();
$create->create_team();
?>
<link rel="stylesheet" href="boot/css/bootstrap.css" type="text/css" />
</head>
<body>
  </br>
  </br>
  </br>
  </br>
  <h4>create a team</h4>
  <?php
     $t=new id();
  ?>
 
<form method="post">
      <div class="input-group">
      <span class="input-group-addon">@</span>
      <input type="text"  name="teamname" placeholder="teamname">
      </div><br>
      <h4>Team description</h4><textarea name="create" cols="20" rows="3" id="questions"></textarea>
      <input id="button" class="btn btn-danger" type="submit" name="submit" value="create"/>
	  </form>

  </br>
 <a href="signout.php">sign out</a> |
 </div>
<br/>
</body>
</html>