<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['key']) && isset($_POST['action'])) {
    $key = $_POST['key'];
    $action = $_POST['action'];

    if (isset($_SESSION['cart'][$key])) {
        if ($action == 'increase') {
            $_SESSION['cart'][$key]['quantity'] += 1;
        } elseif ($action == 'decrease' && $_SESSION['cart'][$key]['quantity'] > 1) {
            $_SESSION['cart'][$key]['quantity'] -= 1;
        }
    }
}

header("Location: ../cart.php");
exit();
?>
