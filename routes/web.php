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

//TrafficJunky広告
Route::get('h1', function () {
    // return view('adulttj'); //男性アダルト
    return redirect('https://fam-ad.com/ad/p/dt?_site=75057&_loc=267256&_mstype=99'); //fam - えち垢ポータル
});

//OS切り替え無し
Route::get('os', 'AdController@os');

//OS切り替えあり
Route::get('check', 'AdController@check');

//確認
Route::get('cccheck', function () {
    // return view('test');
    return view('adulttj'); //男性アダルト -  TrafficJunky
});
