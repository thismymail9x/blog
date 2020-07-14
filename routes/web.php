<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $categories = \App\Category::all();
    $blogs = \App\Blog::all();
    return view('welcome2', compact('blogs', 'categories'));
})->name('case');

Route::prefix('blogs')->group(function () {
    Route::get('/{id}/info', 'LayoutController@blogInformation')->name('layout.blog-information');
    Route::get('/list', 'LayoutController@listBlog')->name('layout.list-blog');
    Route::get('/search', 'LayoutController@search')->name('layout.search');
    Route::get('/{id}/categories', 'LayoutController@listBlogOfOneCategory')->name('layout.list-blog-of-category');

});

Route::view('/login', 'customer.login')->name('login.show-form');
Route::post('/login', 'UserController@login')->name('login');
Route::get('/logout', 'UserController@logOut')->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::view('/', 'master')->name('master');
        Route::get('/blogs', 'BlogController@index')->name('blog.index');
        Route::get('/create', 'BlogController@showFormCreate')->name('blog.show-form');
        Route::post('/create', 'BlogController@create')->name('blog.create');
        Route::get('/{id}/edit', 'BlogController@showFormEdit')->name('blog.show-form-edit');
        Route::post('/{id}/edit', 'BlogController@edit')->name('blog.edit');
        Route::get('/{id}/delete', 'BlogController@delete')->name('blog.delete');
        Route::get('/search', 'BlogController@search')->name('blog.search');
        Route::prefix('/categories')->group(function () {
            Route::get('/', 'CategoryController@index')->name('category.index');
            Route::get('/create', 'CategoryController@showFormCreate')->name('category.show-form');
            Route::post('/create', 'CategoryController@create')->name('category.create');
            Route::get('/{id}/edit', 'CategoryController@showFormEdit')->name('category.show-form-edit');
            Route::post('/{id}/edit', 'CategoryController@edit')->name('category.edit');
            Route::get('/{id}/delete', 'CategoryController@delete')->name('category.delete');
        });
        Route::prefix('/users')->group(function () {
            Route::get('', 'UserController@index')->name('user.index');
            Route::get('/create', 'UserController@showFormCreate')->name('user.show-form');
            Route::post('/create', 'UserController@create')->name('user.create');
            Route::get('/{id}/edit', 'UserController@showFormEdit')->name('user.show-form-edit');
            Route::post('/{id}/edit', 'UserController@edit')->name('user.edit');
            Route::get('/{id}/delete', 'UserController@delete')->name('user.delete');
        });
    });
});
