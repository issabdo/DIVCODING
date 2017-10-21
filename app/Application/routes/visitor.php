<?php

Route::get('/', 'HomeController@welcome');

Route::post('/contact-message', 'HomeController@Contact');

Route::get('/page/{slug}', 'HomeController@getPageBySlug');



Auth::routes();
