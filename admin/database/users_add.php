<?php
function addUser($fname,$lname,$uname,$pass,$role,$conn){
    $sql = "INSERT INTO user 
                VALUES ('','$fname', '$lname', '$uname','$pass','$role')";
    if (mysqli_query($conn, $sql)) {
        header('location:/training/admin/users.php');
        // header('location:/blog/users.php');
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
}

function displayUser($conn){
    $sql="select * from user";
    $result=mysqli_query($conn,$sql) or die("Query failed".mysqli_error($conn));
    return mysqli_fetch_assoc($result);
}
function selectUser($id,$conn){
  $sql = "select * from user where user_id=$id";
  
  $result=mysqli_query($conn,$sql) or die("Query failed".mysqli_error($conn));
 
  $data =mysqli_fetch_assoc($result);
 return $data;
}

function delete_user($conn){
    $id=$_GET['id'];
    $sql="delete from user where user_id=$id";
    
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('record deleted from database')</script>";
        header('location:users.php');
    }

}
function update($id,$fname,$lname,$role,$username,$conn){
  
}


?>