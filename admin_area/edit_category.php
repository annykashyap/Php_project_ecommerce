<?php 
include('../includee/connection.php');
if(isset($_GET['edit_category'])){
    $edit_category=$_GET['edit_category'];
    //echo $edit_category;
    $get_category="SELECT * FROM `categories` WHERE category_id=$edit_category";
    $result=mysqli_query($con,$get_category);
    $row_data=mysqli_fetch_assoc($result);
    $category_title=$row_data['category_title'];
    //echo $category_title;
}
if(isset($_POST['update_cat'])){
    $cat_title=$_POST['category_title'];
    $update_query="UPDATE `categories` SET category_title='$cat_title' WHERE category_id=$edit_category";
    $result_cat=mysqli_query($con,$update_query);
    if($result_cat){
        echo "<script>alert('category updated successfully')</script>";
        echo "<script>window.open('./index.php?view_categories','_self')</script>";
    }


}
?>
    <div class="container mt-3">
        <h1 class="text-center">Edit Category </h1>
        <form action="" method="post" class="text-center">
            <div class="form-outline mb-4 m-auto w-50">
                <label for="category_title" class="form-label">Category title</label>
                <input type="text" name="category_title" id="category_title" class="form-control" required="required" value="<?php echo $category_title; ?>">
            </div>
            <input type="submit" value="update category" class="btn btn-info px-3 mb-3" name="update_cat">
</form>
</div>
