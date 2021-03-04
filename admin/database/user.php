<?php 

function insert($fname,$lname,$uname,$pass,$role,$conn){
    $sql = "INSERT INTO user 
                VALUES ('','$fname', '$lname', '$uname','$pass','$role')";
    if (mysqli_query($conn, $sql)) {
        header('location:/blog/admin/index.php');
        // header('location:/blog/users.php');
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
}



?>