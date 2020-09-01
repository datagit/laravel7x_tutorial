<?php


namespace App\Services;


class AppleService extends FruitService
{
    private $_car = null;
    public function setCarService(CarService $car)
    {
        $this->_car = $car;
    }
    public function doPrint()
    {
        $s = $this->getValueToString();
        print_r($s);
        $this->_car->doPrint();
        return;
    }
}
