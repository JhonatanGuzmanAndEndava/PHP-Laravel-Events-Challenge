<?php

use Faker\Generator as Faker;

$factory->define(App\Profile::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'photo' => asset("storage/unknow.jpg"),
    ];
});
