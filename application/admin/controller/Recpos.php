<?php
namespace app\admin\controller;
use think\Controller;

class Recpos extends Controller
{
    public function lst()
    {
        //dump($map);die;
        $recposlst=db('recpos')->paginate(20);
        $this->assign('recposlst', $recposlst);
        return view();

    }

    public function add()
    {
    	if (request()->isPost()) {
    		$data=input('post.');

            // $validate=validate('Brand');
            // if (!$validate->check($data)) {
            //     $this->error($validate->getError());
            // }

    		$add=db('recpos')->insert($data);
    		if($add) {
    			$this->success('添加推荐位成功!','lst');
    		}else{
    			$this->error('添加推荐位失败!');
    		}
    		return;
    	}
        return view();

    }

    public function edit()
    {
        if (request()->isPost()) {
            $data=input('post.');

            // $validate=validate('Brand');
            // if (!$validate->check($data)) {
            //     $this->error($validate->getError());
            // }
            
            $save=db('recpos')->update($data);
            if($save) {
                $this->success('修改推荐位成功!','lst');
            }else{
                $this->error('修改推荐位失败!');
            }
            return;
        }

        $recposid=input('rec_id');
        $recedit=db('recpos')->find($recposid);
        $this->assign('recedit',$recedit);
        return view();

    }

    public function del($recpos_id)
    {
        $del=db('recpos')->delete($recpos_id);
        if($del) {
                $this->success('删除推荐位成功!','lst');
            }else{
                $this->error('删除推荐位失败!');
            }

    }

}
