<?php

namespace App\Repositories;

use \App\Order;
use \App\AlphaOrder;
use \App\BravoOrder;
use Log;

class OrderRepository implements OrderRepositoryInterface
{

    public function all()
    {
        $orders = [];
        foreach($this->getAllAlphaOrders() as $alphaOrder) {
            $orders[] = $this->buildOrderFromAlpha($alphaOrder);
        }
        return $orders;
    }

    public function find($order_number)
    {
        return $this->buildOrderFromAlpha(
            AlphaOrder::where([
                'order_number' => $order_number,
            ])->get()->first()
        );
    }

    private function buildOrderFromAlpha($alphaOrder)
    {
        $bravoOrder = $this->getBravoOrder($alphaOrder->order_number);
        $order = new Order;
        $order->fill([
            'order_number' => $alphaOrder->order_number,
            'alpha' => $alphaOrder->alpha,
            'bravo' => $bravoOrder->bravo,
        ]);
        return $order;
    }

    private function getAllAlphaOrders()
    {
        return AlphaOrder::all();
    }

    private function getBravoOrder($order_number)
    {
        return BravoOrder::where(['order_number' => $order_number])->get()->first();
    }

}
