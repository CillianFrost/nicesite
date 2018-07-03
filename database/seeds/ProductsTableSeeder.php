<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Bread',
            'category' => 'Food',
            'price' => '1',
            'slug' => 'bread',
        ]);

        DB::table('products')->insert([
            'name' => 'Milk',
            'category' => 'Food',
            'price' => '2',
            'slug' => 'milk',
        ]);

        DB::table('products')->insert([
            'name' => 'iPhone',
            'category' => 'Electronics',
            'price' => '699',
            'slug' => 'iphone',
        ]);

        DB::table('products')->insert([
            'name' => 'TV',
            'category' => 'Electronics',
            'price' => '1099',
            'slug' => 'tv',
        ]);

        DB::table('products')->insert([
            'name' => 'F.Dostoevsky "Crime and Punishment"',
            'category' => 'Books',
            'price' => '8',
            'slug' => 'crime-and-punishment-book',
        ]);

        $this->command->info('Products seeding successful.');
    }
}
