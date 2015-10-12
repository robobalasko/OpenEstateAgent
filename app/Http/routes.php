<?php

Route::group(['namespace' => 'Api', 'prefix' => 'api'], function ()
{
	Route::resource('users', 'UsersController');
});
