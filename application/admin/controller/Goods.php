<?php
namespace app\admin\controller;
use think\Controller;
use shopcatetree\Shopcatetree;

class Goods extends Controller
{
    public function lst()
    {
        $join = [
            ['shopcate c','g.gs_shopcateid=c.shopcate_id'],
            ['brand b','g.gs_brandid=b.brand_id','LEFT'],
            ['type t','g.gs_typeid=t.type_id','LEFT'],
        ];
        $goodslist = db('goods') -> alias('g')-> field('g.*,c.shopcate_name,b.brand_name,t.type_name') -> join($join) ->order('g.gs_id desc') ->paginate(5);
        $this->assign('goodslist', $goodslist);
        return view('lst');

    }

    public function add()
    {
        if (request()->isPost()) {
            $data=input('post.');
            //dump($data);die;


            $add=model('goods')->save($data);//insert()方法用于添加add，$data表示全部数据
            if($add) {
                $this->success('添加商品成功!');
            }else{
                $this->error('添加商品失败!');
            }

        }

        // 提取会员级别数据
        $mlRes=db('member_level')->field('level_id,level_name')->select();

        //获取商品类型
        $typeRes=db('type')->select();

        //商品栏目
        $shopcate=new shopcatetree();
        $shopcateRes=db('shopcate')->select();
        $shopcateRes=$shopcate->shopcatetree($shopcateRes);

        //品牌
        $brandRes=db('brand')->field('brand_id,brand_name')->select();
        $this->assign([
            'mlRes'=>$mlRes,
            'typeRes'=>$typeRes,
            'shopcateRes'=>$shopcateRes,
            'brandRes'=>$brandRes,

        ]);


        return view();
    }


    public function edit()
    {
        if (request()->isPost()) {
            $data=input('post.');
            //如果是多选，替换中文“，”
            if ($data['goods_formtype']=='radio' || $data['goods_formtype']=='checkbox' || $data['goods_formtype']=='select') {
                $data['goods_values']=str_replace('，', ',', $data['goods_values']);
                $data['goods_default']=str_replace('，',',',$data['goods_default']);
            }

            // $validate=validate('goods');
            // if (!$validate->check($data)) {
            //     $this->error($validate->getError());
            // }

            $save=db('goods')->update($data);
            if($save) {
                $this->success('修改商品成功!','lst');
            }else{
                $this->error('修改商品失败!');
            }
            return;
        }

        $goodsid=input('gs_id');
        $goodsedit=db('goods')->find($goodsid);
        $this->assign('goodsedit',$goodsedit);
        return view();

    }

    public function prints(){
        return view();
    }

    public function del($gs_id)
    {
        $del=model('goods')->destroy($gs_id);
        if($del) {
                $this->success('删除商品成功!','lst');
            }else{
                $this->error('删除商品失败!');
            }

    }

    // public function upload(){
    //     // 获取表单上传文件 例如上传了001.jpg
    //     $file = request()->file('gs_img');

    //     // 移动到框架应用根目录/public/uploads/ 目录下
    //     if($file){
    //         $info = $file->validate(['ext'=>'jpg,png,gif'])->move(ROOT_PATH . 'public' . DS .'static' . DS . 'uploads');
    //         if($info){
    //             // 成功上传后 获取上传信息
    //             // 输出 jpg
    //             // echo $info->getExtension();
    //             // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
    //             return $info->getSaveName();
    //             // 输出 42a79759f284b767dfcb2a0197904287.jpg
    //             // return $info->getFilename();
    //         }else{
    //             // 上传失败获取错误信息
    //             echo $file->getError();
    //         }
    //     }
    // }

}
