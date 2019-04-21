<?php
namespace app\admin\controller;
use think\Controller;
class Nav extends Controller
{
    public function lst()
    {
        $nav=db('nav');
        if (request()->isPost()) {
            $data=input('post.');
            //dump($data);die;
            foreach ($data['nav_sort'] as $k => $v) {
                $nav->where('nav_id','=',$k)->update(['nav_sort'=>$v]);
                
            }
            $this->success('排序成功！','lst');
        };



        $navlist = $nav ->order('nav_id desc') ->paginate(15);
        $this->assign('navlist', $navlist);
        return view('lst');

    }

    public function add()
    {
    	if (request()->isPost()) {
    		$data=input('post.');
            if ($data['nav_url'] && stripos($data['nav_url'],'http://') === false) {
                $data['nav_url'] = 'http://'.$data['nav_url'];
            }


            // $validate=validate('Nav');
            // if (!$validate->check($data)) {
            //     $this->error($validate->getError());
            // }

    		$add=db('nav')->insert($data);
    		if($add) {
    			$this->success('添加导航成功!','lst');
    		}else{
    			$this->error('添加导航失败!');
    		}
    		return;
    	}
        return view();

    }

    public function edit()
    {
        if (request()->isPost()) {
            $data=input('post.');
            if ($data['nav_url'] && stripos($data['nav_url'],'http://') === false) {
                $data['nav_url'] = 'http://'.$data['nav_url'];
            }

            // $validate=validate('Nav');
            // if (!$validate->check($data)) {
            //     $this->error($validate->getError());
            // }
            
            $save=db('nav')->update($data);
            if($save) {
                $this->success('修改导航成功!','lst');
            }else{
                $this->error('修改导航失败!');
            }
            return;
        }

        $navid=input('nav_id');
        $navedit=db('nav')->find($navid);
        $this->assign('navedit',$navedit);
        return view();

    }

    public function del($nav_id)
    {
        $del=db('nav')->delete($nav_id);
        if($del) {
                $this->success('删除导航成功!','lst');
            }else{
                $this->error('删除导航失败!');
            }

    }

}
