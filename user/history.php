<?php
session_start();
include '../config.php';
$user_id = $_SESSION['user_id'];
$transactions = $conn->query("SELECT * FROM transactions WHERE user_id=$user_id");
?>
<html>
<head><title>Transaction History</title></head>
<body>
    <h2>Your Transactions</h2>
    <ul>
        <?php while ($transaction = $transactions->fetch_assoc()): ?>
            <li><?php echo $transaction['details']; ?> - <?php echo $transaction['amount']; ?></li>
        <?php endwhile; ?>
    </ul>
</body>
</html>
