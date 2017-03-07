<html>
  <title>Main</title>
  <head>
<?php
 session_start();
 include "header.php";
?>
 <?php
   //check login oop
   $fname=new check();

   $fname->check();

?>
<link rel="stylesheet" href="boot/css/bootstrap.css" type="text/css" />
</head>
<body id="divv">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h5>HOME</h5>

<?php
	$id=new id();
	$id->id();
	?>
<?php
    $post=new post();
    $post->post();
	?>
<div class="container">
  <div class="row">
	<?php 
        $name=$_SESSION['username'];
	    echo "<h4>".'@'.$name."</h4>";
       ?>
     <h4><u>posts</u></h4>
	<div class="col-md-6 col-lg-4" style="background-color: #dedef8; box-shadow:inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
	  <?php
       $news_feed=new news_feed();
       $news_feed->news_feed();
     ?>
	</div>
	<div class="col-md-6 col-lg-6" inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
	  <div id="sample" style="position: fixed;width: 900px;height: 500px">
	  
	  </div>
	</div>
  </div>
</div>

</body>
</html>