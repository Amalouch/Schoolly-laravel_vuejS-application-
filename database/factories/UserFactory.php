<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'niveau'=> ($faker->numberBetween(1,2))."CP" ,
        'groupe' => $faker->numberBetween(1,10) , 
        'email_verified_at' => now(),
        'password' => bcrypt ($faker->password ), 
        'remember_token' => Str::random(10),
        'telephone' => $faker->e164PhoneNumber , 
        'matricule' => ($faker->numberBetween(16,19))."/".($faker->numberBetween(0000,0300)) ,  

    ];
});
