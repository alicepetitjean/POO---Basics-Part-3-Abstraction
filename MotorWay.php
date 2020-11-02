<?php

require_once 'AbstractHighWay.php';

final class MotorWay extends AbstractHighWay
{
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car){
            $this->currentVehicle[] = $vehicle;
        }
        
    }
}
