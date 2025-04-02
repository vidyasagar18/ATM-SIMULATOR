<?php
session_start();
include '../config.php';
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}
?>
<html>
<head><title>Admin Dashboard</title></head>
<body>
    <h2>Welcome, Admin</h2>
    <a href="manage_users.php">Manage Users</a>
    <a href="reset_password.php">Reset Password</a>
    <a href="transaction_history.php">View Transactions</a>
    <a href="logout.php">Logout</a>
</body>
</html>
