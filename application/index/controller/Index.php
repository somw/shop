<?php
namespace app\index\controller;
class Index extends Base
{
    public function index()
    {	

        // 获取首页大模块顶级分类数据开始
        $recShopcate = model('shopcate')->getRecShopcate(4,0);  //首页推荐 推荐位顶级分类
        // dump($recShopcate);die;
        foreach ($recShopcate as $k => $v) {
        	// 获取当前顶级分类下被设为 首页推荐 的二级分类
        	$recShopcate[$k]['children'] = model('shopcate')->getRecShopcate(4,$v['shopcate_id']);

            foreach ($recShopcate[$k]['children'] as $k1 => $v1) {
                // var_dump($recShopcate[$k]['children'][$k1]);

                $recShopcate[$k]['children'][$k1]['bestshopcate'] = model('goods')->getIndexRecposGoos($v1['shopcate_id'],6);
                
            }

            $recShopcate[$k]['newGoodsrec'] = model('goods')->getIndexRecposGoos($v['shopcate_id'],3);

            $recShopcate[$k]['brand'] = model('shopcate_brand')->getshopcateBrand($v['shopcate_id'],TRUE);

            $recShopcate[$k]['ad'] = model('shopcate_ad')->getshopcateAd($v['shopcate_id']);

        }
        // 获取首页大模块数据结束

        // 调用首页商品
        $indexGoodsRes = model('goods')->getRecposGoods(7,20);
        // dump($indexGoodsRes);die;
        $alternateimg = model('alternate_img')->getalternateimg();

        $this->assign([
        	'show'=> 1, //首页导航默认展开，其他页面默认收缩
        	'recShopcate'=>$recShopcate,
            'indexGoodsRes'=>$indexGoodsRes,
            'alternateimg'=>$alternateimg,
            // 'gongh'=>$gongh,
            // 'cuxiao'=>$cuxiao,
            // 'cuxiao1'=>$cuxiao1,
        ]);
        return view();
    }

    // 公告和促销
    public function getindexgh($cateid,$limit){
        $indexgc = array();
        foreach ($cateid as $k => $v) {
            $indexgc[]=model('article')->getartGC($v,$limit);
        }
        // dump($indexgc);die;
        return $indexgc;
    }
    
}
