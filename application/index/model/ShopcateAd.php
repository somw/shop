<?php
namespace app\index\model;
use think\Model;

class ShopcateAd extends Model
{


    public function getshopcateAd($ca_id){

    	$ca_ad = $this->where(array('ca_shopcateid'=>$ca_id))->select();
        $arr = array();
        foreach ($ca_ad as $k => $v) {
            $arr[$v['ca_position']][]=$v;
             
        }
        // dump($arr);die;
       
    return $arr;
    }
    
}