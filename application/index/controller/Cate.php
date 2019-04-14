<?php
namespace app\index\controller;
use catetree\Catetree;
class Cate extends Base
{
    public function index($cate_id)
    {
    	$cate=db('cate');
    	//获取当前栏目及其子栏目id,返回数组
    	$cateTree=new Catetree();
    	$ids = $cateTree->childrenids($cate_id,$cate);
    	$ids[] = $cate_id;
    	$map['ar_cateid']=array('IN',$ids);
		$artRes=db('article')->where($map)->select();
		//获取当前基本信息
    	$cases=$cate->find($cate_id);

    	//dump($cases);die;
    	$helpCates=model('cate')->showhelpCate();
    	$comCates=model('cate')->getcomCate();
    	//dump($comCates);die;
        
        

    	$this->assign([
    		'helpCates'=>$helpCates,
    		'comCates'=>$comCates,
    		'artRes'=>$artRes,//获取当前栏目及其子栏目id的文章
    		'cases'=>$cases,//获取当前基本信息
            
    	]);
        return view('cate');
    }
}
