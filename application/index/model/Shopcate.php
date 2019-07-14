<?php
namespace app\index\model;
use think\Model;

class Shopcate extends Model
{
    //顶级分类和二级分类获取
    public function getShopcates(){
        $shopCates=$this->where(array('shopcate_pid'=>0))->select();
    
       
        foreach ($shopCates as $k => $v) {
        	$shopCates[$k]['children']=$this->where(array('shopcate_pid'=>$v['shopcate_id']))->select();
        }
        // dump($shopCates);die;
    return $shopCates;
    }

    //通过顶级shopcate_id分类获取二级和三级子分类
    public function getsonShopcates($shopcate_id){
        $sonshopCates = $this->where(array('shopcate_pid'=>$shopcate_id))->select();//获取二级子分类
        foreach ($sonshopCates as $k => $v) {
            $sonshopCates[$k]['children']=$this->where(array('shopcate_pid'=>$v['shopcate_id']))->select();//获取三级子分类
        }
    return $sonshopCates;
    }

    public function getRecShopcate($recpos_id,$pid=0){
        $recShopcate = db('recpos_item')->where(array('recpos_id'=>$recpos_id,'value_type'=>2))->select();
        // dump($recShopcate);die;
        $recarr = array();
        foreach ($recShopcate as $k => $v) {
            $_recarr = $this->where(array('shopcate_id'=>$v['value_id'],'shopcate_pid'=>$pid))->find();
            if ($_recarr) {
                $recarr[] = $_recarr;
            }
        }
        // dump(json_decode(json_encode($recarr),true));die;
    return json_decode(json_encode($recarr),true);

    }
    
}