<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

//Route::get('/', function () {
//    return view('welcome');
 //   return csrf_token();
//});

//Route::get('about', function () {
 //   return 'About page';
//});



Route::get('user/{id?}', function ($id="") {
    return 'User: ' .$id;
});



Route::post('product', function () {
    return 'This is my product' ;
});

Route::put('product', function () {
    return 'Update product' ;
});

Route::delete('product', function () {
    return 'Delete product' ;
});

Route::get('category/{name}', function ($name) {
    return $name;
})-> where('name','[A-Za-z]+');

Route::get('group/{id}', function ($id) {
    return $id;
})-> where('id','[0-9]+');

Route::get('product/{id}/{name}',function($id,$name){
    return'Product ID:'.$id.'<br>Product name:'.$name;
    })->where(['id'=>'[0-9]+','name'=>'[a-z]+']);


   //การส่งเข้า Controller
//Route::get('/','App\Http\Controllers\HomeController@home');
//Route::get('service','App\Http\Controllers\HomeController@service');
//Route::get('contact','App\Http\Controllers\HomeController@contact');

Route::get('/',[HomeController::class, 'home']);
Route::get('about',[HomeController::class, 'about']);
Route::get('service',[HomeController::class, 'service']);
Route::get('contact',[HomeController::class, 'contact']);
Route::get('login',[HomeController::class, 'login']);

