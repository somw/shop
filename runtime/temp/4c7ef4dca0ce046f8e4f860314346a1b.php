<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:61:"B:\aaaweb\shop\public/../application/admin\view\cate\lst.html";i:1560041555;s:55:"B:\aaaweb\shop\application\admin\view\common\_meta.html";i:1560041555;s:53:"B:\aaaweb\shop\application\admin\view\common\top.html";i:1560041555;s:54:"B:\aaaweb\shop\application\admin\view\common\list.html";i:1560052041;s:57:"B:\aaaweb\shop\application\admin\view\common\_footer.html";i:1560041555;}*/ ?>
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
                        <a href="<?php echo url('cate/lst'); ?>">分类管理</a>
                    </li>
                    <li class="active">添加分类</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">
                <form action="" method="post">
                <button type="button" tooltip="添加分类" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('cate/add'); ?>'"> <i class="fa fa-plus"></i>新增栏目
                </button>
                <button type="button" tooltip="添加分类" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('cate/add'); ?>'">批量删除
                </button>
                <button type="submit" tooltip="添加分类" class="btn btn-sm btn-azure btn-addon" >更新排序</button>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-body">
                                <div class="flip-scroll">
                                    <table class="table table-bordered table-hover">
                                        <thead class="">
                                            <tr>
                                                <th class="text-center" width="4%">分类ID</th>
                                                <th class="text-center">分类名称</th>
                                                <th class="text-center" width="6%">分类类型</th>
                                                <th class="text-center">关键词</th>
                                                <th class="text-center">描述</th>
                                                <th class="text-center">排序</th>
                                                <th class="text-center">状态</th>
                                                <th class="text-center">操作</th>
                                            </tr>
                                        </thead>
                                        <?php if(is_array($catelist) || $catelist instanceof \think\Collection || $catelist instanceof \think\Paginator): $i = 0; $__LIST__ = $catelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                                        <tbody>
                                            <tr>
                                                <td align="center"><?php echo $cate['cate_id']; ?></td>
                                                <td><?php echo str_repeat('-',$cate['lever']*8)?><?php echo $cate['cate_name']; ?></td>
                                                <td align="center">
                                                <?php if($cate['cate_type'] == 1): ?>
                                                系统分类
                                                <?php elseif($cate['cate_type'] == 2): ?>
                                                帮助分类
                                                <?php elseif($cate['cate_type'] == 3): ?>
                                                网店帮助
                                                <?php elseif($cate['cate_type'] == 4): ?>
                                                网店信息
                                                <?php elseif($cate['cate_type'] == 5): ?>
                                                普通分类
                                                <?php endif; ?>

                                                </td>
                                                <td><?php echo $cate['cate_keywords']; ?></td>
                                                <td><?php echo $cate['cate_description']; ?></td>
                                                <td width="4%" align="center"><input type="text" style="width: 30px; text-align: center;" name="cate_sort[<?php echo $cate['cate_id']; ?>]" value="<?php echo $cate['cate_sort']; ?>"></td>
                                                <td align="center">
                                                <?php if($cate['cate_shownav'] == 1): ?>
                                                    显示
                                                <?php else: ?>
                                                    禁用
                                                <?php endif; ?>
                                               

                                                </td>
                                                <td align="center">
                                                    <a href="<?php echo url('edit',array('cate_id'=>$cate['cate_id'])); ?>" class="btn btn-primary btn-sm shiny">
                                                        <i class="fa fa-edit"></i> 编辑
                                                    </a>
                                                    <?php if(!in_array(($cate['cate_pid']), explode(',',"1"))): ?>
                                                    <a href="#" onClick="warning('确实要删除吗', '<?php echo url('del',array('cate_id'=>$cate['cate_id'])); ?>')" class="btn btn-danger btn-sm shiny">
                                                        <i class="fa fa-trash-o"></i> 删除
                                                    </a>
                                                    <?php else: ?>
                                                    <a href="#" disabled="disabled" class="btn btn-danger btn-sm shiny">
                                                        <i class="fa fa-trash-o"></i> 删除
                                                    </a>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
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