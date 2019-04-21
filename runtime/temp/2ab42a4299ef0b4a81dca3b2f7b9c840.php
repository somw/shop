<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:64:"B:\aaaweb\shop\public/../application/admin\view\article\add.html";i:1555809110;s:55:"B:\aaaweb\shop\application\admin\view\common\_meta.html";i:1555809110;s:53:"B:\aaaweb\shop\application\admin\view\common\top.html";i:1555809110;s:54:"B:\aaaweb\shop\application\admin\view\common\list.html";i:1555816801;s:57:"B:\aaaweb\shop\application\admin\view\common\_footer.html";i:1555809110;}*/ ?>
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
    
    <link href="/static/plus/uploadify/uploadify.css" rel="stylesheet">
    <script src="/static/plus/uploadify/jquery.uploadify.min.js"></script>
<script type="text/javascript">
    $(function () {
            $("#uploadify").uploadify({
                //指定swf文件
                'swf': '/static/plus/uploadify/uploadify.swf',
                //后台处理的页面
                'uploader': "<?php echo url('article/upload'); ?>",
                'progressData' : 'speed',
                //按钮显示的文字
                'buttonText': '上传文件',
                //显示的高度和宽度，默认 height 30；width 120
                //'height': 15,
                //'width': 80,
                //上传文件的类型  默认为所有文件    'All Files'  ;  '*.*'
                //在浏览窗口底部的文件类型下拉菜单中显示的文本
                'fileTypeDesc': 'Image Files',
                //允许上传的文件后缀
                //'fileTypeExts': '*.gif; *.jpg; *.png',
                // 'cancel': 'uploadfy/uploadify-cancel.png',
                // //上传文件页面中，你想要用来作为文件队列的元素的id, 默认为false  自动生成,  不带#
                // //'queueID': 'fileQueue',
                // //选择文件后自动上传
                // 'auto': true,
                // //设置为true将允许多文件上传
                // 'multi': true,
                'onUploadComplete' : function(file,data,response) {
                    
                     alert(data);
                 }
            });
        });

</script>
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
                        <a href="<?php echo url('article/lst'); ?>">文章管理</a>
                    </li>
                    <li class="active">新增文章</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">
                
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-header bordered-bottom bordered-blue">
                                <span class="widget-caption">新增文章</span>
                            </div>
                            <div class="widget-body">
                                <div id="horizontal-form">
                                    <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="username" class="col-sm-2 control-label no-padding-right">上级分类</label>
                                            <div class="col-sm-6">
                                                <select name="ar_cateid" id="">
                                                    <option>顶级分类</option>
                                                    <?php if(is_array($catelist) || $catelist instanceof \think\Collection || $catelist instanceof \think\Paginator): $i = 0; $__LIST__ = $catelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                                                    <option value="<?php echo $cate['cate_id']; ?>"><?php echo str_repeat('-',$cate['lever']*8)?><?php echo $cate['cate_name']; ?></option>
                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="username" class="col-sm-2 control-label no-padding-right">文章标题</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="username" placeholder="" name="ar_title"  type="text"  required="">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>

                                        <div class="form-group">
                                            <label for="username" class="col-sm-2 control-label no-padding-right">关键词</label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" name="ar_keywords"></textarea>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label for="username" class="col-sm-2 control-label no-padding-right">描述</label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" name="ar_description"></textarea>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label for="username" class="col-sm-2 control-label no-padding-right">文章url</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="username" placeholder="" name="ar_url" type="text">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="username" class="col-sm-2 control-label no-padding-right">图片</label>
                                            <div class="col-sm-6">
                                                <label>
                                                    <span id="uploadify"></span>
                                                    <span class="text"></span>
                                                </label>
                                                <input type="file" id="uploadify" class="btn-azure" name="ar_img">
                                            </div>

                                        </div> 
                                        <div id="arimg"></div>                                    

                                        <div class="form-group">
                                            <label for="username" class="col-sm-2 control-label no-padding-right">日期</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="username" placeholder="" name="ar_addtime" type="text">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="username" class="col-sm-2 control-label no-padding-right">内容</label>
                                            <div class="col-sm-6">
                                                <textarea id="content" name="ar_content"></textarea>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label for="username" class="col-sm-2 control-label no-padding-right">是否置顶</label>
                                            <div class="col-sm-6">
                                                <div class="radio" style="float: left; padding-right: 10px;">
                                                    <label>
                                                        <input value="1" name="ar_top" class="colored-blue"  type="radio">
                                                        <span class="text">是</span>
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input value="0" name="ar_top" checked="checked" class="colored-blue" type="radio">
                                                        <span class="text">否</span>
                                                    </label>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label for="username" class="col-sm-2 control-label no-padding-right">文章状态</label>
                                            <div class="col-sm-6">
                                                <div class="radio" style="float: left; padding-right: 10px;">
                                                    <label>
                                                        <input value="1" name="ar_status" checked="checked" class="colored-blue"  type="radio">
                                                        <span class="text">显示</span>
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input value="0" name="ar_status" class="colored-blue" type="radio">
                                                        <span class="text">隐藏</span>
                                                    </label>
                                                </div>

                                            </div>

                                        </div>

                                       
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default">保存信息</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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

<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    UE.getEditor('content',{initialFrameWidth:800,initialFrameHeight:400,});
    


</script>
</body>
</html>