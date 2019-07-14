<?php
namespace app\admin\controller;
use think\Controller;

class Index extends controller
{
    public function index()
    {
        return view();
    }

    public function cache(){
        if (cache(NULL)) {
            $this->success('清除缓存成功！');
        }else{
            $this->error('清除缓存失败！');
        }

    }
}  
