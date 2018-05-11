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
Route::get('home', 'HomeController@index');//Для відображення результата після логування
Route::post('/{lang}/callback', ['uses' => 'Frontend\ArticleController@callback','as' => 'callback']);//Обработчик Обратной связи при заказе товара
/*Auth group routes*/
Route::controllers([
	/*'auth' => 'Auth\AuthController',*/
	'password' => 'Auth\PasswordController',
]);
Route::get('/register', array('as' => 'signup', 'uses' => 'Auth\AuthController@getRegister'));
Route::post('/register', array('as' => 'signup', 'uses' => 'Auth\AuthController@postRegister'));
Route::get('adminDa6jo/login', array('as' => 'login', 'uses' => 'Auth\AuthController@getLogin'));
Route::post('adminDa6jo/login', array('as' => 'login', 'uses' => 'Auth\AuthController@postLogin'));
Route::get('adminDa6jo/logout', array('as' => 'logout', 'uses' => 'Auth\AuthController@getLogout'));
/*Route::get('/forgot', array('as' => 'forgot', 'uses' => 'Auth\AuthController@getLogin'));
Route::post('/forgot', array('as' => 'forgot', 'uses' => 'Auth\AuthController@postLogin'));*/

/*/Auth group routes*/

Route::get('/', 'Frontend\HomeController@index');//Перенаправлення на адресу з локалю

Route::post('/update_rate', ['uses' => 'Frontend\ArticleController@update_rate','as' => 'update_rate']);//Обновление тарифа
//Route::get('/update_rate_debug', ['uses' => 'Frontend\ArticleController@update_rate','as' => 'update_rate']);//Обновление тарифа


/*/Callback group route*/

