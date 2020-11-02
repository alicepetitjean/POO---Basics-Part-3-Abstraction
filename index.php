<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Skateboard.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$bike = new Bicycle('red', 4);
var_dump($bike);
$car = new Car('red', 4, 'electric');
var_dump($car);
$skate = new Skateboard('yellow', 0);
$skate-> setNbWheels(4);
var_dump($skate);



$motorWay = new MotorWay;
$motorWay->setNbLane(4);
$motorWay->setMaxSpeed(130);
$motorWay->addVehicle (new Car('red', 4, 'electric'));
$motorWay->addVehicle (new Bicycle('red', 4));
var_dump($motorWay);



$pedestrianWay = new PedestrianWay;
$pedestrianWay->setNbLane(1);
$pedestrianWay->setMaxSpeed(10);
$pedestrianWay->addVehicle(new Bicycle('red', 4));
var_dump($pedestrianWay);



$residentialWay = new ResidentialWay;
$residentialWay->setNbLane(2);
$residentialWay->setMaxSpeed(50);
$residentialWay->addVehicle(new Skateboard('red', 0));
var_dump($residentialWay);
