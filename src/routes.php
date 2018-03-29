<?php

Route::group(['middleware' => ['web']], function () {
    Route::group(['namespace' => 'Acr\Acr_tasarla\Controllers', 'prefix' => 'acr/tasarla'], function () {
        Route::group(['middleware' => ['auth']], function () {
            Route::get('/main', 'TasarlaController@index');
            Route::group(['middleware' => ['admin']], function () {
                Route::post('/sira/update', 'TasarlaController@sira_update');
                Route::get('/file/select', 'TasarlaController@file_select');
                Route::post('/file/search', 'TasarlaController@file_search');
                Route::post('/file/add', 'TasarlaController@file_add');
                Route::post('/file/delete', 'TasarlaController@file_delete');
                Route::get('/list', 'TasarlaController@Tasarla');
                Route::get('/config', 'TasarlaController@config');
                Route::get('/yeni', 'TasarlaController@yeni');
                Route::post('/create', 'TasarlaController@create');
                Route::post('/delete', 'TasarlaController@delete');
                Route::post('/file/delete', 'TasarlaController@file_delete');
            });
        });
    });
});