<?php

include("mysqlconnect.php");

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
    $target='localhost/pic/images/'.$imagename;
    
    $sessionid=$_SESSION['username'];
    $row=mysql_query("select * from robel.name where username='$sessionid'");
    echo $sessionid;
    
    if(move_uploaded_file($temp_name,$target_path)){
        $query="insert into robel.pic (image_path,submission_date) values ('$target','".date("y-m-d")."')";
        mysql_query($query) or die("faild to insert in the query");
        
    }else{
        echo "error while uploadig image";
    }
    
 }else{
     echo "something went wrong";
}
?>