<?php
namespace app\index\controller;
use think\Controller;
class Base extends Controller
{
    public function _initialize()
    {
        $this->_getfooterArts();
    }

    private function _getfooterArts(){
    	$bases = model('article')->getfooterArts();
    	$this->assign([
    		'bases'=>$bases,
    	]);
    }
}
