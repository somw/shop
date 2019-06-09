<?php
namespace app\admin\controller;
use think\Controller;

class ShopcateAd extends Controller
{
    public function lst()
    {
        $join = [
            ['shopcate s','s.shopcate_id=ca.ca_shopcateid'],
        ];

        $calist = db('shopcate_ad')->alias('ca')->field('ca.*,s.shopcate_name')->join($join)->order('ca_id desc')->paginate(15);
        #$_cb_listid = array_column($cb_brandid, 'cb_brandid');
        // dump($cblist);die;


        $this->assign([
            'calist'=>$calist,
        ]);
        return view('lst');
    }

    public function add()
    {
    	if (request()->isPost()) {
    		$data=input('post.');
            if ($data['ca_position'] == 'B' || $data['ca_position'] == 'C') {
                $cates = db('shopcate_ad')->where(array('ca_position'=>$data['ca_position'],'ca_shopcateid'=>$data['ca_shopcateid']))->select();
                if ($cates) {
                    $this->error('当前位置只能添加一条记录');
                }
            }
            if ($data['ca_link'] && stripos($data['ca_link'],'http://') === false) {
                $data['ca_link'] = 'http://'.$data['ca_link'];
            }

            // 处理图片上传
            if ($_FILES['ca_img']['tmp_name']) {
                $data['ca_img'] = $this->upload();
            }else{
                $this->error('请上传图片');
            }


            // $validate=validate('link');
            // if (!$validate->check($data)) {
            //     $this->error($validate->getError());
            // }
            // dump($data);die;
    		$add=db('shopcate_ad')->insert($data);
    		if($add) {
    			$this->success('添加关联左图成功!','lst');
    		}else{
    			$this->error('添加关联左图失败!');
    		}
    		return;
    	}

        $shopcateRes=model('shopcate')->where('shopcate_pid','=',0)->select();
        $this->assign([
            'shopcateRes'=>$shopcateRes,
        ]);
        // dump($shopcateRes);die;
        return view();

    }


    public function edit()
    {
        $caedit=db('shopcate_ad')->find(input('ca_id'));
        if (request()->isPost()) {
            $data=input('post.');

            if ($data['ca_link'] && stripos($data['ca_link'],'http://') === false) {
                $data['ca_link'] = 'http://'.$data['ca_link'];
            }

            // 处理图片上传
            if ($_FILES['ca_img']['tmp_name']) {
                $oldlinkedit=db('shopcate_ad')->field('ca_img')->find($data['ca_id']);
                $oldlinkeditimg=IMG_UPLOADS.$oldlinkedit['ca_img'];
                if (file_exists($oldlinkeditimg)) {
                    @unlink($oldlinkeditimg);
                }
                $data['ca_img'] = $this->upload();
            }


            // $validate=validate('link');
            // if (!$validate->check($data)) {
            //     $this->error($validate->getError());
            // }
            // dump($data);die;
            $add=db('shopcate_ad')->insert($data);
            if($add) {
                $this->success('添加关联左图成功!','lst');
            }else{
                $this->error('添加关联左图失败!');
            }
            return;
        }

        $shopcateRes=model('shopcate')->where('shopcate_pid','=',0)->select();
        $this->assign([
            'caedit'=>$caedit,
            'shopcateRes'=>$shopcateRes,
        ]);
        // dump($shopcateRes);die;
        return view();

    }


    public function del($ca_id)
    {
        $oldlinkedit=db('shopcate_ad')->field('ca_img')->find($ca_id);
            $oldlinkeditimg=IMG_UPLOADS.$oldlinkedit['ca_img'];
            if (file_exists($oldlinkeditimg)) {
                @unlink($oldlinkeditimg);
            }
        $del=db('shopcate_ad')->delete($ca_id);
        if($del) {
                $this->success('删除关联左图成功!','lst');
            }else{
                $this->error('删除关联左图失败!');
            }

    }

    public function upload(){
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('ca_img');

        // 移动到框架应用根目录/public/uploads/ 目录下
        if($file){
            $info = $file->validate(['ext'=>'jpg,png,gif'])->move(ROOT_PATH . 'public' . DS .'static' . DS . 'uploads');
            if($info){
                // 成功上传后 获取上传信息
                // 输出 jpg
                // echo $info->getExtension();
                // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
                return $info->getSaveName();
                // 输出 42a79759f284b767dfcb2a0197904287.jpg
                // return $info->getFilename();
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }
    }

}
