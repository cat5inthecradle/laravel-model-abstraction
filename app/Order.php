<?php

namespace App;

class Order{

    public $order_number;
    public $alpha;
    public $bravo;

    public function fill( array $row )
    {
        $this->order_number = (!isset($row['order_number'])) ? $row['order_number'] : 'order_number required';
        $this->alpha        = $row['alpha'];
        $this->bravo        = $row['bravo'];
    }
}
