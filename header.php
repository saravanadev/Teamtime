	<!DOCTYPE html>
	<html lang="en">
	  <head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="Robel" >
	    <link rel="shortcut icon" href="">
	
	    <title>Teamtime</title>
	
	    <link href="boot/css/bootstrap.css" rel="stylesheet">
       <?php
       include "connect.php";
       include "class.php";
		 $count=new countt();
	    $me=$count->count();
		 ?>
		 <?php
		  $session=$_SESSION['username'];
		  $name=$session;
		 ?> 
	  </head>
	
	  <body>
	
	    <div class="navbar navbar-inverse navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="main.php"><B>Teamtime</B></a>
	        </div>
	        <form class="navbar-form navbar-left">
	            <div class="form-group">
				<div class="rows">
	            <input type="search" placeholder="search for a marketplace" class="form-control" size="40"/>
	       </form>
	           </div>           
	         </div>
			<div class="navbar-collapse collapse" id="message">
			  
	          <form class="navbar-form navbar-right">
	            <ul class="nav navbar-nav">
	               <li class=""><a href="main.php">Home <span class="glyphicon glyphicon-home"></a></span></li>
	               <li class=""><a href="profile.php">Me <span class="glyphicon glyphicon-user"></a></span></li>
		           <li class=""><?php echo '<a href="inbox.php">Mailbox <span class="badge">'.$me.'</span>';?></a></li>
	               <li class=""><a href="team.php">Teams <span class="glyphicon glyphicon-map-marker"></a></span></a></li>
	               <li class=""><a href="postpic.php">picture <span class="glyphicon glyphicon-camera"></a></span></a></li>
				   <li class=""><a href="signout.php">Logout <span class="glyphicon glyphicon-off"></a></span></li>
	          </ul>
			</form>
	        </div><!--/.navbar-collapse -->
	      </div>
	    </div>