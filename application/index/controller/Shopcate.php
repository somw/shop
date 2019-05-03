<?php
namespace app\index\controller;

class Shopcate extends Base
{
    public function index(){
        return view('shopcate');
    }
    public function getShopcateinfo($shopcate_id)
    {
        $sonshopCates=model('shopcate')->getsonShopcates($shopcate_id);
        $subitems='';
        foreach ($sonshopCates as $k => $v) {
            $subitems.='<dl class="dl_fore1"><dt>';
            $subitems.='<a href="category.php?id=1105" target="_blank">'.$v["shopcate_name"].'</a></dt><dd>';
            foreach ($v['children'] as $k1 => $v1) {
                $subitems.='<a href="category.php?id=1106" target="_blank">'.$v1["shopcate_name"].'</a>';
            }
            $subitems.='</dd></dl><div class="item-brands"><ul></ul></div><div class="item-promotions"></div>';
        }
        // dump($sonshopCates);die;
        $data = array();
    	$data['topic_content'] = '111';
        $data['cat_content'] = $subitems;
        $data['brands_ad_content'] = '333';
        $data['cat_id'] = $shopcate_id;
        return json($data);
    }
}