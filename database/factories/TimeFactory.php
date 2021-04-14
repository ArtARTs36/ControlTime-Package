<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use ArtARTs36\ControlTime\Models\Subject;
use ArtARTs36\ControlTime\Models\Time;
use ArtARTs36\ControlTime\Tests\Prototypes\User;
use Faker\Generator as Faker;

$factory->define(Time::class, function (Faker $faker) {
    return [
        Time::FIELD_DATE => $faker->dateTime()->format('Y-m-d'),
        Time::FIELD_QUANTITY => rand(0, Time::FULL_TIME),
        Time::FIELD_COMMENT => $faker->text(200),
        Time::FIELD_SUBJECT_ID => factory(Subject::class)->create()->id,
        Time::FIELD_EMPLOYEE_ID => User::query()->create([
            'name' => 'test_name',
        ])->id,
    ];
});