/*Backend group routes*/
Route::group(['prefix'=>'adminDa6jo', 'middleware' => ['auth', 'backend.init']], function(){

	//Routes for Articles (Backend)
	Route::get('/',['uses' => 'Backend\AdminDashboardController@index','as' => 'admin_dashboard']);
	Route::get('/articles/fileoptimize/{id?}','Backend\AdminArticlesController@fileoptimize');
	Route::get('/articles/{type}',['uses' => 'Backend\AdminArticlesController@index','as' => 'admin_index']);//Вывод списка элементов
	Route::get('/articles/{type}/create',['uses' => 'Backend\AdminArticlesController@create','as' => 'admin_create']);//Вывод формы создания элемента
	Route::post('/articles/{type}/create',['uses' => 'Backend\AdminArticlesController@store','as' => 'admin_store']);//Сохранение элемента
	Route::get('/articles/{type}/{id}',['uses' => 'Backend\AdminArticlesController@edit','as' => 'admin_edit']);//Вывод формы редакторирование элемента..
	Route::put('/articles/{type}/{id}',['uses' =>'Backend\AdminArticlesController@update','as' => 'admin_update']);//Сохранение элемента после редактирования..
	Route::delete('/articles/{type}/{id}',['uses' => 'Backend\AdminArticlesController@destroy','as' => 'admin_delete']);//Удаление элемента

	//Routes for Texts (Backend)
	Route::get('/texts',['uses' => 'Backend\AdminTextsController@index','as' => 'text_index']);//Вывод списка
	Route::get('/texts/create',['uses' => 'Backend\AdminTextsController@create','as' => 'text_create']);//Вывод формы создания элемента
	Route::post('/texts/create',['uses' =>'Backend\AdminTextsController@store','as' => 'text_store']);//Сохранение элемента
	Route::delete('/texts/{id}',['uses' =>'Backend\AdminTextsController@destroy','as' => 'text_delete']);//Удаление элемента
	Route::get('/texts/{id}',['uses' =>'Backend\AdminTextsController@edit','as' => 'text_edit']);//Вывод формы редакторирование
	Route::put('/texts/{id}',['uses' =>'Backend\AdminTextsController@update','as' => 'text_update']);//Сохранение после редактирования
	Route::get('/texts_recovery',['uses' => 'Backend\AdminTextsController@recovery','as' => 'text_recovery']);//Востановление записей после удаления
	Route::get('/texts_delete',['uses' => 'Backend\AdminTextsController@delete','as' => 'texts_delete']);//Окончательное удаление

	//Routes for Categories (Backend)
	Route::get('/categories/create',['uses' => 'Backend\AdminCategoriesController@create','as' => 'admin_categories_create']);//Вывод формы создания категории
	Route::post('/categories/create',['uses' =>'Backend\AdminCategoriesController@store','as' => 'admin_categories_store']);//Сохранение элемента
	Route::get('/categories/{type}',['uses' => 'Backend\AdminCategoriesController@edit','as' => 'admin_categories_edit']);//Вывод формы редактирования категории
	Route::put('/categories/{type}',['uses' =>'Backend\AdminCategoriesController@update','as' => 'admin_categories_update']);//Сохранение после редактирования
	Route::delete('/categories/{type}',['uses' =>'Backend\AdminCategoriesController@destroy','as' => 'admin_categories_delete']);//Удаление категории
	Route::get('/categories/fileoptimize/{type?}','Backend\AdminCategoriesController@fileoptimize');

	//Routes for Settings (Backend)
	Route::get('/settings',['uses' => 'Backend\AdminSettingsController@index','as' => 'settings_index']);//Вывод списка
	Route::get('/settings/create',['uses' => 'Backend\AdminSettingsController@create','as' => 'settings_create']);//Вывод формы создания элемента
	Route::post('/settings/create',['uses' =>'Backend\AdminSettingsController@store','as' => 'settings_store']);//Сохранение элемента
	Route::delete('/settings/{id}',['uses' =>'Backend\AdminSettingsController@destroy','as' => 'settings_delete']);//Удаление элемента
	Route::get('/settings/{id}',['uses' =>'Backend\AdminSettingsController@edit','as' => 'settings_edit']);//Вывод формы редакторирование
	Route::put('/settings/{id}',['uses' =>'Backend\AdminSettingsController@update','as' => 'settings_update']);//Сохранение после редактирования
	Route::get('/settings_recovery',['uses' => 'Backend\AdminSettingsController@recovery','as' => 'settings_recovery']);//Востановление записей после удаления
	Route::get('/settings_delete',['uses' => 'Backend\AdminSettingsController@delete','as' => 'settings_delete']);//Окончательное удаление

	//Routes for Langs (Backend)
	Route::get('/langs',['uses' => 'Backend\AdminLangsController@index','as' => 'langs_index']);//Вывод списка элементов
	Route::get('/langs/create',['uses' => 'Backend\AdminLangsController@create','as' => 'langs_create']);//Вывод формы создания элемента
	Route::post('/langs/create',['uses' => 'Backend\AdminLangsController@store','as' => 'langs_store']);//Сохранение элемента
	Route::get('/langs/{id}',['uses' => 'Backend\AdminLangsController@edit','as' => 'langs_edit']);//Вывод формы редакторирование элемента..
	Route::put('/langs/{id}',['uses' =>'Backend\AdminLangsController@update','as' => 'langs_update']);//Сохранение элемента после редактирования..
	Route::delete('/langs/{id}',['uses' => 'Backend\AdminLangsController@destroy','as' => 'langs_delete']);//Удаление элемента
	/*//Routes for Orders (Backend)
	Route::get('/orders', ['uses' => 'Backend\AdminOrdersController@index', 'as' => 'orders_index']);//Вывод списка заказов
	Route::delete('/orders/{id}', ['uses' => 'Backend\AdminOrdersController@destroy', 'as' => 'orders_delete']);//Вывод списка заказов*/



});
/*/Backend group routes*/

/*Frontend group routes*/
Route::group(['middleware' => 'frontend.init'], function(){
	/*Callback group route*/
	Route::post('/{lang}/{type}', ['uses' => 'Frontend\ArticleController@contact','as' => 'contact']);//Обработчик Обратной связи
	Route::get('/{lang}/{type?}', ['uses' => 'Frontend\ArticleController@index', 'as' => 'article_index']);
	Route::get('/{lang}/{type}/{id}', ['uses' => 'Frontend\ArticleController@show', 'as' => 'article_show']);




});
/*Frontend group routes*/


