<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakerFood = \Faker\Factory::create();
        $fakerFood->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($fakerFood));
        $faker = \Faker\Factory::create();
        DB::table('items')->delete();
        for ($i = 0; $i < 7; $i++) {
            $item = new Item();
            $item->itemTypeId= "1";
            $item->itemName= $fakerFood->foodName();
            $item->stock = $faker->numberBetween(1,100);
            $item->price = $faker->randomNumber(2);
            $item->save();

            $item = new Item();
            $item->itemTypeId= "2";
            $item->itemName= $fakerFood->beverageName();
            $item->stock = $faker->numberBetween(1,100);
            $item->price = $faker->randomNumber(2);
            $item->save();

            $item = new Item();
            $item->itemTypeId= "3";
            $item->itemName= $faker->company;
            $item->stock = $faker->numberBetween(1,100);
            $item->price = $faker->randomNumber(2);
            $item->save();

            $item = new Item();
            $item->itemTypeId= "4";
            $item->itemName= $faker->company;
            $item->stock = $faker->numberBetween(1,100);
            $item->price = $faker->randomNumber(2);
            $item->save();
        }
    }
}
