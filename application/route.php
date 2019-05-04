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

use think\Route;
Route::rule('cate/:cate_id','index/Cate/index','get',['ext'=>'html'],['cate_id'=>'\d{1,3}']);
Route::rule('article/:ar_id','index/Article/index','get',['ext'=>'html'],['ar_id'=>'\d{1,3}']);
Route::rule('shopcate/:shopcate_id','index/shopcate/index','get',['ext'=>'html'],['shopcate_id'=>'\d{1,3}']);

Route::rule('index','index/Index/index','get',['ext'=>'html']);