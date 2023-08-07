<?php

use Illuminate\Support\Facades\Route;

//Laravel
Route::get('/welcome', function () {
    return view('welcome');
});

//главная
Route::get('/', function () {
    return view('index');
})->name('home');

//инструкция условий
Route::get('/instruction', function () {
    return view('instruction');
})->name('instruction');

Route::get('/my_love', 'App\Http\Controllers\TestController@index');


//страница всех заказов 
Route::get('/AllOrders', 'App\Http\Controllers\AllOrdersController@index')->name('Orders.index');
//фильтр заказов
Route::get('/AllOrders/serch', 'App\Http\Controllers\AllOrdersController@serch')->name('Orders.serch');
//форма редактирование заказа по id
Route::get('/AllOrders/{order}/edit', 'App\Http\Controllers\AllOrdersController@edit')->name('Order.edit');
//редактирование заказа по id
Route::patch('/AllOrders/{order}', 'App\Http\Controllers\AllOrdersController@update')->name('Order.update');


//можно сделать из этого поиск
// Route::get('/AllOrders/{order}', 'App\Http\Controllers\AllOrdersController@show')->name('Order.show');
Route::delete('/AllOrders/{order}', 'App\Http\Controllers\AllOrdersController@destroy')->name('Order.delete');;


//форма создания заказа
Route::get('/FormOrder/create', 'App\Http\Controllers\FormOrderController@create')->name('Order.create');
//Создание заказа
Route::post('/FormOrder/store', 'App\Http\Controllers\FormOrderController@store')->name('Order.store');




