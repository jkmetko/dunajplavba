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

Route::get('/', function () {
    return view('welcome');
});

Route::get('podujatia/{id}', function () {
    return view('pages.class-single');
});


/**
 * AUTH
 */
Route::group(['prefix' => 'auth'], function () {
    Route::get('login', 'Auth\AuthController@getLogin');
    Route::post('login', 'Auth\AuthController@postLogin');
    Route::get('logout', 'Auth\AuthController@getLogout');
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

/**
 * ADMIN ZONE
 */
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isAdmin']], function () {
    Route::get('/', 'DashBoardController@index');

    Route::group(['prefix' => 'api'], function() {
        Route::get('payments', 'DashBoardController@payments');
    });

    Route::get('tlacit-uvodne-dokumenty/{claimID}', 'ClaimController@printFirstDocuments');
    Route::get('tlacit-dokument/{documentID}', 'ClaimController@printDocument');

    Route::post('vygenerovanie-vyzvy', 'ClaimController@vygenerovanie_vyzvy');
    Route::get('resend-document/{id}', 'ClaimController@resend_document');
});
