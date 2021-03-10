<?php

require "../database/db.php";
include "../database/category_add.php";
if(isset($_POST['save'])){
   $cat = $_POST['cat'];
   if($cat==""){
       echo "category name is required";
       die();
   }
   category_add($cat,$conn);
}





?>
