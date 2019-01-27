<?php
namespace app\admin\validate;
use think\Validate;

class Cate extends Validate
{
    protected $rule =   [
        'cate_name'  => 'unique:cate',
        'cate_description' => 'min:6',    
    ];
    
    protected $message  =   [
        'cate_name.unique'     => '栏目名称不能重复',
        'cate_description'  => '描述最少6个字符', 
    ];
}
