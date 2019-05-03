<?php
namespace app\index\model;
use think\Model;

class Goods extends Model
{
	//获取所有配置项
    public function getRecposGoods($Recposid,$limit=''){
        $_hotIds=db('recpos_item')->where(array('value_type'=>1,'recpos_id'=>$Recposid))->select();
        $hotIds = array();
        foreach ($_hotIds as $k => $v) {
            $hotIds[]=$v['value_id'];
        }
        $map['gs_id']=array('IN',$hotIds); 
        $recRes=$this->field('gs_id,gs_name,gs_img')->where($map)->limit($limit)->select();
        // dump($hotGoodsRes);die;  
        return $recRes;
        
    }
}