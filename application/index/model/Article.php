<?php
namespace app\index\model;
use think\Model;

header("Content-Type:text/html;charset=utf-8");
class Article extends Model
{
    public function getfooterArts(){
    	$helpCateArs = model('cate')->where(array('cate_type'=>3))->select();
    	foreach ($helpCateArs as $k => $v) {
    		$helpCateArs[$k]['arts'] = $this->where(array('ar_cateid'=>$v['cate_id']))->select();
    	}
    	// dump($helpCateArs);die;

    	return $helpCateArs;
    }


    public function getshowInfo(){
        $getConf = $this->where('ar_cateid','=',24)->field('ar_id,ar_url,ar_title')->select();
        return $getConf;
    }


}
