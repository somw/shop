<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// think\Route::rule([
// 	'admin'=>'admin/index/index',
// 	'article/lst'=>['admin/article/lst'],
// 	'article'=>['admin/article/edit'],
// 	'article'=>['admin/article/add'],
// ],[]);
think\Route::group('index',[
	'/:num'=>'index1',
	'/:str'=>'index2',
	'/:bool'=>'index3',
],['method'=>'get','prefix'=>'admin/index/'],['num'=>'\d{2,4}','str'=>'[a-zA-z]+','bool'=>'0|1']);

// think\Route::group('index',function(){
// 	think\Route::get(':num','admin/index/index1',[],['num'=>'\d{2,4}']);
// 	think\Route::get(':str','admin/index/index2',[],['str'=>'[a-zA-z]+']);
// 	think\Route::get(':bool','admin/index/index3',[],['bool'=>'0|1']);
// });

// think\Route::group('index',[
// 	'/:num'=>['admin/index/index1',['method'=>'get'],['num'=>'\d{2,4}']],
// 	'/:str'=>['admin/index/index2',['method'=>'get'],['str'=>'[a-zA-z]+']],
// 	'/:bool'=>['admin/index/index3',['method'=>'get'],['bool'=>'0|1']],
// ]);

// think\Route::rule('admin/haha/:name/:age','admin/index/index','GET',['ext'=>'html'],['age'=>'\d+']);
// 
// return [
// //     '__pattern__' => [
// //         'name' => '\w+',
// //     ],
// //     '[hello]'     => [
// //         ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
// //         ':name' => ['index/hello', ['method' => 'post']],
// //     ],
// 	'[index]'=>[
// 		'/:num'=>['admin/index/index1',['method'=>'get'],['num'=>'\d{2,4}']],
// 		'/:str'=>['admin/index/index2',['method'=>'get'],['str'=>'[a-zA-z]+']],
// 		'/:bool'=>['admin/index/index3',['method'=>'get'],['bool'=>'0|1']],
// 	],
// ];
