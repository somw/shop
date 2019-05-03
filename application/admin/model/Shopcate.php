<?php
namespace app\admin\model;
use think\Model;

class Shopcate extends Model
{
    protected $field=true;
    // public 表示全局，类内部外部子类都可以访问；
    // private 表示私有的，只有本类内部可以使用；
    // protected 表示受保护的，只有本类或子类或父类中可以访问；
    protected static function init()
    {
        Shopcate::beforeUpdate(function ($shopcate) {
            //商店分类ID
            $shopcateId=$shopcate->shopcate_id;

            $shopcateData=input('post.');
            // dump($shopcateData);die;
            
             //处理商店分类推荐位
            $recpos_item=db('recpos_item');
            $recpos_item->where(array('value_type'=>2,'value_id'=>$shopcateId))->delete();
            if (isset($shopcateData['recpos'])) {
                foreach ($shopcateData['recpos'] as $k => $v) {
                    $recpos_item->insert(['recpos_id'=>$v,'value_id'=>$shopcateId,'value_type'=>2]);
                }
            }
            
        });

        Shopcate::afterInsert(function ($shopcate) {
            $shopcateId=$shopcate->shopcate_id;
            // dump($shopcateId);die;
            $shopcateData=input('post.');
            //dump($shopcateData['recpos']);die;
            //处理商店分类推荐位
            if (isset($shopcateData['recpos'])) {
                foreach ($shopcateData['recpos'] as $k => $v) {
                    db('recpos_item')->insert(['recpos_id'=>$v,'value_id'=>$shopcateId,'value_type'=>2]);
                }
            }

        });

    }

}
