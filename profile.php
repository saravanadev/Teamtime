<html>
<title>profile</title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ME</title>
<?php
session_start();
include "header.php";
include "connect.php";
?>
<?php 
$check=new check();
$check->check();
?>
<link rel="stylesheet" href="boot/css/bootstrap.css" type="text/css" />
</head>
<body>
</br>
</br>
</br>
</br>
<h4>me</h4>
<div class="container">
     <div class="row">
	  <div class="col-md-6 col-lg-4" style="background-color: #dedef8; box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
<?php
$image=new image();
$image->image();
?>
    <h3>
     <?php
     $fullname=new fullname();
     $fullname->fullname();
     ?>  
     </h3>
  <h4 align="justify">my share</h4>
    <?php
    $profileview=new profile_view();
    $profileview->profile_view();
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
<br/>
</body>
</html>