<html>
<head>
	
<script type="text/javascript">
   if(document.forms[0].elements[0].value==""){
	   alert("faild to go");
   }
	
</script>
    <?php
    session_start();
    include "headerr.php";
    ?>
    <?php
    $signin=new signin();
    $signin->signin();
    ?>
	<link rel="stylesheet" href="boot/css/bootstrap.css" type="text/css" />

<?php
   $signup=new signup();
   $signup->signup();
?>
<title>Teamtime</title>
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
</head>
<body>
   <div class="container">
</br>
</br>
<table border="0">
<h3>sign-in</h3>
<form method="GET">
<tr>
<td height="35">username</td>
<td> <input class="form-control " placeholder="username" type="text" name="username"></td>
</tr>
<tr>
<td height="34">Password</td>
<td> <input class="form-control" placeholder="password" type="password" name="password"></td>
</tr>
<tr>
</tr><td><input class="btn btn-success" id="button" type="submit" name="click" value="signin"/> 
</tr>
</form>
</table>

<title>CREATE AN ACCOUNT</title>
    
<tr>
<h3>signup</h3>
<table border=0>
<form method="POST">
<tr>
<td>Name</td><td> <input class="form-control" placeholder="name" type="text" name="name"></td>
</tr>
<tr>
<td>fname</td><td> <input class="form-control" placeholder="last name" type="text" name="fname"></td>
</tr>
<tr>
<td>username</td><td><input class="form-control" placeholder="username" type="text" name="username"></td>
</tr>
<tr>
<td>Email</td><td> <input class="form-control" type="text" placeholder="email" name="email"></td>
</tr>
<tr>
<td>Password</td><td> <input class="form-control"  placeholder="password" type="password" name="password"></td>
</tr>
<tr>
<td>confirm password</td><td><input class="form-control"  placeholder="confirm password" type="password" name="cpassowrd"></td>
</tr>
<tr>
<td><input class="btn btn-success"  id="button"  type="submit" name="submit" value="Sign-Up"></td>
</tr>
</form>
</table>
</div>
</body>
</html>