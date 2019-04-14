<?php

use Faker\Generator as Faker;

$factory->define(App\Categori::class, function (Faker $faker) {
    return [
        'nama_kategori' => $faker->unique()->name,
        'slug' => Str::slug($faker->unique()->name, '-'),
    ];
});
