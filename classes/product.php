<?php

class Product
{
    private static $ctr = 1;
    public $product_code;
    public $desription;
    public $unit;
    public $unit_price;

    public function __construct($description, $unit, $unit_price)
    {
        $this->product_code = self::$ctr;
        $this->description = $description;
        $this->unit = $unit;
        $this->unit_price = $unit_price;
        //increment the id
        self::$ctr += 1;
    }
}
