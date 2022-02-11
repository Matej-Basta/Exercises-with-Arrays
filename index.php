<?php

$cars_i_want = [];

$cars_i_want[] = "Aston Martin";
$cars_i_want[] = "Bugatti";
$cars_i_want[] = "Ferrari";
$cars_i_want[] = "Lamborghini";
$cars_i_want[] = "Maserati";
$cars_i_want[] = "Mercedes";
$cars_i_want[] = "Porsche";
$cars_i_want[] = "Skoda";

echo "<ul>";

foreach($cars_i_want as $car) {
    echo "<li>{$car}</li>";
}

echo "</ul>";

$car_prices = [
    'Skoda Octavia' => 270000,
    'Volkswagen Golf' => 170000,
    'BMW X6' => 380000,
    'Porsche 911' => 1150000
];

echo "You have a Porsche for just {$car_prices["Porsche 911"]} CZK<br/>";

foreach($car_prices as $car => $price) {
    echo "The price of {$car} is {$price} CZK.<br/>";
}
?>