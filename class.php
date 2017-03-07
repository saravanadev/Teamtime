<?php
class teamtime
{
  var $teamtime;
  function __construct()
  {
    $this->teamtime;
  }
}
class signup extends teamtime
{
 var $signup;
 function __construct()
  {
      $this->signup;
  }
  function signup()
  {
    include "connect.php";
    if(!isset($_SESSION['username']))
     {
    	 if(isset($_POST['submit']))
    	  {
    	      $name=mysqli_real_escape_string($conn,$_POST['name']);
    	      $fname=mysqli_real_escape_string($conn,$_POST['fname']);
    	      $username=mysqli_real_escape_string($conn,$_POST['username']);
    	      $email=mysqli_real_escape_string($conn,$_POST['email']);
    	      $password=mysqli_real_escape_string($conn,md5($_POST['password'])); 
    	      $query="insert into togettou_robel.name (name,fname,username,email,password) values ('$name','$fname','$username','$email','$password')";   	         	      
     	      if($name==null || $fname==null || $username==null || $email==null || $password==null)
    	  	    { 
    	  	       echo "<p style=color:red>"."faild to register"."</p>";
    	  	    }else{
    	      $command=mysqli_query($conn,$query);    	      
    	      if($command)
    	      {
               echo "<p style=color:green>"."$name,successfully registered"."</p>";
    	      	$_SESSION['username']=$username;
    	      	header("location:main.php");   
    	      }  
        }
     }     
   }
 }
}
class signin extends teamtime
{
	var $signin;
	function __construct()
	{
      $this->signin;	
	}
   function signin()
   {
	//make this a POST request so the user can't see his password in the url bar
      include "connect.php";
      if(!isset($_SESSION['username']))
      {
        if(isset($_GET['click']))
        {
            $username=mysqli_real_escape_string($conn,$_GET['username']);
            $password=mysqli_real_escape_string($conn,md5($_GET['password']));
            $query="select * from togettou_robel.name where username='$username' and password='$password'";
            $data=mysqli_query($conn,$query) or die("faild data");
            $count=mysqli_num_rows($data);
            if($count==1)
            {
            	$_SESSION['username']=$username;
                header("Location: main.php");
            }else{
            }
		  }
      }else{
        header("location:main.php");
    }   
   }
}
class check extends teamtime
{
	var $check;
	function __construct()
	{
     $this->check;	
	}
   function check()
   {
     include "connect.php";
     if(!isset($_SESSION['username']))
     {
       header("location:signin.php");
     }
   }
}
class id extends teamtime
{
	var $id;
	function __construct()
	{
	   
	}
	function id()
   {
	//this is a function for the primary key
	   include "connect.php";
	   $ses=$_SESSION['username'];
	   if($row=mysqli_fetch_array(mysqli_query($conn,"select * from togettou_robel.name where username='$ses'")))
      {  
        $postid=$row[0];
      }
	  return $postid;
   } 
}
class post extends teamtime
{
  var $post;
  function __construct()
  {
    $this->post;  
  } 
  function post()
  {
   $session=$_SESSION['username'];
 if(isset($_POST['submit']))
  {
  if($l=mysqli_fetch_array(mysqli_query($conn,"select * from togettou_robel.name where username='$session'")))
   {
   	$postid=$l[0];
   }
	$file=$_POST['share'];
	$query="insert into togettou_robel.share(post,post_id) values ('$file','$postid')";
	if(!$file==""||!$file==null){
	$data=mysqli_query($conn,$query);
	if($data){
	echo "<p style=color:green>"."status updated"."</p>";
	}else{
	echo "faild to update status";
	}
	  }else{
        echo "<p style=color:red>"."you must write something"."</p>";
      }
	}  
  }

}
class news_feed extends teamtime
{
  var $news;
  function __construct()
  {
    $this->news; 
  }
  function news_feed()
 { 
            require "connect.php";
	         $therequest=mysqli_query($conn,"select*from togettou_robel.share order by id desc ");
            while($client=mysqli_fetch_array($therequest))
            {
               $cn=$client['post'];
               $cname=$client[2];
               echo "</br>";
               $then=mysqli_query($conn,"select * from togettou_robel.name where id='$client[1]'");
               while($final=mysqli_fetch_array($then))
               {
               	$groupname=$client['2'];
                  if($row=mysqli_fetch_array
					 (mysqli_query($conn,"select * from togettou_robel.groupname where id='$groupname'"))){echo ""; }             
               	echo "</br>";
	               echo "<a href=profile_view.php?id=$final[0]>@".$final[3]."</a>".">";
	               echo " shared in group ";
                  echo "<a href=group.php?id=$groupname>".$row[1]."</a>"." ";
                  echo "</br>";
                  echo "</br>";     
                  echo " ".$cn;
				  echo "<p>-------------------------------------------------------</p>";
               }         
           }
 }

}
class image extends teamtime
{
	var $image;
	function __construct()
   {
     $this->image;
   }
  function image()
  {
  	include "connect.php";
   $session=$_SESSION['username'];
   if($db=mysqli_fetch_array(mysqli_query($conn,"select * from togettou_robel.name where username= '$session'")))
    {
	   $d=$db[0];
      if($id=mysqli_fetch_array(mysqli_query($conn,"select * from togettou_robel.pic where profile_id='$d'")))
      {
      echo '<img src='.$id['image_path'].' class="img-circle" width="90" height="20" style="border:10px; height:90px; width:100px;"/>'; 
      }
     }  
   }
}
class fullname extends teamtime
{
	var $full;
	function __construct()
   {
      $this->full;
   }
   function fullname()
   {
	 include "connect.php";
     $name=$_SESSION['username'];
     if($row=mysqli_fetch_array(mysqli_query($conn,"select * from togettou_robel.name where username='$name'")))
	 echo "<h4>".$row["name"].' '.$row["fname"]."<h4>";
   }  
}
class create_team extends teamtime
{
	var $create;
	function __construct()
	{
     $this->create;	
	}
   function create_team()
   {
    include "connect.php";
    $ses=$_SESSION['username'];
    if(isset($_POST['create']))
    {
      $teamname=$_POST['teamname'];
      $create=$_POST['create'];
      if(mysqli_query($conn,"insert into togettou_robel.groupname (group_name,dis) values ('$teamname','$create')"))
      {
  	     if($teamname==null || $create==null)
  	      {
          echo "<p style=color:red>"."faild to create"."</p>";
         }else{
          echo "<p style=color:green>".'Team '.$teamname.' successfully created'.'</p>'; 
          }
      }
    }   
  }
}

