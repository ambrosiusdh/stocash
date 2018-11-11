<?php

use App\TransactionHeader;
use App\UserRole;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserRoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(ItemTypeSeeder::class);
        $this->call(ShippedItemSeeder::class);
        $this->call(TransactionSeeder::class);
        $this->call(TransactionHeaderSeeder::class);
    }
}
