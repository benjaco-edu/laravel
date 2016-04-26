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


        include __DIR__."/../../bootstrap/autoload.php";
        include __DIR__."/UsersTableSeeder.php";

        (new UsersTableSeeder())->run();

    }
}
