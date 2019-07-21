<?php
namespace app\index\controller;
use think\Controller;
class Base extends Controller
{
    public $config;//配置项数组
    public function _initialize()
    {
        // dump($this->config);die;
        $this->_getConfs();//获取并分配配置项,为config赋值
        $this->_getNav();//获取并分配导航
        $this->_getShopcates();//导航分类
        $this->_getfooterArts();//获取并分配底部网站帮助
    }

    private function _getShopcates(){
        if (cache('shopcateRes')) {
            $shopcateRes=cache('shopcateRes');
        }else{
            $shopcateRes = model('shopcate')->getShopcates();
            if ($this->config['cache']=='是') {
                cache('shopcateRes',$shopcateRes,$this->config['cache_time']);
            }
        }
        
        // dump($this->config);die;
        $this->assign([
            'shopcateRes'=>$shopcateRes,
        ]);
    }

    private function _getfooterArts(){
        $Articles = model('article');
        if (cache('bases')) {
            $bases=cache('bases');
        }else{
    	   $bases = $Articles->getfooterArts();//网站帮助信息
           if ($this->config['cache']=='是') {
                cache('bases',$bases,$this->config['cache_time']);
            }
        }
        if (cache('infos')) {
            $infos=cache('infos');
        }else{
           $infos = $Articles->getshowInfo();//网站信息
           if ($this->config['cache']=='是') {
                cache('infos',$infos,$this->config['cache_time']);
            }
        } 
        // dump($bases);die;
  
    	$this->assign([
    		'bases'=>$bases,
            'infos'=>$infos,
    	]);
    }

    private function _getNav(){
        if (cache('navRes')) {
            $navRes=cache('navRes');
        }else{
            $_navRes=db('nav')->select();
            //dump($_navRes);die;
            $navRes=array();
            foreach ($_navRes as $k => $v) {
                $navRes[$v['nav_pos']][]=$v;
            }
            if ($this->config['cache']=='是') {
                cache('navRes',$navRes,$this->config['cache_time']);
            }
        }
        $this->assign([
            'navRes'=>$navRes,
        ]);
    }

    private function _getConfs(){
        if (cache('confRes')) {
            $confRes='confRes';
        }else{
            $confRes = model('conf')->getConfs();
            if ($this->config['cache']=='是') {
                cache('confRes',$confRes,$this->config['cache_time']);
            }
        }
        
        //dump($confRes);die;
        $this->config=$confRes;
        $this->assign([
            'configs'=>$confRes,
        ]);
    }
}
