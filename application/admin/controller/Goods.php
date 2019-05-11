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
            ['product p','g.gs_id=p.prod_goods_id','LEFT'],
        ];
        $goodslist = db('goods') -> alias('g')-> field('g.*,c.shopcate_name,b.brand_name,t.type_name,SUM(p.prod_goods_num) gn') -> join($join) ->group('g.gs_id')->order('g.gs_id desc') ->paginate(15);
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

        //商品推荐位
        $shopGoodsRecpos=db('recpos')->where('rec_type','=',1)->select();

        //品牌
        $brandRes=db('brand')->field('brand_id,brand_name')->select();
        $this->assign([
            'mlRes'=>$mlRes,
            'typeRes'=>$typeRes,
            'shopcateRes'=>$shopcateRes,
            'brandRes'=>$brandRes,
            'shopGoodsRecpos'=>$shopGoodsRecpos,

        ]);


        return view();
    }


    public function edit()
    {
        if (request()->isPost()) {
            $data=input('post.');
            // dump($data);


            $gedit=model('goods')->update($data);//insert()方法用于添加add，$data表示全部数据
            if($gedit) {
                $this->success('修改商品成功!');
            }else{
                $this->error('修改商品失败!');
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

        $gsid=input('gs_id');
        //查找当前商品基本信息
        $gsedit=db('goods')->find($gsid);

        //查找当前商品类型所有属性信息
        $attredit=db('attr')->where('attr_typeid','=',$gsedit['gs_typeid'])->select();
        //dump($attredit);die;
        //查找当前商品属性信息goods_attr
        $_gsattredit=db('goods_attr')->where('gsattr_goodsid','=',$gsedit['gs_id'])->select();

        //改写三维转二维
        $gsattredit = array();
        foreach ($_gsattredit as $k => $v) {
            $gsattredit[$v['gsattr_attrid']][] = $v;
        }
        // dump($gsattredit);die;


        $_mledit=db('member_price')->where('price_goodsid','=',$gsid)->select();
        $mledit=array();
        foreach ($_mledit as $k => $v) {
            $mledit[$v['price_mlevelid']]=$v;
        }
        //商品相册
        $gphotos=db('goods_img')->where('img_goodsid','=',$gsid)->select();

        //dump($mledit);die;
        //
        ////商品推荐位
        $shopGoodsRecpos=db('recpos')->where('rec_type','=',1)->select();
        $_sGoodsRecpos=db('recpos_item')->where(array('value_type'=>1,'value_id'=>$gsid))->select();
        $sGoodsRecpos=array();
        foreach ($_sGoodsRecpos as $k => $v) {
            $sGoodsRecpos[] = $v['recpos_id'];
        }
        // dump($sGoodsRecpos);die;

        $this->assign([
            'mlRes'=>$mlRes,
            'typeRes'=>$typeRes,
            'shopcateRes'=>$shopcateRes,
            'brandRes'=>$brandRes,
            'gsedit'=>$gsedit,
            'mledit'=>$mledit,
            'gphotos'=>$gphotos,
            'attredit'=>$attredit,
            'gsattredit'=>$gsattredit,
            'shopGoodsRecpos'=>$shopGoodsRecpos,
            'sGoodsRecpos'=>$sGoodsRecpos,

        ]);


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

    public function product($gs_id){

        if (request()->isPost()) {
            db('product')->where('prod_goods_id','=',$gs_id)->delete();
            $data=input('post.');
            $goodsNum = $data['product_num'];
            $goodsAttr = $data['product_attr'];
            $product = db('product');

            foreach ($goodsNum as $k => $v) {
                $strArr =array();
                foreach ($goodsAttr as $k1 => $v1) {
                    if (intval($v1[$k]<=0)) {
                        continue 2;
                    }
                    $strArr[]=$v1[$k];

                }
                sort($strArr);
                $strArr = implode(',', $strArr);
                $product -> insert([
                    'prod_goods_id' =>$gs_id,
                    'prod_goods_num' =>$v,
                    'prod_goods_attr'=>$strArr
                ]);
                //dump($strArr);die;
            }
            $this->success('提交成功！');
            return;
            //dump($product);die;
        }


        $_radioAttrRed = db('goods_attr')->alias('g')->field('g.gsattr_id,g.gsattr_attrid,g.gsattr_value,a.attr_name')->join('attr a','g.gsattr_attrid=a.attr_id')->where(array('gsattr_goodsid'=>$gs_id,'a.attr_type'=>1))->select();
        //数组格式双重
        $radioAttrRed = array();
        foreach ($_radioAttrRed as $k => $v) {
            $radioAttrRed[$v['attr_name']][] = $v;
        }
        //获取商品的库存信息
        $productstr = db('product') ->where('prod_goods_id','=',$gs_id)->select();
        $this->assign([
            'radioAttrRed'=>$radioAttrRed,
            'productstr'=>$productstr,
        ]);

        // dump($productstr);die;
        return view();
    }

    public function gsphotoajax($id){
        $_gphoto=db('goods_img');
        $gphoto=$_gphoto->find($id);


        $img_img =  IMG_UPLOADS.$gphoto['img_img'];
        $img_smimg = IMG_UPLOADS.$gphoto['img_smimg'];
        $img_midimg = IMG_UPLOADS.$gphoto['img_midimg'];
        $img_bigimg = IMG_UPLOADS.$gphoto['img_bigimg'];
        @unlink($img_img);
        @unlink($img_smimg);
        @unlink($img_midimg);
        @unlink($img_bigimg);

        $del =$_gphoto->delete($id);
        if ($del) {
            echo 1;
        }else{
            echo 2;
        }
        //dump($_gphoto);die;
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
