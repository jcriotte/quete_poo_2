<?php

require_once 'Vehicule.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
$bike = new Bicycle($color = 'blue');
var_dump($bike);

$jcCar = new Car($color = 'red', $nbSeats = 2, $energy = 'essence');
var_dump($jcCar);

$bike->forward();
echo $jcCar->start();
$jcCar->forward();

var_dump($bike);
var_dump($jcCar);

$bike->brake();
$jcCar->brake();

var_dump($bike);
var_dump($jcCar);

echo $bike->brake();
echo $jcCar->brake();

var_dump($bike);
var_dump($jcCar);


$truck1 = new Truck('red', 3, 'fuel', 150);
var_dump($truck1);

$truck2 = new Truck('yellow', 2, 'fuel', 50);
var_dump($truck2);

echo $truck1->start();
echo $truck2->start();

$truck2->setCharged(true);
$truck1->setCharged(false);

$truck1->forward();
var_dump($truck1);
var_dump($truck2);

echo $truck1->brake();
echo $truck1->brake();




?>
