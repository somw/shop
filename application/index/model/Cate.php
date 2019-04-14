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

}
