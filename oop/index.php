<?php

include 'Vehicles/Car.php';
include 'Vehicles/Truck.php';
include 'Vehicles/ToyCar.php';

use Vehicles\{Car,Truck,ToyCar};

try {
    echo 'Class ToyCar<br>';
    $toyCar = new ToyCar('Alex');
    $toyCar->move();
} catch (Exception $e) {
    echo 'This is a toy<br><br>';
    // log...
} finally {
    echo 'finally<br><br>';
}

echo 'Class Car<br>';
$car = new Car('Alex');
$car->move();
echo 'GPS pos: ' . $car->getPos();
//echo 'Owner car: ' . $car->getOwner() . '<br>';

echo 'Class truck 1<br>';
$truck = new Truck('Max', 'Pickup');
$truck->move();
//echo 'Owner truck: ' . $truck->getOwner();

echo 'Class truck 2<br>';
$truck = new Truck('Max', 'Pickup');
$truck->move();

echo '<br>Total Trucks: ' . Truck::getTotal() . '<br>';

$ser = serialize($car);
$newCar = unserialize($ser);

echo 'NewCar Owner: ' . $newCar->getOwner() . '<br>';