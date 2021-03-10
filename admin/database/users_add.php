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

// function displayUser($fname,$lname,$uname,$role,$conn){
//     $sql="select * from user";
//     $result=mysqli_query($conn,$sql) or die("Query failed".mysqli_error());

//     if(mysqli_num_rows($result)>0){
//     while($row=mysqli_fetch_assoc($result)){


//     }

function selectUser($id,$conn){
  $sql = "select * from user where user_id=$id";
  
  $result=mysqli_query($conn,$sql) or die("Query failed".mysqli_error($conn));
 
  $data =mysqli_fetch_assoc($result);
 return $data;
}


function editUser($user_id,$fname,$lname,$uname,$role,$conn){
  $sql="update user set user_id='$user_id',first_name='$fname',last_name='$lname',username='$uname',role='$role' 
  where user_id=$user_id";
  if (mysqli_query($conn, $sql)) {
      header('location:/training/admin/users.php');
      // header('location:/blog/users.php');
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
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


?>