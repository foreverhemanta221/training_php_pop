<?php
require '../database/users_add.php';
include "../database/db.php";
if(isset($_POST['submit'])){
    $user_id = $_POST['user_id'];
   $fname = $_POST['f_name'];
   $lname = $_POST['l_name'];
   $role = $_POST['role'];
   $uname = $_POST['username'];
   if($fname==""){
       echo "first name is required";
       die();
   }
  editUser($user_id,$fname,$lname,$uname,$role,$conn);
}else{
    echo mysqli_error($conn);
}

?>