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
//thưr
    
Route::get('/dashboard', 'ProductController@index');

Route::get('/', 'ProductController@showHomePage');
Route::get('/home', 'ProductController@showHomePage');

Route::get('/category', 'ProductController@showCategoryPage');

Route::get('/viewDetail/{id}', 'ProductController@viewDetail')->name('viewDetail');



Route::get('productCategory/{type}', [
    'as' => 'productCategory',
    'uses' => 'ProductController@getLoaiSP'


]);





Route::get('add-to-cart/{id}', [
    'as' => "themvaogiohang",
    'uses' => "ProductController@getAddToCart"
]);





Route::get('del-cart/{id}', [
    'as' => "xoagiohang",
    'uses' => "ProductController@getDelItemCart"
]);







Route::get('login', 'ProductController@getLogin')->name('login');
Route::post('login', 'ProductController@postLogin')->name('login1');


Route::get('admin/login', 'UserController@getLoginAdmin');
Route::post('admin/login', 'UserController@postLoginAdmin');

Route::get('admin/logout', 'UserController@getLogoutAdmin');

Route::get('logout', 'ProductController@getLogout')->name('logout');

Route::post('checklogin', 'AccountController@login');



Route::post('comment/{id}', 'CommentController@postComment');


Route::group(['prefix' => 'admin', 'middleware' => 'managerLogin'], function () {
    Route::group(['prefix' => 'category'], function () {
        Route::get('showList', 'AdminController@getListCategory')->name('listCategory');
        Route::get('showEditPage/{id}', 'AdminController@showEditCategoryPage');
        Route::post('edit/{id}', 'AdminController@editCategory');

        Route::get('add', 'AdminController@showAddCategoryPage')->name('addCategory');
        Route::post('add', 'AdminController@addCategory');


        Route::get('delete/{id}', 'AdminController@deleteCategory');
    });

    Route::group(['prefix' => 'producer'], function () {
        Route::get('list', 'AdminController@getListProducer')->name('listProducer');
        Route::get('edit/{id}', 'AdminController@getEditProducer');
        Route::post('edit/{id}', 'AdminController@postEditProducer');
        Route::get('add', 'AdminController@getAddProducer')->name('addProducer');
        Route::post('add', 'AdminController@postAddProducer');
        Route::get('delete/{id}','AdminController@deleteProducer') ;

       
    });

    
    Route::group(['prefix' => 'order'], function () {
        Route::get('list', 'AdminController@getListOrder')->name('listOrder');
        Route::get('edit/{id}', 'AdminController@getEditOrder');
        Route::post('edit/{id}', 'AdminController@postEditOrder');
        Route::get('delete/{id}', 'AdminController@deleteOrder');

    });


    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('show', 'AdminController@showDashboard')->name('dashBoard');
        

    });





    Route::group(['prefix' => 'product'], function () {
        Route::get('showList', 'AdminController@showListProduct')->name('listProduct');
        Route::get('update', 'AdminController@update');
        Route::get('showAddPage', 'AdminController@showAddProductPage');
        Route::post('add', 'AdminController@addProduct');
        Route::get('delete/{id}', 'AdminController@deleteProduct');

        Route::get('showEditPage/{id}', 'AdminController@showEditProductPage');
        Route::post('edit/{id}', 'AdminController@editProduct');

        Route::get('delimg/{id}', 'AdminController@deleteImgdetail');
    });


    Route::group(['prefix' => 'comment'], function () {
        Route::get('delete/{id}/{idProduct}', 'CommentController@getDelete');
    });

    Route::group(['prefix' => 'user', 'middleware' => 'adminLogin'], function () {
        Route::get('list', 'UserController@getList')->name('listUser');
        Route::get('add', 'UserController@getAdd')->name('addUser');
        Route::post('add', 'UserController@postAdd');
        Route::get('delete/{id}', 'UserController@getDelete');
        Route::get('edit/{id}', 'UserController@getEdit');
        Route::post('edit/{id}', 'UserController@postEdit');
    });

    Route::group(['prefix' => 'user'], function () {

    Route::get('edit/{id}', 'UserController@getEdit');
    Route::post('edit/{id}', 'UserController@postEdit');
    });
});

Route::get('user', 'PagesController@getUser')->name('user');
Route::post('user', 'PagesController@postUser');

Route::get('register', 'PagesController@getRegister');
Route::post('register', 'PagesController@postRegister');

Route::get('search', 'PagesController@search')->name('search');


Route::get('checkout', [
    'as' => 'getCheckout',
    'uses' => 'PagesController@getCheckOut'
]);

Route::post('checkout', [
    'as' => 'checkout',
    'uses' => 'PagesController@postCheckOut'
]);

Route::get('orderHistory', 'PagesController@getOrderHistory')->name('orderHistory');


Route::get('orderDetail/{id}', 'PagesController@getOrderDetail');

Route::get('contact', ['as' => 'getContact', 'uses' => 'PagesController@getContact']);
Route::post('contact', ['as' => 'postContact', 'uses' => 'PagesController@postContact']);

Route::get('producer/{id}', ['as' => 'producer', 'uses' => 'PagesController@getProducer']);

Route::get('huyOrder/{id}','PagesController@huyOrder') ;
