<html>
    <title>mailbox</title>
      <head>
         <?php
           session_start();
           include "header.php";
           include "connect.php";
          ?>
          <?php
             $ro=new check();
             $ro->check();
           ?>
          <link rel="stylesheet" href="boot/css/bootstrap.css" type="text/css" />
      </head>
<body>
    </br>
</br>
</br>
</br>
</br>
<div class="container">
    <h4><a href="message.php">compose</a></h4>
       <div class="row">
        <div class="col-md-6 col-lg-4" style="background-color: #dedef8; box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
           <h4><u>email lists</u></h4> 
           <?php
              $inbox=new inbox();
              $inbox->inbox();
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