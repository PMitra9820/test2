<?php

// Controller-name@method-name
Route::get('/', 'PagesController@index'); // localhost:8000/
Route::get('/{id}', 'PagesController@index');
Route::post('/save', 'PagesController@save');
Route::get('/deleteUser/{id}', 'PagesController@deleteUser');