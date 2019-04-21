<?php
namespace app\index\controller;
use think\Controller;
class Base extends Controller
{
    public $config;//配置项数组
    public function _initialize()
    {
        $this->_getfooterArts();//获取并分配底部网站帮助
        $this->_getNav();//获取并分配导航
        $this->_getConfs();//获取并分配配置项,为config赋值
    }

    private function _getfooterArts(){
        $Articles = model('article');
    	$bases = $Articles->getfooterArts();//网站帮助信息
        $infos = $Articles->getshowInfo();//网站信息
        // dump($infos);die;
    	$this->assign([
    		'bases'=>$bases,
            'infos'=>$infos,
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

    private function _getConfs(){
        $confRes = model('conf')->getConfs();
        //dump($confRes);die;
        $this->config=$confRes;
        $this->assign([
            'configs'=>$confRes,
        ]);
    }
}
