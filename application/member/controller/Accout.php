<?php
namespace app\member\controller;
use sms\Sms;
use PHPMailer\PHPMailer\PHPMailer;
use think\Controller;

class Accout extends Controller
{

	public function reg()
	{
		// if (request()->isPost()) {
		// 	$data = input('post.');

		// 	$regadd = db('user')->insert();
		// 	if ($regadd) {
		// 		$this->success('注册成功！');
		// 	}else{
		// 		$this->error('注册失败');
		// 	}
		// }
		return view();
	}

	public function login()
	{


		return view();
	}

	public function sendMsg(){

		$send = new Sms();
	    $account = '18522268833';
	    $pswd = 'Zhai1230';
	    $mobile = '13821656007';
	    $code = mt_rand(100000,999999);
	    $msg = '您的登录密码是：'.$code.'，打死不要告诉别人！';
	    //$ts  可选参数，时间戳，格式yyyyMMddHHmmss
	    //$state 必填参数   状态  1:验证码短信  2:营销短信  3:语音验证码

	    $re = $send->send($account,$pswd,$mobile,$msg,time(),1);
	    // dump($re);die;
	    if (!is_null($re)) {
	    	if (isset($re['result']) && $re['result'] == 0) {
	    		echo '短信发送成功！';
	    	}else{
	    		echo $re['result_msg'];
	    	}
	    	
	    }else{
	    	echo $re;
	    }
	}

	public function sendMail(){
		
		$to = 'zhaizhai817@163.com';
		$title = '你好';
		$content = '你好222222111aaaaa';


		$mail = new PHPMailer();
	    // 设置为要发邮件
	    $mail->isSMTP();
	    // 是否允许发送HTML代码做为邮件的内容
	    $mail->IsHTML(TRUE);
	    $mail->CharSet='UTF-8';
	    // 是否需要身份验证
	    $mail->SMTPAuth=TRUE;
	    /*  邮件服务器上的账号是什么 -> 到163注册一个账号即可 */
	    $mail->From="zhai817@163.com";
	    $mail->FromName="zhai817";
	    $mail->Host="smtp.163.com";  //发送邮件的服务协议地址
	    $mail->Username="zhai817";
	    $mail->Password="ming1230";
	    // 发邮件端口号默认25
	    $mail->Port = 25;
	   
	    // 收件人
	    $mail->AddAddress($to);
	    // 邮件标题
	    $mail->Subject=$title;
	    // 邮件内容
	    $mail->Body=$content;
	    
	    if (!($mail->Send())){
	    	echo "NO";
	    	echo $mail->ErrorInfo;
	    } else {
	    	echo "OK";
	    }



	}
}