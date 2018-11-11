<?php

use App\ShippedItem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippedItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shipped_items')->delete();
        $faker = Faker\Factory::create();
        for ($i = 1; $i <= 20; $i++){
            $shippedItem = new ShippedItem();
            $shippedItem->itemId = $faker->numberBetween(1,25);
            $shippedItem->transactionId = $i;
            $shippedItem->amount = $faker->numberBetween(1,10);
            $shippedItem->save();

            $shippedItem = new ShippedItem();
            $shippedItem->itemId = $faker->numberBetween(1,25);
            $shippedItem->transactionId = $i;
            $shippedItem->amount = $faker->numberBetween(1,10);
            $shippedItem->save();

            $shippedItem = new ShippedItem();
            $shippedItem->itemId = $faker->numberBetween(1,25);
            $shippedItem->transactionId = $i;
            $shippedItem->amount = $faker->numberBetween(1,10);
            $shippedItem->save();
        }
    }
}
