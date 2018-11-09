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

        DB::table('product')->insert([
            'title' => 'MacBook Pro 13',
            'description' => 'MacBook Pro elevates the notebook to a whole new level of performance and portability. ',
            'color' => '1',
            'price' => 1200,
            'catId' => 1,
        ]);
        DB::table('product')->insert([
            'title' => 'MacBook Air',
            'description' => 'Available in silver, space gray, and gold, the new thinner and lighter MacBook Air features a brilliant Retina display.',
            'color' => '2',
            'price' => 800,
            'catId' => 1,
        ]);
        DB::table('product')->insert([
            'title' => 'iPhone XS 128GB',
            'description' => 'Super Retina in two sizes — including the largest display ever on an iPhone.',
            'color' => '2',
            'price' => 1400,
            'catId' => 2,
        ]);
        DB::table('product')->insert([
            'title' => 'iPhone XR 64gb',
            'description' => 'All-new Liquid Retina display — the most advanced LCD in the industry.',
            'color' => '1',
            'price' => 900,
            'catId' => 2,
        ]);
        DB::table('category')->insert([
            'title' => 'laptops',
        ]);
        DB::table('category')->insert([
            'title' => 'phones',
        ]);
    }
}
