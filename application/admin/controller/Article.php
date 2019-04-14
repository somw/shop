<?php
namespace app\admin\controller;
use think\Controller;
use catetree\Catetree;

class Article extends Controller
{
    public function lst()
    {
        $arlist = db('article')->field('a.*,c.cate_name')->alias('a')->join('cate c',"a.ar_cateid=c.cate_id") ->order('ar_id desc') ->paginate(15);
        $this->assign('arlist', $arlist);
        return view('lst');

    }

    public function add()
    {
        $cate = new catetree();
    	if (request()->isPost()) {
    		$data=input('post.');
            $data['ar_addtime']=time();
            if ($data['ar_url'] && stripos($data['ar_url'],'http://') === false) {
                $data['ar_url'] = 'http://'.$data['ar_url'];
            }
            // 处理图片上传
            if ($_FILES['ar_img']['tmp_name']) {
                $data['ar_img'] = $this->upload();
            }

            $validate=validate('Article');
            if (!$validate->check($data)) {
                $this->error($validate->getError());
            }

    		$add=db('article')->insert($data);
    		if($add) {
    			$this->success('添加文章成功!','lst');
    		}else{
    			$this->error('添加文章失败!');
    		}
    	}



        $catedb=db('cate');
        $catelist = $catedb->select();
        $catelist = $cate ->catetree($catelist);
        $this->assign('catelist', $catelist);
        return view();

    }

    public function edit()
    {
        $cate = new catetree();
        if (request()->isPost()) {
            $data=input('post.');
            $data['ar_addtime']=time();
            if ($data['ar_url'] && stripos($data['ar_url'],'http://') === false) {
                $data['ar_url'] = 'http://'.$data['ar_url'];
            }
            // 处理图片上传
            if ($_FILES['ar_img']['tmp_name']) {
                $oldaredit=db('article')->field('ar_img')->find($data['ar_id']);
                $oldareditimg=IMG_UPLOADS.$oldaredit['ar_img'];
                if (file_exists($oldareditimg)) {
                    @unlink($oldareditimg);
                }

                    $data['ar_img'] = $this->upload();

                
                
            }

            $validate=validate('Article');
            if (!$validate->check($data)) {
                $this->error($validate->getError());
            }
            
            $save=db('article')->update($data);
            if($save) {
                $this->success('修改文章成功!','lst');
            }else{
                $this->error('修改文章失败!');
            }
            return;
        }

        $arid=input('ar_id');
        $aredit=db('article')->find($arid);
        $this->assign('aredit',$aredit);

        $catedb=db('cate');
        $catelist = $catedb->select();
        $catelist = $cate ->catetree($catelist);
        $this->assign('catelist', $catelist);
        return view();

    }

    public function del($ar_id)
    {

        $ardel=db('article')->field('ar_img')->find($ar_id);
        $ardelimg=IMG_UPLOADS.$ardel['ar_img'];
        if (file_exists($ardelimg)) {
            @unlink($ardelimg);
        }
        $del=db('article')->delete($ar_id);
        if($del) {
                $this->success('删除文章成功!','lst');
            }else{
                $this->error('删除文章失败!');
            }

    }


    public function upload(){
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('ar_img');
        
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

    public function imglist(){
        $_files= my_scandir();
        $files = array();
        foreach ($_files as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k1 => $v1) {
                    $v1 = str_replace(UEDITOR, HTTP_UEDITOR,$v1);
                    $files[] = $v1;
                }
            }else{
                $v = str_replace(UEDITOR, HTTP_UEDITOR, $v);
                $files[] = $v;
            }

        }
        $this->assign('imglist',$files);
        //dump($v);die;
        return view();
    }

    public function delimg(){
        $imgsrc=input('imgsrc');
         //dump($imgsrc);die;
        $imgsrc=DEL_UEDITOR.$imgsrc;
        if (file_exists($imgsrc)) {
            if (@unlink($imgsrc)) {
                echo 1;
            }else{
                echo 2;
            }
        }else{
            echo 3;
        }
        //dump($imgsrc);die;

    }
}
