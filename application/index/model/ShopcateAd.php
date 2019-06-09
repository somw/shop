<?php
namespace app\index\model;
use think\Model;

class ShopcateAd extends Model
{


    public function getshopcateAd($ca_id){

    	$ca_ad = $this->where(array('ca_shopcateid'=>$ca_id))->select();
        $arr = array();
        foreach ($ca_ad as $k => $v) {
            if ($v['ca_position'] > 3) {
                $arr[$k] = $v['ca_position'];

            }
             
        }
        

        dump($arr);die;
       
    return $ca_ad;
    }
    
}