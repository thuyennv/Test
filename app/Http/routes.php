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

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// Route::get('test', function(){
// 	return view('admin.category.add');
// });

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
	Route::group(['prefix'=>'category'],function(){
		Route::get('list', ['as'		=>'admin.category.list','uses' =>'CateController@getList']);
		Route::get('add',['as'		=>'admin.category.getAdd','uses'=>'CateController@getAdd']);
		Route::post('add',['as'		=>'admin.category.postAdd','uses'=>'CateController@postAdd']);
		Route::get('delete/{id}',['as'	=>'admin.category.getDelete','uses'=>'CateController@getDelete']);
		Route::get('edit/{id}',['as'	=>'admin.category.getEdit','uses'=>'CateController@getEdit']);
		Route::post('edit/{id}',['as'	=>'admin.category.postEdit','uses'=>'CateController@postEdit']);
	});
	Route::group(['prefix' => 'product'],function (){
		Route::get('list', ['as'		=>'admin.product.list','uses' =>'ProductController@getList']);
		Route::get('add',['as'		=>'admin.product.getAdd', 'uses' =>'ProductController@getAdd']);
		Route::post('add',['as'		=>'admin.product.postAdd', 'uses' =>'ProductController@postAdd']);
		Route::get('delete/{id}',['as'	=>'admin.product.getDelete','uses'=>'ProductController@getDelete']);
		Route::get('edit/{id}',['as'	=>'admin.product.getEdit','uses'=>'ProductController@getEdit']);
		Route::post('edit/{id}',['as'	=>'admin.product.postEdit','uses'=>'ProductController@postEdit']);
		Route::get('delimg/{id}', ['as' => 'admin.product.getDelImg', 'uses' =>'ProductController@getDelImg']);
	});
	Route::group(['prefix' => 'user'],function (){
		Route::get('list', ['as'		=>'admin.user.list','uses' =>'UserController@getList']);
		Route::get('add',['as'		=>'admin.user.getAdd', 'uses' =>'UserController@getAdd']);
		Route::post('add',['as'		=>'admin.user.postAdd', 'uses' =>'UserController@postAdd']);
		Route::get('delete/{id}',['as'	=>'admin.user.getDelete','uses'=>'UserController@getDelete']);
		Route::get('edit/{id}',['as'	=>'admin.user.getEdit','uses'=>'UserController@getEdit']);
		Route::post('edit/{id}',['as'	=>'admin.user.postEdit','uses'=>'UserController@postEdit']);
		Route::get('delimg/{id}', ['as' => 'admin.user.getDelImg', 'uses' =>'UserController@getDelImg']);
	});
});

Route::get('loai-san-pham/{id}/{tenloai}', ['as' => 'loaisanpham', 'uses' =>'WelcomeController@loaisanpham']);
Route::get('test',function(){
	return view('user.pages.cate');
});
Route::get('chi-tiet-san-pham/{id}/{tenloai}',['as' =>'chitietsanpham','uses'=>'WelcomeController@chitietsanpham']);