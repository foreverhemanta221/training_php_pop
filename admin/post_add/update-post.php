<?php
require '../database/post_add.php';
include "../database/db.php";
if(isset($_POST['submit'])){
    $post_id=mysqli_real_escape_string($conn,$_POST['post_id']);
    $post_title=mysqli_real_escape_string($conn,$_POST['post_title']);
    $postdesc=mysqli_real_escape_string($conn,$_POST['postdesc']);
   
    $category=mysqli_real_escape_string($conn,$_POST['category']);
    $old_image=mysqli_real_escape_string($conn,$_POST['old-image']);


    update_post($post_id,$post_title,$postdesc,$category,$old_image,$conn);
    
}


?>