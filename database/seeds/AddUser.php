<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
class AddUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Factory::create();
        DB::table('users')->insert([
            'name' => 'root',
            'surname' => $fake->lastName,
            'middle_name' => $fake->name,
            'phone' => $fake->phoneNumber,
            'email' => 'root@mail.com',
            'password' => bcrypt('toor')
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'surname' => $fake->lastName,
            'middle_name' => $fake->name,
            'phone' => $fake->phoneNumber,
            'phone' => $fake->phoneNumber,
            'email' => 'admin@mail.com',
            'password' => bcrypt('unlock')
        ]);

        /*******************/

        DB::table('role_user')->insert([
            'user_id' => '1',
            'role_id' => '1'
        ]);
        DB::table('role_user')->insert([
            'user_id' => '2',
            'role_id' => '2'
        ]);






    }
}
