<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('users')->delete();
        $user = new User();
        $user->name = $faker->name;
        $user->email = $faker->email;
        $user->password = $faker->password;
        $user->roleId = 1;
        $user->save();
        for ($i = 0; $i < 5; $i++) {
            $user = new User();
            $user->name = $faker->name;
            $user->email = $faker->email;
            $user->password = $faker->password;
            $user->roleId = 2;
            $user->save();
        }


    }
}
