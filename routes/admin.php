<?php 
Route::get('/', ['as' => 'dashbroad', 'uses' => 'Admin\PageController@getDashbroad'])->middleware('active.check','mod.check');

	Route::group(['prefix' => 'post'], function() {
		Route::get('post-list', ['as' => 'postlist', 'uses' => 'Admin\PostsController@getList' ]);

		Route::get('add', ['as' => 'addpost', 'uses' => 'Admin\PostsController@getAdd' ]);
		Route::post('add', 'Admin\PostsController@save' );

		Route::get('edit{id}', ['as' => 'editpost', 'uses' => 'Admin\PostsController@getEdit' ]);

		Route::get('delete/{id}', 'Admin\PostsController@getDelete' );
	});
	Route::group(['prefix'=>'products'],function(){
		Route::get('product-list', ['as'=>'productlist', 'uses' => 'Admin\ProductsController@getList']);

		Route::get('add', ['as' => 'addproduct', 'uses' => 'Admin\ProductsController@getAdd']);
		Route::post('add', 'Admin\ProductsController@save');

		Route::get('edit/{id}', ['as' => 'editproduct', 'uses' => 'Admin\ProductsController@getEdit']);

		Route::get('delete/{id}', 'Admin\ProductsController@getDelete');
	});
	Route::group(['prefix'=>'categories'], function(){
		Route::get('category-list', ['as' => 'catelist', 'uses' => 'Admin\CategoryController@getList']);
		Route::post('check-name', ['as' => 'cate.checkname', 'uses' => 'Admin\CategoryController@checkname']);
		Route::post('check-slug', ['as' => 'cate.checkslug', 'uses' => 'Admin\CategoryController@checkSlug']);

		Route::post('getSlug', ['as' => 'getSlug', 'uses' => 'Admin\CategoryController@getSlug']);

		Route::get('add', ['as' => 'addcate', 'uses' => 'Admin\CategoryController@getAdd']);
		Route::post('add', 'Admin\CategoryController@save');

		Route::get('edit/{id}', ['as' => 'editcate', 'uses' => 'Admin\CategoryController@getEdit']);
		// Route::post('sua/{id}',	'Admin\CategoryController@postSua');

		Route::get('delete/{id}', 'Admin\CategoryController@getDelete');
	});

	Route::group(['prefix'=>'users'], function(){
		Route::get('profile-user', ['as' => 'profile-user', 'uses' => 'Admin\UserController@getProfile']);
	});
 ?>