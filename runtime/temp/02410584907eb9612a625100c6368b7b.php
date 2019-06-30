<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:63:"B:\aaaweb\shop\public/../application/admin\view\goods\edit.html";i:1561855555;s:55:"B:\aaaweb\shop\application\admin\view\common\_meta.html";i:1561855555;s:53:"B:\aaaweb\shop\application\admin\view\common\top.html";i:1561855555;s:54:"B:\aaaweb\shop\application\admin\view\common\list.html";i:1561855555;s:57:"B:\aaaweb\shop\application\admin\view\common\_footer.html";i:1561855555;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>童老师ThinkPHP交流群：484519446</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="/static/admin/css/bootstrap.css" rel="stylesheet">
    <link href="/static/admin/css/font-awesome.css" rel="stylesheet">
    <link href="/static/admin/css/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="/static/admin/css/beyond.css" rel="stylesheet" type="text/css">
    <link href="/static/admin/css/demo.css" rel="stylesheet">
    <link href="/static/admin/css/typicons.css" rel="stylesheet">
    <link href="/static/admin/css/animate.css" rel="stylesheet">

    <script src="/static/admin/js/jquery.js"></script>
    <script src="/static/admin/js/jquery_002.js"></script>
    <script src="/static/admin/js/LodopFuncs.js"></script>
    
    <script src="/static/plus/ueditor/ueditor.config.js"></script>
    <script src="/static/plus/ueditor/ueditor.all.min.js"></script>
    <script src="/static/plus/ueditor/lang/zh-cn/zh-cn.js"></script>
    

    <link rel="stylesheet" type="text/css" href="/static/admin/layui/css/layui.css" media="all">
    <script type="text/javascript" src="/static/admin/layui/layui.js"></script>


    <style>
        .page-sidebar::before{left: 0px;width: 224px;}
    </style>
</head>
<body>
<!-- 头部 -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="/static/admin/images/logo.png" alt="">
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="/static/admin/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>admin</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/logout.html">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/changePwd.html">
                                            修改密码
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
<div class="main-container container-fluid">
    <div class="page-container">
                    <!-- Page Sidebar -->
       <!-- Page Sidebar -->
