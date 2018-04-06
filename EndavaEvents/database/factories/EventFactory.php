<?php

use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'user_id' => random_int(1,50),
        'category' => random_int(0,2) == 0? "Conferencia": random_int(0,1) == 0? "Seminario": "Curso",
        'place' => $faker->city,
        'address' => $faker->address,
        'start_date' => $faker->date(),
        'end_date' => $faker->date(),
        'is_virtual' =>  random_int(0,1),
    ];
});
