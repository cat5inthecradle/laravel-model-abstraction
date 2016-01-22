<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++) {
            $aO = factory(App\AlphaOrder::class)->create(['order_number' => 1000 + $i]);
            $bO = factory(App\BravoOrder::class)->create(['order_number' => 1000 + $i]);
        }
    }
}
