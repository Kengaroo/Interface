<?php
require_once 'Vehicle.php';

class SkateBoard extends Vehicle
{
    protected int $nbSeats = 0;
    public function __construct(protected string $color, $nbSeats = 0)
    {
        parent::__construct($color, $nbSeats);
    }
}