<?php
 session_start();

 if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [
        ["id" => 1, "name" => "Niraj", "email" => "Niraj@test.com"],
        ["id" => 2, "name" => "Parth", "email" => "Parth@test.com"]
    ];
}

 if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    
     $_SESSION['users'] = array_filter($_SESSION['users'], function($u) use ($delete_id) {
        return $u['id'] != $delete_id;
    });
    
     header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Table</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background: #eee; }
        a { color: #d9534f; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>

    <h2>Users List</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>

        <?php if (empty($_SESSION['users'])): ?>
            <tr>
                <td colspan="4" style="text-align: center;">No users found.</td>
            </tr>
        <?php else: ?>
            <?php foreach ($_SESSION['users'] as $u): ?>
            <tr>
                <td><?php echo $u['id']; ?></td>
                <td><?php echo $u['name']; ?></td>
                <td><?php echo $u['email']; ?></td>
                <td>
                    <a href="index.php?delete_id=<?php echo $u['id']; ?>" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>

</body>
</html>