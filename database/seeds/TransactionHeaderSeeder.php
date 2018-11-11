<?php

use App\TransactionHeader;
use Illuminate\Database\Seeder;

class TransactionHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction_headers')->delete();
        for ($i = 0; $i < 20; $i++){
            $transactionHeader = new TransactionHeader();
            $transactionHeader->userId = $i+1;
            $transactionHeader->transactionId = $i+1;
            $transactionHeader->save();
        }
    }
}
