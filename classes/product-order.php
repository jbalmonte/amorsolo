<?php

class ProductOrder
{
    public $description;
    public $unitPrice;
    public $unit;
    public $quantity;
    public $amount;

    public function __construct($description, $unitPrice, $unit, $quantity, $amount)
    {
        $this->description = $description;
        $this->unitPrice = $unitPrice;
        $this->unit = $unit;
        $this->quantity = $quantity;
        $this->amount = $amount;
    }
}
