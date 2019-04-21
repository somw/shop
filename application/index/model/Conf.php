<?php
namespace app\index\model;
use think\Model;

class Conf extends Model
{
    //获取所有配置项
    public function getConfs(){
        $_confRes=$this->field('conf_ename,conf_default')->select();
        $confRes = array();
        foreach ($_confRes as $k => $v) {
            $confRes[$v['conf_ename']]=$v['conf_default'];
        }
    return $confRes;
    }
}