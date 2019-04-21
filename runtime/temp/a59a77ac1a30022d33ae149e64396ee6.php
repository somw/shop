<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:65:"B:\aaaweb\shop\public/../application/admin\view\conf\conflst.html";i:1555809110;s:55:"B:\aaaweb\shop\application\admin\view\common\_meta.html";i:1555809110;s:53:"B:\aaaweb\shop\application\admin\view\common\top.html";i:1555809110;s:54:"B:\aaaweb\shop\application\admin\view\common\list.html";i:1555816801;s:57:"B:\aaaweb\shop\application\admin\view\common\_footer.html";i:1555809110;}*/ ?>
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
            <a href="https://www.whgvip.com" target="_blank">
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
                        <a href="<?php echo url('conf/lst'); ?>">配置管理</a>
                    </li>
                    <li class="active">添加配置</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">

                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <!-- 配置列表开始 -->
                            <div class="widget-body">
                                <div class="docs-example">
                                    <ul class="nav nav-tabs tabs-flat">
                                        <li class="active"><a href="#info-tab" data-toggle="tab">店铺配置</a></li>
                                        <li class=""><a href="#address-tab" data-toggle="tab">商品配置</a></li>
                                    </ul>
                                    <div class="tab-content tabs-flat">
                                        <div class="tab-pane active" id="info-tab">
                                            <div id="horizontal-form">
                                                <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                                                <?php foreach($shopconfig as $k => $conf):?>
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-2 control-label no-padding-right"><?php echo $conf['conf_cname']?></label>
                                                        <div class="col-sm-6">
                                                            <!-- 单行文本 -->
                                                            <?php if($conf['conf_formtype']=='input'):?>
                                                            <input value="<?php echo $conf['conf_default']?>" class="form-control" name="<?php echo $conf['conf_ename'];?>" type="text">

                                                            <!-- 文本域 -->
                                                            <?php elseif($conf['conf_formtype']=='textarea'):?>
                                                            <textarea class="form-control" name="<?php echo $conf['conf_ename'];?>"><?php echo $conf['conf_default']?></textarea>

                                                            <!-- 单选 -->
                                                            <?php elseif($conf['conf_formtype']=='radio'):?>
                                                            <div class="radio" style="float: left; padding-right: 10px;">

                                                                <?php if($conf['conf_values']):
                                                                    $arr=explode(',',$conf['conf_values']);
                                                                    foreach($arr as $k1 => $v1):
                                                                ?>
                                                                <label>
                                                                    <input value="<?php echo $v1;?>" class="colored-blue" name="<?php echo $conf['conf_ename'];?>" type="radio" <?php if($conf['conf_default']==$v1){echo 'checked="checked"';}?>  >
                                                                    <span class="text"><?php echo $v1;?></span>
                                                                </label>
                                                                <?php endforeach; endif;?>

                                                            </div>

                                                            <!-- 复选 -->
                                                            <?php elseif($conf['conf_formtype']=='checkbox'):?>
                                                            <div class="checkbox">

                                                                <?php if($conf['conf_values']):
                                                                    $checkboxarr=explode(',',$conf['conf_values']);
                                                                    $defaultarr=explode(',',$conf['conf_default']);
                                                                    foreach($checkboxarr as $k1 => $v1):
                                                                ?>
                                                                <label>
                                                                    <input <?php if(in_array($v1,$defaultarr)){echo 'checked="checked"';}?> class="form-control" name="<?php echo $conf['conf_ename'];?>[]" type="checkbox" value="<?php echo $v1;?>">
                                                                    <span class="text"><?php echo $v1;?></span>
                                                                </label>
                                                                <?php endforeach; endif;?>

                                                            </div>

                                                            <!-- 下拉菜单 -->
                                                            <?php elseif($conf['conf_formtype']=='select'):?>
                                                            <select name="<?php echo $conf['conf_ename'];?>">
                                                                <option>请选择</option>
                                                                <?php if($conf['conf_values']):
                                                                    $selectarr=explode(',',$conf['conf_values']);
                                                                    foreach($selectarr as $k1 => $v1):
                                                                ?>
                                                                <option <?php if($conf['conf_default']==$v1){echo 'selected="selected"';}?> value="<?php echo $v1;?>"><?php echo $v1;?></option>
                                                                <?php endforeach; endif;?>
                                                            </select>


                                                            <!-- 文件上传 -->
                                                            <?php elseif($conf['conf_formtype']=='file'):?>
                                                            <input type="file" name="<?php echo $conf['conf_ename'];?>">
                                                                <?php if($conf['conf_default']):?>
                                                                <img src="/static/uploads/<?php echo $conf['conf_default']; ?>" height="30">
                                                                <?php else:?>
                                                                暂无图片
                                                                <?php endif;endif;?>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                                    <div class="form-group">
                                                        <div class="col-lg-8 col-lg-offset-4">
                                                            <button type="submit" class="btn btn-default">保存信息</button>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="address-tab">
                                            <div class="form-horizontal">
                                                <?php foreach($goodsconfig as $k => $conf):?>
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-2 control-label no-padding-right"><?php echo $conf['conf_cname']?></label>
                                                        <div class="col-sm-6">
                                                            <!-- 单行文本 -->
                                                            <?php if($conf['conf_formtype']=='input'):?>
                                                            <input value="<?php echo $conf['conf_default']?>" class="form-control" name="<?php echo $conf['conf_ename'];?>" type="text">

                                                            <!-- 文本域 -->
                                                            <?php elseif($conf['conf_formtype']=='textarea'):?>
                                                            <textarea class="form-control" name="<?php echo $conf['conf_ename'];?>"><?php echo $conf['conf_default']?></textarea>

                                                            <!-- 单选 -->
                                                            <?php elseif($conf['conf_formtype']=='radio'):?>
                                                            <div class="radio" style="float: left; padding-right: 10px;">

                                                                <?php if($conf['conf_values']):
                                                                    $arr=explode(',',$conf['conf_values']);
                                                                    foreach($arr as $k1 => $v1):
                                                                ?>
                                                                <label>
                                                                    <input value="<?php echo $v1;?>" class="colored-blue" name="<?php echo $conf['conf_ename'];?>" type="radio" <?php if($conf['conf_default']==$v1){echo 'checked="checked"';}?>  >
                                                                    <span class="text"><?php echo $v1;?></span>
                                                                </label>
                                                                <?php endforeach; endif;?>

                                                            </div>

                                                            <!-- 复选 -->
                                                            <?php elseif($conf['conf_formtype']=='checkbox'):?>
                                                            <div class="checkbox">

                                                                <?php if($conf['conf_values']):
                                                                    $checkboxarr=explode(',',$conf['conf_values']);
                                                                    $defaultarr=explode(',',$conf['conf_default']);
                                                                    foreach($checkboxarr as $k1 => $v1):
                                                                ?>
                                                                <label>
                                                                    <input <?php if(in_array($v1,$defaultarr)){echo 'checked="checked"';}?> class="form-control" name="<?php echo $conf['conf_ename'];?>[]" type="checkbox" value="<?php echo $v1;?>">
                                                                    <span class="text"><?php echo $v1;?></span>
                                                                </label>
                                                                <?php endforeach; endif;?>

                                                            </div>

                                                            <!-- 下拉菜单 -->
                                                            <?php elseif($conf['conf_formtype']=='select'):?>
                                                            <select name="<?php echo $conf['conf_ename'];?>">
                                                                <option>请选择</option>
                                                                <?php if($conf['conf_values']):
                                                                    $selectarr=explode(',',$conf['conf_values']);
                                                                    foreach($selectarr as $k1 => $v1):
                                                                ?>
                                                                <option <?php if($conf['conf_default']==$v1){echo 'selected="selected"';}?> value="<?php echo $v1;?>"><?php echo $v1;?></option>
                                                                <?php endforeach; endif;?>
                                                            </select>


                                                            <!-- 文件上传 -->
                                                            <?php elseif($conf['conf_formtype']=='file'):?>
                                                            <input type="file" name="<?php echo $conf['conf_ename'];?>">
                                                                <?php if($conf['conf_default']):?>
                                                                <img src="/static/uploads/<?php echo $conf['conf_default']; ?>" height="30">
                                                                <?php else:?>
                                                                暂无图片
                                                                <?php endif;endif;?>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                                    <div class="form-group">
                                                        <div class="col-lg-8 col-lg-offset-4">
                                                            <button type="submit" class="btn btn-default">保存信息</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                            <!-- 配置列表结束 -->


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
</body>
</html>