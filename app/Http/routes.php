<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	// redirect user to facebook group
	// record pageview visit
	
	return view('home');
    return redirect('https://www.facebook.com/groups/corozalclassified/');
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/subscribe', ['as' => 'subscribeForm', 'uses' => 'HomeController@subscribe']);
    Route::get('/request', ['as' => 'requestForm', 'uses' => 'HomeController@request']);
    Route::post('/subscribe', 'HomeController@postSubscribe');
	Route::post('/request', 'HomeController@postRequest');
	Route::get('/unsubscribe', function() {
		// remove user from mailgun
	});
});
