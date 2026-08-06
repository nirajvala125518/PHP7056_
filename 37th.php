<?php
$conn = new mysqli("localhost", "root", "", "user_management");

if (isset($_GET['del'])) {
    $conn->query("DELETE FROM users WHERE id=" . $_GET['del']);
    header("Location: 37th.php");
}

if (isset($_POST['submit'])) {
    if ($_POST['password'] === $_POST['confirm_password']) {
        $img = time() . "_" . $_FILES["pic"]["name"];
        move_uploaded_file($_FILES["pic"]["tmp_name"], "uploads/" . $img);
        $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $conn->query("INSERT INTO users (username, password, phone_number, email, profile_picture) VALUES ('{$_POST['username']}', '$pass', '{$_POST['phone']}', '{$_POST['email']}', '$img')");
        header("Location: 37th.php");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
img { width: 40px; height: 40px; border-radius: 50%; object-fit: cover; }
table { width: 100%; border-collapse: collapse; margin-top: 20px; }
th, td { border: 1px solid #ddd; padding: 8px; text-align: center; }
th { background: #007bff; color: white; }
</style>
</head>
<body>

<?php if (isset($_GET['edit'])): 
    $u = $conn->query("SELECT * FROM users WHERE id=" . $_GET['edit'])->fetch_assoc();
    if (isset($_POST['update'])) {
        $conn->query("UPDATE users SET username='{$_POST['username']}', phone_number='{$_POST['phone']}', email='{$_POST['email']}' WHERE id=" . $_GET['edit']);
        header("Location: 37th.php");
    }
?>
    <h3>Edit User</h3>
    <form method="POST">
        <input type="text" name="username" value="<?= $u['username'] ?>" required><br><br>
        <input type="text" name="phone" value="<?= $u['phone_number'] ?>" required><br><br>
        <input type="email" name="email" value="<?= $u['email'] ?>" required><br><br>
        <button type="submit" name="update">Update</button>
        <a href="37th.php">Cancel</a>
    </form>
<?php else: ?>
    <h3>Register</h3>
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="username" placeholder="UserName" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required><br><br>
        <input type="text" name="phone" placeholder="Phone Number" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="file" name="pic" accept="image/*" required><br><br>
        <button type="submit" name="submit">Save</button>
    </form>
<?php endif; ?>

<h3>Users List</h3>
<table>
    <tr><th>Picture</th><th>User</th><th>Email</th><th>Phone</th><th>Action</th></tr>
    <?php
    $res = $conn->query("SELECT * FROM users");
    while($r = $res->fetch_assoc()) {
        echo "<tr>
            <td><img src='uploads/{$r['profile_picture']}'></td>
            <td>{$r['username']}</td>
            <td>{$r['email']}</td>
            <td>{$r['phone_number']}</td>
            <td>
                <a href='?edit={$r['id']}'>Edit</a> | 
                <a href='?del={$r['id']}' onclick='return confirm(\"Delete?\")'>Delete</a>
            </td>
        </tr>";
    }

    ?>
</table>

</body>
</html>