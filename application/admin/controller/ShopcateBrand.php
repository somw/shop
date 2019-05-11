<?php
namespace app\admin\controller;
use think\Controller;

class ShopcateBrand extends Controller
{
    public function lst()
    {
        $join = [
            ['shopcate s','s.shopcate_id=cb.cb_shopcateid'],
            ['brand b','b.brand_id=cb.cb_brandid'],
        ];

        $cblist = db('shopcate_brand')->alias('cb')->field('cb.*,s.shopcate_name,b.brand_name')->join($join)->order('cb_id desc') ->paginate(15);
        #$_cb_listid = array_column($cb_brandid, 'cb_brandid');
        $cb_listid = array();
        foreach ($cblist as $k => $v) {
            $cb_listid[$k] = $v['cb_brandid'];
            $cb_array = explode(',', $v['cb_brandid']);
            #dump($cb_array);die;
        }


        $this->assign([
            'cblist'=>$cblist,
            '$cb_array'=>$cb_array,
        ]);
        return view('lst');
    }

    public function add()
    {
    	if (request()->isPost()) {
    		$data=input('post.');

            if ($data['cb_prourl'] && stripos($data['cb_prourl'],'http://') === false) {
                $data['cb_prourl'] = 'http://'.$data['cb_prourl'];
            }

            // 处理图片上传
            if ($_FILES['cb_proimg']['tmp_name']) {
                $data['cb_proimg'] = $this->upload();
            }

            if (isset($data['cb_brandid'])){
                $data['cb_brandid'] = implode(',', $data['cb_brandid']);
            }

            // $validate=validate('link');
            // if (!$validate->check($data)) {
            //     $this->error($validate->getError());
            // }
            // dump($data);die;
    		$add=db('shopcate_brand')->insert($data);
    		if($add) {
    			$this->success('添加关联品牌成功!','lst');
    		}else{
    			$this->error('添加关联品牌失败!');
    		}
    		return;
    	}
        $brandRes=db('brand')->where('brand_img','NEQ','')->select();
        // dump($brandRes);die;
        $shopcateRes=model('shopcate')->where('shopcate_pid','=',0)->select();
        $this->assign([
            'shopcateRes'=>$shopcateRes,
            'brandRes'=>$brandRes,
        ]);
        // dump($shopcateRes);die;
        return view();

    }

    public function edit()
    {
        if (request()->isPost()) {
            $data=input('post.');
            if ($data['cb_prourl'] && stripos($data['cb_prourl'],'http://') === false) {
                $data['cb_prourl'] = 'http://'.$data['cb_prourl'];
            }

            if ($_FILES['cb_proimg']['tmp_name']) {
                $oldlinkedit=db('link')->field('cb_proimg')->find($data['link_id']);
                $oldlinkeditimg=IMG_UPLOADS.$oldlinkedit['cb_proimg'];
                if (file_exists($oldlinkeditimg)) {
                    @unlink($oldlinkeditimg);
                }
                $data['cb_proimg'] = $this->upload();
            }


            // $validate=validate('link');
            // if (!$validate->check($data)) {
            //     $this->error($validate->getError());
            // }

            $save=db('shopcate_brand')->update($data);
            if($save) {
                $this->success('修改关联品牌成功!','lst');
            }else{
                $this->error('修改关联品牌失败!');
            }
            return;
        }


        $cbedit=db('shopcate_brand')->find(input('cb_id'));
        $brandRes=db('brand')->where('brand_img','NEQ','')->select();
        // dump($cbedit);die;
        $shopcateRes=model('shopcate')->where('shopcate_pid','=',0)->select();
        // dump($shopcateRes);die;
        $this->assign([
            'cbedit'=>$cbedit,
            'shopcateRes'=>$shopcateRes,
            'brandRes'=>$brandRes,
        ]);

        return view();

    }

    public function del($cb_id)
    {
        $del=db('shopcate_brand')->delete($cb_id);
        if($del) {
                $this->success('删除关联品牌成功!','lst');
            }else{
                $this->error('删除关联品牌失败!');
            }

    }

    public function upload(){
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('cb_proimg');

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
