<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
</head>
<body>

<h2>Upload Image</h2>

<form method="post" enctype="multipart/form-data">
    Select Image:
    <input type="file" name="image"><br><br>
    <input type="submit" name="upload" value="Upload">
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $directory = "uploads/";

    if(!is_dir($directory))
    {
        mkdir($directory, 0777, true);
    }

    $image_name = $_FILES['image']['name'];
    $image_tmp  = $_FILES['image']['tmp_name'];
    $image_error = $_FILES['image']['error'];

    if($image_error == 0)
    {
        move_uploaded_file($image_tmp, $directory.$image_name);
        echo "<h3>Image Uploaded Successfully!</h3>";
    }
    else
    {
        echo "<h3>Image Upload Failed!</h3>";
    }
}
?>