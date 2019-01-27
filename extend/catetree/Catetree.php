<?php
namespace catetree;
class Catetree{
	public function catetree($catelist){
		return $this->sort($catelist);
	}

	public function sort($catelist,$catepid=0,$lever=0){
		static $arr=array();
		foreach ($catelist as $k => $v) {
			if ($v['cate_pid'] == $catepid) {
				$v['lever']=$lever;
				$arr[]=$v;
				$this->sort($catelist,$v['cate_id'],$lever+1);

			}
		}
		return $arr;
	}

	

	// 获取子栏目ID
	public function childrenids($cateid,$obj){
		$data=$obj->field('cate_id,cate_pid')->select();
		return $this->_childrenids($data,$cateid); 
	}

	private function _childrenids($data,$cateid){
		static $arr=array();
		foreach ($data as $k => $v) {
			if ($v['cate_pid'] == $cateid) {
				$arr[] = $v['cate_id'];
				$this -> _childrenids($data,$v['cate_id']);
			}
		}
		return $arr;
	}

	//处理栏目排序
	public function catesort($data,$obj){
		foreach ($data as $k => $v) {
			$obj->update(['cate_id' =>$k, 'cate_sort' =>$v]);
		}
	}


}