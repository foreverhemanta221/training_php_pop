<?php  

if($_SERVER['REQUEST_METHOD']=="GET"){
    include __DIR__."/database/db.php";
    include __DIR__."/database/category_add.php";
        $category_id = $_GET['id'];
        $data = selectcategory($category_id,$conn);   
}else{
    header("location:'".__DIR__."/index.php'");
}
?>


<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="adin-heading"> Update Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <form action="/admin/category_add/category_update.php" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="cat_id"  class="form-control" value="<?php echo $data['category_id'];  ?>" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cat_name" class="form-control" value="<?php echo $data['category_name'];  ?>"  placeholder="" required>
                      </div>
                      <input type="submit" name="sumbit" class="btn btn-primary" value="Update" required />
                  </form>
                </div>
              </div>
            </div>
          </div>
<?php include "footer.php"; ?>
