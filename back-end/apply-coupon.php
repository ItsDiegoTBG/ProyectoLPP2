<?php
session_start();

$response = array('success' => false, 'subtotal' => 0, 'total' => 0);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['coupon'])) {
    $couponCode = $_POST['coupon'];

    // Supongamos que tenemos un array de cupones válidos
    $coupons = array(
        'DISCOUNT10' => 10, // 10% de descuento
        'DISCOUNT20' => 20  // 20% de descuento
    );

    if (array_key_exists($couponCode, $coupons)) {
        $discountPercentage = $coupons[$couponCode];

        // Calcular el subtotal y aplicar el descuento
        $subtotal = 0;
        foreach ($_SESSION['cart'] as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }

        $discountAmount = ($subtotal * $discountPercentage) / 100;
        $total = $subtotal - $discountAmount;

        $response['success'] = true;
        $response['subtotal'] = number_format($subtotal, 2);
        $response['total'] = number_format($total, 2);
    } else {
        // Cupón no válido
        $response['success'] = false;
    }
}

header('Content-Type: application/json');
echo json_encode($response);
?>
