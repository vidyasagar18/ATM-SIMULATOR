<?php
session_start();
include '../config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST['amount'];
    $user_id = $_SESSION['user_id'];
    $conn->query("UPDATE users SET balance = balance - $amount WHERE id=$user_id");
    echo "Withdrawal successful!";
}
?>
<form method="post">
    <input type="number" name="amount" placeholder="Enter Amount">
    <button type="submit">Withdraw</button>
</form>
