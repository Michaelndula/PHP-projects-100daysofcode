<?php

/*
    //TO-DO:
    1. Create a Basket class
    2. Add itemsTotal and shippingCost public properties
    3. Instantiate a Basket using the new keyword
    4. Set values for both properties
    5. Use var_dump() and check your work in the browser
*/

class Basket{
    public $itemsTotal;
    public $shippingCost;
    public $discount;

    public function calculateSubTotal() {
        $subTotal = $this->itemsTotal + $this->shippingCost - $this->discount;

        return $subTotal;
    }
}

$basketObject = new Basket();

$basketObject->itemsTotal = 150.75;
$basketObject->shippingCost = 2.8;
$basketObject->discount = 5.5;

$subTotal = $basketObject->calculateSubTotal();

var_dump($subTotal);