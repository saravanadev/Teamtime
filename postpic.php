<html>
<head> 
<title>post picture</title>
<?php
session_start();
include "header.php";
?>   
<?php
$postpic=new postpic();
$postpic->postpic();
?>
<?php
$nn=new check();
$nn->check();
?>
<?php
$n=new countt();
$final=$n->count();  
?>
<link rel="stylesheet" href="boot/css/bootstrap.css" type="text/css" />
</head>
<body>
  </br>
 </br>
 </br>
 </br>
<h4>upload profile picture</h4
    <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-4" style="background-color: #dedef8; box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
<form method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file" /> 
<br />
<input type="submit" class="btn btn-success" name="submit" value="Submit" />
</form>
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
</br>
</br>
</body>
</html>