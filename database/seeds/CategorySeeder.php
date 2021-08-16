<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Baju'
        ]);
        DB::table('categories')->insert([
            'name' => 'Mainan'
        ]);
        DB::table('categories')->insert([
            'name' => 'Elektronik'
        ]);
        DB::table('categories')->insert([
            'name' => 'Buku'
        ]);
        DB::table('categories')->insert([
            'name' => 'Kesehatan'
        ]);
    }
}
