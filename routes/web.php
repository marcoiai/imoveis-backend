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

Route::post('/companies/create/{id?}', 'CompanyController@create');
Route::get('/companies/form/{id?}', 'CompanyController@form')->name('company_edit');\
Route::get('/companies/delete/{id?}', 'CompanyController@delete')->name('company_delete');
Route::get('/companies', 'CompanyController@index');

Route::post('/contacts/create/{id?}', 'ContactController@create');
Route::get('/contacts/form/{id?}', 'ContactController@form')->name('contact_edit');
Route::get('/contacts/delete/{id?}', 'ContactController@delete')->name('contact_delete');
Route::get('/contacts', 'ContactController@index');
Route::get('/crawl', 'CrawllerController@crawl');

