<?php

require "../database/db.php";
include "../database/category_add.php";
if(isset($_POST['sumbit'])){
    $category_id=$_POST['category_id'];
   $category_name= $_POST['cat_name'];
   if($category_name==""){
       echo "category name is required";
       die();
   }
    editcategory($category_id,$category_name,$conn);
}

?>
