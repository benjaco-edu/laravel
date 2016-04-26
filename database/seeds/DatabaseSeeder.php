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

        $this->call('UsersTableSeeder');

    }
}


class UsersTableSeeder extends Seeder{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TODO: Implement run() method.
        DB::table('users')->delete();

        $users = array(
            array(
                "name"=>'Terri',
                'password' =>Hash::make('terry'),
                'email' => "example@example.com"
            )
        );

        DB::table('users')->insert($users);
    }
}