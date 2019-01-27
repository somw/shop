<?php
namespace app\admin\controller;
use think\Controller;

class MemberLevel extends Controller
{
    public function lst()
    {
        $mblevellist = db('member_level') ->order('level_id asc') ->paginate(5);
        $this->assign('mblevellist', $mblevellist);
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

    		$add=db('member_level')->insert($data);
    		if($add) {
    			$this->success('添加会员级别成功!','lst');
    		}else{
    			$this->error('添加会员级别失败!');
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
            
            $save=db('member_level')->update($data);
            if($save) {
                $this->success('修改会员级别成功!','lst');
            }else{
                $this->error('修改会员级别失败!');
            }
            return;
        }

        $mblevelid=input('level_id');
        $mbleveledit=db('member_level')->find($mblevelid);
        $this->assign('mbleveledit',$mbleveledit);
        return view();

    }

    public function del($level_id)
    {
        $del=db('member_level')->delete($level_id);
        if($del) {
                $this->success('删除会员级别成功!','lst');
            }else{
                $this->error('删除会员级别失败!');
            }

    }
}
