<?php
namespace Sms;

header("Content-Type: text/html; charset=utf-8");
class Sms{
    private $url = 'http://139.196.108.241:8080';
 
    private function post_curls($url, $post)
    {
        $curl = curl_init(); // 启动一个CURL会话
        curl_setopt($curl, CURLOPT_URL, $url); // 要访问的地址
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
        curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); // 模拟用户使用的浏览器
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // 使用自动跳转
        curl_setopt($curl, CURLOPT_AUTOREFERER, 1); // 自动设置Referer
        curl_setopt($curl, CURLOPT_POST, 1); // 发送一个常规的Post请求
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post); // Post提交的数据包
        curl_setopt($curl, CURLOPT_TIMEOUT, 30); // 设置超时限制防止死循环
        curl_setopt($curl, CURLOPT_HEADER, 0); // 显示返回的Header区域内容
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); // 获取的信息以文件流的形式返回
        $res = curl_exec($curl); // 执行操作
        if (curl_errno($curl)) {
            echo 'Errno'.curl_error($curl);//捕抓异常
        }
        curl_close($curl); // 关闭CURL会话
        return $res; // 返回数据，json格式
  
    }
 
    //$account 用户账号
    //$pswd 必填参数。用户密码
    //$mobile 必填参数。合法的手机号码
    //$msg  必填参数。短信内容
    //$ts  可选参数，时间戳，格式yyyyMMddHHmmss
    //$state 必填参数   状态  1:验证码短信  2:营销短信  3:语音验证码
    public function send($account,$pswd,$mobile,$msg,$ts,$state){
        if($ts != ''){
            $pswd = md5($account.$pswd.$ts);
        }
        $url = '';
        switch ($state) {
            case 1:
                $url = $this->url.'/Api/HttpSendSMYzm.ashx';
                break;
            case 2:
                $url = $this->url.'/Api/HttpSendSMYx.ashx';
                break;
            case 3:
                $url = $this->url.'/Api/HttpSendSMVoice.ashx';
                break;
             
            default:
                $url = '';
                break;
        }
        $data =  array('account' => $account,'pswd'=>$pswd,'mobile'=>$mobile,'msg'=>$msg,'ts'=>$ts); 
        $huawei_res= $this->post_curls($url,$data);
        $huawei_res=json_decode($huawei_res,true);
        return $huawei_res ;
 
    }
 
}
 
 
//$account 用户账号
//$pswd 必填参数。用户密码
//$mobile 必填参数。合法的手机号码
//$msg  必填参数。短信内容
//$ts  可选参数，时间戳，格式yyyyMMddHHmmss
//$state 必填参数   状态  1:验证码短信  2:营销短信  3:语音验证码
 
 
// $send = new SendCode();
 
// $re = $send->send('您的账号','您的密码','手机号','短信内容',time(),1);
 
// print_r($re);
// 