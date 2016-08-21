<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Model\Promotion;
use App\Model\Leader;
use App\Model\Dish;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/mongodb', function () {
    Promotion::create(array(
            'name'=>'promo1',
            'description'=>'desc1'
        )
    );
    Leader::create(array(
            'name'=>'Gaetano',
            'surname'=>'DOrsi',
            'jobTitle'=> 'Programmer'
        )
    );
    Dish::create(array(
            'name'=>'Dish1',
            'description'=>'Description dish 1'
        )
    );



});
