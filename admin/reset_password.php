<?php
include '../config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $new_password = password_hash("default123", PASSWORD_DEFAULT);
    $conn->query("UPDATE users SET password='$new_password' WHERE id=$user_id");
    echo "Password reset successfully!";
}
?>
<form method="post">
    <input type="text" name="user_id" placeholder="User ID">
    <button type="submit">Reset Password</button>
</form>
