<?php 

function insert($fname,$lname,$uname,$pass,$role,$conn){
    $sql = "INSERT INTO user 
                VALUES ('','$fname', '$lname', '$uname','$pass','$role')";
    if (mysqli_query($conn, $sql)) {
        header('location:/training/admin/index.php');
        // header('location:/blog/users.php');
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
}

function login($uname,$pass,$conn){
  $sql = "select * from user where username='$uname' && password='$pass'";
			$results = mysqli_query($conn, $sql);

			if(mysqli_num_rows($results) == 1){
        session_start();
          $_SESSION['username'] = $uname;
          echo $_SESSION['username'];
				 header('location:../users.php');
				}
		else{
			echo "<script>alert('Incorrect Password.Please try again')</script>";
		
	}

}


?>