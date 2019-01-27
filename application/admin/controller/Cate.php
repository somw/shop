<?php
namespace app\admin\controller;
use think\Controller;
use catetree\Catetree;
class Cate extends Controller
{
    public function lst()
    {
        $cate=new catetree();
        $sortdb=db('cate');
        if (request()->isPost()) {
            $data=input('post.');
            
            $cate->catesort($data['cate_sort'],$sortdb);
            $this->success('排序成功',url('lst'));
        }
        $catelist = $sortdb->order('cate_sort asc')->select();
        
        $catelist = $cate ->catetree($catelist);
        $this->assign('catelist', $catelist);
        return view();

    }

    public function add()
    {
        $cate=new catetree();
        $sortdb=db('cate');
    	if (request()->isPost()) {
    		$data=input('post.');
            //判断是否可以添加子分类
            if (in_array($data['cate_pid'], ['1','3'])) {
                $this->error('ID=1或者ID=3分类不能作为上级分类！');

            }

            if ($data['cate_pid'] == 2) {
                $data['cate_type']=3;
            }

            $cateID=$sortdb->field('cate_pid')->find($data['cate_pid']);
            $cateID=$cateID['cate_pid'];
            if ($cateID == 2) {
                $this->error('PID=2分类不能作为上级分类！');
            }

            $validate=validate('Cate');
            if (!$validate->check($data)) {
                $this->error($validate->getError());
            }

    		$add=$sortdb->insert($data);
    		if($add) {
    			$this->success('添加栏目成功!','lst');
    		}else{
    			$this->error('添加栏目失败!');
    		}
    	}
        $catelist = $sortdb->select();

        $catelist = $cate ->catetree($catelist);
        $this->assign('catelist', $catelist);

        return view();

    }

    public function edit()
    {

        $cate=new catetree();
        $sortdb=db('cate');
        if (request()->isPost()) {
            $data=input('post.');
          

            $validate=validate('Cate');
            if (!$validate->check($data)) {
                $this->error($validate->getError());
            }
            
            $save=$sortdb->update($data);
            if($save) {
                $this->success('修改栏目成功!','lst');
            }else{
                $this->error('修改栏目失败!');
            }
        }

        $catelist = $sortdb->select();
        $catelist = $cate ->catetree($catelist);
        $this->assign('catelist', $catelist);

        $cateid=input('cate_id');
        $cateedit=$sortdb->find($cateid);

        //var_dump($cateedit['cate_pid']);die;
        $this->assign('cateedit',$cateedit);
        return view();

    }

    public function del($cate_id)
    {
        $cate=db('cate');
        
        $catedel=new catetree();
        $sonids=$catedel->childrenids($cate_id,$cate);

        
        $sonids[]=intval($cate_id);
        $arrsys=[1,2,3];
        $cateres=array_intersect($arrsys, $sonids);
        if ($cateres) {
            $this->error('交集ID不允许删除');
        }
        // dump($cateres);die;
        
        $ardb = db('article');
        foreach ($sonids as $k => $v) {
            $arcate = $ardb->field('ar_id,ar_img')->where(array('ar_cateid'=>$v))->select();
            foreach ($arcate as $k1 => $v1) {
                $ardelimg=IMG_UPLOADS.$v1['ar_img'];
                if (file_exists($ardelimg)) {
                    @unlink($ardelimg);
                }
                $ardb->delete($v1['ar_id']);
            }
        }
        $del=$cate->delete($sonids);

        if($del) {
                $this->success('删除栏目成功!','lst');
            }else{
                $this->error('删除栏目失败!');
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
