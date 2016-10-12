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

Route::get('/', 'WelcomeController@index');
Route::get('/detska_pripravka', function(){
    return view('detska_pripravka');
});
Route::post('odber_aktualit/prihlasenie', 'SubscriptionController@subscribe');
Route::get('podujatia/nase_podujatia', 'EventsController@ourEvents');
Route::get('podujatia/nas_plan', 'EventsController@ourPlan');

Route::get('kontakt', function () {
    return view('pages.contact');
});

/**
 * AUTH
 */
Route::group(['prefix' => 'auth'], function () {
    Route::get('login', 'Auth\AuthController@getLogin');
    Route::post('login', 'Auth\AuthController@postLogin');
    Route::get('logout', 'Auth\AuthController@getLogout');
    Route::get('reset', 'Auth\AuthController@reset');
});

/**
 * PASSWORD
 */
Route::group(['prefix' => 'password'], function () {
    Route::get('email', 'Auth\PasswordController@getEmail');
    Route::post('email', 'Auth\PasswordController@postEmail');
    Route::get('reset/{token}', 'Auth\PasswordController@getReset');
    Route::post('reset', 'Auth\PasswordController@postReset');
});

/**
 * PASSWORD
 */
Route::group(['prefix' => 'password'], function () {
    Route::get('email', 'Auth\PasswordController@getEmail');
    Route::post('email', 'Auth\PasswordController@postEmail');
    Route::get('reset/{token}', 'Auth\PasswordController@getReset');
    Route::post('reset', 'Auth\PasswordController@postReset');
});

/**
 * DROPZONE
 */
Route::post('dropzone/uploadFiles', 'DropzoneController@uploadFiles');
Route::post('dropzone/uploadCover/{eventID}', 'DropzoneController@uploadCover');

/**
 * ADMIN ZONE
 */
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'AdminController@index');

    Route::group(['prefix' => 'podujatia'], function() {
        Route::get('/', 'EventsController@index');
        Route::get('vytvorit', 'EventsController@create');
        Route::post('update', 'EventsController@update');
        Route::get('upravit/{id}', 'EventsController@edit');
        Route::post('deletePhoto', 'EventsController@deletePhoto');
        Route::get('delete/{id}', 'EventsController@delete');
    });
});

Route::get('podujatia/{id}', 'EventsController@show');

Route::get('artisan', 'WelcomeCOntroller@artisan');
