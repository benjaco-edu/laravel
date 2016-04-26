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
        Eloquent::unguard();

        include __DIR__."/UsersTableSeeder.php";

        (new UsersTableSeeder())->run();

    }
}
