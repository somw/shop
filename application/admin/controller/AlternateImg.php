<?php
namespace app\admin\controller;
use think\Controller;

class AlternateImg extends Controller
{
    public function lst()
    {
        $aimgdb=db('alternate_img');
        $aimglist = $aimgdb ->order('aimg_sort desc') ->paginate(20);
        if (request()->isPost()) {
            $data=input('post.');
            foreach ($data['aimg_sort'] as $k => $v) {
                $aimgdb->where('aimg_id','=',$k)->update(['aimg_sort'=>$v]);
            }
            $this->success('排序成功');
        
        }
        $this->assign('aimglist', $aimglist);
        return view('lst');

    }

    public function add()
    {
    	if (request()->isPost()) {
    		$data=input('post.');
            if ($data['aimg_link'] && stripos($data['aimg_link'],'http://') === false) {
                $data['aimg_link'] = 'http://'.$data['aimg_link'];
            }
            // 处理图片上传
            if ($_FILES['aimg_img']['tmp_name']) {
                $data['aimg_img'] = $this->upload();
            }
            // dump($data);die;
            // $validate=validate('aimg');
            // if (!$validate->check($data)) {
            //     $this->error($validate->getError());
            // }

    		$add=db('alternate_img')->insert($data);
    		if($add) {
    			$this->success('添加轮播图成功!','lst');
    		}else{
    			$this->error('添加轮播图失败!');
    		}
    		return;
    	}
        return view();

    }

    public function edit()
    {
        $aimgdb=db('alternate_img'); 
        if (request()->isPost()) {
            $data=input('post.');
            if ($data['aimg_link'] && stripos($data['aimg_link'],'http://') === false) {
                $data['aimg_link'] = 'http://'.$data['aimg_link'];
            }
            // 处理图片上传
            if ($_FILES['aimg_img']['tmp_name']) {
                $oldaimgedit=$aimgdb->field('aimg_img')->find($data['aimg_id']);
                $oldaimgeditimg=IMG_UPLOADS.$oldaimgedit['aimg_img'];
                if (file_exists($oldaimgeditimg)) {
                    @unlink($oldaimgeditimg);
                }
                $data['aimg_img'] = $this->upload();
            }

            // $validate=validate('aimg');
            // if (!$validate->check($data)) {
            //     $this->error($validate->getError());
            // }
            
            $save=$aimgdb->update($data);
            if($save) {
                $this->success('修改轮播图成功!','lst');
            }else{
                $this->error('修改轮播图失败!');
            }
            return;
        }

        $aimgid=input('aimg_id');
        $aimgedit=$aimgdb->find($aimgid);
        $this->assign('aimgedit',$aimgedit);
        return view();

    }

    public function del($aimg_id)
    {
        $aimgdb=db('alternate_img'); 
        $ardel=$aimgdb->field('aimg_img')->find($aimg_id);
        $aimgdelimg=IMG_UPLOADS.$ardel['aimg_img'];
        if (file_exists($aimgdelimg)) {
            @unlink($aimgdelimg);
        }
        $del=$aimgdb->delete($aimg_id);
        if($del) {
                $this->success('删除轮播图成功!','lst');
            }else{
                $this->error('删除轮播图失败!');
            }

    }


    public function upload(){
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('aimg_img');
        
        // 移动到框架应用根目录/public/uploads/ 目录下
        if($file){
            $info = $file->validate(['ext'=>'jpg,png,gif'])->move(ROOT_PATH . 'public' . DS .'static' . DS . 'uploads');
            if($info){
                // 成功上传后 获取上传信息
                // 输出 jpg
                // echo $info->getExtension();
                // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
                $alterimg=$info->getSaveName();
                $alterimg=str_replace('\\', '/', $alterimg);
                return $alterimg;
                // 输出 42a79759f284b767dfcb2a0197904287.jpg
                // return $info->getFilename(); 
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }
    }
}
