<?php
namespace app\admin\controller;
use think\Controller;

class Attr extends Controller
{
    public function lst()
    {
        $typeid=input('type_id');

        if ($typeid) {
            $map['attr_typeid']=['=',$typeid];
        }else{
            $map=1;
        }
        //dump($map);die;
        $attrlst=db('attr')->alias('a')->field('a.*,t.type_name')->join('type t',"a.attr_typeid = t.type_id")->where($map)->order('a.attr_id desc')->paginate(20);
        $this->assign('attrlst', $attrlst);
        return view();

    }

    public function add()
    {
    	if (request()->isPost()) {
    		$data=input('post.');
            //替换中文‘，’
            $data['attr_default']=str_replace('，',',',$data['attr_default']);

            // $validate=validate('Brand');
            // if (!$validate->check($data)) {
            //     $this->error($validate->getError());
            // }

    		$add=db('attr')->insert($data);
    		if($add) {
    			$this->success('添加商品属性成功!','lst');
    		}else{
    			$this->error('添加商品属性失败!');
    		}
    		return;
    	}

        $typelst = db('type') ->select();
        $this->assign('typelst', $typelst);
        return view();

    }

    public function edit()
    {
        if (request()->isPost()) {
            $data=input('post.');
            
            $data['attr_default']=str_replace('，',',',$data['attr_default']);

            // $validate=validate('Brand');
            // if (!$validate->check($data)) {
            //     $this->error($validate->getError());
            // }
            
            $save=db('attr')->update($data);
            if($save) {
                $this->success('修改商品属性成功!','lst');
            }else{
                $this->error('修改商品属性失败!');
            }
            return;
        }

        $typelst = db('type') ->select();
        $this->assign('typelst', $typelst);

        $attrid=input('attr_id');
        $attredit=db('attr')->find($attrid);
        $this->assign('attredit',$attredit);
        return view();

    }

    public function del($attr_id)
    {
        $del=db('attr')->delete($attr_id);
        if($del) {
                $this->success('删除商品属性成功!','lst');
            }else{
                $this->error('删除商品属性失败!');
            }

    }

    //异步获取指定类型下的属性
    public function ajaxGetAtter(){
        $typeID=input('gs_typeid');
        $attrRes=db('attr')->where(array('attr_typeid'=>$typeID))->select();
        echo json_encode($attrRes); //用于对变量进行 JSON 编码，该函数如果执行成功返回 JSON 数据，否则返回 FALSE
    }


    public function ajaxdelga(){
        $del=db('goods_attr')->delete(input('gaid'));
        
        if ($del) {
            echo 1;
        }else{
            echo 2;
        }
    }
}
