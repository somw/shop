<?php
namespace app\admin\controller;
use think\Controller;

class ShopcateWords extends Controller
{
    public function lst()
    {
        //LEFT
        // $cwlist =db('shopcate')->alias('sh')->field('sh.shopcate_id,sh.shopcate_name,cw.*')->join('shopcate_words cw','cw.cw_shopcateid = sh.shopcate_id','RIGHT')->order('cw_id desc') ->paginate(5);
        $cwlist = db('shopcate_words')-> alias('cw')->field('cw.*,s.shopcate_name')->join('shopcate s','s.shopcate_id = cw.cw_shopcateid')->order('cw_id desc') ->paginate(20);
        $this->assign('cwlist', $cwlist);
        return view('lst');

    }

    public function add()
    {
    	if (request()->isPost()) {
    		$data=input('post.');
            if ($data['cw_linkurl'] && stripos($data['cw_linkurl'],'http://') === false) {
                $data['cw_linkurl'] = 'http://'.$data['cw_linkurl'];
            }


            // $validate=validate('link');
            // if (!$validate->check($data)) {
            //     $this->error($validate->getError());
            // }

    		$add=db('shopcate_words')->insert($data);
    		if($add) {
    			$this->success('添加关联成功!','lst');
    		}else{
    			$this->error('添加关联失败!');
    		}
    		return;
    	}
        $shopcateRes=model('shopcate')->where('shopcate_pid','=',0)->select();
        $this->assign([
            'shopcateRes'=>$shopcateRes,
        ]);
        // dump($shopcateRes);die;
        return view();

    }

    public function edit()
    {
        if (request()->isPost()) {
            $data=input('post.');
            if ($data['cw_linkurl'] && stripos($data['cw_linkurl'],'http://') === false) {
                $data['cw_linkurl'] = 'http://'.$data['cw_linkurl'];
            }


            // $validate=validate('link');
            // if (!$validate->check($data)) {
            //     $this->error($validate->getError());
            // }
            
            $save=db('shopcate_words')->update($data);
            if($save) {
                $this->success('修改关联成功!','lst');
            }else{
                $this->error('修改关联失败!');
            }
            return;
        }


        $cwedit=db('shopcate_words')->find(input('cw_id'));

        // dump($cwedit);die;
        $shopcateRes=model('shopcate')->where('shopcate_pid','=',0)->select();
        // dump($shopcateRes);die;
        $this->assign([
            'cwedit'=>$cwedit,
            'shopcateRes'=>$shopcateRes,
        ]);

        return view();

    }

    public function del($cw_id)
    {
        $del=db('shopcate_words')->delete($cw_id);
        if($del) {
                $this->success('删除关联成功!','lst');
            }else{
                $this->error('删除关联失败!');
            }

    }

}
