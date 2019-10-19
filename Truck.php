<?php
require_once 'Vehicle.php';

class Truck extends Vehicle


{
    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $loadCapacity;


    /**
     * @var int
     */
    private $load;

    public function __construct(int $loadCapacity, string $color, int $nbSeats, string $energy)
    {

        parent::__construct($color, $nbSeats);

        $this->load = 0;
        $this->loadCapacity = $loadCapacity;
        $this->energy = $energy;
    }

    public function loadStatus(): string
    {
        if ($this->load < $this->loadCapacity) {
            return 'in filling';
        } else {
            return 'full';
        }
    }

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     */
    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    /**
     * @return int
     */
    public function getLoadCapacity(): int
    {
        return $this->loadCapacity;
    }

    /**
     * @param int $loadCapacity
     */
    public function setLoadCapacity(int $loadCapacity): void
    {
        $this->loadCapacity = $loadCapacity;
    }

    /**
     * @return int
     */
    public function getLoad(): int
    {
        return $this->load;
    }

    /**
     * @param int $load
     */
    public function setLoad(int $load): void
    {
        $this->load = $load;
    }
}