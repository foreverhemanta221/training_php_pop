<?php
    function category_add($cat,$conn){
        $sql="insert into category values('','$cat','')";
        if(mysqli_query($conn,$sql)){
            header('location:../category.php');
        }


    }

    function delete_category($conn){
        $id=$_GET['id'];
        $sql="delete from category where category_id=$id";
        
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "<script>alert('record deleted from database')</script>";
            header('location:category.php');
        }
    
    }

?>