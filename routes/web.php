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
    return view('contact.index');
})->name('contacts.index');


Route::get('/contacts/create', function(){
    return view('contact.create');
})->name('contacts.create');


Route::get('/contacts/{id}', function($id){
    $contacts = App\Contact::find($id);
    return view('contact.show', compact('contacts'));
})->name('contacts.show');