<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('products')->insert([
                'name' => str_random(10),
                'pic' => str_random(10),
                'amount' => rand(1, 100),
                'num' => rand(1, 100),
            ]);
        }
    }
}
