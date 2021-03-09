<?php
require "../database/db.php";
include "../database/user.php";
if(isset($_POST['login'])){
   $username = $_POST['username'];
   $password = md5($_POST['password']);
   login($username,$password,$conn);
}

?>