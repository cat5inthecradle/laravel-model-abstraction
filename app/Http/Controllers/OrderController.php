<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\OrderRepository as Order;

class OrderController extends Controller
{

    public function __construct(Order $order)
    {
      $this->order = $order;
    }

    public function show($order_number) {
        echo "<pre>";
        var_dump($this->order->find($order_number));
        echo "<pre>";
    }

    public function index() {
        echo "<pre>";
        var_dump($this->order->all());
        echo "</pre>";
    }
}
