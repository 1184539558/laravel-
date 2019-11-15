<?php
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('login', 'LoginController@index')->name('login');
    Route::post('login', 'LoginController@login')->name('login');
   Route::group(['middleware' =>['checkadmin']],function(){
        Route::get('index','IndexController@index')->name('index');
//    Route::get('welcome','IndexController@welcome')->name('welcome')->Middleware('checkadmin');
        Route::get('welcome','IndexController@welcome')->name('welcome');
        Route::get('loginout','LoginController@logout')->name('logout');
        Route::get('user/index','AdminController@index')->name('user.index');
       Route::get('user/create','AdminController@create')->name('user.create');
       Route::post('user/store','AdminController@store')->name('user.store');
       Route::get('user/edit/{id}','AdminController@edit')->name('user.edit');
       Route::put('user/edit/{id}','AdminController@update')->name('user.update');
       Route::delete('user/destroy/{id}','AdminController@destroy')->name('user.destroy');
       Route::delete('user/delAll','AdminController@delAll')->name('user.delAll');
       Route::get('user/restore','AdminController@restore')->name('user.restore');
       Route::resource('role',"RoleController");
       Route::resource('node',"NodeController");
    });
});
