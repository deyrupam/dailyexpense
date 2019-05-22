<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Expense;
use Faker\Generator as Faker;
use App\User;
use Faker\Provider\DateTime;

$factory->define(expense::class, function (Faker $faker) {
    return [

        'bill' => $faker->word,
        'price'=>$faker->numberBetween(100,1000),
        'note' => $faker->paragraph,
        'user_id'=>function(){
            return User::all()->random();
        },
    ];

});
