
<?php
$price = 100;

function getProductPrice($price) {
    return $price + 25;
}

// Call your function here

getProductPrice($price);

echo ("price is " . $price);
?>
