<?php

require "../database/db.php";
include "../database/post_add.php";

if(isset($_POST['submit'])){
 
    if(isset($_FILES['fileToUpload']))
    {
    
    $file_name=$_FILES['fileToUpload']['name'];
    // echo $file_name;
    $file_type=$_FILES['fileToUpload']['type'];
    $file_tmp=$_FILES['fileToUpload']['tmp_name'];
    $file_size=$_FILES['fileToUpload']['size'];
    
    
    if(!empty($file_name))
    {
    
    $file_actual = strtolower(pathinfo($file_name,PATHINFO_EXTENSION)); 
    
    
    // valid image extensions
    $valid_extensions = array('jpeg','jpg','gif'); 
    
    
    if(in_array($file_actual, $valid_extensions))
    {
    move_uploaded_file($file_tmp,"../upload/".$file_name);
    
        echo "images uploaded:";
    }else{
        echo "Sorry only jpg,jpeg and gif allowed:";
    }
    
    
    
    }
    }
    session_start();
    $title=mysqli_real_escape_string($conn,$_POST['post_title']);
    $description=mysqli_real_escape_string($conn,$_POST['postdesc']);
    $category=mysqli_real_escape_string($conn,$_POST['category']);
    $date=date("d M,Y");
    $author=$_SESSION['user_id'];
    echo $author;

    addPost($title,$description,$category,$date,$author,$file_name,$conn);

}


?>
