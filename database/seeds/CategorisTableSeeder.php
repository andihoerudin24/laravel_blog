<?php

use Illuminate\Database\Seeder;

class CategorisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        factory(App\Categori::class, 20)->create();
    }
}
