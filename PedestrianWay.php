<?php

require_once 'AbstractHighWay.php';

final class PedestrianWay extends AbstractHighWay
{
    public function addVehicle(vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard){
        $this->currentVehicle[] = $vehicle;
        }
    }
}
