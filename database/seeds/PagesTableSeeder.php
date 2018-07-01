<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            'slug'        => 'store',
            'title'        => 'Store',
            'publish'        => true,
        ]);

        DB::table('pages')->insert([
            'slug'        => 'home',
            'title'        => 'Dashboard',
            'publish'        => true,
        ]);

        DB::table('pages')->insert([
            'slug'        => 'products',
            'title'        => 'Products',
            'publish'        => true,
        ]);

        DB::table('pages')->insert([
            'slug'        => 'categories',
            'title'        => 'Categories',
            'publish'        => true,
        ]);

        DB::table('pages')->insert([
            'slug'        => 'users',
            'title'        => 'Users',
            'publish'        => true,
        ]);

        $this->command->info('Pages seeding successful.');
    }
}
