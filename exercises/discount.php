<?php
$price = 120;
$discount = 0;

// Prezzo maggiore di 100 -> sconto del 20%
if ($price > 100) {
    $discount = 20;
}
// Prezzo tra 50 e 100 -> sconto del 10%
else if ($price >= 50 && $price <= 100) {
    $discount = 10;
}

$finalPrice = $price - ($price * $discount / 100);

echo "<h2>Prezzo: $price €</h2>";
echo "<h2>Sconto: $discount%</h2>";
echo "<h2>Prezzo finale: $finalPrice €</h2>";
