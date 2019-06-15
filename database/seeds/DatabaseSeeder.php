<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
  */

    public function run()
    {
        $this->call(Permissions::class);
        $this->call(AddUser::class);




    }


    public function user()
    {





    }

}
