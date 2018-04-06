<?php

use Faker\Generator as Faker;

$factory->define(App\Profile::class, function (Faker $faker) {
    return [
        'user_id' => random_int(1,50),
        'name' => $faker->name,
        'email' => $faker->email,
        'photo' => asset("storage/unknow.jpg"),
    ];
});
