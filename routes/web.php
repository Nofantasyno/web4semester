<?php


Route::get('eshop', 'Notebooks_controller@index')->name('index');
Route::get('eshop/show/{id}', 'Notebooks_controller@show')->name('notebook.show');
Route::get('eshop/category/{id}', 'Notebooks_controller@categorize')->name('notebook.categorize');
Route::delete('eshop/remove/{id}', 'Notebooks_controller@destroy')->name('notebook.destroy');
Route::get('eshop/create', 'Notebooks_controller@create')->name('notebook.create');
Route::post('eshop/create/notebook', 'Notebooks_controller@store')->name('notebook.store');
Route::get('eshop/search', 'Notebooks_controller@search')->name('notebook.search');
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('home', 'HomeController@index')->name('home');
Route::get('cabinet', 'HomeController@cabinet')->name('cabinet');
Route::post('eshop/create/comment', 'Feedbacks_controller@store')->name('feedback.store');
Route::delete('eshop/remove/comment/{id}', 'Feedbacks_controller@destroy')->name('feedback.destroy');
