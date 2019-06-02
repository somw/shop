<?php
namespace shopcatetree;
class Shopcatetree{
	public function shopcatetree($shopcatelist){
		return $this->sort($shopcatelist);
	}

	public function sort($shopcatelist,$shopcatepid=0,$lever=0){
		static $arr=array();
		foreach ($shopcatelist as $k => $v) {
			if ($v['shopcate_pid'] == $shopcatepid) {
				$v['lever']=$lever;
				$arr[]=$v;
				$this->sort($shopcatelist,$v['shopcate_id'],$lever+1);

			}
		}
		return $arr;
	}

	

	// 获取子栏目ID
	public function childrenids($shopcateid,$obj){
		$data=$obj->field('shopcate_id,shopcate_pid')->select();
		return $this->_childrenids($data,$shopcateid,TRUE); 
	}

	private function _childrenids($data,$shopcateid,$clear=FALSE){
		static $arr=array();
		if ($clear) {
			$arr=array();
		}
		foreach ($data as $k => $v) {
			if ($v['shopcate_pid'] == $shopcateid) {
				$arr[] = $v['shopcate_id'];
				$this -> _childrenids($data,$v['shopcate_id']);
			}
		}
		return $arr;
	}

	//处理栏目排序
	public function shopcatesort($data,$obj){
		foreach ($data as $k => $v) {
			$obj->update(['shopcate_id' =>$k, 'shopcate_sort' =>$v]);
		}
	}


}