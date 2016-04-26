<?php

use Illuminate\Database\Seeder;

include __DIR__ . "/UsersTableSeeder.php";
include __DIR__ . "/ItemsTableSeeder.php";

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
        $this->call('ItemsTableSeeder');

    }
}
