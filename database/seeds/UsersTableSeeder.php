<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 26-04-2016
 * Time: 22:34
 */
use Illuminate\Database\Seeder;


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