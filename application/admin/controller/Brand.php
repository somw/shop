<?php
namespace app\admin\controller;
use think\Controller;

class Brand extends Controller
{
    public function lst()
    {
        $brandlist = db('brand') ->order('brand_id desc') ->paginate(5);
        $this->assign('brandlist', $brandlist);
        return view('lst');

    }

    public function add()
    {
    	if (request()->isPost()) {
    		$data=input('post.');
            if ($data['brand_url'] && stripos($data['brand_url'],'http://') === false) {
                $data['brand_url'] = 'http://'.$data['brand_url'];
            }
            // 处理图片上传
            if ($_FILES['brand_img']['tmp_name']) {
                $data['brand_img'] = $this->upload();
            }

            $validate=validate('Brand');
            if (!$validate->check($data)) {
                $this->error($validate->getError());
            }

    		$add=db('brand')->insert($data);
    		if($add) {
    			$this->success('添加品牌成功!','lst');
    		}else{
    			$this->error('添加品牌失败!');
    		}
    		return;
    	}
        return view();

    }

    public function edit()
    {
        if (request()->isPost()) {
            $data=input('post.');
            if ($data['brand_url'] && stripos($data['brand_url'],'http://') === false) {
                $data['brand_url'] = 'http://'.$data['brand_url'];
            }
            // 处理图片上传
            if ($_FILES['brand_img']['tmp_name']) {
                $oldbrandedit=db('brand')->field('brand_img')->find($data['brand_id']);
                $oldbrandeditimg=IMG_UPLOADS.$oldbrandedit['brand_img'];
                if (file_exists($oldbrandeditimg)) {
                    @unlink($oldbrandeditimg);
                }
                $data['brand_img'] = $this->upload();
            }

            $validate=validate('Brand');
            if (!$validate->check($data)) {
                $this->error($validate->getError());
            }
            
            $save=db('brand')->update($data);
            if($save) {
                $this->success('修改品牌成功!','lst');
            }else{
                $this->error('修改品牌失败!');
            }
            return;
        }

        $brandid=input('brand_id');
        $brandedit=db('brand')->find($brandid);
        $this->assign('brandedit',$brandedit);
        return view();

    }

    public function del($brand_id)
    {
        $ardel=db('brand')->field('brand_img')->find($brand_id);
        $branddelimg=IMG_UPLOADS.$ardel['brand_img'];
        if (file_exists($branddelimg)) {
            @unlink($branddelimg);
        }
        $del=db('brand')->delete($brand_id);
        if($del) {
                $this->success('删除品牌成功!','lst');
            }else{
                $this->error('删除品牌失败!');
            }

    }


    public function upload(){
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('brand_img');
        
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
