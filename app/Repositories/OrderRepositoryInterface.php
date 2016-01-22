<?php

namespace App\Repositories;

interface OrderRepositoryInterface
{
    public function all();
    public function find($order_number);
}
