<?php

use Illuminate\Database\Seeder;

include __DIR__ . "/UsersTableSeeder.php";

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
