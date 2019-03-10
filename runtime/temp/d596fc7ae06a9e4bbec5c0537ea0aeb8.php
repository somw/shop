<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:62:"B:\aaaweb\shop\public/../application/admin\view\goods\lst.html";i:1552212318;s:55:"B:\aaaweb\shop\application\admin\view\common\_meta.html";i:1552181903;s:53:"B:\aaaweb\shop\application\admin\view\common\top.html";i:1552181903;s:54:"B:\aaaweb\shop\application\admin\view\common\list.html";i:1552181903;s:57:"B:\aaaweb\shop\application\admin\view\common\_footer.html";i:1552181903;}*/ ?>
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
                        <a href="<?php echo url('goods/lst'); ?>">商品类型管理</a>
                    </li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">
                <button type="button" tooltip="添加商品类型" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('goods/add'); ?>'"> <i class="fa fa-plus"></i> Add
                </button>
                <button type="button" tooltip="添加商品类型" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('goods/prints'); ?>'"> <i class="fa fa-print"></i>  打印
                </button>

                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-body">
                                <div class="flip-scroll">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center" width="4%">ID</th>
                                                <th class="text-center" width="10%">属性名称</th>
                                                <th class="text-center">商品编号</th>
                                                <th class="text-center" width="10%">缩略图</th>
                                                <th class="text-center" width="6%">市场价</th>
                                                <th class="text-center" width="6%">本店价</th>
                                                <th class="text-center" width="6%">上架</th>
                                                <th class="text-center" width="7%">所属栏目</th>
                                                <th class="text-center" width="7%">所属品牌</th>
                                                <th class="text-center" width="7%">所属类型</th>
                                                <th class="text-center">重量</th>
                                                <th class="text-center" width="4%">单位</th>
                                                <th class="text-center" width="4%">库存量</th>
                                                <th class="text-center" width="22%">操作</th>
                                                
                                            </tr>
                                        </thead>
                                        <?php if(is_array($goodslist) || $goodslist instanceof \think\Collection || $goodslist instanceof \think\Paginator): $i = 0; $__LIST__ = $goodslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gs): $mod = ($i % 2 );++$i;?>
                                        <tbody>
                                            <tr>
                                                <td align="center"><?php echo $gs['gs_id']; ?></td>
                                                <td><?php echo cut_str($gs['gs_name'],3); ?></td>
                                                <td><?php echo $gs['gs_code']; ?></td>
                                                <td align="center">
                                                <?php if($gs['gs_img'] != ''): ?><img src="/static/uploads/<?php echo $gs['gs_img']; ?>" height="30"><?php else: ?>无图片<?php endif; ?>
                                                </td>
                                                <td><?php echo $gs['gs_marktep']; ?></td>
                                                <td><?php echo $gs['gs_shopp']; ?></td>
                                                <td><?php if($gs['gs_onsale'] == 1): ?>上架<?php else: ?>已下架<?php endif; ?></td>
                                                <td><?php echo $gs['shopcate_name']; ?></td>
                                                <td><?php echo $gs['brand_name']; ?></td>
                                                <td><?php echo $gs['type_name']; ?></td>
                                                <td><?php echo $gs['gs_weight']; ?></td>
                                                <td><?php echo $gs['gs_unit']; ?></td>
                                                <td><?php if($gs['gn']): ?><?php echo $gs['gn']; else: ?>0<?php endif; ?></td>
                                                <td align="center">
                                                    <a href="<?php echo url('goods/product',array('gs_id'=>$gs['gs_id'])); ?>" class="btn btn-warning btn-sm shiny">
                                                        <i class="fa fa-check-square-o"></i> 库存量
                                                    </a>
                                                    <a href="<?php echo url('edit',array('type_id'=>$gs['gs_id'])); ?>" class="btn btn-primary btn-sm shiny">
                                                        <i class="fa fa-edit"></i> 编辑
                                                    </a>
                                                    <a href="#" onClick="warning('确实要删除吗', '<?php echo url('del',array('gs_id'=>$gs['gs_id'])); ?>')" class="btn btn-danger btn-sm shiny">
                                                        <i class="fa fa-trash-o"></i> 删除
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </table>
                                </div>
                                <div><?php echo $goodslist->render(); ?></div>
                            </div>
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