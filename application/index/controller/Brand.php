<?php
namespace app\index\controller;
use think\Controller;

class Brand extends Controller
{
    public function lst()
    {
        $data = array();
        $brandlist = db('brand') ->order('brand_id desc') ->paginate(17);
        $data['totalpage'] = $brandlist -> lastPage();
        $data1 = $brandlist-> items();
        // dump($brandlist->items());die;
        $html = '';
        foreach ($data1 as $k => $v) {
            $html .= '<li><div class="brand-img"><a href="'.$v['brand_url'].'" target="_blank"><img src="'.config('view_replace_str.__UPLOADS__').'/'.$v['brand_img'].'"></a></div><div class="brand-mash"><div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div><div class="coupon"><a href="'.$v['brand_url'].'" target="_blank">关注人数<br><div id="collect_count_204">0</div></a></div></div></li>';
        }
        $data['brand']=$html;
        
        return $data;
    }

    
}
