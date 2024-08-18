<?php
require 'firebase.php';

$productName = $_GET['product_name'];
$reviewsRef = $database->getReference('reviews/'.$productName);
$reviews = $reviewsRef->getValue();

echo '<h3>Reviews</h3>';
if ($reviews) {
    foreach ($reviews as $review) {
        echo '<div>';
        echo '<p>ProductName: '.$review['product_name'].'</p>';
        echo '<p>Rating: '.$review['rating'].'</p>';
        echo '<p>Review: '.$review['review'].'</p>';
        echo '<p>Date: '.$review['timestamp'].'</p>';
        echo '</div>';
    }
} else {
    echo 'No reviews yet.';
}
?>