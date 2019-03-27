<?php

use Illuminate\Database\Seeder;

class categoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            
            [
                'NAME' => 'Fitness et training',
            ],
            [
                'NAME' => 'Running',
            ],
            [
                'NAME' => 'Lifestyle',
            ],
            [
                'NAME' => 'Sandales et Tong',
            ],
                ]);
    }
}
