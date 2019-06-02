<?php
namespace app\index\controller;
use shopcatetree\Shopcatetree;

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
        	// 1、获取当前主分类所有的子分类ID
            $recShopcatetree = new Shopcatetree();
            $sonIds = $recShopcatetree->childrenids($v['shopcate_id'],db('shopcate'));
            // dump($sonIds);die;
            
            // 2、获取新品推荐
            $_recposgoods = db('recpos_item')->where(array('recpos_id'=>3,'value_type'=>1))->select();
            // dump($_recposgoods);die;
            $rgArr = array();
            foreach ($_recposgoods as $k1 => $v1) {
                $rgArr[] = $v1['value_id'];
            }
            // dump($rgArr);die;
            $map['gs_shopcateid'] = array('IN',$sonIds);

            $map['gs_id'] = array('IN',$rgArr);
            dump($map);die;
            $recShopcate[$k]['newGoodsrec'] = db('goods')->where($map)->limit(6)->select();
            // dump($recShopcate);die;

        }
        dump($recShopcate);die;
        $this->assign([
        	'show'=> 1, //首页导航默认展开，其他页面默认收缩
        	'recShopcate'=>$recShopcate,
        ]);
        return view();
    }

    
}
