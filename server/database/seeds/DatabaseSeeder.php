<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('vendings')->insert([
            [
              'name' => '飲み物A',
              'price' => 50,
              'store' => 20,
            ],
            [
                'name' => '飲み物B',
                'price' => 100,
                'store' => 20,
            ],
            [
                'name' => '飲み物C',
                'price' => 1000,
                'store' => 20,
            ],
        ]);
    }
}
