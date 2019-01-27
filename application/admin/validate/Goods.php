<?php
namespace app\admin\validate;
use think\Validate;

class Goods extends Validate
{
    protected $rule =   [
        'gs_name'  => 'require|unique:goods',
        'gs_catesid'   => 'require',
        'gs_marktep'   => 'require',
        'gs_shopp'   => 'require',
        'gs_weight'   => 'require',    
    ];
    
    protected $message  =   [
        'gs_name.require' => '商品名称必须写',
        'gs_name.unique'     => '商品名称不能重复',
        'gs_catesid.require'   => '商品名称必须写',
        'gs_marktep.require'  => '商品名称必须写', 
        'gs_shopp.require'  => '商品名称必须写', 
        'gs_weight.require'  => '商品名称必须写', 
    ];
}
