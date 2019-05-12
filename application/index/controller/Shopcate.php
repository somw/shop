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
        $cbrand=model('shopcate_brand')->getshopcateBrand($id);

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
        // dump($cbrand);die;
        $brands ='';
        $brands .='<div class="cate-brand">';
        foreach ($cbrand['brand'] as $k => $v) {
            $brands.='<div class="img"><a href="'.$v['brand_url'].'" target="_blank" title="'.$v['brand_name'].'"><img src="'.config('view_replace_str.__UPLOADS__').'/'.$v['brand_img'].'"></a></div>';
        }
        $brands.='</div><div class="cate-promotion">';
        $brands.='<a href="'.$cbrand['pro']['cb_prourl'].'" target="_blank"><img src="'.config('view_replace_str.__UPLOADS__').'/'.$cbrand['pro']['cb_proimg'].'" width="199" height="97"></a>';
        $brands.='</div>';

        //商品品牌
        
        $data = array();
    	$data['topic_content'] = $channels;
        $data['cat_content'] = $subitems;
        $data['brands_ad_content'] = $brands;
        $data['cat_id'] = $id;
        // dump($data);die;
        return json($data);
    }
}