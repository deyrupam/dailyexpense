<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Expense;
use Faker\Generator as Faker;
use App\User;
use Faker\Provider\DateTime;

$factory->define(expense::class, function (Faker $faker) {
    return [

        'transaction' => $faker->word,

        'price'=>$faker->numberBetween(100,1000),
        'date_purchase'=>$faker->dateTime($max = 'now', $timezone = null),
        'note' => $faker->paragraph,
        'user_id'=>function(){
            return User::all()->random();
        },
    ];

});
