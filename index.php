<?php

require_once 'Truck.php';

$truck = new Truck(1000,'black',8, 'diesel');
$truck->setLoad(90);
echo $truck->loadStatus();


$truck2 = new Truck(350, 'red', '2', 'electric');
$truck2->setLoad(90);
echo $truck2->loadStatus();
echo $truck2->forward();
echo $truck2->brake();
var_dump($truck2);