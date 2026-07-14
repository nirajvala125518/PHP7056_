<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <style>
body{text-align:center; font-family:Arial;}
input{width:200px; padding:5px; margin:5px;}
</style>
</head>
<body>

    <h2>Add Product Form</h2>

    <form method="post" enctype="multipart/form-data">

        Product ID :
        <input type="text" name="product_id" required><br>

        Product Name :
        <input type="text" name="name" required><br>

        Price :
        <input type="number" step="0.01" name="price" required><br>

        Quantity :
        <input type="number" name="quantity" required><br>

        Type<br>
        <select name="type" required>
            <option value="">Select Type...</option>
            <option value="Electronics">Electronics</option>
            <option value="Clothing">Clothing</option>
            <option value="Chemical">Chemical</option>
            <option value="Other">Other</option>
        </select><br>

        Product Image<br>
        <input type="file" name="image" required><br>

        <input type="submit" name="submit" value="Add Product">

    </form>

</body>
</html>
<?php
session_start();

if (isset($_POST['submit'])) {
     if (!file_exists('uploads')) {
        mkdir('uploads', 0777, true);
    }

    
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        move_uploaded_file($_FILES['image']['tmp_name'], "uploads/" . $_FILES['image']['name']);
        echo "<h3 style='color:green;'>You have signed up successfully.</h3>";
    }
    else
    {
        echo "<h3 style='color:red;'>'Oops! The passwords you entered do not match. Please try again.'</h3>";
    }
}
    

?>
<?php
 
if(isset($_SESSION['flash_message']))
{
    echo $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);  
}
?>