class buddies extends teamtime
{
	var $buddies;
	function __construct()
	{
      $this->buddies;	
	}
  function buddies()
  {
   include_once("connect.php");
   $query=mysqli_query($conn,"select*from togettou_robel.name order by id desc;");
   if(!$query)
   {
     die("faild query");
   }else{
     while($row=mysqli_fetch_array($query))
       {
	      echo $row[1];
	      echo "  ";
	      echo $row[2];
	      echo "  ";
	      echo "->".$row[4];
	      echo "</br>";
	      echo "</br>";
      }
   }    
  }
}
class inbox extends teamtime
{
	var $inbox;
	function __construct()
	{
     $this->inbox;
   }
  function inbox()
  {
    include "connect.php";
    $session=$_SESSION['username'];
    if($id=mysqli_fetch_array(mysqli_query($conn,"select * from togettou_robel.name where username='$session'")))
      {
        $idd=$id[0];
	     $result=mysqli_query($conn,"select*from togettou_robel.message where rec_id='$idd' order by id desc");
        while($row=mysqli_fetch_array($result))
         {
           $senid=$row[1];
           if($sendername=mysqli_fetch_array(mysqli_query($conn,"select * from togettou_robel.name where id='$senid'")))
            {     
              echo "<a href=profile_view.php?id=$senid>".$sendername['username']."</a>";
              echo " ";
              echo " ->send you a messaage";
              echo "</br>";
              echo $row[3];
              echo "</br>";
            }
         }
    }       
  }
}
class message extends teamtime
{
	var $message;
	function __construct()
	{
     $this->message;	
	}
   function message()
   {
     include "connect.php";
     $session=$_SESSION["username"];
     if(isset($_POST['send']))
     {
       $share=$_POST['username'];
       $sharee=$_POST['send'];
       if($db=mysql_fetch_array(mysqli_query($conn,"select * from togettou_robel.name where username='$session'")))
       {
         $senid=$db[0];  
       }
       if($dbb=mysqli_fetch_array(mysqli_query($conn,"select * from togettou_robel.name where username='$share'")))
       {
       	if(!$dbb[0]==0)
       	 {
       	   $recid=$dbb[0];
       	 }else{
       	   echo "faild";
       	} 
       }
       if(mysqli_query($conn,"insert into togettou_robel.message (sen_id,rec_id,message) values ($senid,$recid,$sharee)"))
       {
         echo "<h4 style='color:green';>"."email sent"."</h4>";
       }else{
         echo "<h4 style='color:red';>"."faild"."</h4>";  
      }
    }   
  }
}
class postpic extends teamtime
{
	var $postpic;
	function __construct()
	{
     $this->postpic;	
	}
   function postpic()
   {
    include("connect.php");

function getimageextention($imagetype){
    if(empty($imagetype)){
        return false;
    }
    switch($imagetype){
        case 'image/bmp':
            return '.bmp';
        case 'image/gif':
            return '.gif';
        case 'image/jpeg':
            return '.jpeg';
        case 'image/png':
            return '.png';
        default:
            return false;
        
    }
}

if(!empty($_FILES["file"]["name"])){
    $file_name=$_FILES["file"]["name"];
    $temp_name=$_FILES["file"]["tmp_name"];
    $imgtype=$_FILES["file"]["type"];
    $ext=getimageextention($imgtype);
    $imagename=date("d-m-Y")."-".time().$ext;
    $target_path='images/'.$imagename;
    $target='images/'.$imagename;
	$session=$_SESSION['username'];
    if($idnumber=mysqli_fetch_array(mysqli_query($conn,"select * from togettou_robel.name where username='$session'"))){
	  $number=$idnumber[0];
	}
    
     if(move_uploaded_file($temp_name,$target_path)){
        $query="insert into togettou_robel.pic (image_path,submission_date,profile_id) values ('$target','".date("y-m-d")."',$number)";
        mysqli_query($conn,$query) or die("faild to insert in the query");
        
     }else{
        echo "error while uploadig image";
     }
    
       }else{
      echo "something went wrong";
     } 
   }
}
class group_name extends teamtime
{
	var $g_name;
	var $result;
	function __construct()
	{
    $this->g_name;	
	}
  function group_name()
  {
     require "connect.php";
	  $result=mysqli_query($conn,"select*from togettou_robel.groupname order by id desc");
      while($row=mysqli_fetch_array($result))
      {
        $session=$_SESSION['username'];
        if($queryresult=mysqli_fetch_array(mysqli_query($conn,"select * from togettou_robel.groupname where group_name='$row[1]'")))
        {
     	    $queryresult[0];
     	    echo "Team"."->"."<a href=group.php?id=$queryresult[0]>".$row[1]."</a>";
          echo "</br>";
		  echo "</br>";
		  echo "</br>";
		  echo "</br>";
		  echo "<p>---------------------------------------------------------</p>";
        }	     
        
      }
     
   }
}
class countt extends teamtime
{
  var $countt;
  function __construct()
   {
      $this->countt;
   }
   function count()
   {
     include "connect.php";
     $session=$_SESSION['username'];
     if($idnumber=mysqli_fetch_array(mysqli_query($conn,"select * from togettou_robel.name where username='$session'")))
     {
	   $number=$idnumber[0];
      if($count=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM togettou_robel.message where rec_id='$number'")))
      {
       $messagecounter=$count[0];
       return $messagecounter;
      }
     }    
   }
 }
 class group_profile extends teamtime
 {
 	var $group_profile;
   function __construct()
     { 
        $this->group_profile;             
     }
     function group_profile()
     {
        include "connect.php";
        if(isset($row[1]))
        {
          echo "hello";
        }else{
           echo "faild";        
        }     
     }
}
class display_group extends teamtime 
{
  var $display_team;
  function __construct()
  {
    $this->display_team;  
  }
  function display_team()
  {
    $get=$_GET['id'];
    include "connect.php";
    if($mee=mysqli_fetch_array(mysqli_query($conn,"select * from togettou_robel.groupname where id='$get'")))
    {
      echo "<u><h4>Team ".$mee['group_name']."</h4></u>";
      echo $mee['dis'];
    }
  }  
}
class post_in_group extends teamtime
{
   var $post_group;
   function __construct()
   {
     $this->post_group;   
   }
   function post_in_group()
   {
	     include "connect.php";
        $session=$_SESSION['username'];
        if(isset($_POST['submit']))
        {
        	 if($fromsession=mysqli_fetch_array(mysqli_query($conn,"select * from togettou_robel.name where username='$session'")))
        	 { 
        	  $groupid=$_GET['id'];
        	  $newid=$fromsession[0];  
	          $file=$_POST['share'];
			  if(!$file==""||!$file==null){
	          $query="insert into togettou_robel.share(profile_id,group_id,post) values ('$newid','$groupid','$file')";
	          $data=mysqli_query($conn,$query);
			  }else{
               echo "<p style=color:red>"."you must write something"."</p>";
			   }
              }  
         }
  }
}
class share_in_group extends teamtime
{
   var $shareingroup;
   function __construct()
   {
       $this->shareingroup;
   }
   function share_in_group()
   {
            require "connect.php";
            $get=$_GET['id'];
	        $therequest=mysqli_query($conn,"select*from togettou_robel.share where group_id=$get order by id desc");
            while($client=mysqli_fetch_array($therequest))
            {
               $cn=$client[3];
               $cname=$client['profile_id'];
               echo "</br>";
               $then=mysqli_query($conn,"select * from togettou_robel.name where id='$cname'");
               while($final=mysqli_fetch_array($then))
               {
            
               	echo "</br>";
                  echo "<a href=profile_view.php?id=$final[0]>".$final[3]."</a>";
                  echo "</br>"; 
                  echo " ".$cn;
				  echo "<p>--------------------------------------------------------</p>";
               }         
           }
      }
 }
class profile_name extends teamtime
{
	var $profilename;
  function __construct()
  {
     $this->profilename;
  }
  function profile_name()
  {
	include "connect.php";
     $get=$_GET['id'];
     $query=mysqli_query($conn,"select * from togettou_robel.name where id='$get'");
     if($name=mysqli_fetch_array($query))
     {
        echo "<h4>".$name['name']." ".$name['fname']."</h4>";     
     }  
  }
  function profile_pic()
  {
	 include "connect.php";
  	  $get=$_GET['id'];
     if($row=mysqli_fetch_array(mysqli_query($conn,"select * from togettou_robel.pic where profile_id='$get'")))
     {
         echo '<img src='.$row['image_path'].' class="img-rounded" width="90" height="20" style="border:10px; height:90px; width:100px;"/>';  
     }  
  }
}
class profile_view extends teamtime
{
	var $pname;
   function __construct()
   {
       $this->pname;
   }
   function profile_view()
   {
	 include "connect.php";
     $se=$_SESSION['username'];
     if($id=mysqli_fetch_array(mysqli_query($conn,"select * from togettou_robel.name where username='$se'")))
     {
     	  $idd=$id['id'];
     	  $result=mysqli_query($conn,"select * from togettou_robel.share where profile_id='$idd'");
        while($row1=mysqli_fetch_array($result))
        {
           $groupid=$row1['group_id'];
           $name=mysqli_query($conn,"select * from togettou_robel.groupname where id='$groupid'");
           while($row=mysqli_fetch_array($name))
           {
           	echo "in group ";
	         echo "<a href=group.php?id=$groupid>".$row[1]."</a>";
	         echo "</br>";
            echo $row1['post']." ";
            echo "</br>";
            echo "</br>";
			echo "<p>-------------------------------------------------------</p>";
           } 
       }
	  }
 }
  function profile_view_in()
   {
	      
	
	     
	      include("connect.php");
     	  $get=$_GET['id'];
		  $p=mysqli_query($conn,"select * from togettou_robel.pic where profile_id=$get");
		  
     	  $result=mysqli_query($conn,"select * from togettou_robel.share where profile_id='$get'");
          while($row2=mysqli_fetch_array($result))
         {
           $groupid=$row2['group_id'];
           $name=mysqli_query($conn,"select * from togettou_robel.groupname where id='$groupid'");
           while($row3=mysqli_fetch_array($name))
           {
           	echo " in group ";
	        echo "<a href=group.php?id=$groupid >".$row3[1]. "</a>";
	        echo "</br>";
            echo $row2['post']." ";
            echo "</br>";
            echo "</br>";
			echo "<p>-------------------------------------------------------</p>";
           } 
        }
    }
}
class team_pic extends teamtime{
   var $team_pic;
   function __construct(){
	  $this->team_pic;
   }
   function team_pic(){
	
   }

}










	
?>
