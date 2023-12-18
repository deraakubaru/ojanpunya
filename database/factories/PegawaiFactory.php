<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Pegawai::class, function (Faker $faker) {
    return [
        'nip' => $faker->unique()->randomNumber(6),
        'name' => $faker->name,
        'bidang' => $faker->word,
    ];
});