<div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li>
            <a href="/" target="_blank">
                <i class="menu-icon fa fa-film"></i>
                <span class="menu-text">网站首页</span>
                <i class="menu-expand"></i>
            </a>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">商品管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu" style="display: block;">
				<li>
                    <a href="<?php echo url('data/index'); ?>">
                        <span class="menu-text">数据备份</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('data/importlist'); ?>">
                        <span class="menu-text">数据还原</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('goods/lst'); ?>">
                        <span class="menu-text">商品列表</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('goods/add'); ?>">
                        <span class="menu-text">添加商品</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('brand/lst'); ?>">
                        <span class="menu-text">品牌管理</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>

                <li>
                    <a href="<?php echo url('shopcate/lst'); ?>">
                        <span class="menu-text">商品分类列表</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('shopcate/add'); ?>">
                        <span class="menu-text">新增商品分类</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('type/lst'); ?>">
                        <span class="menu-text">商品类型列表</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('type/add'); ?>">
                        <span class="menu-text">新增商品类型</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('goods/l'); ?>">
                        <span class="menu-text">商品收回站</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">推荐位管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu" style="display: block;">
                <li>
                    <a href="<?php echo url('recpos/lst'); ?>">
                        <span class="menu-text">推荐位列表</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('recpos/add'); ?>">
                        <span class="menu-text">新增推荐位</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">关联管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu" style="display: block;">
                <li>
                    <a href="<?php echo url('shopcate_words/lst'); ?>">
                        <span class="menu-text">关联列表</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('shopcate_words/add'); ?>">
                        <span class="menu-text">添加关联词</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('shopcate_ad/add'); ?>">
                        <span class="menu-text">添加关联图片</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">关联品牌管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu" style="display: block;">
                <li>
                    <a href="<?php echo url('shopcate_brand/lst'); ?>">
                        <span class="menu-text">关联品牌列表</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('shopcate_brand/add'); ?>">
                        <span class="menu-text">添加关联品牌</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">导航管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu" style="display: block;">
                <li>
                    <a href="<?php echo url('nav/lst'); ?>">
                        <span class="menu-text">导航列表</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('nav/add'); ?>">
                        <span class="menu-text">添加导航</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">会员管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu" style="display: block;">
                <li>
                    <a href="<?php echo url('memberLevel/lst'); ?>">
                        <span class="menu-text">会员列表</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('memberLevel/add'); ?>">
                        <span class="menu-text">会员级别</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('memberLevel/l'); ?>">
                        <span class="menu-text">会员留言</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">栏目模块</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu" style="display: block;">
                <li>
                    <a href="<?php echo url('cate/lst'); ?>">
                        <span class="menu-text">栏目管理</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">文章模块</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu" style="display: block;">
                <li>
                    <a href="<?php echo url('article/lst'); ?>">
                        <span class="menu-text">文章管理</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('article/imglist'); ?>">
                        <span class="menu-text">图片管理</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">链接模块</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu" style="display: block;">
                <li>
                    <a href="<?php echo url('link/lst'); ?>">
                        <span class="menu-text">链接管理</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">配置模块</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu" style="display: block;">
                <li>
                    <a href="<?php echo url('conf/conflst'); ?>">
                        <span class="menu-text">配置项</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('conf/lst'); ?>">
                        <span class="menu-text">配置管理</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">系统</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu" style="display: block;">
                <li>
                    <a href="/admin/user/index.html">
                        <span class="menu-text">用户管理</span>
                        <i class="menu-expand"></i>
                    </a>
                                                </li>
                                            <li>
                    <a href="/admin/auth_group/index.html">
                        <span class="menu-text">角色管理</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/auth_rule/index.html">
                        <span class="menu-text">权限列表</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- /Sidebar Menu -->
