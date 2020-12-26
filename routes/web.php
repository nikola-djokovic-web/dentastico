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

// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localize' ] // Route translate middleware
],
function() {
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

  Route::any('/', 'IndexController@index')->name('homepage');

  Route::post('/', 'ContactsController@contactP')->name('contactP');

	Route::post('/', 'ContactsController@contactF')->name('contactF');

  Route::get(LaravelLocalization::transRoute('routes.services'), 'FrontendController@services')->name('services');

	Route::get(LaravelLocalization::transRoute('routes.services') . '/{service}/{slug}', 'FrontendController@singleService')->name('single-service');

	Route::get(LaravelLocalization::transRoute('routes.our-services'), 'FrontendController@ourServices')->name('our-services');

	Route::get(LaravelLocalization::transRoute('routes.about'), 'FrontendController@about')->name('about');

	Route::get(LaravelLocalization::transRoute('routes.contact'), 'FrontendController@contact')->name('contact');

	Route::post(LaravelLocalization::transRoute('routes.contact'), 'ContactsController@contactP')->name('contactP');

});

//Route::get(LaravelLocalization::transRoute('routes.search'), 'IndexController@search')->name('search');




Route::any('/admin', 'UsersController@login')->name('users-login');

Route::get('/admin/logout', 'UsersController@logout')->name('users-logout');

Route::get('/admin/welcome', 'UsersController@welcome')->name('users-welcome');


Route::any('/my-services/create', 'ServicesController@create')->name('services-create');

Route::get('/my-services/{service?}', 'ServicesController@index')->name('my-services');

Route::any('/my-services/edit/{service}', 'ServicesController@edit')->name('services-edit');

Route::get('/my-services/activate/{service}', 'ServicesController@activate')->name('services-active');

Route::get('/my-services/delete/{service}', 'ServicesController@delete')->name('services-delete');
