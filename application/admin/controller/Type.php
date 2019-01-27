<?php
namespace app\admin\controller;
use think\Controller;

class Type extends Controller
{
    public function lst()
    {
        $typelist = db('type') ->order('type_id asc') ->paginate(5);
        $this->assign('typelist', $typelist);
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

    		$add=db('type')->insert($data);
    		if($add) {
    			$this->success('添加商品类型成功!','lst');
    		}else{
    			$this->error('添加商品类型失败!');
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
            
            $save=db('type')->update($data);
            if($save) {
                $this->success('修改商品类型成功!','lst');
            }else{
                $this->error('修改商品类型失败!');
            }
            return;
        }

        $typeid=input('type_id');
        $typeedit=db('type')->find($typeid);
        $this->assign('typeedit',$typeedit);
        return view();

    }

    public function del($type_id)
    {
        $del=db('type')->delete($type_id);
        if($del) {
                $this->success('删除商品类型成功!','lst');
            }else{
                $this->error('删除商品类型失败!');
            }

    }
}