</div>
<!-- /Page Sidebar -->
        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                   <li>
                        <a href="#">系统</a>
                    </li>
                    <li>
                        <a href="<?php echo url('goods/lst'); ?>">商品列表</a>
                    </li>
                    <li class="active">修改商品</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">

                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <!-- 商品列表开始 -->
                            <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                            <div class="widget-body">
                                <div class="docs-example">
                                    <ul class="nav nav-tabs tabs-flat">
                                        <li class="active"><a href="#basicinfo-tab" data-toggle="tab">基本信息</a></li>
                                        <li class=""><a href="#goodsdes-tab" data-toggle="tab">描述信息</a></li>
                                        <li class=""><a href="#mbprice-tab" data-toggle="tab">会员价格</a></li>
                                         <li class=""><a href="#goodsattr-tab" data-toggle="tab">商品属性</a></li>
                                        <li class=""><a href="#goodsimgs-tab" data-toggle="tab">商品相册</a></li>
                                    </ul>
                                    <div class="tab-content tabs-flat">
                                        <input type="hidden" name="gs_id" value="<?php echo $gsedit['gs_id']; ?>">
                                        <input type="hidden" name="gs_img" value="<?php echo $gsedit['gs_img']; ?>">
                                        <input type="hidden" name="gs_smimg" value="<?php echo $gsedit['gs_smimg']; ?>">
                                        <input type="hidden" name="gs_midimg" value="<?php echo $gsedit['gs_midimg']; ?>">
                                        <input type="hidden" name="gs_bigimg" value="<?php echo $gsedit['gs_bigimg']; ?>">
                                        <div class="tab-pane active" id="basicinfo-tab">
                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">商品名称</label>
                                                <div class="col-sm-6">
                                                    <input value="<?php echo $gsedit['gs_name']; ?>" class="form-control" name="gs_name" type="text">
                                                </div>
                                                <p class="help-block col-sm-4 red">* 必填</p>
                                            </div>

                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">推荐位</label>

                                                <div class="col-sm-6">
                                                    <?php if(is_array($shopGoodsRecpos) || $shopGoodsRecpos instanceof \think\Collection || $shopGoodsRecpos instanceof \think\Paginator): $i = 0; $__LIST__ = $shopGoodsRecpos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodsrec): $mod = ($i % 2 );++$i;
                                                        if(in_array($goodsrec['rec_id'],$sGoodsRecpos)){
                                                            $checked = 'checked="checked"';
                                                        }
                                                        else{
                                                            $checked = '';

                                                        }
                                                    ?>
                                                    <label style="padding-left: 5px;">
                                                        <input type="checkbox" <?php echo $checked; ?> name="recpos[]" value="<?php echo $goodsrec['rec_id']; ?>" class="colored-blue">
                                                        <span class="text"><?php echo $goodsrec['rec_name']; ?></span>
                                                    </label>
                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">商品主图</label>
                                                <div class="col-sm-6">
                                                    <input name="gs_img" type="file">
                                                    <?php if($gsedit['gs_img'] != ''): ?>
                                                        <img src="/static/uploads/<?php echo $gsedit['gs_img']; ?>" height="30">
                                                    <?php else: ?>
                                                        暂无图片
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">上架</label>
                                                <div class="col-sm-6">
                                                    <div class="radio" style="float: left; padding-right: 10px;">
                                                        <label>
                                                            <input <?php if($gsedit['gs_onsale'] == 1): ?> checked="checked" <?php endif; ?> name="gs_onsale" class="colored-blue"  type="radio">
                                                            <span class="text">是</span>
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input <?php if($gsedit['gs_onsale'] == 0): ?> checked="checked" <?php endif; ?> name="gs_onsale" class="colored-blue" type="radio">
                                                            <span class="text">否</span>
                                                        </label>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">所属栏目</label>
                                                <div class="col-sm-6">
                                                    <select name="gs_shopcateid">
                                                        <option value="0">请选择</option>
                                                        <?php if(is_array($shopcateRes) || $shopcateRes instanceof \think\Collection || $shopcateRes instanceof \think\Paginator): $i = 0; $__LIST__ = $shopcateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shopcate): $mod = ($i % 2 );++$i;?>
                                                        <option <?php if($gsedit['gs_shopcateid'] == $shopcate['shopcate_id']): ?> selected="selected" <?php endif; ?> value="<?php echo $shopcate['shopcate_id']; ?>"><?php echo str_repeat('-',$shopcate['lever']*8)?><?php echo $shopcate['shopcate_name']; ?></option>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">所属品牌</label>
                                                <div class="col-sm-6">
                                                    <select name="gs_brandid">
                                                        <option value="0">请选择</option>
                                                        <?php if(is_array($brandRes) || $brandRes instanceof \think\Collection || $brandRes instanceof \think\Paginator): $i = 0; $__LIST__ = $brandRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$brand): $mod = ($i % 2 );++$i;?>
                                                        <option <?php if($gsedit['gs_brandid'] == $brand['brand_id']): ?> selected="selected" <?php endif; ?> value="<?php echo $brand['brand_id']; ?>"><?php echo $brand['brand_name']; ?></option>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">市场价</label>
                                                <div class="col-sm-6">
                                                    <input value="<?php echo $gsedit['gs_marktep']; ?>" class="form-control" id="username" name="gs_marktep"  type="text">
                                                </div>
                                                <p class="help-block col-sm-4 red">* 必填</p>
                                            </div>

                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">本店价</label>
                                                <div class="col-sm-6">
                                                    <input value="<?php echo $gsedit['gs_shopp']; ?>" class="form-control" id="username" name="gs_shopp"  type="text">
                                                </div>
                                                <p class="help-block col-sm-4 red">* 必填</p>
                                            </div>

                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">重量</label>
                                                <div class="col-sm-6">
                                                    <input value="<?php echo $gsedit['gs_weight']; ?>" class="form-control" id="username" name="gs_weight" type="text" style="display: inline-block; width: 300px;">
                                                    <select>
                                                        <option <?php if($gsedit['gs_unit'] == 'kg'): ?> selected="selected" <?php endif; ?>>kg</option>
                                                        <option <?php if($gsedit['gs_unit'] == 'g'): ?> selected="selected" <?php endif; ?>>g</option>
                                                        {/if}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="goodsdes-tab">
                                            <div class="form-horizontal">

                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                        <textarea id="content" name="gs_des"><?php echo $gsedit['gs_des']; ?></textarea>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="tab-pane" id="mbprice-tab">
                                            <?php if(is_array($mlRes) || $mlRes instanceof \think\Collection || $mlRes instanceof \think\Paginator): $i = 0; $__LIST__ = $mlRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$level): $mod = ($i % 2 );++$i;?>
                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right"><?php echo $level['level_name']; ?></label>
                                                <div class="col-sm-6">
                                                    <input  value="<?php if(isset($mledit[$level['level_id']]['price_mpprice'])){ echo $mledit[$level['level_id']]['price_mpprice']; }else{ echo '';} ?>"  class="form-control" id="username" name="mp[<?php echo $level['level_id']; ?>]" type="text">
                                                </div>
                                            </div>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>

                                        </div>

                                         <div class="tab-pane" id="goodsattr-tab">

                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">商品类型</label>
                                                <div class="col-sm-6">
                                                    <select name="gs_typeid" <?php if($gsedit['gs_typeid'] != 0): ?> disabled="disabled" <?php endif; ?>> >
                                                        <option value="0">请选择</option>
                                                        <?php if(is_array($typeRes) || $typeRes instanceof \think\Collection || $typeRes instanceof \think\Paginator): $i = 0; $__LIST__ = $typeRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?>
                                                        <option <?php if($gsedit['gs_typeid'] == $type['type_id']): ?> selected="selected" <?php endif; ?> value="<?php echo $type['type_id']; ?>"><?php echo $type['type_name']; ?></option>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group" id="goodsattr">
                                            <?php foreach($attredit as $k => $v): if($v['attr_type']==1):
                                                            $attrs = explode(",",$v['attr_default']);

                                                        ?>

                                                        <!-- 单选 -->
                                                        <!-- 循环显示当前商品所拥有的所有的单选属性 -->
                                                        <?php foreach($gsattredit[$v['attr_id']] as $k0 => $v0):?>

                                                            <div gaid="<?php echo $v0['gsattr_id'];?>" class="form-group"><label class="col-sm-2 control-label no-padding-right"><?php echo $v['attr_name']; ?></label><div class="col-sm-6"><a onclick="addrow(this)" href="#"><?php if($k0 == 0):?>[+]<?php else:?>[-]<?php endif;?></a>
                                                                <select name="old_goods_attr[<?php echo $v['attr_id'];?>][]">
                                                                    <?php foreach($attrs as $k1 => $v1):?>
                                                                        <option <?php if($v1 == $v0['gsattr_value']){ echo 'selected="selected"';} ?> value="<?php echo $v1;?>"><?php echo $v1;?></option>
                                                                    <?php endforeach;?>
                                                                </select>
                                                            <input class="form-control" name="old_gsattr_price[<?php echo $v0['gsattr_id']?>]" style="display:inline-block;width:200px;margin-left:10px;" type="text" value="<?php echo $v0['gsattr_price'];?>"></div></div>

                                                        <?php endforeach;?>

                                                    <!-- 唯一 -->
                                                    <?php else:if(!$v['attr_default']):?>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label no-padding-right"><?php echo $v['attr_name']; ?></label>
                                                                <div class="col-sm-6">:
                                                                    <input name="old_goods_attr[<?php echo $v['attr_id'];?>]" value="<?php echo $gsattredit[$v['attr_id']][0]['gsattr_value'];?>" class="form-control" type="text" style="display:inline-block;width:200px;margin-left:10px;">
                                                                    <input type="hidden" name="old_gsattr_price[<?php echo $gsattredit[$v['attr_id']][0]['gsattr_id'];?>]">
                                                                </div>
                                                            </div>
                                                        <?php else:
                                                            $attrss = explode(",",$v['attr_default']);
                                                        ?>
                                                            <div gaid="<?php echo $v0['gsattr_id'];?>" class="form-group"><label class="col-sm-2 control-label no-padding-right"><?php echo $v['attr_name']; ?></label><div class="col-sm-6">
                                                                <select name="old_goods_attr[<?php echo $v['attr_id'];?>]">
                                                                    <?php foreach($attrss as $k2 => $v2):?>
                                                                        <option <?php if($v2 == $gsattredit[$v['attr_id']][0]['gsattr_value']){ echo 'selected="selected"';} ?>  value="<?php echo $v2;?>"><?php echo $v2;?></option>
                                                                    <?php endforeach;?>
                                                                </select>
                                                            <input type="hidden" name="old_gsattr_price[<?php echo $gsattredit[$v['attr_id']][0]['gsattr_id'];?>]">
                                                            </div></div>
                                                        <?php endif;endif;endforeach;?>
                                            </div>



                                        </div>

                                        <div class="tab-pane" id="goodsimgs-tab">

                                            <?php if(is_array($gphotos) || $gphotos instanceof \think\Collection || $gphotos instanceof \think\Paginator): $i = 0; $__LIST__ = $gphotos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gps): $mod = ($i % 2 );++$i;?>
                                            <div id="<?php echo $gps['img_id']; ?>" class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right"></label>
                                                <div class="col-sm-6">
                                                    <a href="#" onclick="delrow(this)" style="display: inline-block; width: 20px;margin-right: 20px; ">[-]</a>
                                                    <input name="goods_img[]" type="file" class="form-group" style="border: none;box-shadow: none;width: 50%;display: inline-block;">

                                                        <img src="/static/uploads/<?php echo $gps['img_smimg']; ?>" height="50">

                                                </div>
                                            </div>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>

                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right"></label>
                                                <div class="col-sm-6">
                                                    <a href="#" onclick="rowphoto(this)" style="display: inline-block; width: 20px;margin-right: 20px; ">[+]</a>
                                                    <input name="goods_img[]" type="file" class="form-group" style="border: none;box-shadow: none;width: 50%;display: inline-block;">
                                                </div>
                                            </div>

                                            <div class="form-group" id="goodsimgs">
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-8 col-lg-offset-4">
                                                <button type="submit" class="btn btn-default">保存信息</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                            <!-- 商品列表结束 -->


                        </div>
                    </div>
                </div>

            </div>
            <!-- /Page Body -->
        </div>
        <!-- /Page Content -->
    </div>
