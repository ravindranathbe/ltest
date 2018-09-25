<?php

use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    return [
        'title' => $faker->catchPhrase,
        'user_id' => $faker->randomElement([1, 2]),
    ];
});
