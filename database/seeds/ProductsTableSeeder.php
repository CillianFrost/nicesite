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
            'sales' => true,
        ]);

        DB::table('products')->insert([
            'name' => 'Milk',
            'category' => 'Food',
            'sales' => true,
        ]);

        DB::table('products')->insert([
            'name' => 'iPhone',
            'category' => 'Electronics',
            'sales' => true,
        ]);

        DB::table('products')->insert([
            'name' => 'TV',
            'category' => 'Electronics',
            'sales' => true,
        ]);

        DB::table('products')->insert([
            'name' => 'F.Dostoevsky "Crime and Punishment"',
            'category' => 'Books',
            'sales' => true,
        ]);

        $this->command->info('Products seeding successful.');
    }
}