</div>

<!--Basic Scripts-->
<script src="/static/admin/js/bootstrap.js"></script>
<!--Beyond Scripts-->
<script src="/static/admin/js/beyond.js"></script>

<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    UE.getEditor('content',{initialFrameWidth:800,initialFrameHeight:400,toolbars:[['fullscreen','source','undo','redo','bold','italic','underline','fontborder','strikethrough','superscript','subscript','removeformat','formatmatch','autotypeset','blockquote','pasteplain','|','forecolor','backcolor','insertorderedlist','insertunorderedlist','selectall','cleardoc']]});
</script>
<script type="text/javascript">
    //change()方法是当元素的值发生改变时，会发生change事件
    $("select[name=gs_typeid]").change(function(){
        var type_id=$(this).val();//创建gs_typeid变量，$(this)是当前元素被jQuery处理的对象，val()方法是返回或者设置被选元素的值
        $.ajax({
            type:"POST",
            url:"<?php echo url('attr/ajaxGetAtter'); ?>",
            data:{gs_typeid:type_id},
            dataType:"json",
            success:function(data){
                //alert(data);
                var html="";
                //each()方法规定为每个匹配元素规定运行的函数,each(function(index,element))
                $(data).each(function(k,v){
                    //alert(v);
                    if (v.attr_type == 1) {
                        //单选处理
                        //console.log(attrDefaultArr);
                        html+="<div class='form-group'>";
                        html+="<label class='col-sm-2 control-label no-padding-right'>"+v.attr_name+"</label>";
                        var attrDefaultArr=v.attr_default.split(",");//split()方法用于把一个字符串分割成字符串数组
                        html+="<div class='col-sm-6'><a onclick='addrow(this)' href='#'>[+]</a>";
                        html+="<select name='goods_attr["+v.attr_id+"][]'>";
                        html+="<option value=''>请选择</option>"
                        for (var i=0; i<attrDefaultArr.length; i++) {
                            html+="<option value="+attrDefaultArr[i]+">"+attrDefaultArr[i]+"</option>";
                        }
                        html+="</select>";
                        html+="<input class='form-control' name='gsattr_price[]' placeholder='价格' style='display:inline-block;width:200px;margin-left:10px;' type='text'>";
                        html+="</div></div>";

                    }else{
                        //唯一处理
                        if (v.attr_default) {
                            html+="<div class='form-group'>";
                            html+="<label class='col-sm-2 control-label no-padding-right'>"+v.attr_name+"</label>";
                            var attrDefaultArr=v.attr_default.split(",");//split()方法用于把一个字符串分割成字符串数组
                            html+="<div class='col-sm-6'>";
                            html+="<select name='goods_attr["+v.attr_id+"]'>";
                            html+="<option value=''>请选择</option>"
                            for (var i=0; i<attrDefaultArr.length; i++) {
                                html+="<option value="+attrDefaultArr[i]+">"+attrDefaultArr[i]+"</option>";
                            }
                            html+="</select>";
                            html+="</div></div>";
                        }else{
                            html+="<div class='form-group'>";
                            html+="<label class='col-sm-2 control-label no-padding-right'>"+v.attr_name+"</label>";
                            html+="<div class='col-sm-6'>";
                            html+=":<input class='form-control' name='goods_attr["+v.attr_id+"]' style='display:inline-block;width:200px;margin-left:10px;' type='text' />";
                            html+="</div></div>";
                        }
                    }
                });
                $("#goodsattr").html(html);
            }
        });
    });

    function addrow(o){
        var div=$(o).parent().parent();
        if ($(o).html() == '[+]') {
            var newdiv=div.clone();
            newdiv.find('a').html('[-]');
            // 修改old_gsattr_price[]为gsattr_price[]
            newdiv.find(':text').attr('name','gsattr_price[]');
            // 修改old_goods_attr[][]为goods_attr[][]
            var sel = newdiv.find('select');
            var oldname = sel.attr('name');
            var newname = oldname.replace('old_','');
            sel.attr('name',newname);
            div.after(newdiv);
        }else{
            if (confirm('确定要删除属性吗？')) {
                var div=$(o).parent().parent();
                var gaid = div.attr('gaid');
                $.ajax({
                    type:'POST',
                    data:{gaid:gaid},
                    url:"<?php echo url('attr/ajaxdelga'); ?>",
                    success:function(data){
                        if (data == 1) {
                            div.remove();
                        }else{
                            alert('删除失败');
                        }
                    },
                    error:function(){
                        alert('bbb');
                    }
                });

            }
        }
    }

    function rowphoto(o){
        var div=$(o).parent().parent();
        if ($(o).html() == '[+]') {
            var newdiv=div.clone();
            newdiv.find('a').html('[-]');
            div.after(newdiv);
        }else{
            div.remove();
        }
    }

    function delrow(o){
        if (confirm('确定要删除该图吗？')) {
            var div=$(o).parent().parent();
            var id = div.attr('id');
            $.ajax({
                type:'POST',
                data:{id:id},
                url:"<?php echo url('goods/gsphotoajax'); ?>",
                success:function(data){
                    if (data == 1) {
                        div.remove();
                    }else{
                        alert('删除失败');
                    }
                },
                error:function(){
                    alert('bbb');
                }
            });

        }
    }
</script>
</body>
</html>