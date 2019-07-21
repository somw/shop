<?php
namespace app\index\controller;

class Article extends Base
{
    public function index($ar_id)
    {
    	// 当前文章内容
        $artsName=$ar_id.'_arts';
        if (cache($artsName)) {
            $arts=cache($artsName);
            // dump($arts);die;
        }else{
            $arts=db('article')->find($ar_id);
            if ($this->config['cache']) {
                cache($artsName,$arts,$this->config['cache_time']);
            }
        }
        
    	// dump($arts);die;
        //帮助左侧栏目分类 
        if (cache('helpCates')) {
            $helpCates=cache('helpCates');
        }else{
            $helpCates=model('cate')->showhelpCate();
            if ($this->config['cache']) {
                cache('helpCates',$helpCates,$this->config['cache_time']);
            }
        }
    	
    	// 普通左侧栏目分类
        if (cache('comCates')) {
            $comCates=cache('comCates');
        }else{
            $comCates=model('cate')->getcomCate();
            if ($this->config['cache']) {
                cache('comCates',$comCates,$this->config['cache_time']);
            }
        }
        
    	//dump($comCates);die;
       // 面包屑导航
       
       if (cache('position')) {
            $position=cache('position');
            // dump($arts);die;
        }else{
            $position = model('cate')->position($arts['ar_cateid']);
            cache('position',$position,$this->config['cache_time']);
        }
    	$this->assign([
    		'helpCates'=>$helpCates,
    		'comCates'=>$comCates,
            'arts'=>$arts,
            'position'=>$position,

    	]);
        return view('article');
    }
}
