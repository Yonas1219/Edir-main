<?php 
require_once '../controller/connect.php';
require_once 'admin-header.php';
require_once '../controller/functions.php';

if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"]; 
 
    $folder = "../assets/image/timeline/".$filename;
 
    if (move_uploaded_file($tempname, $folder)){
        $msg = "Image uploaded successfully";
    }
    else{
        $msg = "Failed to upload image";
    }

    $slug = create_slug($title);
    $query="INSERT INTO timeline (title, content, filename, slug) VALUES('$title','$content','$filename','$slug')";

    if(mysqli_query($connection, $query))
    {
        echo "Form Inserted Succesfully!";
    }
     
      mysqli_close($connection);
  }
?>
<div class="col-12 p-3">
<div class="card p-3 p-md-5">
<h3>Add New Timeline</h3>
<form action="" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6">
            <label for="title">Title:</label>
            <input class="form-control mb-1" type="text" name="title" id="title" required>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label for="cover">image:</label>
            <input class="form-control mb-1" type="file" name="uploadfile" id="cover">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="content">Content:</label>
            <textarea class="form-control mb-1" rows="5" type="text" name="content" id="content"></textarea>
        </div>
    </div>
    <div class="p-1 text-end"><button class="float-end btn btn-dark col-12 col-md-4 btn-lg" type="submit" name="submit">Publish Post</button></div>
</form>
</div></div>
<?= require_once 'admin-footer.php'; ?>
