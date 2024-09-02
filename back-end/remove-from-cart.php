<?php
session_start();

$response = array('success' => false, 'final_price' => 0);

if (isset($_POST['key']) && isset($_SESSION['cart'][$_POST['key']])) {
    unset($_SESSION['cart'][$_POST['key']]);

    $final_price = 0;
    foreach ($_SESSION['cart'] as $item) {
        $final_price += $item['price'] * $item['quantity'];
    }

    $response['success'] = true;
    $response['final_price'] = number_format($final_price, 2);
}

echo json_encode($response);
?>
