<?php
namespace app\index\controller;

class Cate extends Base
{
    public function index()
    {

    	$helpCates=model('cate')->showhelpCate();
    	$comCates=model('cate')->getcomCate();
    	//dump($comCates);die;
    	$this->assign([
    		'helpCates'=>$helpCates,
    		'comCates'=>$comCates,
    	]);
        return view('cate');
    }
}
