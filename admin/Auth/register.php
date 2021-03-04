<?php
require "../database/db.php";
include "../database/user.php";
if(isset($_POST['register'])){
   $fname = $_POST['firstname'];
   $lname = $_POST['lastname'];
   $role = $_POST['role'];
   $username = $_POST['username'];
   $password = md5($_POST['password']);

   if($fname==""){
       echo "first name is required";
       die();
   }
   insert($fname,$lname,$username,$password,$role,$conn);
}



?>