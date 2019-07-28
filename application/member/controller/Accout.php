<?php
namespace app\member\controller;
use think\Controller;
use sms\Sms;
class Accout extends Controller
{

	public function reg()
	{
		if (request()->isPost()) {
			$data = input('post.');

			$regadd = db('user')->insert();
			if ($regadd) {
				$this->success('注册成功！');
			}else{
				$this->error('注册失败');
			}
		}
		return view();
	}

	public function login()
	{


		return view();
	}
}