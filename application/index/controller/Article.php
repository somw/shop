<?php
namespace app\index\controller;

class Article extends Base
{
    public function index($ar_id)
    {
    	

        $arts=db('article')->find($ar_id);
    	// dump($arts);die;
    	$helpCates=model('cate')->showhelpCate();
    	$comCates=model('cate')->getcomCate();
    	//dump($comCates);die;
       
        $position = model('cate')->position($arts['ar_cateid']);
    	$this->assign([
    		'helpCates'=>$helpCates,
    		'comCates'=>$comCates,
            'arts'=>$arts,
            'position'=>$position,

    	]);
        return view('article');
    }
}
