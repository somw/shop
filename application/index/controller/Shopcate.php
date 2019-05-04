<?php
namespace app\index\controller;

class Shopcate extends Base
{
    public function index($shopcate_id){
        // echo $shopcate_id;
        return view('shopcate');
    }
    public function getShopcateinfo($id)
    {
        
        $sonshopCates=model('shopcate')->getsonShopcates($id);
        $cwords=model('shopcate_words')->getshopcateWords($id);
        // 商品top
        $channels='';
        foreach ($cwords as $k => $v) {
            $channels .= '<a href="category.php?id=1105" target="_blank">'.$v['cw_word'].'</a>';
        }
        
        // 商品分类二级三级
        $subitems='';
        foreach ($sonshopCates as $k => $v) {
            $subitems.='<dl class="dl_fore1"><dt><a href="'.url('index/shopcate/index',['shopcate_id'=>$v['shopcate_id']]).'" target="_blank">'.$v["shopcate_name"].'</a></dt><dd>';
            foreach ($v['children'] as $k1 => $v1) {
                $subitems.='<a href="'.url('index/shopcate/index',['shopcate_id'=>$v1['shopcate_id']]).'" target="_blank">'.$v1["shopcate_name"].'</a>';
            }
            $subitems.='</dd></dl><div class="item-brands"><ul></ul></div><div class="item-promotions"></div>';
        }
        // dump($sonshopCates);die;
        $data = array();
    	$data['topic_content'] = $channels;
        $data['cat_content'] = $subitems;
        $data['brands_ad_content'] = '333';
        $data['cat_id'] = $id;
        // dump($data);die;
        return json($data);
    }
}