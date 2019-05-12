<?php
namespace app\index\model;
use think\Model;

class ShopcateBrand extends Model
{


    public function getshopcateBrand($cb_id){
    	$data = array();
    	$brand = db('brand');
        $cbrand = $this->where(array('cb_shopcateid'=>$cb_id))->find();
        $cbrandid = explode(',',$cbrand['cb_brandid']);
        foreach ($cbrandid as $k => $v) {
        	$data['brand'][] = $brand->find($v);
        }

        $data['pro']['cb_proimg'] = $cbrand['cb_proimg'];
        $data['pro']['cb_prourl'] = $cbrand['cb_prourl'];
        // dump($data);die;
       
    return $data;
    }
    
}