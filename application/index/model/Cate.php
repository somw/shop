<?php
namespace app\index\model;
use think\Model;

class Cate extends Model
{
	//普通分类
    public function getcomCate(){
    	$comCates=model('cate')->where(array('cate_type'=>5,'cate_pid'=>0))->select();
    	foreach ($comCates as $k => $v) {
    		$comCates[$k]['children'] = $this->where(array('cate_pid'=>$v['cate_id']))->select();
    	}

    	return $comCates;
    }

    //帮助分类
    public function showhelpCate(){
    	$helpCates = model('cate')->where(array('cate_pid'=>3,'cate_pid'=>2))->select();
    	return $helpCates;
    }

    //面包屑导航
    public function position($cateID){
        $data=$this->field('cate_id,cate_pid,cate_name')->select();
        // dump($data);die;
        return $this-> _position($data,$cateID);
    }

    private function _position($data,$cateID){
        static $arr = array();
        $cates = $this->field('cate_id,cate_pid,cate_name')->find($cateID);
        // dump($cates);die;
        if (empty($arr)) {
            $arr[]=$cates;
        }
        foreach ($data as $k => $v) {
            //dump($v);die;
            if ($v['cate_id'] == $cates['cate_pid']) {
                $arr[] =$v;
                $this->_position($data,$v['cate_id']);
                // dump($arr);die;
            }
        }
        return array_reverse($arr);
    }

}
