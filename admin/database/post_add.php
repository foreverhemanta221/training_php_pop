<?php
function addPost($title,$description,$category,$date,$author,$file_name,$conn){
  $sql="insert into post values('','$title','$description','$category','$date','$author','$file_name');";
  $sql .= "update category set post= post + 1 where category_id='$category'";

if(mysqli_multi_query($conn,$sql)){
        header('location:/training/admin/post.php');
        // header('location:/blog/users.php');
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
}


function delete_post($conn){
  $post_id=$_GET['id'];
$cat_id=$_GET['catid'];

$sql1="select * from post where post_id={$post_id}";
$result=mysqli_query($conn,$sql1) or die("Query failed");
$row=mysqli_fetch_assoc($result);

// echo "<pre>";
// print_r($row);
// echo "<pre>";
unlink("upload/".$row['post_img']);


$sql="delete from post where post_id={$post_id};";
$sql .="update category set post =post-1 where category_id={$cat_id}";

$result=mysqli_multi_query($conn,$sql);
if($result){
    echo "<script>alert('record deleted from database')</script>";
    header('location:post.php');

}
}

function selectUser($id,$conn){
  $sql = "select * from post where post_id=$id";
  
  $result=mysqli_query($conn,$sql) or die("Query failed".mysqli_error($conn));
 
  $row =mysqli_fetch_assoc($result);
 return $row;
}

function update_post($post_id,$post_title,$postdesc,$category,$old_image,$conn){
  $sql="update post set post_id='$post_id',title='$post_title',description='$postdesc',category='$category',post_img='$old_image' where post_id=$post_id";
    $result=mysqli_query($conn,$sql);
   if($result){
    header('location:/training/admin/post.php');
   }
}


?>