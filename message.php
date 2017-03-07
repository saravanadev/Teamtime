<html>
<title>compose</title>
<head>
<?php
session_start();
include "header.php";
?>
<?php
$message=new message();
$message->message();
?>
<?php
$ff=new check();
$ff->check();
?>
<?php
$n=new countt();
$final=$n->count();  
?>
<link rel="stylesheet" href="boot/css/bootstrap.css" type="text/css"/>
</head>
<body>
	  <div class="container2">
</br>
</br>
</br>
</br>
<h4>compose</h4> 
<form method="post">
      <div class="input-group">
      <span class="input-group-addon">@</span>
      <input type="text"  name="username" placeholder="username">
      </div><br>
      <h4>message</h4><textarea name="send" cols="20" rows="3" id="questions"></textarea>
      <input id="button" class="btn btn-success" type="submit" name="submit" value="send"/>
	  </form>
<div class="col-md-6 col-lg-6" inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
	  <div style="position: fixed;">
	  <p>static content hear</p>
      <p>---------------------------</p>
	  <p>----------------------------</p>
	  <p>-----------------------------</p>
	  <p>------------------------------</p>
	  </div>
	</div>
</body>
</html>