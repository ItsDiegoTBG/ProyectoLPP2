<?php
require 'firebase.php';


$reviewsRef = $database->getReference('reviews/');
$reviews = $reviewsRef->getValue();
$keys = $reviewsRef->getChildKeys();
?>