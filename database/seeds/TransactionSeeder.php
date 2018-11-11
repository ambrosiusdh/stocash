<?php

use App\ShippedItem;
use App\Transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->delete();
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 20; $i++){
            $transaction = new Transaction();
            $transaction->transactionHeaderId = $i+1;
            $transaction->totalPrice = $faker->randomNumber(5);
            $transaction->save();
        }
    }
}
