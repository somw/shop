<?php
namespace Sms;

header("Content-Type: text/html; charset=utf-8");
class Sms{
    private $url = 'http://139.196.108.241:8080';
 
    private function post_curls($url, $post)
    {
        $curl = curl_init(); // ����һ��CURL�Ự
        curl_setopt($curl, CURLOPT_URL, $url); // Ҫ���ʵĵ�ַ
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // ����֤֤����Դ�ļ��
        curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); // ģ���û�ʹ�õ������
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // ʹ���Զ���ת
        curl_setopt($curl, CURLOPT_AUTOREFERER, 1); // �Զ�����Referer
        curl_setopt($curl, CURLOPT_POST, 1); // ����һ�������Post����
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post); // Post�ύ�����ݰ�
        curl_setopt($curl, CURLOPT_TIMEOUT, 30); // ���ó�ʱ���Ʒ�ֹ��ѭ��
        curl_setopt($curl, CURLOPT_HEADER, 0); // ��ʾ���ص�Header��������
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); // ��ȡ����Ϣ���ļ�������ʽ����
        $res = curl_exec($curl); // ִ�в���
        if (curl_errno($curl)) {
            echo 'Errno'.curl_error($curl);//��ץ�쳣
        }
        curl_close($curl); // �ر�CURL�Ự
        return $res; // �������ݣ�json��ʽ
  
    }
 
    //$account �û��˺�
    //$pswd ����������û�����
    //$mobile ����������Ϸ����ֻ�����
    //$msg  �����������������
    //$ts  ��ѡ������ʱ�������ʽyyyyMMddHHmmss
    //$state �������   ״̬  1:��֤�����  2:Ӫ������  3:������֤��
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
 
 
//$account �û��˺�
//$pswd ����������û�����
//$mobile ����������Ϸ����ֻ�����
//$msg  �����������������
//$ts  ��ѡ������ʱ�������ʽyyyyMMddHHmmss
//$state �������   ״̬  1:��֤�����  2:Ӫ������  3:������֤��
 
 
// $send = new SendCode();
 
// $re = $send->send('�����˺�','��������','�ֻ���','��������',time(),1);
 
// print_r($re);
// 