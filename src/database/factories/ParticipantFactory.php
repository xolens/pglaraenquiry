<?php
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Xolens\PgLaraenquiry\App\Model\Participant;

$factory->define(Participant::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->name,
    ];
});
