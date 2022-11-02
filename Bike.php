<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';
class Bike extends Vehicle implements LightableInterface
{
    public function SwitchOn()
    {
        return $this->getCurrentSpeed() > 10 ? true : false;
    }

    public function SwitchOff()
    {
        return false;
    }
}