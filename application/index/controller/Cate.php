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
        

        // 缓存分类左侧cate_id
        $artResName=$cate_id.'_artRes';
        if (cache($artResName)) {
           $artRes=cache($artResName);
        }else{
            $artRes=db('article')->where($map)->select();
            cache($artResName,$artRes,$this->config['cache_time']);
        }

        // $artResName=$cate_id.'_artRes';
        // if (cache('artRes')) {
        //    $artRes=cache('artRes');
        // }else{
        //    $artRes=db('article')->where($map)->select();
        //     cache('artRes',$artRes,$this->config['cache_time']);
        // }
		

		//获取当前基本信息
        $casesName=$cate_id.'_cases';
        if (cache($casesName)) {
            $cases=cache($casesName);
        }else{
            $cases=$cate->find($cate_id);
            cache($casesName,$cases,$this->config['cache_time']);
        }
    	

    	// dump($cases);die;
    	

        if (cache('helpCates')) {
            $helpCates=cache('helpCates');
        }else{
           $helpCates=model('cate')->showhelpCate();//帮助分类
           if ($this->config['cache']=='是') {
                cache('helpCates',$helpCates,$this->config['cache_time']);
            }
        }
        if (cache('comCates')) {
            $comCates=cache('comCates');
        }else{
           $comCates=model('cate')->getcomCate();//普通分类
           if ($this->config['cache']=='是') {
                cache('comCates',$comCates,$this->config['cache_time']);
            }
        } 
    	// dump($comCates);die;
        
        

    	$this->assign([
    		'helpCates'=>$helpCates,
    		'comCates'=>$comCates,
    		'artRes'=>$artRes,//获取当前栏目及其子栏目id的文章
    		'cases'=>$cases,//获取当前基本信息
            
    	]);
        return view('cate');
    }
}
