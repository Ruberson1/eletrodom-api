<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use App\Models\Brand\Brand;
use App\Models\Category\Category;
use App\Models\Product\Product;

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return 'Bem vindo a api Eletro Dom';
});

/**
 * #####################
 * ### PRODUCT ROUTE ##
 * ###################
 */
Route::group(['prefix' => 'api/v1', 'namespace' => 'V1\Product', 'as' => Product::class], function () {

    Route::post('/product', [
        'uses' => 'ProductController@create',
        'middleware' => 'ValidateDataMiddleware',
    ]);

    Route::get('/products', [
        'uses' => 'ProductController@findAll',
    ]);

    Route::get('/product/{id}', [
        'uses' => 'ProductController@findOneBy',
    ]);

    Route::put('/product/{param}', [
        'uses' => 'ProductController@editBy',
        'middleware' => 'ValidateDataMiddleware',
    ]);

    Route::delete('/product/{id}', [
        'uses' => 'ProductController@delete',
    ]);
});

/**
 * #########################
 * ### CATEGORIES ROUTES ##
 * #######################
 */
Route::group(['prefix' => 'api/v1', 'namespace' => 'V1\Category', 'as' => Category::class], function () {
    
    Route::get('/categories', [
        'uses' => 'CategoryController@findAll',
    ]);
});

/**
 * #####################
 * ### BRANDS ROUTES ##
 * ###################
 */
Route::group(['prefix' => 'api/v1', 'namespace' => 'V1\Brand', 'as' => Brand::class], function () {

    Route::get('/brands', [
        'uses' => 'BrandController@findAll',
    ]);
});





