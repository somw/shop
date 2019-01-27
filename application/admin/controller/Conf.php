<?php
namespace app\admin\controller;
use think\Controller;

class Conf extends Controller
{
    public function conflst()
    {
        $conf=db('conf');
        if (request()->isPost()) {
            $data=input('post.');
            //复选框空框问题
            $checkbox2D=$conf->field('conf_ename')->where(array('conf_formtype'=>'checkbox'))->select();
            // 改为一维数组
            $checkFields=array();
            if ($checkbox2D) {
                foreach ($checkbox2D as $k => $v) {
                    $checkFields[]=$v['conf_ename'];
                }
            }
            // dump($checkbox2D);die;
            // array(1) {
            //   [0] => array(1) {
            //     ["conf_ename"] => string(9) "selection"
            //   }
            // }

            //dump($v);die;
            // array(1) {
            //     ["conf_ename"] => string(9) "selection"
            // }

            // dump($checkFields);die;
            // array(1) {
            //     [0] => string(9) "selection"
            // }



            //所有发送的字段组成的数组
            $allFields=array();
            //处理文字数据
            foreach ($data as $k => $v) {
                $allFields[]=$k;
                if (is_array($v)) {
                    $default=implode(',', $v);
                    $conf->where(array('conf_ename'=>$k))->update(['conf_default'=>$default]);
                }else{
                    $conf->where(array('conf_ename'=>$k))->update(['conf_default'=>$v]);
                }
            }

            //dump(is_array($v));die;
            //bool(true)

            // dump($allFields);die;
            // array(6) {
            //     [0] => string(7) "webname"
            //     [1] => string(8) "keywords"
            //     [2] => string(11) "description"
            //     [3] => string(9) "web-yesno"
            //     [4] => string(7) "huiyuan"
            //     [5] => string(9) "selection"
            // }

            //dump($k);die;
            //string(9) "selection"

            // dump($v);die;
            // array(3) {
            //     [0] => string(7) "选项2"
            //     [1] => string(7) "选项3"
            //     [2] => string(7) "选项4"
            // }

            // dump($default);die;
            // string(23) "选项2,选项3,选项4"

            //如果复选框未选中任何一个选项，则设置空
            foreach ($checkFields as $k => $v) {
                if (!in_array($v, $allFields)) {
                    $conf->where(array('conf_ename'=>$v))->update(['conf_default'=>'']);
                }
            }

            // dump($_FILES);die;
            // array(2) {
            //     ["twowm"] => array(5) {
            //         ["name"] => string(0) ""
            //         ["type"] => string(0) ""
            //         ["tmp_name"] => string(0) ""
            //         ["error"] => int(4)
            //         ["size"] => int(0)
            //     }
            //     ["LOGO"] => array(5) {
            //         ["name"] => string(0) ""
            //         ["type"] => string(0) ""
            //         ["tmp_name"] => string(0) ""
            //         ["error"] => int(4)
            //         ["size"] => int(0)
            //     }
            // }

            // 处理图片数据
            if ($_FILES) {
                foreach ($_FILES as $k => $v) {
                    if ($v['tmp_name']) {
                        $imgs=$conf->field('conf_default')->where(array('conf_ename'=>$k))->find();
                        if ($imgs['conf_default']) {
                            $oimgs=IMG_UPLOADS.$imgs['conf_default'];
                            if (file_exists($oimgs)) {
                                @unlink($oimgs);
                            }
                        }
                        //dump($imgs);die;
                        $imgsrc=$this->upload($k);
                        $conf->where(array('conf_ename'=>$k))->update(['conf_default'=>$imgsrc]);
                    }
                }
            }

            $this->success('配置成功！');
        }






        //提取conf_conftyp类型数据
        $shopconfig=$conf->where(array('conf_conftype'=>1))->order('conf_sort desc')->select();
        $goodsconfig=$conf->where(array('conf_conftype'=>0))->order('conf_sort desc')->select();
        $this->assign([
            'shopconfig'=>$shopconfig,
            'goodsconfig'=>$goodsconfig,
        ]);
        return view();
    }

    public function lst()
    {

        $conf=db('conf');
        if (request()->isPost()) {
            $data=input('post.');
            foreach ($data['conf_sort'] as $k => $v) {
                $conf->where('conf_id','=',$k)->update(['conf_sort'=>$v]);
            }
            $this->success('排序成功',url('lst'));
        }

        $conflist = $conf ->order('conf_sort asc') ->paginate(15);
        $this->assign('conflist', $conflist);


        return view('lst');

    }

    public function add()
    {
    	if (request()->isPost()) {
    		$data=input('post.');
            //如果是多选，替换中文“，”
            if ($data['conf_formtype']=='radio' || $data['conf_formtype']=='checkbox' || $data['conf_formtype']=='select') {
                $data['conf_values']=str_replace('，', ',', $data['conf_values']);
                $data['conf_default']=str_replace('，',',',$data['conf_default']);
            }

            // $validate=validate('Conf');
            // if (!$validate->check($data)) {
            //     $this->error($validate->getError());
            // }

    		$add=db('conf')->insert($data);
    		if($add) {
    			$this->success('添加配置成功!','lst');
    		}else{
    			$this->error('添加配置失败!');
    		}
    		return;
    	}
        return view();

    }

    public function edit()
    {
        if (request()->isPost()) {
            $data=input('post.');
            //如果是多选，替换中文“，”
            if ($data['conf_formtype']=='radio' || $data['conf_formtype']=='checkbox' || $data['conf_formtype']=='select') {
                $data['conf_values']=str_replace('，', ',', $data['conf_values']);
                $data['conf_default']=str_replace('，',',',$data['conf_default']);
            }

            // $validate=validate('Conf');
            // if (!$validate->check($data)) {
            //     $this->error($validate->getError());
            // }

            $save=db('conf')->update($data);
            if($save) {
                $this->success('修改配置成功!','lst');
            }else{
                $this->error('修改配置失败!');
            }
            return;
        }

        $confid=input('conf_id');
        $confedit=db('conf')->find($confid);
        $this->assign('confedit',$confedit);
        return view();

    }

    public function del($conf_id)
    {
        $delconf=db('conf')->field('conf_default')->find($conf_id);
        $delconfimg=IMG_UPLOADS.$delconf['conf_default'];
        if (file_exists($delconfimg)) {
            @unlink($delconfimg);
        }
        $del=db('conf')->delete($conf_id);
        if($del) {
                $this->success('删除配置成功!','lst');
            }else{
                $this->error('删除配置失败!');
            }

    }

    public function upload($imgsrc){
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file($imgsrc);

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
