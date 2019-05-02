<?php
namespace app\admin\controller;
use think\Controller;
use shopcatetree\Shopcatetree;
class Shopcate extends Controller
{
    public function lst()
    {
        $shopcate=new shopcatetree();
        $sortdb=db('shopcate');
        if (request()->isPost()) {
            $data=input('post.');
            
            $shopcate->shopcatesort($data['shopcate_sort'],$sortdb);
            $this->success('排序成功',url('lst'));
        }
        $shopcatelist = $sortdb->order('shopcate_sort asc')->select();
        
        $shopcatelist = $shopcate ->shopcatetree($shopcatelist);
        $this->assign('shopcatelist', $shopcatelist);
        return view();

    }

    public function add()
    {
        $shopcate=new shopcatetree();
        $sortdb=model('shopcate');
    	if (request()->isPost()) {
    		$data=input('post.');
            // 处理图片上传
            if ($_FILES['shopcate_img']['tmp_name']) {
                $data['shopcate_img'] = $this->upload();
            }

            // $validate=validate('Cate');
            // if (!$validate->check($data)) {
            //     $this->error($validate->getError());
            // }

    		$add=$sortdb->save($data);
    		if($add) {
    			$this->success('添加栏目成功!','lst');
    		}else{
    			$this->error('添加栏目失败!');
    		}
    	}
        $shopcatelist = $sortdb->select();

        $shopcatelist = $shopcate ->shopcatetree($shopcatelist);

        //商品推荐位
        $shopCateRecpos=db('recpos')->where('rec_type','=',2)->select();
        // dump($shopCateRecpos);die;
        $this->assign([
            'shopcatelist'=>$shopcatelist,
            'shopCateRecpos'=>$shopCateRecpos,
        ]);

        return view();

    }

    public function edit()
    {

        $shopcate=new shopcatetree();
        $sortdb=model('shopcate');
        if (request()->isPost()) {
            $data=input('post.');
            // 处理图片上传
            if ($_FILES['shopcate_img']['tmp_name']) {
                $oldcatesedit=db('shopcate')->field('shopcate_img')->find($data['shopcate_id']);
                $oldshopcateeditimg=IMG_UPLOADS.$oldcatesedit['shopcate_img'];
                if (file_exists($oldshopcateeditimg)) {
                    @unlink($oldshopcateeditimg);
                }
                $data['shopcate_img'] = $this->upload();
            }

            // $validate=validate('Cate');
            // if (!$validate->check($data)) {
            //     $this->error($validate->getError());
            // }
            
            $save=$sortdb->update($data);
            if($save) {
                $this->success('修改栏目成功!','lst');
            }else{
                $this->error('修改栏目失败!');
            }
        }

        $shopcatelist = $sortdb->select();
        $shopcatelist = $shopcate ->shopcatetree($shopcatelist);
        $this->assign('shopcatelist', $shopcatelist);

        $shopcateid=input('shopcate_id');
        $shopcateedit=$sortdb->find($shopcateid);

        //var_dump($cateedit['cate_pid']);die;
        
        ////商品推荐位
        $shopCateRecpos=db('recpos')->where('rec_type','=',2)->select();
        $_sshopCateRecpos=db('recpos_item')->where(array('value_type'=>2,'value_id'=>input('shopcate_id')))->select();
        $sshopCateRecpos=array();
        foreach ($_sshopCateRecpos as $k => $v) {
            $sshopCateRecpos[] = $v['recpos_id'];
        }

        $this->assign([
            'shopcateedit'=>$shopcateedit,
            'shopCateRecpos'=>$shopCateRecpos,
            'sshopCateRecpos'=>$sshopCateRecpos,
        ]);
        return view();

    }

    public function del($shopcate_id)
    {
        $shopcate=db('shopcate');

        $shopcatedel=new shopcatetree();
        $sonids=$shopcatedel->childrenids($shopcate_id,$shopcate);
        $sonids[] = intval($shopcate_id);//获取一级栏目

        foreach ($sonids as $k => $v) {
            $shopcatedel=$shopcate->field('shopcate_id,shopcate_img')->where(array('shopcate_id'=>$v)) ->select();
            foreach ($shopcatedel as $k1 => $v1) {
                $shopcatedelimg=IMG_UPLOADS.$v1['shopcate_img'];
                if (file_exists($shopcatedelimg)) {
                    @unlink($shopcatedelimg);
                }
            }
            
        }


        $del=$shopcate->delete($sonids);

        if($del) {
                $this->success('删除栏目成功!','lst');
            }else{
                $this->error('删除栏目失败!');
            }

    }


    public function upload(){
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('shopcate_img');
        
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
