<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', function(){
    return "<h3>All Contact </h3>";
})->name('contacts.index');


Route::get('/contacts/create', function(){
    return "<h3>Create Contact </h3>";
})->name('contacts.create');


Route::get('/contact/{id}', function($id){
    return App\Contact::find($id);
})->name('contacts.show');