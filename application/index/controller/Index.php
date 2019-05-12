<?php
namespace app\index\controller;

class Index extends Base
{
    public function index()
    {
    	// dump($this->config);die;
        //$this->hotGoods(); 
        
        $this->assign([
        	'show'=> 1 //首页导航默认展开，其他页面默认收缩
        ]);
        return view();
    }

    
}
