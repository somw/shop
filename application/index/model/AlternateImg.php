<?php
namespace app\index\model;
use think\Model;

class AlternateImg extends Model
{
    public function getalternateimg(){
    	$alternateimg = $this->where('aimg_status','=',1)->select();
    	return $alternateimg;
    }
}
