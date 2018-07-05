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
            'status' => 'store',
        ]);

        DB::table('products')->insert([
            'name' => 'Milk',
            'category' => 'Food',
            'price' => '2',
            'slug' => 'milk',
            'status' => 'store',
        ]);

        DB::table('products')->insert([
            'name' => 'iPhone',
            'category' => 'Electronics',
            'price' => '699',
            'slug' => 'iphone',
            'status' => 'store',
        ]);

        DB::table('products')->insert([
            'name' => 'TV',
            'category' => 'Electronics',
            'price' => '1099',
            'slug' => 'tv',
            'status' => 'store',
        ]);

        DB::table('products')->insert([
            'name' => 'F.Dostoevsky "Crime and Punishment"',
            'category' => 'Books',
            'price' => '8',
            'slug' => 'crime-and-punishment-book',
            'status' => 'store',
        ]);

        DB::table('products')->insert([
            'name' => 'Cup',
            'category' => 'Dishes',
            'price' => '3',
            'slug' => 'cup',
        ]);

        DB::table('products')->insert([
            'name' => 'T-shirt',
            'category' => 'Cloth',
            'price' => '10',
            'slug' => 't-shirt',
        ]);

        DB::table('products')->insert([
            'name' => 'Juice',
            'category' => 'Food',
            'price' => '3',
            'slug' => 'juice',
            'status' => 'sold out',
        ]);

        DB::table('products')->insert([
            'name' => 'Keyboard',
            'category' => 'Electronics',
            'price' => '30',
            'slug' => 'keyboard',
            'status' => 'sold out',
        ]);

        DB::table('products')->insert([
            'name' => 'Backpack',
            'category' => 'Cloth',
            'price' => '50',
            'slug' => 'backpack',
            'status' => 'sold out',
        ]);

        $this->command->info('Products seeding successful.');
    }
}
