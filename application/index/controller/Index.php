<?php
namespace app\index\controller;

class Index extends Base
{
    public function index()
    {
    	// dump($this->config);die;
    	$this->HotshopRes();
        return view();
    }

    public function HotshopRes(){
    	$Hotshop=db('recpos_item')->where(array('rec_type'=>1,'value_id'=>60))->select();
    	dump($Hotshop);die;
    }
}
