<?php
namespace app\index\model;
use think\Model;
use shopcatetree\Shopcatetree;
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

    public function getIndexRecposGoos($shopcateId,$recposgoodsId){
        // 获取新品推荐
        // 1、获取当前主分类下所有的子分类ID
        $recShopcatetree = new Shopcatetree();
        $sonIds = $recShopcatetree->childrenids($shopcateId,db('shopcate'));
        $sonIds[] = $shopcateId;
        // dump($sonIds);die;
        
        // 2、获取新品推荐
        $_recposgoods = db('recpos_item')->where(array('recpos_id'=>$recposgoodsId,'value_type'=>1))->select();
        // dump($_recposgoods);die;
        $rgArr = array();
        foreach ($_recposgoods as $kk => $vv) {
            $rgArr[] = $vv['value_id'];
        }
        // dump($rgArr);die;
        $map['gs_shopcateid'] = array('IN',$sonIds);

        $map['gs_id'] = array('IN',$rgArr);
        // dump($map);die;
        $recShopcateArr = $this->where($map)->limit(6)->select();
        // dump($recShopcate);die;
        // 
        return $recShopcateArr;
    }
}