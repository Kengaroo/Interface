<?php
require_once 'Bike.php';
require_once 'Car.php';
require_once 'SkateBoard.php';

$bicycle = new Bike('blue', 1);
echo $bicycle->forward();
if ($bicycle->SwitchOn()) {
    echo '<br/>Switch on';
} else {
    echo '<br/>Speed is not enough';
}
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
var_dump($car);
echo $car->forward();

$skate = new SkateBoard('green');