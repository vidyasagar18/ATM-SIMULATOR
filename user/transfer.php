<?php
session_start();
include '../config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_user = $_POST['to_user'];
    $amount = $_POST['amount'];
    $from_user = $_SESSION['user_id'];
    $conn->query("UPDATE users SET balance = balance - $amount WHERE id=$from_user");
    $conn->query("UPDATE users SET balance = balance + $amount WHERE username='$to_user'");
    echo "Transfer successful!";
}
?>
<form method="post">
    <input type="text" name="to_user" placeholder="Receiver Username">
    <input type="number" name="amount" placeholder="Amount">
    <button type="submit">Transfer</button>
</form>
