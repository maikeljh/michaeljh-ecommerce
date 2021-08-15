<?php

use Illuminate\Database\Seeder;
use App\Product;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        $this->call(CategorySeeder::class);
        factory(App\Product::class, 50)->create();
    }
}
