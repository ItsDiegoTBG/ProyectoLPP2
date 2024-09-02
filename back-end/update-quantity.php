<?php
session_start();

$response = array('success' => false, 'final_price' => 0);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['key']) && isset($_POST['action'])) {
    $key = $_POST['key'];
    $action = $_POST['action'];

    if (isset($_SESSION['cart'][$key])) {
        if ($action == 'increase') {
            $_SESSION['cart'][$key]['quantity'] += 1;
        } elseif ($action == 'decrease' && $_SESSION['cart'][$key]['quantity'] > 1) {
            $_SESSION['cart'][$key]['quantity'] -= 1;
        }

        $final_price = 0;
        foreach ($_SESSION['cart'] as $item) {
            $final_price += $item['price'] * $item['quantity'];
        }

        $response['success'] = true;
        $response['final_price'] = number_format($final_price, 2);
    }
}

header('Content-Type: application/json');
echo json_encode($response);
?>

