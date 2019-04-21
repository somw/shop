<?php
namespace app\index\controller;
use think\Controller;
class Base extends Controller
{
    public function _initialize()
    {
        $this->_getfooterArts();
        $this->_getNav();
    }

    private function _getfooterArts(){
    	$bases = model('article')->getfooterArts();
    	$this->assign([
    		'bases'=>$bases,
    	]);
    }

    private function _getNav(){
        $_navRes=db('nav')->select();
        //dump($_navRes);die;
        $navRes=array();
        foreach ($_navRes as $k => $v) {
            $navRes[$v['nav_pos']][]=$v;
        }
        $this->assign([
            'navRes'=>$navRes,
        ]);
    }
}
