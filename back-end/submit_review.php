<?php
require 'firebase.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productName = $_POST['product_name'];
    $rating = $_POST['rating'];
    $review = $_POST['review'];
    
    $reviewsRef = $database->getReference('reviews/'.$productName);
    $newReview = [
        'product_name' => $productName,
        'rating' => $rating,
        'review' => $review,
        'timestamp' => date('Y-m-d H:i:s')
    ];
    
    $reviewsRef->push($newReview);

    header("Location: ../shop.php");
    exit();
}
?>