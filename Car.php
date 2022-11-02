<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';

//class pour cars differents
class Car extends Vehicle implements LightableInterface
{
    private string $energy;
    private int $energyLevel;
    public const ALLOWED_ENERGIES = [

        'fuel',
        'electric',
    ];

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function SwitchOn()
    {
        return true;
    }

    public function SwitchOff()
    {
        return false;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }    
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function start(int $startSpeed = 15) : string
    {
        $this->currentSpeed = $startSpeed;
        return "<br/>Go !<br/>";
    }  

    public function forward(int $addSpeed = 15): string
    {
        $this->currentSpeed += $addSpeed;
        return "Go faster!<br/>";
    }

    public function brake(int $stepBrake = 1) : string
    {                
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed -= $stepBrake;
            $sentence .= "Brake !!!<br/>";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }   
}