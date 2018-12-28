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

Route::get('/', function () {
    return view('welcome');
});




//get请求
Route::get('get1',function (){
   return 'get1';
});

//post
Route::post('post1',function(){
    return 'post1';
});

//多请求路由  match  指定响应方式
Route::match(['get','post'],'duoluyou',function(){
    return 'duo lu you';
});

//多请求路由  any 响应所有请求
Route::any('duoluyou2',function(){
    return 'duoluyou222';
});

//参数
Route::get('canshu/{id}',function($id){
    return '参数是'.$id;
});

//默认参数
Route::get('canshu2/{id?}',function($id = null){
    return '参数是'.$id;
});

//正则验证
Route::get('canshu3/{name?}',function($name = 'zhangsan'){
    return '参数是'.$name;
})->where('name','[A-Za-z]+');

//多字段验证
Route::get('canshu4/{id}/{name?}',function($id,$name = 'zhangsan'){
    return '参数是'.$id.$name;
})->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);

//路由别名
Route::get('ceshi/xxx',['as'=>'bieming',function(){
   return route('bieming');
}]);

//路由群组
Route::group(['prefix'=>'qianzhui'],function(){
    Route::get('ceshi1/xxx',['as'=>'bieming',function(){
        return route('bieming');
    }]);
    Route::get('ceshi2/{id?}',function($id = null){
        return '参数是'.$id;
    });
});

//路由中输出视图
Route::get('view', function () {
    return view('welcome');
});

//路由与控制器
Route::get('kongzhiqi','KongzhiqiController@index');
//Route::get('kongzhiqi',['uses' => 'KongzhiqiController@index']);

/*Route::get('kongzhiqi',
    ['uses' => 'KongzhiqiController@index',
        'as' => 'kzq'
    ]);*/

//参数绑定
//Route::get('kongzhiqi/{id}','KongzhiqiController@index')->where('id','[0-9]+');


Route::any('test1',['uses'=>'StudentController@test1']);
Route::any('query1',['uses'=>'StudentController@query1']);
Route::any('query2',['uses'=>'StudentController@query2']);