<?php

require_once 'AbstractHighWay.php';

final class ResidentialWay extends AbstractHighWay
{
    public function addVehicle(vehicle $vehicle)
    {
      $this->currentVehicle[] = $vehicle;
    }
}
