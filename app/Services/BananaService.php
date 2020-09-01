<?php


namespace App\Services;


class BananaService
{
    private $_car = null;
     function __construct()
    {
        $this->_car = app('CarService');
    }

    public function doPrint()
    {
        var_dump('doPrint');
        var_dump($this->_car);
        $this->_car->doPrint();
    }
}
