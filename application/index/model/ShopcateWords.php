<?php
namespace app\index\model;
use think\Model;

class ShopcateWords extends Model
{


    public function getshopcateWords($cw_id){
        $cwords = $this->where(array('cw_shopcateid'=>$cw_id))->select();
        // dump($cwords);die;
        foreach ($cwords as $k => $v) {
            $cwords[$k]['children']=$this->where(array('cw_shopcateid'=>$v['cw_id']))->select();
        }
    return $cwords;
    }
    
}