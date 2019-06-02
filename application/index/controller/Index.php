<?php
namespace app\index\controller;

class Index extends Base
{
    public function index()
    {	
    	// 热卖商品
    	// dump($this->config);die;
        //$this->hotGoods(); 
        $recShopcate = model('shopcate')->getRecShopcate(4,0);  //首页推荐 推荐位顶级分类
        // dump($recShopcate);die;
        foreach ($recShopcate as $k => $v) {
        	// 获取当前顶级分类下被设为 首页推荐 的二级分类
        	$recShopcate[$k]['children'] = model('shopcate')->getRecShopcate(4,$v['shopcate_id']);
        	// 获取新品推荐
        	// 1、
        	
        }
        // dump($recShopcate);die;
        $this->assign([
        	'show'=> 1, //首页导航默认展开，其他页面默认收缩
        	'recShopcate'=>$recShopcate,
        ]);
        return view();
    }

    
}
