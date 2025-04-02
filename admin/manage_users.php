<?php
include '../config.php';
$users = $conn->query("SELECT * FROM users");
?>
<html>
<head><title>Manage Users</title></head>
<body>
    <h2>Users List</h2>
    <ul>
        <?php while ($user = $users->fetch_assoc()): ?>
            <li><?php echo $user['username']; ?>
                <a href="delete_user.php?id=<?php echo $user['id']; ?>">Delete</a>
            </li>
        <?php endwhile; ?>
    </ul>
</body>
</html>
