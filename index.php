<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();

$car = new Car('green', '2', 'electric');
$car->setNbWheels(4);
echo $car->forward();

$truck = new Truck(1000,'black',8, 'diesel');
$truck->setLoad(90);
echo $truck->loadStatus();


$truck2 = new Truck(350, 'red', '2', 'electric');
$truck2->setLoad(90);
echo $truck2->loadStatus();
echo $truck2->forward();
echo $truck2->brake();
var_dump($truck2);