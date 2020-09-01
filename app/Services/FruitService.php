<?php


namespace App\Services;


class FruitService
{
    private $_name = '';
    private $_price = 0;
    public function FruitService($name, $price)
    {
        $this->_name = $name;
        $this->_price = $price;
    }

    public function getValueToString()
    {
        return sprintf('name=%s, price=%d', $this->_name, $this->_price);
    }

    public function toString()
    {
        echo $this->getValueToString();
        return;
    }
}
