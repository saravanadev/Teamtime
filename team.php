	<html>
	<head>
	<title>Teams</title>
	<?php
	session_start();
	include "header.php";
	?>
	<?php
	$che=new check();
	$che->check();
	?>
	<link rel="stylesheet" href="boot/css/bootstrap.css" type="text/css" />
	</head>
	<body>
	   </br>
	   </br>
		</br>
	   </br>
	   </br>
	  </br>
	  <?php
	  include "connect.php";
	  ?>
	  <div class="container">
          <div class="row">
			<div>
				  <h4>Teams</h4>  <a href="create.php">create new Team </a>
			    </div>
	         <div class="col-md-6 col-lg-4" style="background-color: #dedef8; box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
	  <?php
	     $groupname=new group_name();
	     $groupname->group_name();
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
	</body>
	</html>