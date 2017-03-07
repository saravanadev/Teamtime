<html>
<head>

<title>groups</title>
<?php
session_start();
include "header.php";
?>
<?php
$new=new check();
$new->check();
?>
</head>
<link rel="stylesheet" href="boot/css/bootstrap.css" type="text/css" />
<body>
</br>
</br>
</br>
</br>
<h3>groups</h3>
  <div class="container">
     <div class="row">
	  <div class="col-md-6 col-lg-4" style="background-color: #dedef8; box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
<?php
$name=new display_group();
$name->display_team();
?>
<?php
$postingroup=new post_in_group();
$postingroup->post_in_group();
?>
<form method="post">
<textarea name="share" cols="20" rows="3" id="questions"></textarea>
<input id="button" class="btn btn-success" type="submit" name="submit" value="share"/>
</form>
  </br>
<?php
$sharein=new share_in_group();
$sharein->share_in_group();
?>
</div>
	 <div class="col-md-6 col-lg-6" inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
	  <div style="position: fixed;">
	  <p>static content hear</p>
      <p>---------------------------</p>
	  <p>----------------------------</p>
	  <p>-----------------------------</p>
	  <p>------------------------------</p>
	  </div>
	</div>
      </div>
     </div>
</div>
 </body>
 </html>