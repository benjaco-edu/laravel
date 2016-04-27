<?php

use Illuminate\Database\Seeder;


class ItemsTableSeeder extends Seeder{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->delete();

        $items = array(
            array(
                "user_id" => 1,
                "name" => "Gå med hundend",
                "done" => false
            ),
            array(
                "user_id" => 1,
                "name" => "Lave mad",
                "done" => false
            ),
            array(
                "user_id" => 1,
                "name" => "Køb ind",
                "done" => true
            ),
        );

        DB::table('items')->insert($items);
    }
}