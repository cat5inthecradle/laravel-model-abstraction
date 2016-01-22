# Laravel Multi-Sourced Model Testing

## How it works

1. run `php artisan migrate:refresh --seed` to give yourself 10 sample orders.
2. browse to http://homestead.app/order to see your 10 orders

The `App\Order` class is not an Eloquent model, but it is aware of `App\AlphaOrder` and `App\BravoOrder`, which are backed by the local mysql database through eloquent. They do not need to both be backed by the local DB, that was just easiest for this example, `App\Order` would just require some modification to make, for example, AlphaOrder backed by some external source.

OrderRepository contains functions `all()` and `find()` which are used by OrderController.
