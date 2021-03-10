
<?php include "header.php";

if($_SERVER['REQUEST_METHOD']=="GET"){
    include __DIR__."/database/db.php";
    include __DIR__."/database/post_add.php";
        $post_id = $_GET['id'];
        $row = selectUser($post_id,$conn);   
}else{
    header("location:'".__DIR__."/index.php'");
}
?>
<div id="admin-content">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
        <h1 class="admin-heading">Update Post</h1>
    </div>
    <div class="col-md-offset-3 col-md-6">
        
        <!-- Form for show edit-->
        <form action="/training/admin/post_add/update-post.php" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="form-group">
                <input type="hidden" name="post_id"  class="form-control" value="<?php echo $row['post_id'] ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputTile">Title</label>
                <input type="text" name="post_title"  class="form-control" id="exampleInputUsername" value="<?php echo $row['title'] ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"> Description</label>
                <textarea name="postdesc" class="form-control"  required rows="5">
                <?php echo $row['description'] ?>
                </textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputCategory">Category</label>
                <select class="form-control" name="category">
                <option  disabled> Select Category</option>
                              <?php
                              include 'config.php';
                            $sql1="select * from category";
                                    $result1=mysqli_query($conn,$sql1) or die("Query failed".mysqli_error());

                            if(mysqli_num_rows($result1)>0){
                                while($row1=mysqli_fetch_assoc($result1)){
                                    echo "<option value='{$row1['category_id']}'>{$row1['category_name']}</option>";
                                }
                            }
                                ?>

                </select>
            </div>
            <div class="form-group">
                <label for="">Post image</label>
                <input type="file" name="new-image">
                <img  src="<?php echo $imgurl; ?>" height="150px">
                <input type="hidden" name="old-image" value="<?php echo $row['post_img']; ?>">
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Update" />
        </form>
        <!-- Form End -->
    
      </div>
    </div>
  </div>
</div>
<?php include "footer.php"; ?>
