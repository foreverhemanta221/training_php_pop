<?php

require "../database/db.php";
include "../database/users_add.php";
if(isset($_POST['save'])){
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $role = $_POST['role'];
   $username = $_POST['user'];
   $password = md5($_POST['password']);

   if($fname==""){
       echo "first name is required";
       die();
   }
   addUser($fname,$lname,$username,$password,$role,$conn);
}




?>
