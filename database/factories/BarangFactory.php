<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Barang::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'quantity' => $faker->numberBetween(1, 100),
    ];
});