<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product = [
        'name' => $_POST['product_name'],
        'price' => $_POST['product_price'],
        'image' => $_POST['product_image'],
        'quantity' => 1 
    ];

    $found = false;
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as &$item) {
            if ($item['name'] == $product['name']) {
                $item['quantity'] += 1;
                $found = true;
                break;
            }
        }
    }

    if (!$found) {
        $_SESSION['cart'][] = $product;
    }

    header("Location: ../cart.php");
    exit();
}
?>
