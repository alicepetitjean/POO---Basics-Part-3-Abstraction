<?php 
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Skateboard.php';
require_once 'Truck.php';


$kangoo = new Car('red', 4 , 'fuel');
$kangoo -> setParkBrake(true) ;

var_dump ($kangoo);
try{
    echo $kangoo->start();
}catch (Exception $e){
    echo "Exception received: ". $e->getMessage() . '<br>';
    $kangoo->setParkBrake(false);
}
finally{
    echo "Ma voiture roule comme un donut";
}
var_dump ($kangoo);



$bike = new Bicycle('blue', 1);
$skateboard = new Skateboard('green' , 0);
$truck = new Truck('455','black', 2 , 'fuel');

/*var_dump ($bike);
var_dump ($skateboard);
var_dump ($truck);

$motorway = new MotorWay();

var_dump ($motorway);

$pedestrianway = new PedestrianWay();

var_dump ($pedestrianway);

$residentialway = new ResidentialWay();

var_dump ($residentialway);
