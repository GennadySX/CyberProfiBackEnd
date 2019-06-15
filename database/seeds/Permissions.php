<?php

use Illuminate\Database\Seeder;
use App\RoleUsers;

class Permissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owner = new RoleUsers();
        $owner->name         = 'root';
        $owner->display_name = 'Гуру';
        $owner->description  = 'Создатель';
        $owner->save();
        //------------------------------------------

        $admin = new RoleUsers();
        $admin->name         = 'admin';
        $admin->display_name = 'Администратор';
        $admin->description  = 'Управляющий';
        $admin->save();
        //------------------------------------------
        $admin = new RoleUsers();
        $admin->name         = 'teacher';
        $admin->display_name = 'Преподавтель';
        $admin->description  = 'Обучает студентов';
        $admin->save();
        //------------------------------------------
        $admin = new RoleUsers();
        $admin->name         = 'student';
        $admin->display_name = 'Студент';
        $admin->description  = 'Обучающий студент';
        $admin->save();



    }

}
