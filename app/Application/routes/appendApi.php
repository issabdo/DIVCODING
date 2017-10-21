<?php

#user
Route::post('users/login' , 'UserApi@login');
Route::get('users/getById/{id}', 'UserApi@getById');
Route::get('users/delete/{id}', 'UserApi@delete');
Route::post('users/add', 'UserApi@add');
Route::post('users/update', 'UserApi@update');
Route::get('users/{limit?}/{offset?}', 'UserApi@index');
Route::get('users/getUserByToken' , 'UserApi@getUserByToken');

#page
Route::get('page/getById/{id}/{lang?}', 'PageApi@getById');
Route::get('page/delete/{id}', 'PageApi@delete');
Route::post('page/add', 'PageApi@add');
Route::post('page/update/{id}', 'PageApi@update');
Route::get('page/{limit?}/{offset?}/{lang?}', 'PageApi@index');


#categorie
Route::get('categorie/getById/{id}/{lang?}', 'CategorieApi@getById');
Route::get('categorie/delete/{id}', 'CategorieApi@delete');
Route::post('categorie/add', 'CategorieApi@add');
Route::post('categorie/update/{id}', 'CategorieApi@update');
Route::get('categorie/{limit?}/{offset?}/{lang?}', 'CategorieApi@index');


#contact
Route::get('contact/getById/{id}/{lang?}', 'ContactApi@getById');
Route::get('contact/delete/{id}', 'ContactApi@delete');
Route::post('contact/add', 'ContactApi@add');
Route::post('contact/update/{id}', 'ContactApi@update');
Route::get('contact/{limit?}/{offset?}/{lang?}', 'ContactApi@index');

#team
Route::get('team/getById/{id}/{lang?}', 'TeamApi@getById');
Route::get('team/delete/{id}', 'TeamApi@delete');
Route::post('team/add', 'TeamApi@add');
Route::post('team/update/{id}', 'TeamApi@update');
Route::get('team/{limit?}/{offset?}/{lang?}', 'TeamApi@index');