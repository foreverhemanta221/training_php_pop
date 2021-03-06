<?php  

if($_SERVER['REQUEST_METHOD']=="GET"){
    include __DIR__."/database/db.php";
    include __DIR__."/database/users_add.php";
        $user_id = $_GET['id'];
        $data = selectUser($user_id,$conn);   
}else{
    header("location:'".__DIR__."/index.php'");
}
?>

<?php include "header.php"; ?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Modify User Details</h1>
            </div>
            <div class="col-md-offset-4 col-md-4">
                <!-- Form Start -->
                <form  action="" method ="POST">
                    <div class="form-group">
                        <input type="hidden" name="user_id"  class="form-control" value="<?=$data['user_id']?>" placeholder="" >
                    </div>
                        <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="f_name" class="form-control" value="<?=$data['first_name']?>" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="l_name" class="form-control" value="<?=$data['last_name']?>" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" name="username" class="form-control" value="<?=$data['username']?>" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>User Role</label>
                        <select class="form-control" name="role">
                            <option value="0" <?= $data['role']=="0"?"selected":''?> >Normal User</option>
                            <option value="1" <?= $data['role']=="1"?"selected":''?>>Admin</option>
                         
                        </select>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                </form>
                <!-- /Form -->
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>



?>

