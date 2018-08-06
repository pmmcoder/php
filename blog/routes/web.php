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

Route::resource('article', 'Blog\Admin\ArticleController');

Route::get('article/show/{id}', 'Blog\Admin\ArticleController@show');

Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@do']);

Route::post('register', [ 'as' => 'register', 'uses' => 'RegisterController@do']);

Route::post('home', [ 'as' => 'home', 'uses' => 'HomeController@do']);


Auth::routes();

Route::get('/home', 'Blog\Admin\HomeController@index')->name('home');

/*blog有关的路由-start*/
/*
 * 这有大坑注意：
 * 如果想要在resource的路由之外在补充路由，一定有写在resource之前
 * 否则可能会被覆盖路由，造成补充路由失效！！！！！！
 * */
Route::get('archive/blogRecord', 'Blog\ArchiveController@blogRecord');
Route::get('/', 'Blog\BlogController@index');
Route::resource('archive', 'Blog\ArchiveController');
Route::resource('single', 'Blog\SingleController');
Route::resource('contact', 'Blog\ContactController');
Route::resource('blog', 'Blog\BlogController');

/*后台controller*/
Route::resource('blank', 'Blog\Admin\BlankController');
Route::resource('buttons', 'Blog\Admin\ButtonsController');
Route::resource('flot', 'Blog\Admin\FlotController');
Route::resource('forms', 'Blog\Admin\FormsController');
Route::resource('grid', 'Blog\Admin\GridController');
Route::resource('icons', 'Blog\Admin\IconsController');
//Route::resource('login', 'Blog\Admin\LoginController');
Route::resource('morris', 'Blog\Admin\MorrisController');
Route::resource('notifications', 'Blog\Admin\NotificationsController');
Route::resource('panelswells', 'Blog\Admin\PanelsWellsController');
Route::resource('tables', 'Blog\Admin\TablesController');
Route::resource('typography', 'Blog\Admin\TypographyController');


