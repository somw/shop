<?php
namespace app\admin\model;
use think\Model;

class Goods extends Model
{
    protected $field=true;
    // public 表示全局，类内部外部子类都可以访问；
    // private 表示私有的，只有本类内部可以使用；
    // protected 表示受保护的，只有本类或子类或父类中可以访问；
    protected static function init()
    {
        //生成商品主图的三张缩略图
        Goods::beforeInsert(function ($goods) {
            //dump($_FILES);die;
            // array(1) {
            //     ["gs_img"] => array(5) {
            //         ["name"] => string(14) "Hydrangeas.jpg"
            //         ["type"] => string(10) "image/jpeg"
            //         ["tmp_name"] => string(53) "C:\Users\Administrator\AppData\Local\Temp\phpF2B2.tmp"
            //         ["error"] => int(0)
            //         ["size"] => int(595284)
            //     }
            // }
            if ($_FILES['gs_img']['tmp_name']) {
                $thumbName=$goods->upload('gs_img');//因为upload()写return $info->getFilename();所以string(36) "b5590507833475861fcf2443c519e736.jpg"
                $ogThumb=date("Ymd").DS.$thumbName;
                $bigThumb=date("Ymd").DS.'big_'.$thumbName;
                $midThumb=date("Ymd").DS.'mid_'.$thumbName;
                $smThumb=date("Ymd").DS.'sm_'.$thumbName;
                $image = \think\Image::open(IMG_UPLOADS.$ogThumb);
                // 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.png
                $image->thumb(800, 800)->save(IMG_UPLOADS.$bigThumb);
                $image->thumb(500, 500)->save(IMG_UPLOADS.$midThumb);
                $image->thumb(300, 300)->save(IMG_UPLOADS.$smThumb);
                $goods->gs_img=$ogThumb;
                $goods->gs_bigimg=$bigThumb;
                $goods->gs_midimg=$midThumb;
                $goods->gs_smimg=$smThumb;
            }
            $goods->gs_code=time().rand(11111,99999);
            


            //dump($ogThumb);die;
        });

        Goods::beforeUpdate(function ($goods) {
            //商店ID
                $goodsId=$goods->gs_id;
            //商品相册处理
            if ($goods->_hasimgs($_FILES['goods_img']['tmp_name'])) {
                // 获取表单上传文件
                $files = request()->file('goods_img');
                foreach($files as $file){
                    $info = $file->validate(['ext'=>'jpg,png,gif'])->move(ROOT_PATH . 'public' . DS .'static' . DS . 'uploads');
                    $imgName=$info->getFilename(); 
                    $ogImg=date("Ymd").DS.$imgName;
                    $bigImg=date("Ymd").DS.'big_'.$imgName;
                    $midImg=date("Ymd").DS.'mid_'.$imgName;
                    $smImg=date("Ymd").DS.'sm_'.$imgName;
                    $image = \think\Image::open(IMG_UPLOADS.$ogImg);
                    // 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.png
                    $image->thumb(800, 800)->save(IMG_UPLOADS.$bigImg);
                    $image->thumb(500, 500)->save(IMG_UPLOADS.$midImg);
                    $image->thumb(300, 300)->save(IMG_UPLOADS.$smImg);
                    @unlink(IMG_UPLOADS.$ogImg);//删除原图
                    db('goods_img')->insert(['img_goodsid'=>$goodsId,'img_img'=>$ogImg,'img_bigimg'=>$bigImg,'img_midimg'=>$midImg,'img_smimg'=>$smImg]);

                }
            }
            //处理会员价格
            $mppriceArr=$goods->mp;
            $mp = db('member_price');
            //删除会员价格
            $mp->where('price_goodsid','=',$goodsId)->delete();
            //批量写入会员价格
            if ($mppriceArr) {
                foreach ($mppriceArr as $k => $v) {
                    if (trim($v) == '') {
                        continue;
                    }else{
                       $mp ->insert(['price_mlevelid'=>$k,'price_mpprice'=>$v,'price_goodsid'=>$goodsId]);
                    }

                }
                
            }
            if ($_FILES['gs_img']['tmp_name']) {
                //如果存在就删除旧缩略图
                @unlink(IMG_UPLOADS.$goods->gs_img);
                @unlink(IMG_UPLOADS.$goods->gs_smimg);
                @unlink(IMG_UPLOADS.$goods->gs_midimg);
                @unlink(IMG_UPLOADS.$goods->gs_bigimg);

                $thumbName=$goods->upload('gs_img');//因为upload()写return $info->getFilename();所以string(36) "b5590507833475861fcf2443c519e736.jpg"
                $ogThumb=date("Ymd").DS.$thumbName;
                $bigThumb=date("Ymd").DS.'big_'.$thumbName;
                $midThumb=date("Ymd").DS.'mid_'.$thumbName;
                $smThumb=date("Ymd").DS.'sm_'.$thumbName;
                $image = \think\Image::open(IMG_UPLOADS.$ogThumb);
                // 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.png
                $image->thumb(800, 800)->save(IMG_UPLOADS.$bigThumb);
                $image->thumb(500, 500)->save(IMG_UPLOADS.$midThumb);
                $image->thumb(300, 300)->save(IMG_UPLOADS.$smThumb);
                $goods->gs_img=$ogThumb;
                $goods->gs_bigimg=$bigThumb;
                $goods->gs_midimg=$midThumb;
                $goods->gs_smimg=$smThumb;
            }

        });

        Goods::beforeDelete(function ($goods){
            //删除主图及其他图
            $goodsId=$goods->gs_id;
            if ($goods->gs_img) {
                $delgsimg=[];
                $delgsimg[]=IMG_UPLOADS.$goods->gs_img;
                $delgsimg[]=IMG_UPLOADS.$goods->gs_smimg;
                $delgsimg[]=IMG_UPLOADS.$goods->gs_midimg;
                $delgsimg[]=IMG_UPLOADS.$goods->gs_bigimg;
                foreach ($delgsimg as $k => $v) {
                    if (file_exists($v)) {
                        @unlink($v);
                    }
                }
            }
            //删除关联的会员价格
            db('member_price')->where('price_goodsid','=',$goodsId)->delete();
            //删除关联的商品属性
            db('goods_attr')->where('gsattr_goodsid','=',$goodsId)->delete();
            //删除关联的商品图片
            $goodsimgRes=model('GoodsImg')->where('img_goodsid','=',$goodsId)->select();
            if (!empty($goodsimgRes)) {
                foreach ($goodsimgRes as $k => $v) {
                    if ($v->img_img) {
                        $delimg=[];
                        $delimg[]=IMG_UPLOADS.$v->img_img;
                        $delimg[]=IMG_UPLOADS.$v->img_smimg;
                        $delimg[]=IMG_UPLOADS.$v->img_midimg;
                        $delimg[]=IMG_UPLOADS.$v->img_bigimg;
                        foreach ($delimg as $k1 => $v1) {
                            if (file_exists($v1)) {
                                @unlink($v1);
                            }
                        }
                    }
                }
            }
            model('GoodsImg')->where('img_goodsid','=',$goodsId)->delete();
            //dump($goodsimgRes);die;
            //dump($goods);die;
        });


        Goods::afterInsert(function ($goods) {
            //dump($goods);die;
            //批量写入会员价格
            $mppriceArr=$goods->mp;
            // dump($mppriceArr);die;
            // array(4) {
            //   [1] => string(1) "7"
            //   [2] => string(1) "7"
            //   [3] => string(1) "7"
            //   [4] => string(1) "7"
            // }
            
            $goodsId=$goods->gs_id;
            //dump($goodsId);die;

            if ($mppriceArr) {
                foreach ($mppriceArr as $k => $v) {
                    if (trim($v) == '') {
                        continue;
                    }else{
                        db('member_price')->insert(['price_mlevelid'=>$k,'price_mpprice'=>$v,'price_goodsid'=>$goodsId]);
                    }

                }
                
            }


            //处理商品属性
            $goodsData=input('post.');
            $i=0;
            if (isset($goodsData['goods_attr'])) {
                foreach ($goodsData['goods_attr'] as $k => $v) {
                    if (is_array($v)) {
                       if (!empty($v)) {
                           foreach ($v as $k1 => $v1) {
                                if (!$v1) {
                                    $i++;
                                    continue;
                                }
                               db('goods_attr')->insert(['gsattr_attrid'=>$k,'gsattr_value'=>$v1,'gsattr_price'=>$goodsData['gsattr_price'][$i],'gsattr_goodsid'=>$goodsId]);
                               $i++;
                           }
                       }
                    }else{
                        if (!empty($v)) {
                            db('goods_attr')->insert(['gsattr_attrid'=>$k,'gsattr_value'=>$v,'gsattr_goodsid'=>$goodsId]);
                        }
                    }
                        
                }
            }
            //dump(input('post.'));

            //商品相册处理
            //dump($_FILES);die;
            if ($goods->_hasimgs($_FILES['goods_img']['tmp_name'])) {
                
                // 获取表单上传文件
                $files = request()->file('goods_img');
                foreach($files as $file){
                    $info = $file->validate(['ext'=>'jpg,png,gif'])->move(ROOT_PATH . 'public' . DS .'static' . DS . 'uploads');
                    $imgName=$info->getFilename(); 
                    $ogImg=date("Ymd").DS.$imgName;
                    $bigImg=date("Ymd").DS.'big_'.$imgName;
                    $midImg=date("Ymd").DS.'mid_'.$imgName;
                    $smImg=date("Ymd").DS.'sm_'.$imgName;
                    $image = \think\Image::open(IMG_UPLOADS.$ogImg);
                    // 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.png
                    $image->thumb(800, 800)->save(IMG_UPLOADS.$bigImg);
                    $image->thumb(500, 500)->save(IMG_UPLOADS.$midImg);
                    $image->thumb(300, 300)->save(IMG_UPLOADS.$smImg);
                    @unlink(IMG_UPLOADS.$ogImg);//删除原图
                    db('goods_img')->insert(['img_goodsid'=>$goodsId,'img_img'=>$ogImg,'img_bigimg'=>$bigImg,'img_midimg'=>$midImg,'img_smimg'=>$smImg]);

                }
            }

        });

    }

    //商品相册是否有图片上传图片
    private function _hasimgs($tmparr){
        foreach ($tmparr as $k => $v) {
            if ($v) {
                return true;
            }
        }
        return false;
    }

    public function upload($imgName){
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file($imgName);

        // 移动到框架应用根目录/public/uploads/ 目录下
        if($file){
            $info = $file->validate(['ext'=>'jpg,png,gif'])->move(ROOT_PATH . 'public' . DS .'static' . DS . 'uploads');
            if($info){
                // 成功上传后 获取上传信息
                // 输出 jpg
                // echo $info->getExtension();
                // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
                // return $info->getSaveName();
                // 输出 42a79759f284b767dfcb2a0197904287.jpg
                return $info->getFilename();
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }
    }

}
