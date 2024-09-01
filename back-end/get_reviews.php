<?php
require 'firebase.php';

$allItemsArray = array();
$reviewsRef = $database->getReference('reviews/');
$reviews = $reviewsRef->getValue();
$keys = $reviewsRef->getChildKeys();


foreach($keys as $key => $productObject){
    $revR = $database->getReference("reviews/$productObject");
    $rs = $revR->getValue();
    foreach($rs as $oKey => $oK){
        $rR = $database->getReference("reviews/$productObject/$oKey");
        $r = $rR->getValue();
        array_push($allItemsArray,$r);
    }
   
}

?>