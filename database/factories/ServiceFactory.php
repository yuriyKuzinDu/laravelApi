<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Company;
use App\Model\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    return [
        'name'          =>  $faker->sentence(3, true),
        'description'   =>  $faker->paragraph(),

        'company_id'    =>  function(){ return Company::all()->random();}
    ];
});
