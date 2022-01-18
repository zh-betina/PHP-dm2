<?php

class Money {

    private $amount;
    public $dollarCost;
    public $euroCost;

    public function __construct()
    {
        $this->dollarCost = 1.13;
        $this->euroCost = 0.87;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
    }

    public function dollarToEuro() {
        if ($this->amount > 0) {
            return $this->amount * $this->euroCost;
        } else {
            return -1;
        }
    }

    public function euroToDollar() {
        if ($this->amount > 0) {
            return $this->amount * $this->dollarCost;
        } else {
            return -1;
        }
    }
}