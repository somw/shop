<?php
namespace app\admin\controller;
use think\Controller;

class Link extends Controller
{
    public function lst()
    {
        $linklist = db('link') ->order('link_id desc') ->paginate(5);
        $this->assign('linklist', $linklist);
        return view('lst');

    }

    public function add()
    {
    	if (request()->isPost()) {
    		$data=input('post.');
            if ($data['link_url'] && stripos($data['link_url'],'http://') === false) {
                $data['link_url'] = 'http://'.$data['link_url'];
            }
            // 处理图片上传
            if ($_FILES['link_logo']['tmp_name']) {
                $data['link_logo'] = $this->upload();
            }

            // $validate=validate('link');
            // if (!$validate->check($data)) {
            //     $this->error($validate->getError());
            // }

    		$add=db('link')->insert($data);
    		if($add) {
    			$this->success('添加链接成功!','lst');
    		}else{
    			$this->error('添加链接失败!');
    		}
    		return;
    	}
        return view();

    }

    public function edit()
    {
        if (request()->isPost()) {
            $data=input('post.');
            if ($data['link_url'] && stripos($data['link_url'],'http://') === false) {
                $data['link_url'] = 'http://'.$data['link_url'];
            }
            // 处理图片上传
            if ($_FILES['link_logo']['tmp_name']) {
                $oldlinkedit=db('link')->field('link_logo')->find($data['link_id']);
                $oldlinkeditimg=IMG_UPLOADS.$oldlinkedit['link_logo'];
                if (file_exists($oldlinkeditimg)) {
                    @unlink($oldlinkeditimg);
                }
                $data['link_logo'] = $this->upload();
            }

            // $validate=validate('link');
            // if (!$validate->check($data)) {
            //     $this->error($validate->getError());
            // }
            
            $save=db('link')->update($data);
            if($save) {
                $this->success('修改链接成功!','lst');
            }else{
                $this->error('修改链接失败!');
            }
            return;
        }

        $linkid=input('link_id');
        $linkedit=db('link')->find($linkid);
        $this->assign('linkedit',$linkedit);
        return view();

    }

    public function del($link_id)
    {
        $ardel=db('link')->field('link_logo')->find($link_id);
        $linkdelimg=IMG_UPLOADS.$ardel['link_logo'];
        if (file_exists($linkdelimg)) {
            @unlink($linkdelimg);
        }
        $del=db('link')->delete($link_id);
        if($del) {
                $this->success('删除链接成功!','lst');
            }else{
                $this->error('删除链接失败!');
            }

    }


    public function upload(){
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('link_logo');
        
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
