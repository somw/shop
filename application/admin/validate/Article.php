<?php
namespace app\admin\validate;
use think\Validate;

class Article extends Validate
{
    protected $rule =   [
        'ar_name'  => 'unique:article',
        'ar_url'   => 'url',
    ];
    
    protected $message  =   [
        'ar_name.unique'     => '品牌名称不能重复',
        'ar_url.url'   => 'url格式错误',
    ];
}
