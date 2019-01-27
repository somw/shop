<?php
namespace app\admin\validate;
use think\Validate;

class Brand extends Validate
{
    protected $rule =   [
        'brand_name'  => 'require|unique:brand',
        'brand_url'   => 'require|url',
        'brand_description' => 'min:6',    
    ];
    
    protected $message  =   [
        'brand_name.require' => '品牌名称必须写',
        'brand_name.unique'     => '品牌名称不能重复',
        'brand_url.url'   => 'url格式错误',
        'brand_url.require'   => 'url必须写',
        'brand_description'  => '描述最少6个字符', 
    ];
}
