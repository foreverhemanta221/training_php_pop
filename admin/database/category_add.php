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





    function selectcategory($id,$conn){
        $sql = "select * from category where category_id=$id";
        
        $result=mysqli_query($conn,$sql) or die("Query failed".mysqli_error($conn));
       
        $data =mysqli_fetch_assoc($result);
       return $data;
      }
      
      
      function editcategory($category_id,$category_name,$conn){
        $sql="update category set category_id='$category_id',category_name='$category_name'
        where category_id=$category_id";
        if (mysqli_query($conn, $sql)) {
            header('location:/training/admin/category.php');
            // header('location:/blog/users.php');
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
      }
      
?>