<?php if (!defined('THINK_PATH')) exit(); /*a:9:{s:64:"D:\aaaweb\shop\public/../application/index\view\index\index.html";i:1557661482;s:55:"D:\aaaweb\shop\application\index\view\common\_meta.html";i:1557661482;s:58:"D:\aaaweb\shop\application\index\view\common\site_nav.html";i:1557661482;s:56:"D:\aaaweb\shop\application\index\view\common\header.html";i:1557146175;s:53:"D:\aaaweb\shop\application\index\view\common\nav.html";i:1557661482;s:59:"D:\aaaweb\shop\application\index\view\common\homeindex.html";i:1557661482;s:59:"D:\aaaweb\shop\application\index\view\common\mui_right.html";i:1557146175;s:56:"D:\aaaweb\shop\application\index\view\common\footer.html";i:1557146175;s:57:"D:\aaaweb\shop\application\index\view\common\_footer.html";i:1557661482;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<title><?php echo $configs['webname']; ?></title>
		<meta name="Keywords" content="<?php echo $configs['webname']; ?>" />
		<meta name="Description" content="<?php echo $configs['webname']; ?>" />
		<link rel="shortcut icon" href="favicon.ico">

		<link rel="stylesheet" type="text/css" href="/static/index/css/base.css">
		<link rel="stylesheet" type="text/css" href="/static/index/css/style.css">
		<link rel="stylesheet" type="text/css" href="/static/index/css/iconfont.css">
		<link rel="stylesheet" type="text/css" href="/static/index/css/purebox.css">
		<link rel="stylesheet" type="text/css" href="/static/index/css/quickLinks.css">

		<!-- goods -->
		<link rel="stylesheet" type="text/css" href="/static/index/css/goods_fitting.css" />
		<link rel="stylesheet" type="text/css" href="/static/index/css/suggest.css" />
		<link rel="stylesheet" type="text/css" href="/static/index/css/calendar.min.css" />
		<link rel="stylesheet" type="text/css" href="/static/index/css/perfect-scrollbar.min.css" />
		<link rel="stylesheet" type="text/css" href="/static/index/css/select.css" />

		

		<script type="text/javascript" src="/static/index/js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="/static/index/js/jquery.json.js"></script>
		<script type="text/javascript" src="/static/index/js/transport_jquery.js"></script>

		<link rel="stylesheet" type="text/css" href="/static/index/css/color.css">
		
			
		


		<script type="text/javascript">
		var json_languages = {
			"ok":"\u786e\u5b9a",
			"determine":"\u786e\u5b9a",
			"cancel":"\u53d6\u6d88",
			"drop":"\u5220\u9664",
			"edit":"\u7f16\u8f91",
			"remove":"\u79fb\u9664",
			"follow":"\u5173\u6ce8",
			"pb_title":"\u63d0\u793a",
			"Prompt_information":"\u63d0\u793a\u4fe1\u606f",
			"title":"\u63d0\u793a",
			"not_login":"\u60a8\u5c1a\u672a\u767b\u5f55",
			"close":"\u5173\u95ed",
			"cart":"\u8d2d\u7269\u8f66",
			"js_cart":"\u8d2d\u7269\u8f66",
			"all":"\u5168\u90e8",
			"go_login":"\u53bb\u767b\u9646",
			"select_city":"\u8bf7\u9009\u62e9\u5e02",
			"comment_goods":"\u8bc4\u8bba\u5546\u54c1",
			"submit_order":"\u63d0\u4ea4\u8ba2\u5355",
			"sys_msg":"\u7cfb\u7edf\u63d0\u793a",
			"no_keywords":"\u8bf7\u8f93\u5165\u641c\u7d22\u5173\u952e\u8bcd\uff01",
			"adv_packup_one":"\u8bf7\u53bb\u540e\u53f0\u5e7f\u544a\u4f4d\u7f6e",
			"adv_packup_two":"\u91cc\u9762\u8bbe\u7f6e\u5e7f\u544a\uff01",
			"more":"\u66f4\u591a",
			"Please":"\u8bf7\u53bb",
			"set_up":"\u8bbe\u7f6e\uff01",
			"login_phone_packup_one":"\u8bf7\u8f93\u5165\u624b\u673a\u53f7\u7801",
			"more_options":"\u66f4\u591a\u9009\u9879",
			"Pack_up":"\u6536\u8d77",
			"no_attr":"\u6ca1\u6709\u66f4\u591a\u5c5e\u6027\u4e86",
			"search_Prompt":"\u53ef\u8f93\u5165\u6c49\u5b57,\u62fc\u97f3\u67e5\u627e\u54c1\u724c",
			"most_input":"\u6700\u591a\u53ea\u80fd\u9009\u62e95\u9879",
			"multi_select":"\u591a\u9009",
			"checkbox_Packup":"\u8bf7\u6536\u8d77\u5168\u90e8\u591a\u9009",
			"radio_Packup":"\u8bf7\u6536\u8d77\u5168\u90e8\u5355\u9009",
			"contrast":"\u5bf9\u6bd4",
			"empty_contrast":"\u6e05\u7a7a\u5bf9\u6bd4\u680f",
			"Prompt_add_one":"\u6700\u591a\u53ea\u80fd\u6dfb\u52a04\u4e2a\u54e6^_^",
			"Prompt_add_two":"\u60a8\u8fd8\u53ef\u4ee5\u7ee7\u7eed\u6dfb\u52a0",
			"button_compare":"\u6bd4\u8f83\u9009\u5b9a\u5546\u54c1",
			"exist":"\u60a8\u5df2\u7ecf\u9009\u62e9\u4e86%s",
			"count_limit":"\u6700\u591a\u53ea\u80fd\u9009\u62e94\u4e2a\u5546\u54c1\u8fdb\u884c\u5bf9\u6bd4",
			"goods_type_different":"%s\u548c\u5df2\u9009\u62e9\u5546\u54c1\u7c7b\u578b\u4e0d\u540c\u65e0\u6cd5\u8fdb\u884c\u5bf9\u6bd4",
			"compare_no_goods":"\u60a8\u6ca1\u6709\u9009\u5b9a\u4efb\u4f55\u9700\u8981\u6bd4\u8f83\u7684\u5546\u54c1\u6216\u8005\u6bd4\u8f83\u7684\u5546\u54c1\u6570\u5c11\u4e8e 2 \u4e2a\u3002",
			"btn_buy":"\u8d2d\u4e70",
			"is_cancel":"\u53d6\u6d88",
			"select_spe":"\u8bf7\u9009\u62e9\u5546\u54c1\u5c5e\u6027",
			"Province":"\u8bf7\u9009\u62e9\u6240\u5728\u7701\u4efd",
			"City":"\u8bf7\u9009\u62e9\u6240\u5728\u5e02",
			"District":"\u8bf7\u9009\u62e9\u6240\u5728\u533a\u57df",
			"Street":"\u8bf7\u9009\u62e9\u6240\u5728\u8857\u9053",
			"Detailed_address_null":"\u8be6\u7ec6\u5730\u5740\u4e0d\u80fd\u4e3a\u7a7a",
			"Select_attr":"\u8bf7\u9009\u62e9\u5c5e\u6027",
			"Focus_prompt_one":"\u60a8\u5df2\u5173\u6ce8\u8be5\u5e97\u94fa\uff01",
			"Focus_prompt_login":"\u60a8\u5c1a\u672a\u767b\u5f55\u5546\u57ce\u4f1a\u5458\uff0c\u4e0d\u80fd\u5173\u6ce8\uff01",
			"Focus_prompt_two":"\u767b\u5f55\u5546\u57ce\u4f1a\u5458\u3002",
			"store_focus":"\u5e97\u94fa\u5173\u6ce8\u3002",
			"Focus_prompt_three":"\u60a8\u786e\u5b9e\u8981\u5173\u6ce8\u6240\u9009\u5e97\u94fa\u5417\uff1f",
			"Focus_prompt_four":"\u60a8\u786e\u5b9e\u8981\u53d6\u6d88\u5173\u6ce8\u5e97\u94fa\u5417\uff1f",
			"Focus_prompt_five":"\u60a8\u8981\u5173\u6ce8\u8be5\u5e97\u94fa\u5417\uff1f",
			"Purchase_quantity":"\u8d85\u8fc7\u9650\u8d2d\u6570\u91cf.",
			"My_collection":"\u6211\u7684\u6536\u85cf",
			"shiping_prompt":"\u8be5\u5730\u533a\u6682\u4e0d\u652f\u6301\u914d\u9001",
			"Have_goods":"\u6709\u8d27",
			"No_goods":"\u65e0\u8d27",
			"No_shipping":"\u65e0\u6cd5\u914d\u9001",
			"Deliver_back_order":"\u4e0b\u5355\u540e\u7acb\u5373\u53d1\u8d27",
			"Time_delivery":" \u65f6\u53d1\u8d27",
			"goods_over":"\u6b64\u5546\u54c1\u6682\u65f6\u552e\u5b8c",
			"Stock_goods_null":"\u5546\u54c1\u5e93\u5b58\u4e0d\u8db3",
			"purchasing_prompt_two":"\u5bf9\u4e0d\u8d77\uff0c\u8be5\u5546\u54c1\u5df2\u7ecf\u7d2f\u8ba1\u8d85\u8fc7\u9650\u8d2d\u6570\u91cf",
			"day_not_available":"\u5f53\u65e5\u65e0\u8d27",
			"day_yes_available":"\u5f53\u65e5\u6709\u8d27",
			"Already_buy":"\u5df2\u8d2d\u4e70",
			"Already_buy_two":"\u4ef6\u5546\u54c1\u8fbe\u5230\u9650\u8d2d\u6761\u4ef6,\u65e0\u6cd5\u518d\u8d2d\u4e70",
			"Already_buy_three":"\u4ef6\u8be5\u5546\u54c1,\u53ea\u80fd\u518d\u8d2d\u4e70",
			"goods_buy_empty_p":"\u5546\u54c1\u6570\u91cf\u4e0d\u80fd\u5c11\u4e8e1\u4ef6",
			"goods_number_p":"\u5546\u54c1\u6570\u91cf\u5fc5\u987b\u4e3a\u6570\u5b57",
			"search_one":"\u8bf7\u586b\u5199\u7b5b\u9009\u4ef7\u683c",
			"search_two":"\u8bf7\u586b\u5199\u7b5b\u9009\u5de6\u8fb9\u4ef7\u683c",
			"search_three":"\u8bf7\u586b\u5199\u7b5b\u9009\u53f3\u8fb9\u4ef7\u683c",
			"search_four":"\u5de6\u8fb9\u4ef7\u683c\u4e0d\u80fd\u5927\u4e8e\u6216\u7b49\u4e8e\u53f3\u8fb9\u4ef7\u683c",
			"jian":"\u4ef6",
			"letter":"\u4ef6",
			"inventory":"\u5b58\u8d27",
			"move_collection":"\u79fb\u81f3\u6211\u7684\u6536\u85cf",
			"select_shop":"\u8bf7\u9009\u62e9\u5957\u9910\u5546\u54c1",
			"Parameter_error":"\u53c2\u6570\u9519\u8bef",
			"screen_price":"\u8bf7\u586b\u5199\u7b5b\u9009\u4ef7\u683c",
			"screen_price_left":"\u8bf7\u586b\u5199\u7b5b\u9009\u5de6\u8fb9\u4ef7\u683c",
			"screen_price_right":"\u8bf7\u586b\u5199\u7b5b\u9009\u53f3\u8fb9\u4ef7\u683c",
			"screen_price_dy":"\u5de6\u8fb9\u4ef7\u683c\u4e0d\u80fd\u5927\u4e8e\u6216\u7b49\u4e8e\u53f3\u8fb9\u4ef7\u683c",
			"invoice_ok":"\u4fdd\u5b58\u53d1\u7968\u4fe1\u606f",
			"invoice_desc_null":"\u8f93\u5165\u5185\u5bb9\u4e0d\u80fd\u4e3a\u7a7a\uff01",
			"invoice_desc_number":"\u60a8\u6700\u591a\u53ef\u4ee5\u6dfb\u52a03\u4e2a\u516c\u53f8\u53d1\u7968\uff01",
			"invoice_packup":"\u8bf7\u9009\u62e9\u6216\u586b\u5199\u53d1\u7968\u62ac\u5934\u90e8\u5206\uff01",
			"invoice_tax_null":"\u8bf7\u586b\u5199\u7eb3\u7a0e\u4eba\u8bc6\u522b\u7801",
			"add_address_10":"\u6700\u591a\u53ea\u80fd\u6dfb\u52a010\u4e2a\u6536\u8d27\u5730\u5740",
			"msg_phone_not":"\u624b\u673a\u53f7\u7801\u4e0d\u6b63\u786e",
			"captcha_not":"\u9a8c\u8bc1\u7801\u4e0d\u80fd\u4e3a\u7a7a",
			"captcha_xz":"\u8bf7\u8f93\u51654\u4f4d\u6570\u7684\u9a8c\u8bc1\u7801",
			"captcha_cw":"\u9a8c\u8bc1\u7801\u9519\u8bef",
			"Detailed_map":"\u8be6\u7ec6\u5730\u56fe",
			"email_error":"\u90ae\u7bb1\u683c\u5f0f\u4e0d\u6b63\u786e\uff01",
			"bid_prompt_null":"\u4ef7\u683c\u4e0d\u80fd\u4e3a\u7a7a!",
			"bid_prompt_error":"\u4ef7\u683c\u8f93\u5165\u683c\u5f0f\u4e0d\u6b63\u786e\uff01",
			"mobile_error_goods":"\u624b\u673a\u683c\u5f0f\u4e0d\u6b63\u786e\uff01",
			"null_email_goods":"\u90ae\u7bb1\u4e0d\u80fd\u4e3a\u7a7a",
			"select_store":"\u8bf7\u9009\u62e9\u95e8\u5e97\uff01",
			"Product_spec_prompt":"\u8bf7\u9009\u62e9\u5546\u54c1\u89c4\u683c\u7c7b\u578b",
			"reply_desc_one":"\u56de\u590d\u5e16\u5b50\u5185\u5bb9\u4e0d\u80fd\u4e3a\u7a7a",
			"go_shoping":"\u53bb\u8d2d\u7269",
			"highest_price":"\u5df2\u662f\u6700\u9ad8\u4ef7\uff01",
			"lowest_price":"\u5df2\u662f\u6700\u4f4e\u4ef7\uff01",
			"no_history":"\u60a8\u5df2\u6e05\u7a7a\u6700\u8fd1\u6d4f\u89c8\u8fc7\u7684\u5546\u54c1",
			"receive_coupons":"\u9886\u53d6\u4f18\u60e0\u5238",
			"Immediate_use":"\u7acb\u5373\u4f7f\u7528",
			"no_enabled":"\u5173\u95ed"
		};
		//加载效果
		var load_cart_info = '<img src="/static/index/img/loadGoods.gif" height="108" class="ml100">';
		var load_icon = '<img src="/static/index/img/load.gif" width="200" height="200">';
		</script>

		<script type="text/javascript">
			/*登录、注册、找回密码js语言包*/
			var default_username = "<i class='iconfont icon-info-sign'></i>支持中文、字母、数字、”-”的组合，3-20个字符";
			var username_empty = "<i class='iconfont icon-minus-sign'></i>请输入用户名";
			var username_shorter = "<i class='iconfont icon-minus-sign'></i>用户名长度不能少于 4 个字符。";
			var username_invalid = "<i class='iconfont icon-minus-sign'></i>用户名只能是由字母数字以及下划线组成。";
			var password_empty = "<i class='iconfont icon-minus-sign'></i>请输入密码";
			var password_shorter = "<i class='iconfont icon-minus-sign'></i>登录密码不能少于 6 个字符。";
			var confirm_password_invalid = "<i class='iconfont icon-minus-sign'></i>两次输入密码不一致";
			var captcha_empty = "<i class='iconfont icon-minus-sign'></i>请输入验证码";
			var email_empty = "<i class='iconfont icon-minus-sign'></i>Email不能为空";
			var email_invalid = "<i class='iconfont icon-minus-sign'></i>Email 不是合法的地址";
			var agreement = "<i class='iconfont icon-minus-sign'></i>您没有接受协议";
			var msn_invalid = "<i class='iconfont icon-minus-sign'></i>msn地址不是一个有效的邮件地址";
			var qq_invalid = "<i class='iconfont icon-minus-sign'></i>QQ号码不是一个有效的号码";
			var home_phone_invalid = "<i class='iconfont icon-minus-sign'></i>家庭电话不是一个有效号码";
			var office_phone_invalid = "<i class='iconfont icon-minus-sign'></i>办公电话不是一个有效号码";
			var mobile_phone_invalid = "<i class='iconfont icon-minus-sign'></i>手机号码不是一个有效号码";
			var no_select_question = "<i class='iconfont icon-minus-sign'></i>您没有完成密码提示问题的操作";
			var msg_un_blank = "<i class='iconfont icon-minus-sign'></i>用户名不能为空";
			var msg_un_length = "<i class='iconfont icon-minus-sign'></i>用户名最长不得超过15个字符，一个汉字等于2个字符";
			var msg_un_format = "<i class='iconfont icon-minus-sign'></i>用户名含有非法字符";
			var msg_un_registered = "<i class='iconfont icon-minus-sign'></i>用户名已经存在,请重新输入";
			var msg_email_blank = "<i class='iconfont icon-minus-sign'></i>邮件地址不能为空";
			var msg_email_registered = "<i class='iconfont icon-minus-sign'></i>邮箱已存在,请重新输入";
			var msg_email_format = "<i class='iconfont icon-minus-sign'></i>格式错误，请输入正确的邮箱地址";
			var msg_blank = "<i class='iconfont icon-minus-sign'></i>不能为空";
			var passwd_balnk = "<i class='iconfont icon-minus-sign'></i>密码中不能包含空格";
			var msg_phone_blank = "<i class='iconfont icon-minus-sign'></i>手机号码不能为空";
			var msg_phone_registered = "<i class='iconfont icon-minus-sign'></i>手机已存在,请重新输入";
			var msg_phone_invalid = "<i class='iconfont icon-minus-sign'></i>无效的手机号码";
			var msg_phone_not_correct = "<i class='iconfont icon-minus-sign'></i>手机号码不正确，请重新输入";
			var msg_mobile_code_blank = "<i class='iconfont icon-minus-sign'></i>手机验证码不能为空";
			var msg_mobile_code_not_correct = "<i class='iconfont icon-minus-sign'></i>手机验证码不正确";
			var msg_confirm_pwd_blank = "<i class='iconfont icon-minus-sign'></i>确认密码不能为空";
			var msg_identifying_code = "<i class='iconfont icon-minus-sign'></i>验证码不能为空";
			var msg_identifying_not_correct = "<i class='iconfont icon-minus-sign'></i>验证码不正确";
			var weak = "弱";
			var In = "中";
			var strong = "强";
			var null_username = "<i class='iconfont icon-minus-sign'></i>用户名不能为空";
			var null_email = "<i class='iconfont icon-minus-sign'></i>邮箱不能为空";
			var null_captcha = "<i class='iconfont icon-minus-sign'></i>验证码不能为空";
			var null_phone = "<i class='iconfont icon-minus-sign'></i>手机不能为空";
			var select_password_question = "<i class='iconfont icon-minus-sign'></i>请选择密码提示问题";
			var null_password_question = "<i class='iconfont icon-minus-sign'></i>问题不能为空";
			var error_email = "<i class='iconfont icon-minus-sign'></i>验证码错误";
			var msg_can_rg = "<i class='iconfont icon-ok'></i>可以注册";
			var user_name_empty = "<i class='iconfont icon-minus-sign'></i>请输入您的用户名！";
			var email_address_empty = "<i class='iconfont icon-minus-sign'></i>请输入您的电子邮件地址！";
			var phone_address_empty = "<i class='iconfont icon-minus-sign'></i>请输入您的手机号！";
			var phone_address_empty_11 = "<i class='iconfont icon-minus-sign'></i>请输入正确11位手机号码！";
			var phone_address_empty_bzq = "<i class='iconfont icon-minus-sign'></i>您输入的手机号码不正确！";
			var wenti_address_empty = "<i class='iconfont icon-minus-sign'></i>请输入您的注册问题！";
			var email_address_error = "<i class='iconfont icon-minus-sign'></i>您输入的电子邮件地址格式不正确！";
			var new_password_empty = "<i class='iconfont icon-minus-sign'></i>请输入您的新密码！";
			var confirm_password_empty = "<i class='iconfont icon-minus-sign'></i>请输入您的确认密码！";
			var both_password_error = "<i class='iconfont icon-minus-sign'></i>您两次输入的密码不一致！";
		</script>

	</head>
<body class="home_visual_body">
		
<div class="top-banner" style="background: rgb(255, 40, 125) none repeat scroll 0% 0%;">
    <div class="module w1200" data-type="range">
        <a href="#" target="_blank"><img src="/static/index/img/1494985021864887905.jpg" width="1200" height="80"></a>
        <i class="iconfont icon-cha" ectype="close"></i>
    </div>
    <div class="spec" data-spec="{&quot;picHeight&quot;:&quot;500&quot;,&quot;target&quot;:&quot;_blank&quot;,&quot;navColor&quot;:&quot;#ff287d&quot;,&quot;is_li&quot;:0,&quot;bg_color&quot;:[],&quot;pic_src&quot;:[&quot;https://demo.dscmall.cn/data/gallery_album/2/original_img/1494985021864887905.jpg&quot;],&quot;link&quot;:&quot;&quot;,&quot;sort&quot;:[&quot;1&quot;]}">
    </div>
</div>
        
<div class="site-nav" id="site-nav">
    <div class="w w1200">
        <div class="fl">	
    <div class="city-choice" id="city-choice" data-ectype="dorpdown">
		<div class="dsc-choie dsc-cm">
			<i class="iconfont icon-map-marker"></i>
			<span class="ui-areamini-text" data-id="1" title="商丘">商丘</span>
		</div>
		<div class="dorpdown-layer">
			<div class="ui-areamini-content-wrap" id="ui-content-wrap">
				<div class="hot">
					<a href="#">北京</a>
					<a href="#">上海</a>
					<a href="#">广州</a>
					<a href="#">深圳</a>
					<a href="#">成都</a>
					<a href="#">西安</a>
					<a href="#">天津</a>
					<a href="#">武汉</a>
					<a href="#">海口</a>
					<a href="#">南京</a>
				</div>
				<div class="search-first-letter">
					<a href="#">A</a>
					<a href="#">B</a>
					<a href="#">C</a>
					<a href="#">D</a>
					<a href="#">E</a>
					<a href="#">F</a>
					<a href="#">G</a>
					<a href="#">H</a>
					<a href="#">J</a>
					<a href="#">K</a>
					<a href="#">L</a>
					<a href="#">M</a>
					<a href="#">N</a>
					<a href="#">P</a>
					<a href="#">Q</a>
					<a href="#">R</a>
					<a href="#">S</a>
					<a href="#">T</a>
					<a href="#">W</a>
					<a href="#">X</a>
					<a href="#">Y</a>
					<a href="#">Z</a>
				</div>
				<div class="scrollBody" id="scrollBody">
					<div class="all-list" id="scrollMap">
						<ul id="ul">
							<li data-id="1" data-name="A">
								<em>A</em>
								<div class="itme-city">
									<a href="#">安庆</a>
									<a href="#">安顺</a>
									<a href="#">安阳</a>
									<a href="#">鞍山</a>
									<a href="#">阿拉善盟</a>
									<a href="#">安康</a>
									<a href="#">阿坝</a>
									<a href="#">阿里</a>
									<a href="#">阿克苏</a>
									<a href="#">阿拉尔</a>
									<a href="#">澳门</a>
								</div>
							</li>
							<li data-id="2" data-name="B">
								<em>B</em>
								<div class="itme-city">
									<a href="#">蚌埠</a>
									<a href="#">亳州</a>
									<a href="#">北京</a>
									<a href="#">白银</a>
									<a href="#">百色</a>
									<a href="#">北海</a>
									<a href="#">毕节</a>
									<a href="#">白沙</a>
									<a href="#">保亭</a>
									<a href="#">保定</a>
									<a href="#">白城</a>
									<a href="#">白山</a>
									<a href="#">本溪</a>
									<a href="#">巴彦淖尔盟</a>
									<a href="#">包头</a>
									<a href="#">滨州</a>
									<a href="#">宝鸡</a>
									<a href="#">巴中</a>
									<a href="#">巴音郭楞</a>
									<a href="#">博尔塔拉</a>
									<a href="#">保山</a>
								</div>
							</li>
							<li data-id="3" data-name="C">
								<em>C</em>
								<div class="itme-city">
									<a href="#">巢湖</a>
									<a href="#">池州</a>
									<a href="#">滁州</a>
									<a href="#">潮州</a>
									<a href="#">崇左</a>
									<a href="#">昌江</a>
									<a href="#">澄迈县</a>
									<a href="#">沧州</a>
									<a href="#">承德</a>
									<a href="#">长沙</a>
									<a href="#">常德</a>
									<a href="#">郴州</a>
									<a href="#">长春</a>
									<a href="#">常州</a>
									<a href="#">朝阳</a>
									<a href="#">赤峰</a>
									<a href="#">长治</a>
									<a href="#">成都</a>
									<a href="#">昌都</a>
									<a href="#">昌吉</a>
									<a href="#">楚雄</a>
									<a href="#">重庆</a>
								</div>
							</li>
							<li data-id="4" data-name="D">
								<em>D</em>
								<div class="itme-city">
									<a href="#">定西</a>
									<a href="#">东莞</a>
									<a href="#">定安县</a>
									<a href="#">东方</a>
									<a href="#">大庆</a>
									<a href="#">大兴安岭</a>
									<a href="#">大连</a>
									<a href="#">丹东</a>
									<a href="#">德州</a>
									<a href="#">东营</a>
									<a href="#">大同</a>
									<a href="#">达州</a>
									<a href="#">德阳</a>
									<a href="#">大理</a>
									<a href="#">德宏</a>
									<a href="#">迪庆</a>
								</div>
							</li>
							<li data-id="5" data-name="E">
								<em>E</em>
								<div class="itme-city">
									<a href="#">鄂州</a>
									<a href="#">恩施</a>
									<a href="#">鄂尔多斯</a>
								</div>
							</li>
							<li data-id="6" data-name="F">
								<em>F</em>
								<div class="itme-city">
									<a href="#">阜阳</a>
									<a href="#">福州</a>
									<a href="#">佛山</a>
									<a href="#">防城港</a>
									<a href="#">抚州</a>
									<a href="#">抚顺</a>
									<a href="#">阜新</a>
								</div>
							</li>
							<li data-id="7" data-name="G">
								<em>G</em>
								<div class="itme-city">
									<a href="#">甘南</a>
									<a href="#">广州</a>
									<a href="#">桂林</a>
									<a href="#">贵港</a>
									<a href="#">贵阳</a>
									<a href="#">赣州</a>
									<a href="#">固原</a>
									<a href="#">果洛</a>
									<a href="#">甘孜</a>
									<a href="#">广安</a>
									<a href="#">广元</a>
								</div>
							</li>
							<li data-id="8" data-name="H">
								<em>H</em>
								<div class="itme-city">
									<a href="#">淮北</a>
									<a href="#">淮南</a>
									<a href="#">黄山</a>
									<a href="#">河源</a>
									<a href="#">惠州</a>
									<a href="#">河池</a>
									<a href="#">贺州</a>
									<a href="#">海口</a>
									<a href="#">邯郸</a>
									<a href="#">衡水</a>
									<a href="#">鹤壁</a>
									<a href="#">漯河</a>
									<a href="#">哈尔滨</a>
									<a href="#">鹤岗</a>
									<a href="#">黑河</a>
									<a href="#">黄冈</a>
									<a href="#">黄石</a>
									<a href="#">衡阳</a>
									<a href="#">怀化</a>
									<a href="#">淮安</a>
									<a href="#">葫芦岛</a>
									<a href="#">呼和浩特</a>
									<a href="#">呼伦贝尔</a>
									<a href="#">海北</a>
									<a href="#">海东</a>
									<a href="#">海南</a>
									<a href="#">海西</a>
									<a href="#">黄南</a>
									<a href="#">菏泽</a>
									<a href="#">汉中</a>
									<a href="#">哈密</a>
									<a href="#">和田</a>
									<a href="#">红河</a>
									<a href="#">杭州</a>
									<a href="#">湖州</a>
									<a href="#">合肥</a>
								</div>
							</li>
							<li data-id="9" data-name="J">
								<em>J</em>
								<div class="itme-city">
									<a href="#">嘉峪关</a>
									<a href="#">金昌</a>
									<a href="#">酒泉</a>
									<a href="#">江门</a>
									<a href="#">揭阳</a>
									<a href="#">济源</a>
									<a href="#">焦作</a>
									<a href="#">鸡西</a>
									<a href="#">佳木斯</a>
									<a href="#">荆门</a>
									<a href="#">荆州</a>
									<a href="#">吉林</a>
									<a href="#">吉安</a>
									<a href="#">景德镇</a>
									<a href="#">九江</a>
									<a href="#">锦州</a>
									<a href="#">济南</a>
									<a href="#">济宁</a>
									<a href="#">晋城</a>
									<a href="#">晋中</a>
									<a href="#">嘉兴</a>
									<a href="#">金华</a>
								</div>
							</li>
							<li data-id="10" data-name="K">
								<em>K</em>
								<div class="itme-city">
									<a href="#">开封</a>
									<a href="#">喀什</a>
									<a href="#">克拉玛依</a>
									<a href="#">克孜勒苏</a>
									<a href="#">昆明</a>
								</div>
							</li>
							<li data-id="11" data-name="L">
								<em>L</em>
								<div class="itme-city">
									<a href="#">六安</a>
									<a href="#">龙岩</a>
									<a href="#">兰州</a>
									<a href="#">临夏</a>
									<a href="#">陇南</a>
									<a href="#">来宾</a>
									<a href="#">柳州</a>
									<a href="#">六盘水</a>
									<a href="#">乐东</a>
									<a href="#">临高县</a>
									<a href="#">陵水</a>
									<a href="#">廊坊</a>
									<a href="#">洛阳</a>
									<a href="#">娄底</a>
									<a href="#">辽源</a>
									<a href="#">连云港</a>
									<a href="#">辽阳</a>
									<a href="#">莱芜</a>
									<a href="#">聊城</a>
									<a href="#">临沂</a>
									<a href="#">临汾</a>
									<a href="#">吕梁</a>
									<a href="#">乐山</a>
									<a href="#">凉山</a>
									<a href="#">拉萨</a>
									<a href="#">林芝</a>
									<a href="#">丽江</a>
									<a href="#">临沧</a>
									<a href="#">丽水</a>
								</div>
							</li>
							<li data-id="12" data-name="M">
								<em>M</em>
								<div class="itme-city">
									<a href="#">马鞍山</a>
									<a href="#">茂名</a>
									<a href="#">梅州</a>
									<a href="#">牡丹江</a>
									<a href="#">绵阳</a>
									<a href="#">眉山</a>
								</div>
							</li>
							<li data-id="13" data-name="N">
								<em>N</em>
								<div class="itme-city">
									<a href="#">南平</a>
									<a href="#">宁德</a>
									<a href="#">南宁</a>
									<a href="#">南阳</a>
									<a href="#">南京</a>
									<a href="#">南通</a>
									<a href="#">南昌</a>
									<a href="#">南充</a>
									<a href="#">内江</a>
									<a href="#">那曲</a>
									<a href="#">怒江</a>
									<a href="#">宁波</a>
								</div>
							</li>
							<li data-id="14" data-name="P">
								<em>P</em>
								<div class="itme-city">
									<a href="#">莆田</a>
									<a href="#">平凉</a>
									<a href="#">平顶山</a>
									<a href="#">萍乡</a>
									<a href="#">盘锦</a>
									<a href="#">攀枝花</a>
									<a href="#">普洱</a>
								</div>
							</li>
							<li data-id="15" data-name="Q">
								<em>Q</em>
								<div class="itme-city">
									<a href="#">泉州</a>
									<a href="#">庆阳</a>
									<a href="#">清远</a>
									<a href="#">钦州</a>
									<a href="#">黔东南</a>
									<a href="#">黔南</a>
									<a href="#">黔西南</a>
									<a href="#">琼海</a>
									<a href="#">琼中</a>
									<a href="#">秦皇岛</a>
									<a href="#">七台河</a>
									<a href="#">齐齐哈尔</a>
									<a href="#">潜江</a>
									<a href="#">青岛</a>
									<a href="#">曲靖</a>
									<a href="#">衢州</a>
								</div>
							</li>
							<li data-id="16" data-name="R">
								<em>R</em>
								<div class="itme-city">
									<a href="#">日照</a>
									<a href="#">日喀则</a>
								</div>
							</li>
							<li data-id="17" data-name="S">
								<em>S</em>
								<div class="itme-city">
									<a href="#">宿州</a>
									<a href="#">三明</a>
									<a href="#">深圳</a>
									<a href="#">汕头</a>
									<a href="#">汕尾</a>
									<a href="#">韶关</a>
									<a href="#">三亚</a>
									<a href="#">石家庄</a>
									<a href="#">三门峡</a>
									<a href="#">商丘</a>
									<a href="#">双鸭山</a>
									<a href="#">绥化</a>
									<a href="#">神农架林区</a>
									<a href="#">十堰</a>
									<a href="#">随州</a>
									<a href="#">邵阳</a>
									<a href="#">四平</a>
									<a href="#">松原</a>
									<a href="#">苏州</a>
									<a href="#">宿迁</a>
									<a href="#">上饶</a>
									<a href="#">沈阳</a>
									<a href="#">石嘴山</a>
									<a href="#">朔州</a>
									<a href="#">商洛</a>
									<a href="#">上海</a>
									<a href="#">遂宁</a>
									<a href="#">山南</a>
									<a href="#">石河子</a>
									<a href="#">绍兴</a>
								</div>
							</li>
							<li data-id="18" data-name="T">
								<em>T</em>
								<div class="itme-city">
									<a href="#">铜陵</a>
									<a href="#">天水</a>
									<a href="#">铜仁</a>
									<a href="#">屯昌县</a>
									<a href="#">唐山</a>
									<a href="#">天门</a>
									<a href="#">通化</a>
									<a href="#">泰州</a>
									<a href="#">铁岭</a>
									<a href="#">通辽</a>
									<a href="#">泰安</a>
									<a href="#">太原</a>
									<a href="#">铜川</a>
									<a href="#">天津</a>
									<a href="#">图木舒克</a>
									<a href="#">吐鲁番</a>
									<a href="#">台州</a>
									<a href="#">台湾</a>
								</div>
							</li>
							<li data-id="19" data-name="W">
								<em>W</em>
								<div class="itme-city">
									<a href="#">芜湖</a>
									<a href="#">武威</a>
									<a href="#">梧州</a>
									<a href="#">万宁</a>
									<a href="#">文昌</a>
									<a href="#">五指山</a>
									<a href="#">武汉</a>
									<a href="#">无锡</a>
									<a href="#">乌海</a>
									<a href="#">乌兰察布市</a>
									<a href="#">吴忠</a>
									<a href="#">威海</a>
									<a href="#">潍坊</a>
									<a href="#">渭南</a>
									<a href="#">乌鲁木齐</a>
									<a href="#">五家渠</a>
									<a href="#">文山</a>
									<a href="#">温州</a>
								</div>
							</li>
							<li data-id="20" data-name="X">
								<em>X</em>
								<div class="itme-city">
									<a href="#">宣城</a>
									<a href="#">厦门</a>
									<a href="#">邢台</a>
									<a href="#">新乡</a>
									<a href="#">信阳</a>
									<a href="#">许昌</a>
									<a href="#">仙桃</a>
									<a href="#">咸宁</a>
									<a href="#">襄樊</a>
									<a href="#">孝感</a>
									<a href="#">湘潭</a>
									<a href="#">湘西</a>
									<a href="#">徐州</a>
									<a href="#">新余</a>
									<a href="#">锡林郭勒盟</a>
									<a href="#">兴安盟</a>
									<a href="#">西宁</a>
									<a href="#">忻州</a>
									<a href="#">西安</a>
									<a href="#">咸阳</a>
									<a href="#">西双版纳</a>
									<a href="#">香港</a>
								</div>
							</li>
							<li data-id="21" data-name="Y">
								<em>Y</em>
								<div class="itme-city">
									<a href="#">阳江</a>
									<a href="#">云浮</a>
									<a href="#">玉林</a>
									<a href="#">濮阳</a>
									<a href="#">伊春</a>
									<a href="#">宜昌</a>
									<a href="#">益阳</a>
									<a href="#">永州</a>
									<a href="#">岳阳</a>
									<a href="#">延边</a>
									<a href="#">盐城</a>
									<a href="#">扬州</a>
									<a href="#">宜春</a>
									<a href="#">鹰潭</a>
									<a href="#">营口</a>
									<a href="#">银川</a>
									<a href="#">玉树</a>
									<a href="#">烟台</a>
									<a href="#">阳泉</a>
									<a href="#">运城</a>
									<a href="#">延安</a>
									<a href="#">榆林</a>
									<a href="#">雅安</a>
									<a href="#">宜宾</a>
									<a href="#">伊犁</a>
									<a href="#">玉溪</a>
								</div>
							</li>
							<li data-id="22" data-name="Z">
								<em>Z</em>
								<div class="itme-city">
									<a href="#">漳州</a>
									<a href="#">张掖</a>
									<a href="#">湛江</a>
									<a href="#">肇庆</a>
									<a href="#">中山</a>
									<a href="#">珠海</a>
									<a href="#">遵义</a>
									<a href="#">儋州</a>
									<a href="#">张家口</a>
									<a href="#">郑州</a>
									<a href="#">周口</a>
									<a href="#">驻马店</a>
									<a href="#">张家界</a>
									<a href="#">株洲</a>
									<a href="#">镇江</a>
									<a href="#">中卫</a>
									<a href="#">枣庄</a>
									<a href="#">淄博</a>
									<a href="#">资阳</a>
									<a href="#">自贡</a>
									<a href="#">泸州</a>
									<a href="#">昭通</a>
									<a href="#">舟山</a>
								</div>
							</li>
						</ul>
					</div>
					<div class="scrollBar" id="scrollBar"><p id="city_bar"></p></div>
					<input name="area_phpName" id="phpName" value="index.php" type="hidden">
				</div>
			</div>
		</div>
	</div>
	<div class="txt-info" id="ECS_MEMBERZONE">
		<span>您好 &nbsp;<a href="#">86913361-232247</a></span>
		<span>，欢迎来到&nbsp;<a alt="首页" title="首页" href="index.php">童攀课堂</a></span>
		<span>[<a href="#">退出</a>]</span>

		<!-- <a href="#" class="link-login red">请登录</a>
		<a href="#" class="link-regist">免费注册</a> -->

    </div>
</div>
<ul class="quick-menu fr">
	<?php if(is_array($navRes['top']) || $navRes['top'] instanceof \think\Collection || $navRes['top'] instanceof \think\Paginator): $i = 0; $__LIST__ = $navRes['top'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav_top): $mod = ($i % 2 );++$i;?>
	<li>
    	<div class="dt"><a <?php if($nav_top['nav_open'] == 1): ?> target="_black" <?php endif; ?> href="<?php echo $nav_top['nav_url']; ?>"><?php echo $nav_top['nav_name']; ?></a></div>
    </li>
    <?php if($nav_top['nav_id'] != 0): ?><li class="spacer"></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
<!--     <li class="spacer"></li>
    <li class="li_dorpdown" data-ectype="dorpdown">
		<div class="dt dsc-cm">网站导航<i class="iconfont icon-down"></i></div>
		<div class="dd dorpdown-layer">
			<dl class="fore1">
    			<dt>特色主题</dt>
    			<dd>
					<div class="item"><a href="#">家用电器</a></div>
					<div class="item"><a href="#">手机数码</a></div>
					<div class="item"><a href="#">电脑办公</a></div>
				</dd>
		    </dl>
			<dl class="fore2">
				<dt>促销活动</dt>
				<dd>
					<div class="item"><a href="#">拍卖活动</a></div>
					<div class="item"><a href="#">共创商品</a></div>
					<div class="item"><a href="#">优惠活动</a></div>
					<div class="item"><a href="#">批发市场</a></div>
					<div class="item"><a href="#">超值礼包</a></div>
					<div class="item"><a href="#">优惠券</a></div>
				</dd>
			</dl>
		</div>
	</li> -->
</ul>
    </div>
</div>

<div class="header">
    <div class="w w1200">
        <div class="logo">
    <div class="logoImg"><a href="#"><img src="/static/index/img/logo.png"></a></div>
    <div class="logoAdv"><!-- <a href="#"><img src="/static/index/img/ecsc-join.gif"></a> --></div>

    <!-- login -->
    <div class="logo-span">
		<b style="background:url(/static/index/img/login_logo_pic.png) no-repeat;"></b>
	</div>
	
	<!-- cart_list -->
	<div class="tit">购物车（<em ectype="cartNum">2</em>）</div>

</div>

<div class="dsc-search">
	<div class="form">
		<form id="searchForm" name="searchForm" method="get" action="search.php" onsubmit="return checkSearchForm()" class="search-form">
		    <input autocomplete="off" onkeyup="lookup(this.value);" name="keywords" id="keyword" value="<?php echo $configs['search_value']; ?>" class="search-text" type="text">
		    <input name="store_search_cmt" value="0" type="hidden">
		    <button type="submit" class="button button-goods" onclick="checkstore_search_cmt(0)">搜商品</button>

			<!-- cart_list -->
		    <button type="submit" class="button button-icon"><i></i></button>

		</form>
		<ul class="keyword">
			<?php 
				$arr=explode(',',$configs['search_keywords']);
				foreach($arr as $k => $v):?>
			<li><a href="#"><?php echo $v;?></a></li>
			<?php endforeach;?>
		</ul>
		<div class="suggestions_box" id="suggestions" style="display:none;">
		    <div class="suggestions_list" id="auto_suggestions_list">
		        &nbsp;
		    </div>
		</div>
	</div>
</div>


<div class="shopCart" data-ectype="dorpdown" id="ECS_CARTINFO" data-carteveval="0">
	<div class="shopCart-con dsc-cm">
		<a href="#">
			<i class="iconfont icon-carts"></i>
			<span>我的购物车</span>
			<em class="count cart_num">0</em>
		</a>
	</div>
	<div class="dorpdown-layer" ectype="dorpdownLayer">
        <div class="prompt"><div class="nogoods"><b></b><span>购物车中还没有商品，赶紧选购吧！</span></div></div>
    </div>

	<script type="text/javascript">
		//ajax异步获取顶级分类下的子分类、品牌、频道等相关信息在右侧菜单显示
		var ajaxShopcateurl = "<?php echo url('shopcate/getShopcateinfo'); ?>";
		// 加载中图片路径
		var imgLoad = "/static/index/img/loadGoods.gif";
		
	</script>        
</div>

<!-- login -->
<div class="header-href">
    <span>还没有账号<a href="#" class="jump">免费注册</a></span>
</div>

<script type="text/javascript">
$(function(){
	var dataType = $('body').data('type');
	var indexType = 'index1', loginType = 'login1', cartList = 'cart_list1';
	if(dataType === indexType){
		$('body').addClass('catetop-cloth');
		$('.header-href').remove();
		$('.logo-span').remove();
		$('.tit').remove();
		$('.button-icon').remove();
	}else if(dataType === loginType){
		$('.logoImg a img').attr('src','/static/index/img/user_login_logo.png')
		$('.dsc-search').remove();
		$('.shopCart').remove();
		$('.tit').remove();
	}else if(dataType === cartList){
		$('.button-goods').remove();
		$('.shopCart').remove();
		$('.header-href').remove();
		$('.keyword').remove();
		$('.logo-span').remove();
	}else{
		$('.tit').remove();
		$('.header-href').remove();
		$('.button-icon').remove();
	}
})
</script>
    </div>
</div>

<div class="nav" ectype="dscNav">
    <div class="w w1200">
        <div class="categorys <?php if(!isset($show)) {echo 'site-mast';}  ?>">
    <div class="categorys-type"><a href="#" target="_blank">全部商品分类</a></div>
    <div class="categorys-tab-content">
    	<div class="categorys-items" id="cata-nav">
    		<?php if(is_array($shopcateRes) || $shopcateRes instanceof \think\Collection || $shopcateRes instanceof \think\Paginator): $i = 0; $__LIST__ = $shopcateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shopcate): $mod = ($i % 2 );++$i;?>
            <div class="categorys-item" ectype="cateItem" data-id="<?php echo $shopcate['shopcate_id']; ?>" data-eveval="0">
		        <div class="item item-content">
		    		<i class="iconfont icon-ele"></i>
		    		<div class="categorys-title">
		                <strong><a href="#" target="_blank"><?php echo $shopcate['shopcate_name']; ?></a></strong>
		            	<span>
		            		<?php if(is_array($shopcate['children']) || $shopcate['children'] instanceof \think\Collection || $shopcate['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $shopcate['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son_shopcate): $mod = ($i % 2 );++$i;if($i < 3): ?>
		            		<a href="#" target="_blank"><?php echo $son_shopcate['shopcate_name']; ?></a>
		            		<?php endif; endforeach; endif; else: echo "" ;endif; ?>
		            	</span>
		            </div>
		        </div>
		        <div class="categorys-items-layer" ectype="cateLayer">
		        	<div class="cate-layer-con clearfix">
		        		<div class="cate-layer-left">
		        			<div class="cate_channel" ectype="channels_<?php echo $shopcate['shopcate_id']; ?>"></div>
		        			<div class="cate_detail" ectype="subitems_<?php echo $shopcate['shopcate_id']; ?>"></div>
		        		</div>
		        		<div class="cate-layer-rihgt" ectype="brands_<?php echo $shopcate['shopcate_id']; ?>"></div>
		        	</div>
		        </div>
		        <div class="clear"></div>
		    </div>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
</div>
<div class="nav-main">
	<ul class="navitems">
        <li><a href="<?php echo url('index/Index/index'); ?>" class="curr">首页</a></li>
        <?php if(is_array($navRes['mid']) || $navRes['mid'] instanceof \think\Collection || $navRes['mid'] instanceof \think\Paginator): $i = 0; $__LIST__ = $navRes['mid'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav_mid): $mod = ($i % 2 );++$i;?>
        <li><a <?php if($nav_mid['nav_open'] == 1): ?> target="_black" <?php endif; ?> href="<?php echo $nav_mid['nav_url']; ?>"><?php echo $nav_mid['nav_name']; ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
    </div>
</div>
        
<div class="homeindex" ectype="homeWrap">
    <div class="content" style="min-height: 886px;">
        <div class="visual-item" data-mode="lunbo" data-purebox="banner" data-li="1" data-length="5" ectype="visualItme" style="display: block;" data-diff="0">
    <div class="view">
        <div class="banner home-banner">
            <div class="bd">
                <ul data-type="range" data-slide="fold" style="position: relative; width: 1903px; height: 500px;">
                    <li style="background-image: url(&quot;https://demo.dscmall.cn/data/gallery_album/1/original_img/1536773209297708549.jpg&quot;); background-position: center center; background-repeat: no-repeat; position: absolute; width: 1903px; left: 0px; top: 0px; display: none;">
                        <div class="banner-width">
                            <a href="" target="_blank" style="height:500px;"></a>
                        </div>
                    </li>
                    <li style="background-image: url(&quot;https://demo.dscmall.cn/data/gallery_album/2/original_img/1494984992503176615.jpg&quot;); background-position: center center; background-repeat: no-repeat; position: absolute; width: 1903px; left: 0px; top: 0px; display: none;">
                        <div class="banner-width">
                            <a href="" target="_blank" style="height:500px;"></a>
                        </div>
                    </li>
                    <li style="background-image: url(&quot;https://demo.dscmall.cn/data/gallery_album/2/original_img/1494984991783527346.jpg&quot;); background-position: center center; background-repeat: no-repeat; position: absolute; width: 1903px; left: 0px; top: 0px;">
                        <div class="banner-width">
                            <a href="" target="_blank" style="height:500px;"></a>
                        </div>
                    </li>
                </ul>
                <div class="spec" data-spec=""></div>
            </div>
            <div class="hd"><ul><li class="">1</li>
                <li class="">2</li>
                <li class="on">3</li>
            </ul>
        </div>
        <div class="vip-outcon">
            <div class="vip-con">
                <div class="insertVipEdit" data-mode="insertVipEdit">
                    <div ectype="user_info">
                        <div class="avatar">
                            <a href="https://demo.dscmall.cn/user.php?act=profile">
                                <img src="/static/index/css/avatar.png">
                            </a>
                        </div>
                        <div class="login-info">
                            <span>Hi，欢迎来到大商创!</span>
                            <a href="https://demo.dscmall.cn/user.php" class="login-button">请登录</a>
                            <a href="https://demo.dscmall.cn/merchants.php" target="_blank" class="register_button">我要开店</a>
                        </div>
                        <input type="hidden" name="user_id" ectype="user_id" value="0">
                    </div>
                    <div class="vip-item">
                        <div class="tit">
                            <a href="javascript:void(0);" class="tab_head_item">公告</a>
                            <a href="javascript:void(0);" class="tab_head_item">促销</a>
                        </div>
                        <div class="con">
                            <ul>
                                <li><a href="https://demo.dscmall.cn/article.php?id=63" target="_blank">服务店突破2000多家</a></li>
                                <li><a href="https://demo.dscmall.cn/article.php?id=62" target="_blank">我们成为中国最大家电零售B2B2C系统</a></li>
                                <li><a href="https://demo.dscmall.cn/article.php?id=61" target="_blank">三大国际腕表品牌签约</a></li>
                            </ul>
                            <ul style="display:none;">
                                <li><a href="https://demo.dscmall.cn/article.php?id=60" target="_blank">春季家装季，家电买一送一</a></li>
                                <li><a href="https://demo.dscmall.cn/article.php?id=59" target="_blank">抢百元优惠券，享4.22%活期</a></li>
                                <li><a href="https://demo.dscmall.cn/article.php?id=58" target="_blank">Macbook最高返50000消费豆！</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="vip-item">
                        <div class="tit">快捷入口</div>
                        <div class="kj_con">
                            <div class="item item_1">
                                <a href="https://demo.dscmall.cn/history_list.php" target="_blank">
                                    <i class="iconfont icon-browse"></i>
                                    <span>我的浏览</span>
                                </a>
                            </div>
                            <div class="item item_2">
                                <a href="https://demo.dscmall.cn/user.php?act=collection_list" target="_blank">
                                    <i class="iconfont icon-zan-alt"></i>
                                    <span>我的收藏</span>
                                </a>
                            </div>
                            <div class="item item_3">
                                <a href="https://demo.dscmall.cn/user.php?act=order_list" target="_blank">
                                    <i class="iconfont icon-order"></i>
                                    <span>我的订单</span>
                                </a>
                            </div>
                            <div class="item item_4">
                                <a href="https://demo.dscmall.cn/user.php?act=account_safe" target="_blank">
                                    <i class="iconfont icon-password-alt"></i>
                                    <span>账号安全</span>
                                </a>
                            </div>
                            <div class="item item_5">
                                <a href="https://demo.dscmall.cn/user.php?act=affiliate" target="_blank">
                                    <i class="iconfont icon-share-alt"></i>
                                    <span>我要分享</span>
                                </a>
                            </div>
                            <div class="item item_6">
                                <a href="https://demo.dscmall.cn/merchants.php" target="_blank">
                                    <i class="iconfont icon-settled"></i>
                                    <span>商家入驻</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="spec" data-spec=""></div>
            </div>
        </div>
    </div>
</div>
    </div>


    <div class="visual-item w1200" data-mode="h-need" data-purebox="homeAdv" data-li="1" ectype="visualItme" data-diff="0" style="display: block;">
        <div class="view">
            <div class="need-channel clearfix" id="h-need_0" data-type="range" data-lift="推荐">
                <div class="channel-column" style="background:url(https://demo.dscmall.cn/data/gallery_album/2/original_img/1494984987302153402.jpg) no-repeat;">
    <div class="column-title">
            <h3 style="color: #ffffff">优质新品</h3>
        <p style="color: #ffffff">专注生活美学</p>
    </div>
    <div class="column-img"><img src="/static/index/img/1494985002375136884.png"></div>
    <a href="" target="_blank" class="column-btn">去看看</a>
</div>
<div class="channel-column" style="background:url(https://demo.dscmall.cn/data/gallery_album/2/original_img/1494984989930757668.jpg) no-repeat;">
    <div class="column-title">
            <h3 style="color: #ffffff">潮流女装</h3>
        <p style="color: #ffffff">春装流行款抢购</p>
    </div>
    <div class="column-img"><img src="/static/index/img/1494984989766362152.png"></div>
    <a href="" target="_blank" class="column-btn">去看看</a>
</div>
<div class="channel-column" style="background:url(https://demo.dscmall.cn/data/gallery_album/2/original_img/1494984989391013089.jpg) no-repeat;">
    <div class="column-title">
            <h3 style="color: #ffffff">人气美鞋</h3>
        <p style="color: #ffffff">新外貌“鞋”会</p>
    </div>
    <div class="column-img"><img src="/static/index/img/1494984990383161028.png"></div>
    <a href="" target="_blank" class="column-btn">去看看</a>
</div>
<div class="channel-column" style="background:url(https://demo.dscmall.cn/data/gallery_album/2/original_img/1494984987606903394.jpg) no-repeat;">
    <div class="column-title">
            <h3 style="color: #ffffff">品牌精选</h3>
        <p style="color: #ffffff">潮牌尖货 初春换新</p>
    </div>
    <div class="column-img"><img src="/static/index/img/1494984988032635434.png"></div>
    <a href="" target="_blank" class="column-btn">去看看</a>
</div>
<div class="channel-column" style="background:url(https://demo.dscmall.cn/data/gallery_album/2/original_img/1494984990175755536.jpg) no-repeat;">
    <div class="column-title">
            <h3 style="color: #ffffff">护肤彩妆</h3>
        <p style="color: #ffffff">春妆必买清单 低至3折</p>
    </div>
    <div class="column-img"><img src="/static/index/img/1494984991251825734.png"></div>
    <a href="" target="_blank" class="column-btn">去看看</a>
</div>
<div class="spec" data-spec="" data-title=""></div></div>
                                    </div>
                                </div><div class="visual-item w1200 brandList" data-mode="h-brand" data-purebox="homeAdv" data-li="1" ectype="visualItme" data-diff="0" style="display: block;">
                                    
                                    <div class="view">
                                        <div class="brand-channel clearfix" id="h-brand_0" data-type="range" data-lift="品牌">
 
<div class="home-brand-adv slide_lr_info">
        <a href="" target="_blank"><img src="/static/index/img/1494984992104112514.jpg" class="slide_lr_img"></a>
    </div>
<div ectype="homeBrand"><div class="brand-list" id="recommend_brands">
	<ul>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=204" target="_blank"><img src="/static/index/img/1490039286075654490.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=204" target="_blank">关注人数<br><div id="collect_count_204">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=93" target="_blank"><img src="/static/index/img/1490072850306019115.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="93" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=93" target="_blank">关注人数<br><div id="collect_count_93">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=73" target="_blank"><img src="/static/index/img/1490072329183966195.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="73" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=73" target="_blank">关注人数<br><div id="collect_count_73">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=76" target="_blank"><img src="/static/index/img/1490072373278367315.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="76" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=76" target="_blank">关注人数<br><div id="collect_count_76">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=79" target="_blank"><img src="/static/index/img/1490072677495061584.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="79" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=79" target="_blank">关注人数<br><div id="collect_count_79">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=82" target="_blank"><img src="/static/index/img/1490072694695600078.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="82" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=82" target="_blank">关注人数<br><div id="collect_count_82">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=85" target="_blank"><img src="/static/index/img/1490072756032175204.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="85" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=85" target="_blank">关注人数<br><div id="collect_count_85">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=95" target="_blank"><img src="/static/index/img/1490072870537181142.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="95" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=95" target="_blank">关注人数<br><div id="collect_count_95">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=98" target="_blank"><img src="/static/index/img/1490072898345358625.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="98" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=98" target="_blank">关注人数<br><div id="collect_count_98">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=101" target="_blank"><img src="/static/index/img/1490072931218635674.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="101" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=101" target="_blank">关注人数<br><div id="collect_count_101">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=105" target="_blank"><img src="/static/index/img/1490072971610241726.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="105" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=105" target="_blank">关注人数<br><div id="collect_count_105">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=110" target="_blank"><img src="/static/index/img/1490074043963552715.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="110" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=110" target="_blank">关注人数<br><div id="collect_count_110">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=113" target="_blank"><img src="/static/index/img/1490074030328949587.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="113" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=113" target="_blank">关注人数<br><div id="collect_count_113">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=116" target="_blank"><img src="/static/index/img/1490073109529817869.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="116" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=116" target="_blank">关注人数<br><div id="collect_count_116">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=122" target="_blank"><img src="/static/index/img/1490073982547710498.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="122" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=122" target="_blank">关注人数<br><div id="collect_count_122">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=126" target="_blank"><img src="/static/index/img/1490073943918274561.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="126" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=126" target="_blank">关注人数<br><div id="collect_count_126">0</div></a></div>
			</div>
		</li>
				<li>
			<div class="brand-img"><a href="https://demo.dscmall.cn/brandn.php?id=195" target="_blank"><img src="/static/index/img/1490075385239594909.jpg"></a></div>
			<div class="brand-mash">
				<div data-bid="195" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>
				<div class="coupon"><a href="https://demo.dscmall.cn/brandn.php?id=195" target="_blank">关注人数<br><div id="collect_count_195">0</div></a></div>
			</div>
		</li>
			</ul>
	<input type="hidden" name="user_id" value="0">
	<a href="javascript:void(0);" ectype="changeBrand" class="refresh-btn"><i class="iconfont icon-rotate-alt"></i><span>换一批</span></a>
</div>
</div>
<div class="spec" data-spec="" data-title="undefined"></div></div>
                                    </div>
                                </div><div class="visual-item w1200" data-mode="homeFloor" data-purebox="homeFloor" data-li="1" ectype="visualItme" data-diff="0" style="display: block;">
                                    
                                    <div class="view">
                                        <div class="floor-content" data-type="range" id="homeFloor_0" data-lift="女装">
 
<div class="floor-line-con floorOne floor-color-type-1" data-title="男装女装" data-idx="1" id="floor_1" ectype="floorItem">
    <div class="floor-hd" ectype="floorTit">
    	<i class="box_hd_arrow"></i>
    	<i class="box_hd_dec"></i>
        <div class="hd-tit">男装、女装、内衣</div>
        <div class="hd-tags">
            <ul>
                <li class="first current">
                    <span>新品推荐</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="347">
                    <span>女装</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="630">
                    <span>服饰配件</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="547">
                    <span>内衣</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="463">
                    <span>男装</span>
                    <i class="arrowImg"></i>
                </li>
                                                            </ul>
        </div>
    </div>
    <div class="floor-bd bd-mode-01">
        <div class="bd-left">
                        <div class="floor-left-slide">
                <div class="bd">
                    <div class="tempWrap" style="overflow:hidden; position:relative; width:232px"><ul style="width: 696px; left: -232px; position: relative; overflow: hidden; padding: 0px; margin: 0px;">
                                                                        <li style="float: left; width: 232px;"><a href=""><img src="/static/index/img/1494985255003388359.jpg"></a></li>
                                                                                                <li style="float: left; width: 232px;"><a href=""><img src="/static/index/img/1494985255671031591.jpg"></a></li>
                                                                                                <li style="float: left; width: 232px;"><a href=""><img src="/static/index/img/1494985255859372374.jpg"></a></li>
                                                                    </ul></div>
                </div>
                <div class="hd"><ul><li class="">1</li><li class="on">2</li><li class="">3</li></ul></div>
            </div>
                        
            <div class="floor-left-adv">
                                                <a href="" target="_blank"><img src="/static/index/img/1494984993812175408.jpg"></a>
                                                                <a href="" target="_blank"><img src="/static/index/img/1494984993892207941.jpg"></a>
                                            </div>
            
                    </div>
        <div class="bd-right">
            <div class="floor-tabs-content clearfix">
                <div class="f-r-main f-r-m-adv">
                                        <div class="f-r-m-item
                                        	                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>毛衣</h3>
                                <span>满100减10</span>
                            </div>
                            <img src="/static/index/img/1494984997173604814.jpg">
                        </a>
                    </div>
                                        <div class="f-r-m-item
                                        	                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>随意搭</h3>
                                <span>来潮我看</span>
                            </div>
                            <img src="/static/index/img/1494985255611006354.png">
                        </a>
                    </div>
                                        <div class="f-r-m-item
                                        	                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>外套</h3>
                                <span>大牌抢好货</span>
                            </div>
                            <img src="/static/index/img/1494985257076782520.png">
                        </a>
                    </div>
                                        <div class="f-r-m-item
                                        	                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>连衣裙</h3>
                                <span>春季流行款抢购</span>
                            </div>
                            <img src="/static/index/img/1494985261416235695.jpg">
                        </a>
                    </div>
                                        <div class="f-r-m-item
                                        	 f-r-m-i-double                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>女士套装</h3>
                                <span>新品低至5折</span>
                            </div>
                            <img src="/static/index/img/1494984998972685382.jpg">
                        </a>
                    </div>
                                    </div>
                                <div class="f-r-main" ectype="floor_cat_347" style="display: none;">
                    <ul class="p-list"></ul>
                </div>
                                <div class="f-r-main" ectype="floor_cat_630" style="display: none;">
                    <ul class="p-list"></ul>
                </div>
                                <div class="f-r-main" ectype="floor_cat_547" style="display: none;">
                    <ul class="p-list"></ul>
                </div>
                                <div class="f-r-main" ectype="floor_cat_463" style="display: none;">
                    <ul class="p-list"></ul>
                </div>
                            </div>
        </div>
    </div>
        <div class="floor-fd">
        <div class="floor-fd-brand clearfix">
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=72" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490072313895957648.jpg" title="ELLE HOME"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=76" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490072373278367315.jpg" title="金利来"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=79" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490072677495061584.jpg" title="justyle"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=82" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490072694695600078.jpg" title="李宁"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=86" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490072765604121481.jpg" title="康比特"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=106" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490072981305868823.jpg" title="开普特"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=122" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073982547710498.jpg" title="Five Plus"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=149" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073591535005714.jpg" title="鸿星尔克"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=152" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490228100138579787.jpg" title="杰克琼斯"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=154" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073529881448780.jpg" title="匡威"></div>
                    <div class="link"></div>
                </a>
            </div>
                    </div>
    </div>
    </div>
<div class="spec" data-spec="" data-title="undefined"></div></div>
                                    </div>
                                </div><div class="visual-item w1200" data-mode="homeFloor" data-purebox="homeFloor" data-li="1" ectype="visualItme" data-diff="1" style="display: block; position: relative; opacity: 1; z-index: 0; left: 0px; top: 0px;">
                                    
                                    <div class="view">
                                        <div class="floor-content" data-type="range" id="homeFloor_1" data-lift="鞋靴">
 
<div class="floor-line-con floorOne floor-color-type-2" data-title="鞋靴箱包" data-idx="1" id="floor_2" ectype="floorItem">
    <div class="floor-hd" ectype="floorTit">
    	<i class="box_hd_arrow"></i>
    	<i class="box_hd_dec"></i>
        <div class="hd-tit">鞋靴、箱包、钟表、奢侈品</div>
        <div class="hd-tags">
            <ul>
                <li class="first current">
                    <span>新品推荐</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="360">
                    <span>功能箱包</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="355">
                    <span>流行男鞋</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="362">
                    <span>奢侈品</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="353">
                    <span>时尚女鞋</span>
                    <i class="arrowImg"></i>
                </li>
                                                            </ul>
        </div>
    </div>
    <div class="floor-bd bd-mode-02">
        <div class="bd-left">
                        <div class="floor-left-slide">
                <div class="bd">
                    <div class="tempWrap" style="overflow:hidden; position:relative; width:474px"><ul style="width: 1422px; left: -474px; position: relative; overflow: hidden; padding: 0px; margin: 0px;">
                                                                        <li style="float: left; width: 474px;"><a href=""><img src="/static/index/img/1494984993525657918.jpg"></a></li>
                                                                                                <li style="float: left; width: 474px;"><a href=""><img src="/static/index/img/1494985258163076122.jpg"></a></li>
                                                                                                <li style="float: left; width: 474px;"><a href=""><img src="/static/index/img/1494985258841930385.jpg"></a></li>
                                                                    </ul></div>
                </div>
                <div class="hd"><ul><li class="">1</li><li class="on">2</li><li class="">3</li></ul></div>
            </div>
                        
            <div class="floor-left-adv">
                                                <a href="" target="_blank"><img src="/static/index/img/1494984994714366758.jpg"></a>
                                                                <a href="" target="_blank"><img src="/static/index/img/1494984994759822929.jpg"></a>
                                            </div>
            
                    </div>
        <div class="bd-right">
            <div class="floor-tabs-content clearfix">
                <div class="f-r-main f-r-m-adv">
                                        <div class="f-r-m-item
                                        	 f-r-m-i-double                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>商务出差必备</h3>
                                <span>磨砂登机箱</span>
                            </div>
                            <img src="/static/index/img/1494985264048620039.jpg">
                        </a>
                    </div>
                                        <div class="f-r-m-item
                                        	                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>防水斜挎包</h3>
                                <span>商城自营，闪电发货</span>
                            </div>
                            <img src="/static/index/img/1494985259325736762.jpg">
                        </a>
                    </div>
                                        <div class="f-r-m-item
                                        	                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>欧时纳女包</h3>
                                <span>跨万店三免一</span>
                            </div>
                            <img src="/static/index/img/1494985254984045600.png">
                        </a>
                    </div>
                                        <div class="f-r-m-item
                                        	                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>大牌精选</h3>
                                <span>满199减100</span>
                            </div>
                            <img src="/static/index/img/1494985261810426955.jpg">
                        </a>
                    </div>
                                        <div class="f-r-m-item
                                        	                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>纪梵希</h3>
                                <span>大牌上新</span>
                            </div>
                            <img src="/static/index/img/1495042209788792159.jpg">
                        </a>
                    </div>
                                    </div>
                                <div class="f-r-main" ectype="floor_cat_360" style="display: none;">
                    <ul class="p-list"></ul>
                </div>
                                <div class="f-r-main" ectype="floor_cat_355" style="display: none;">
                    <ul class="p-list"></ul>
                </div>
                                <div class="f-r-main" ectype="floor_cat_362" style="display: none;">
                    <ul class="p-list"></ul>
                </div>
                                <div class="f-r-main" ectype="floor_cat_353" style="display: none;">
                    <ul class="p-list"></ul>
                </div>
                            </div>
        </div>
    </div>
        <div class="floor-fd">
        <div class="floor-fd-brand clearfix">
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=93" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490072850306019115.jpg" title="同庆和堂"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=115" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490074006660107941.jpg" title="西门子"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=130" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490074180745676140.jpg" title="TP-LINL"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=131" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073919711003101.jpg" title="ZIPPO"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=132" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073900838296364.jpg" title="阿玛尼"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=138" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073717776504773.jpg" title="迪士尼"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=139" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073705755280994.jpg" title="飞科"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=154" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073529881448780.jpg" title="匡威"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=178" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073253749057076.jpg" title="文轩网"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=186" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490074308773778697.jpg" title="新百伦"></div>
                    <div class="link"></div>
                </a>
            </div>
                    </div>
    </div>
    </div>
<div class="spec" data-spec="" data-title="undefined"></div></div>
                                    </div>
                                </div><div class="visual-item w1200" data-mode="homeFloor" data-purebox="homeFloor" data-li="1" ectype="visualItme" data-diff="2" style="display: block;">
                                    
                                    <div class="view">
                                        <div class="floor-content" data-type="range" id="homeFloor_2" data-lift="食品">
 
<div class="floor-line-con floorOne floor-color-type-3" data-title="食品酒水" data-idx="1" id="floor_3" ectype="floorItem">
    <div class="floor-hd" ectype="floorTit">
    	<i class="box_hd_arrow"></i>
    	<i class="box_hd_dec"></i>
        <div class="hd-tit">食品、酒类、生鲜、特产</div>
        <div class="hd-tags">
            <ul>
                <li class="first current">
                    <span>新品推荐</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="616">
                    <span>进口食品</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="623">
                    <span>生鲜食品</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="615">
                    <span>中外名酒</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="622">
                    <span>粮油调味</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="617">
                    <span>休闲食品</span>
                    <i class="arrowImg"></i>
                </li>
                                                            </ul>
        </div>
    </div>
    <div class="floor-bd bd-mode-03">
        <div class="bd-left">
                        
            <div class="floor-left-adv">
                                                <a href="" target="_blank"><img src="/static/index/img/1494984995376315298.jpg"></a>
                                                                <a href="" target="_blank"><img src="/static/index/img/1494984995451465490.jpg"></a>
                                            </div>
            
                    </div>
        <div class="bd-right">
            <div class="floor-tabs-content clearfix">
                <div class="f-r-main f-r-m-adv">
                                        <div class="f-r-m-item
                                        	                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>李锦记</h3>
                                <span>商城自营好物低价</span>
                            </div>
                            <img src="/static/index/img/1494985253313357913.jpg">
                        </a>
                    </div>
                                        <div class="f-r-m-item
                                        	 f-r-m-i-double                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>金锣火腿肠</h3>
                                <span>方便食品</span>
                            </div>
                            <img src="/static/index/img/1494985009349965302.jpg">
                        </a>
                    </div>
                                        <div class="f-r-m-item
                                        	                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>酸辣牛肉味五连包</h3>
                                <span>五件包39.9选14</span>
                            </div>
                            <img src="/static/index/img/1494985008433437711.jpg">
                        </a>
                    </div>
                                        <div class="f-r-m-item
                                        	                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>香茉莉香米</h3>
                                <span>满76香米1KG</span>
                            </div>
                            <img src="/static/index/img/1494985262035088187.jpg">
                        </a>
                    </div>
                                        <div class="f-r-m-item
                                        	                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>魔力紫</h3>
                                <span>尽享休闲时光</span>
                            </div>
                            <img src="/static/index/img/1494985264023870581.jpg">
                        </a>
                    </div>
                                    </div>
                                <div class="f-r-main" ectype="floor_cat_616" style="display: none;">
                    <ul class="p-list"></ul>
                </div>
                                <div class="f-r-main" ectype="floor_cat_623" style="display: none;">
                    <ul class="p-list"></ul>
                </div>
                                <div class="f-r-main" ectype="floor_cat_615" style="display: none;">
                    <ul class="p-list"></ul>
                </div>
                                <div class="f-r-main" ectype="floor_cat_622" style="display: none;">
                    <ul class="p-list"></ul>
                </div>
                                <div class="f-r-main" ectype="floor_cat_617" style="display: none;">
                    <ul class="p-list"></ul>
                </div>
                            </div>
        </div>
    </div>
        <div class="floor-fd">
        <div class="floor-fd-brand clearfix">
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=73" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490072329183966195.jpg" title="她他/tata"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=81" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490072685002270742.jpg" title="宝姿"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=83" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490072728394097278.jpg" title="白兰氏"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=102" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490072941526335126.jpg" title="欧亚马"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=107" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490072993409028193.jpg" title="三星"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=117" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073123533047769.jpg" title="阿尔卡特"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=130" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490074180745676140.jpg" title="TP-LINL"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=136" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490227517695746097.jpg" title="博时基金"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=137" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073731822160672.jpg" title="达利园"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=141" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490074990110164877.jpg" title="钙尔奇"></div>
                    <div class="link"></div>
                </a>
            </div>
                    </div>
    </div>
    </div>
<div class="spec" data-spec="" data-title="undefined"></div></div>
                                    </div>
                                </div><div class="visual-item w1200" data-mode="homeFloor" data-purebox="homeFloor" data-li="1" ectype="visualItme" data-diff="3" style="display: block;">
                                    
                                    <div class="view">
                                        <div class="floor-content" data-type="range" id="homeFloor_3" data-lift="家用">
 
<div class="floor-line-con floorOne floor-color-type-4" data-title="家用电器" data-idx="1" id="floor_4" ectype="floorItem">
    <div class="floor-hd" ectype="floorTit">
    	<i class="box_hd_arrow"></i>
    	<i class="box_hd_dec"></i>
        <div class="hd-tit">家用电器</div>
        <div class="hd-tags">
            <ul>
                <li class="first current">
                    <span>新品推荐</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="1115">
                    <span>生活电器</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="1129">
                    <span>厨房电器</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="1145">
                    <span>个护健康</span>
                    <i class="arrowImg"></i>
                </li>
                                                                <li data-catgoods="" class="first" ectype="floor_cat_content" data-flooreveval="0" data-visualhome="1" data-floornum="6" data-id="1160">
                    <span>五金家装</span>
                    <i class="arrowImg"></i>
                </li>
                                                            </ul>
        </div>
    </div>
    <div class="floor-bd bd-mode-04">
        <div class="bd-left">
                        
            <div class="floor-left-adv">
                                                <a href="" target="_blank"><img src="/static/index/img/1494985252213529452.jpg"></a>
                                                                <a href="" target="_blank"><img src="/static/index/img/1494985263907218565.jpg"></a>
                                            </div>
            
                        <div class="floor-left-slide">
                <div class="bd">
                    <div class="tempWrap" style="overflow:hidden; position:relative; width:474px"><ul style="width: 1422px; left: -474px; position: relative; overflow: hidden; padding: 0px; margin: 0px;">
                                                <li style="float: left; width: 474px;"><a href=""><img src="/static/index/img/1494985258768732496.jpg"></a></li>
                                                <li style="float: left; width: 474px;"><a href=""><img src="/static/index/img/1494985266144681478.png"></a></li>
                                                <li style="float: left; width: 474px;"><a href=""><img src="/static/index/img/1494985266980557091.png"></a></li>
                                            </ul></div>
                </div>
                <div class="hd"><ul><li class="">1</li><li class="on">2</li><li class="">3</li></ul></div>
            </div>
                    </div>
        <div class="bd-right">
            <div class="floor-tabs-content clearfix">
                <div class="f-r-main f-r-m-adv">
                                        <div class="f-r-m-item
                                        	                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>海信55英寸</h3>
                                <span>买既得无线鼠标一个</span>
                            </div>
                            <img src="/static/index/img/1494985010017482916.jpg">
                        </a>
                    </div>
                                        <div class="f-r-m-item
                                        	                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>欧景除湿器</h3>
                                <span>洗化干衣一体</span>
                            </div>
                            <img src="/static/index/img/1494985252050215807.jpg">
                        </a>
                    </div>
                                        <div class="f-r-m-item
                                        	                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>智能音箱</h3>
                                <span>满100减19</span>
                            </div>
                            <img src="/static/index/img/1494985253347581677.JPG">
                        </a>
                    </div>
                                        <div class="f-r-m-item
                                        	 f-r-m-i-double                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>美的电饭煲</h3>
                                <span>给力“实”惠</span>
                            </div>
                            <img src="/static/index/img/1494985267962226313.JPG">
                        </a>
                    </div>
                                        <div class="f-r-m-item
                                        	                    ">
                        <a href="" target="_blank">
                            <div class="title">
                                <h3>极客系列</h3>
                                <span>定金100减300</span>
                            </div>
                            <img src="/static/index/img/1494985260469428998.jpg">
                        </a>
                    </div>
                                    </div>
                                <div class="f-r-main" ectype="floor_cat_1115" style="display: none;">
                    <ul class="p-list"></ul>
                </div>
                                <div class="f-r-main" ectype="floor_cat_1129" style="display: none;">
                    <ul class="p-list"></ul>
                </div>
                                <div class="f-r-main" ectype="floor_cat_1145" style="display: none;">
                    <ul class="p-list"></ul>
                </div>
                                <div class="f-r-main" ectype="floor_cat_1160" style="display: none;">
                    <ul class="p-list"></ul>
                </div>
                            </div>
        </div>
    </div>
        <div class="floor-fd">
        <div class="floor-fd-brand clearfix">
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=72" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490072313895957648.jpg" title="ELLE HOME"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=73" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490072329183966195.jpg" title="她他/tata"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=109" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490074056964147533.jpg" title="诺基亚"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=110" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490074043963552715.jpg" title="松下电器"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=115" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490074006660107941.jpg" title="西门子"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=125" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073960166035363.jpg" title="华为"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=130" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490074180745676140.jpg" title="TP-LINL"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=139" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073705755280994.jpg" title="飞科"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=148" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073603108687350.jpg" title="宏基"></div>
                    <div class="link"></div>
                </a>
            </div>
                        <div class="item">
                <a href="https://demo.dscmall.cn/brandn.php?id=150" target="_blank">
                    <div class="link-l"></div>
                    <div class="img"><img src="/static/index/img/1490073577683159021.jpg" title="华帝"></div>
                    <div class="link"></div>
                </a>
            </div>
                    </div>
    </div>
    </div>
<div class="spec" data-spec="" data-title="undefined"></div></div>
                                    </div>
                                </div><div class="visual-item w1200" data-mode="h-master" data-purebox="homeAdv" data-li="1" ectype="visualItme" data-diff="0" style="display: block;">
                                    
                                    <div class="view">
                                        <div class="master-channel" id="h-master_0" data-type="range" data-lift="达人">
 
<div class="ftit"><h3>达人</h3></div>
<div class="master-con">
            <div class="m-c-item m-c-i-1" style="background:url(https://demo.dscmall.cn/data/gallery_album/2/original_img/1494985006295599886.jpg) center center no-repeat;">
        <div class="m-c-main">
            <div class="title">
                <h3>纯棉质品</h3>
                <span>把好货带回家</span>
            </div>
            <a href="" class="m-c-btn" target="_blank">去见识</a>
        </div>
        <div class="img"><a href="" target="_blank"><img src="/static/index/img/1494985002918483191.png"></a></div>
    </div>
                <div class="m-c-item m-c-i-2" style="background:url(https://demo.dscmall.cn/data/gallery_album/2/original_img/1494985006392060862.jpg) center center no-repeat;">
        <div class="m-c-main">
            <div class="title">
                <h3>团购热卖</h3>
                <span>每一款都是好货</span>
            </div>
            <a href="" class="m-c-btn" target="_blank">去见识</a>
        </div>
        <div class="img"><a href="" target="_blank"><img src="/static/index/img/1494985002435254172.png"></a></div>
    </div>
                <div class="m-c-item m-c-i-3" style="background:url(https://demo.dscmall.cn/data/gallery_album/2/original_img/1494985006452127966.jpg) center center no-repeat;">
        <div class="m-c-main">
            <div class="title">
                <h3>团购热卖</h3>
                <span>都是好货</span>
            </div>
            <a href="" class="m-c-btn" target="_blank">去见识</a>
        </div>
        <div class="img"><a href="" target="_blank"><img src="/static/index/img/1494985003577610926.png"></a></div>
    </div>
                <div class="m-c-item m-c-i-4" style="background:url(https://demo.dscmall.cn/data/gallery_album/2/original_img/1494985006427221958.jpg) center center no-repeat;">
        <div class="m-c-main">
            <div class="title">
                <h3>舒适童鞋</h3>
                <span>帮宝宝学走路</span>
            </div>
            <a href="" class="m-c-btn" target="_blank">去见识</a>
        </div>
        <div class="img"><a href="" target="_blank"><img src="/static/index/img/1494985003958834850.png"></a></div>
    </div>
                <div class="m-c-item m-c-i-5" style="background:url(https://demo.dscmall.cn/data/gallery_album/2/original_img/1494985005357290375.jpg) center center no-repeat;">
        <div class="m-c-main">
            <div class="title">
                <h3>双十二运动鞋</h3>
                <span>品牌直降</span>
            </div>
            <a href="" class="m-c-btn" target="_blank">去见识</a>
        </div>
        <div class="img"><a href="" target="_blank"><img src="/static/index/img/1494985004056329811.png"></a></div>
    </div>
        </div>
<div class="spec" data-spec="" data-title="达人"></div></div>
                                    </div>
                                </div><div class="visual-item w1200" data-mode="h-storeRec" data-purebox="homeAdv" data-li="1" ectype="visualItme" data-diff="0" style="display: block;">
                                    
                                    <div class="view">
                                        <div class="store-channel" id="h-storeRec_0" data-type="range" data-lift="店铺">
 
<div class="ftit"><h3>店铺</h3></div>
<div class="rec-store-list">
            <div class="rec-store-item opacity_img">
        <a href="" target="_blank">
            <div class="p-img"><img src="/static/index/img/1494985261279846913.png"></div>
            <div class="info">
                <div class="s-logo"><div class="img"><img src="/static/index/img/1494985267980096546.png"></div></div>
                <div class="s-title">
                    <div class="tit">美宝莲</div>
                    <div class="ui-tit">纽约高潮街装</div>
                </div>
            </div>
        </a>
    </div>
                <div class="rec-store-item opacity_img">
        <a href="" target="_blank">
            <div class="p-img"><img src="/static/index/img/1494985257347489575.png"></div>
            <div class="info">
                <div class="s-logo"><div class="img"><img src="/static/index/img/1494985265619204005.png"></div></div>
                <div class="s-title">
                    <div class="tit">三只松鼠</div>
                    <div class="ui-tit">就是这个味</div>
                </div>
            </div>
        </a>
    </div>
                <div class="rec-store-item opacity_img">
        <a href="" target="_blank">
            <div class="p-img"><img src="/static/index/img/1494985254811159847.png"></div>
            <div class="info">
                <div class="s-logo"><div class="img"><img src="/static/index/img/1494985265516324065.png"></div></div>
                <div class="s-title">
                    <div class="tit">绿联旗舰店</div>
                    <div class="ui-tit">给生活多点色彩</div>
                </div>
            </div>
        </a>
    </div>
                <div class="rec-store-item opacity_img">
        <a href="" target="_blank">
            <div class="p-img"><img src="/static/index/img/1494985263326444094.png"></div>
            <div class="info">
                <div class="s-logo"><div class="img"><img src="/static/index/img/1494985267537609679.jpg"></div></div>
                <div class="s-title">
                    <div class="tit">韩都衣舍</div>
                    <div class="ui-tit">满249减50</div>
                </div>
            </div>
        </a>
    </div>
        </div>
<div class="spec" data-spec="" data-title="店铺"></div></div>
                                    </div>
                                </div><div class="visual-item w1200" data-mode="guessYouLike" data-purebox="goods" ectype="visualItme" data-diff="0" style="display: block;">
                                    
                                    <div class="view">
                                        <div class="lift-channel clearfix" id="guessYouLike" data-type="range" data-lift="商品">
                                            <div data-goodstitle="title"><div class="ftit"><h3>还没逛够</h3></div></div>
                                            <ul>
 
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=620" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489098265067.jpg"></div>
        <div class="p-name" title="新品HYC 2k显示器32寸电脑显示器无边框HDMI液晶显示器IPS显示屏 2K高清屏IPS 超薄 厚6mm 无边框">新品HYC 2k显示器32寸电脑显示器无边框HDMI液晶显示器IPS显示屏 2K高清屏IPS 超薄 厚6mm 无边框</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>1500.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=621" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489098360804.jpg"></div>
        <div class="p-name" title="三星C24F396FH曲面显示器23.5英寸电脑显示器24液晶显示屏幕超22">三星C24F396FH曲面显示器23.5英寸电脑显示器24液晶显示屏幕超22</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>2200.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=622" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489098597912.jpg"></div>
        <div class="p-name" title="Apple/苹果 27” Retina 5K显示屏 iMac:3.3GHz处理器2TB存储">Apple/苹果 27” Retina 5K显示屏 iMac:3.3GHz处理器2TB存储</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>8999.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=624" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489099128797.jpg"></div>
        <div class="p-name" title="名龙堂i7 6700升7700 GTX1060 6G台式电脑主机DIY游戏组装整机 升6GB独显 送正版WIN10 一年上门">名龙堂i7 6700升7700 GTX1060 6G台式电脑主机DIY游戏组装整机 升6GB独显 送正版WIN10 一年上门</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>4300.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=625" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489099437211.jpg"></div>
        <div class="p-name" title="秋季新款男士套头卫衣印花外套韩版简约百搭潮流男生上衣服">秋季新款男士套头卫衣印花外套韩版简约百搭潮流男生上衣服</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>120.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=627" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489099773629.jpg"></div>
        <div class="p-name" title="2017春装新款男士卫衣套头圆领韩版潮流时尚男生休闲外套">2017春装新款男士卫衣套头圆领韩版潮流时尚男生休闲外套</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>200.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=633" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489102299856.jpg"></div>
        <div class="p-name" title="新款学院风韩版时尚太空棉宽松长袖印花圆领卫衣女">新款学院风韩版时尚太空棉宽松长袖印花圆领卫衣女</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>233.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=634" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489102753231.jpg"></div>
        <div class="p-name" title="新款韩版chic学生宽松短款外套上衣字母长袖连帽套头卫衣女潮">新款韩版chic学生宽松短款外套上衣字母长袖连帽套头卫衣女潮</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>300.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=635" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489102950633.jpg"></div>
        <div class="p-name" title="韩都衣舍2017韩版女装新款黑白拼接插肩棒球服春季短外套HH5597妠 朴信惠同款 黑白拼接 插肩袖 棒球服">韩都衣舍2017韩版女装新款黑白拼接插肩棒球服春季短外套HH5597妠 朴信惠同款 黑白拼接 插肩袖 棒球服</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>450.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=636" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489103412794.jpg"></div>
        <div class="p-name" title="The Face Shop 水光无瑕气垫CC霜 裸妆隔离保湿补水持久遮瑕强 韩式裸妆 打造水嫩遮瑕 光润亮彩">The Face Shop 水光无瑕气垫CC霜 裸妆隔离保湿补水持久遮瑕强 韩式裸妆 打造水嫩遮瑕 光润亮彩</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>222.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=637" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489103674623.jpg"></div>
        <div class="p-name" title="一叶子补水面膜女保湿控油深层清洁收毛孔护肤面膜贴套装专柜正品 补水保湿 清洁控油">一叶子补水面膜女保湿控油深层清洁收毛孔护肤面膜贴套装专柜正品 补水保湿 清洁控油</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>330.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=638" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489104168209.jpg"></div>
        <div class="p-name" title="美宝莲绝色持久唇膏 粉红警报 魅惑炫亮润泽 唇彩口红">美宝莲绝色持久唇膏 粉红警报 魅惑炫亮润泽 唇彩口红</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>520.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=639" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489104534699.jpg"></div>
        <div class="p-name" title="美宝莲绝色持久唇膏 粉红警报 魅惑炫亮润泽 唇彩口红">美宝莲绝色持久唇膏 粉红警报 魅惑炫亮润泽 唇彩口红</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>300.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=640" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489104621775.jpg"></div>
        <div class="p-name" title="花美时三合一自动旋转双头眉笔眉粉染眉膏画眉持久防水防汗不脱色 防水防汗 持久不晕染 正品包邮">花美时三合一自动旋转双头眉笔眉粉染眉膏画眉持久防水防汗不脱色 防水防汗 持久不晕染 正品包邮</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>200.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=642" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489104935834.jpg"></div>
        <div class="p-name" title="一叶子面膜女补水保湿收缩毛孔控油玻尿酸面膜专柜正品 共28片">一叶子面膜女补水保湿收缩毛孔控油玻尿酸面膜专柜正品 共28片</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>80.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=644" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489105021484.jpg"></div>
        <div class="p-name" title="欧莱雅男士水能保湿化妆护肤品套装深层补水滋润洗面奶爽肤水乳液">欧莱雅男士水能保湿化妆护肤品套装深层补水滋润洗面奶爽肤水乳液</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>60.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=645" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489105083498.jpg"></div>
        <div class="p-name" title="杰威尔发胶定型喷雾男士干胶头发持久定型造型啫喱水发蜡蓬松清香 快速定型，蓬松清香，不起白屑，买2送1">杰威尔发胶定型喷雾男士干胶头发持久定型造型啫喱水发蜡蓬松清香 快速定型，蓬松清香，不起白屑，买2送1</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>110.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=646" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489105134405.jpg"></div>
        <div class="p-name" title="美的电磁炉Midea/美的 WK2102电磁炉特价家用触摸屏电池炉灶正品 已爆售百万多台 防滑触摸屏 一键爆炒">美的电磁炉Midea/美的 WK2102电磁炉特价家用触摸屏电池炉灶正品 已爆售百万多台 防滑触摸屏 一键爆炒</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>455.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=647" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489105175252.jpg"></div>
        <div class="p-name" title="志高嵌入式电陶炉家用双头双灶镶嵌式电磁炉双眼光波炉特价正品 不挑锅可烧烤 三环猛火 嵌入式双灶">志高嵌入式电陶炉家用双头双灶镶嵌式电磁炉双眼光波炉特价正品 不挑锅可烧烤 三环猛火 嵌入式双灶</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>488.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
<li class="opacity_img">
    <a href="https://demo.dscmall.cn/goods.php?id=648" target="_blank">
        <div class="p-img"><img src="/static/index/img/0_thumb_G_1489105257655.jpg"></div>
        <div class="p-name" title="Midea/美的 MB-WFS5017TM电饭煲5L智能正品电饭锅家用3-4-6-7-8人 下单立减20 精研柴火饭 涡轮防溢">Midea/美的 MB-WFS5017TM电饭煲5L智能正品电饭锅家用3-4-6-7-8人 下单立减20 精研柴火饭 涡轮防溢</div>
        <div class="p-price">
            <div class="shop-price">
                                <em>¥</em>300.00                            </div>
            <div class="original-price"></div>
        </div>
    </a>
</li>
</ul>
                                        <div class="spec" data-spec=""></div></div>
                                    </div>
                                </div></div>                            
                                                                        
                                                                        
                                                                        
                                            
        <div class="attached-search-container" ectype="suspColumn">
            <div class="w w1200">
                <div class="categorys site-mast">
                    <div class="categorys-type"><a href="https://demo.dscmall.cn/categoryall.php" target="_blank">全部商品分类</a></div>
                    <div class="categorys-tab-content">
                        <div class="categorys-items" id="cata-nav">
                <div class="categorys-item" ectype="cateItem" data-id="858" data-eveval="0">
        <div class="item item-content">
                        <i class="iconfont icon-ele"></i>
                        <div class="categorys-title">
                <strong>
                                <a href="https://demo.dscmall.cn/category.php?id=858" target="_blank">家用电器</a>
                                </strong>
                                <span>
                                                            <a href="https://demo.dscmall.cn/category.php?id=1105" target="_blank">大家电</a>
                    	
                                                            <a href="https://demo.dscmall.cn/category.php?id=1115" target="_blank">生活电器</a>
                    	
                                        	
                                        	
                                        	
                                    </span>
                            </div>
        </div>
        <div class="categorys-items-layer" ectype="cateLayer">
            <div class="cate-layer-con clearfix" ectype="cateLayerCon_858"></div>
        </div>
        <div class="clear"></div>
    </div>
                <div class="categorys-item" ectype="cateItem" data-id="3" data-eveval="0">
        <div class="item item-content">
                        <i class="iconfont icon-digital"></i>
                        <div class="categorys-title">
                <strong>
                                <a href="https://demo.dscmall.cn/category.php?id=33" target="_blank" class="division_cat">手机</a>、<a href="https://demo.dscmall.cn/category.php?id=64" target="_blank" class="division_cat">数码</a>、<a href="https://demo.dscmall.cn/category.php?id=37" target="_blank" class="division_cat">通信</a>                                </strong>
                                <span>
                                                            <a href="https://demo.dscmall.cn/category.php?id=112" target="_blank">智能设备</a>
                    	
                                                            <a href="https://demo.dscmall.cn/category.php?id=76" target="_blank">数码配件</a>
                    	
                                        	
                                        	
                                        	
                                        	
                                        	
                                    </span>
                            </div>
        </div>
        <div class="categorys-items-layer" ectype="cateLayer">
            <div class="cate-layer-con clearfix" ectype="cateLayerCon_3"></div>
        </div>
        <div class="clear"></div>
    </div>
                <div class="categorys-item" ectype="cateItem" data-id="4" data-eveval="0">
        <div class="item item-content">
                        <i class="iconfont icon-computer"></i>
                        <div class="categorys-title">
                <strong>
                                <a href="https://demo.dscmall.cn/category.php?id=4" target="_blank">电脑、办公</a>
                                </strong>
                                <span>
                                                            <a href="https://demo.dscmall.cn/category.php?id=158" target="_blank">服务产品</a>
                    	
                                                            <a href="https://demo.dscmall.cn/category.php?id=132" target="_blank">电脑整机</a>
                    	
                                        	
                                        	
                                        	
                                        	
                                    </span>
                            </div>
        </div>
        <div class="categorys-items-layer" ectype="cateLayer">
            <div class="cate-layer-con clearfix" ectype="cateLayerCon_4"></div>
        </div>
        <div class="clear"></div>
    </div>
                <div class="categorys-item" ectype="cateItem" data-id="5" data-eveval="0">
        <div class="item item-content">
                        <i class="iconfont icon-bed"></i>
                        <div class="categorys-title">
                <strong>
                                <a href="https://demo.dscmall.cn/category.php?id=5" target="_blank">家居、家具、家装、厨具</a>
                                </strong>
                                <span>
                                                            <a href="https://demo.dscmall.cn/category.php?id=143" target="_blank">厨具</a>
                    	
                                                            <a href="https://demo.dscmall.cn/category.php?id=159" target="_blank">家装建材</a>
                    	
                                        	
                                        	
                                        	
                                        	
                                    </span>
                            </div>
        </div>
        <div class="categorys-items-layer" ectype="cateLayer">
            <div class="cate-layer-con clearfix" ectype="cateLayerCon_5"><div class="cate-layer-left">
        <div class="cate_channel">
                <a href="#" target="_blank">家装城</a>
                <a href="#" target="_blank">居家日用</a>
                <a href="#" target="_blank">精品家具</a>
                <a href="#" target="_blank">家装建材</a>
                <a href="#" target="_blank">厨房达人</a>
                <a href="#" target="_blank">猫猫狗狗</a>
            </div>
        <div class="cate_detail">
                <dl class="dl_fore1">
            <dt><a href="https://demo.dscmall.cn/category.php?id=143" target="_blank">厨具</a></dt>
            <dd>
                                <a href="https://demo.dscmall.cn/category.php?id=146" target="_blank">烹饪锅具</a>
                                <a href="https://demo.dscmall.cn/category.php?id=149" target="_blank">刀剪菜板</a>
                                <a href="https://demo.dscmall.cn/category.php?id=152" target="_blank">厨房配件</a>
                                <a href="https://demo.dscmall.cn/category.php?id=153" target="_blank">水具酒具</a>
                                <a href="https://demo.dscmall.cn/category.php?id=154" target="_blank">餐具</a>
                                <a href="https://demo.dscmall.cn/category.php?id=156" target="_blank">茶具/咖啡具</a>
                            </dd>
        </dl>
                <dl class="dl_fore2">
            <dt><a href="https://demo.dscmall.cn/category.php?id=159" target="_blank">家装建材</a></dt>
            <dd>
                                <a href="https://demo.dscmall.cn/category.php?id=160" target="_blank">灯饰照明</a>
                                <a href="https://demo.dscmall.cn/category.php?id=161" target="_blank">厨房卫浴</a>
                                <a href="https://demo.dscmall.cn/category.php?id=163" target="_blank">五金工具</a>
                                <a href="https://demo.dscmall.cn/category.php?id=165" target="_blank">电工电料</a>
                                <a href="https://demo.dscmall.cn/category.php?id=167" target="_blank">墙地面材料</a>
                                <a href="https://demo.dscmall.cn/category.php?id=169" target="_blank">装饰材料</a>
                                <a href="https://demo.dscmall.cn/category.php?id=172" target="_blank">装修服务</a>
                                <a href="https://demo.dscmall.cn/category.php?id=175" target="_blank">吸顶灯</a>
                                <a href="https://demo.dscmall.cn/category.php?id=176" target="_blank">淋浴花洒</a>
                                <a href="https://demo.dscmall.cn/category.php?id=179" target="_blank">开关插座</a>
                                <a href="https://demo.dscmall.cn/category.php?id=182" target="_blank">油漆涂料</a>
                                <a href="https://demo.dscmall.cn/category.php?id=184" target="_blank">龙头</a>
                            </dd>
        </dl>
                <dl class="dl_fore3">
            <dt><a href="https://demo.dscmall.cn/category.php?id=188" target="_blank">家纺</a></dt>
            <dd>
                                <a href="https://demo.dscmall.cn/category.php?id=190" target="_blank">床品套件</a>
                                <a href="https://demo.dscmall.cn/category.php?id=191" target="_blank">被子</a>
                                <a href="https://demo.dscmall.cn/category.php?id=192" target="_blank">蚊帐</a>
                                <a href="https://demo.dscmall.cn/category.php?id=193" target="_blank">凉席</a>
                                <a href="https://demo.dscmall.cn/category.php?id=194" target="_blank">床单被罩</a>
                                <a href="https://demo.dscmall.cn/category.php?id=195" target="_blank">枕芯</a>
                                <a href="https://demo.dscmall.cn/category.php?id=196" target="_blank">毛巾浴巾</a>
                                <a href="https://demo.dscmall.cn/category.php?id=197" target="_blank">布艺软饰</a>
                                <a href="https://demo.dscmall.cn/category.php?id=198" target="_blank">毯子</a>
                                <a href="https://demo.dscmall.cn/category.php?id=199" target="_blank">抱枕靠垫</a>
                                <a href="https://demo.dscmall.cn/category.php?id=200" target="_blank">床垫/床褥</a>
                                <a href="https://demo.dscmall.cn/category.php?id=201" target="_blank">窗帘/窗纱</a>
                                <a href="https://demo.dscmall.cn/category.php?id=202" target="_blank">电热毯</a>
                            </dd>
        </dl>
                <dl class="dl_fore4">
            <dt><a href="https://demo.dscmall.cn/category.php?id=205" target="_blank">家具</a></dt>
            <dd>
                                <a href="https://demo.dscmall.cn/category.php?id=206" target="_blank">卧室家具</a>
                                <a href="https://demo.dscmall.cn/category.php?id=207" target="_blank">客厅家具</a>
                                <a href="https://demo.dscmall.cn/category.php?id=209" target="_blank">餐厅家具</a>
                                <a href="https://demo.dscmall.cn/category.php?id=210" target="_blank">书房家具</a>
                                <a href="https://demo.dscmall.cn/category.php?id=211" target="_blank">储物家具</a>
                                <a href="https://demo.dscmall.cn/category.php?id=212" target="_blank">阳台/户外</a>
                                <a href="https://demo.dscmall.cn/category.php?id=214" target="_blank">商业办公</a>
                                <a href="https://demo.dscmall.cn/category.php?id=217" target="_blank">床</a>
                                <a href="https://demo.dscmall.cn/category.php?id=219" target="_blank">床垫</a>
                                <a href="https://demo.dscmall.cn/category.php?id=221" target="_blank">沙发</a>
                                <a href="https://demo.dscmall.cn/category.php?id=223" target="_blank">电脑椅</a>
                                <a href="https://demo.dscmall.cn/category.php?id=226" target="_blank">衣柜</a>
                                <a href="https://demo.dscmall.cn/category.php?id=227" target="_blank">茶几</a>
                                <a href="https://demo.dscmall.cn/category.php?id=229" target="_blank">电视柜</a>
                                <a href="https://demo.dscmall.cn/category.php?id=230" target="_blank">餐桌</a>
                                <a href="https://demo.dscmall.cn/category.php?id=231" target="_blank">电脑桌</a>
                                <a href="https://demo.dscmall.cn/category.php?id=232" target="_blank">鞋架/衣帽架</a>
                            </dd>
        </dl>
                <dl class="dl_fore5">
            <dt><a href="https://demo.dscmall.cn/category.php?id=233" target="_blank">灯具</a></dt>
            <dd>
                                <a href="https://demo.dscmall.cn/category.php?id=235" target="_blank">台灯</a>
                                <a href="https://demo.dscmall.cn/category.php?id=237" target="_blank">吸顶灯</a>
                                <a href="https://demo.dscmall.cn/category.php?id=238" target="_blank">筒灯射灯</a>
                                <a href="https://demo.dscmall.cn/category.php?id=240" target="_blank">LED灯</a>
                                <a href="https://demo.dscmall.cn/category.php?id=242" target="_blank">节能灯</a>
                                <a href="https://demo.dscmall.cn/category.php?id=243" target="_blank">落地灯</a>
                                <a href="https://demo.dscmall.cn/category.php?id=244" target="_blank">五金电器</a>
                                <a href="https://demo.dscmall.cn/category.php?id=246" target="_blank">应急灯/手电</a>
                                <a href="https://demo.dscmall.cn/category.php?id=248" target="_blank">装饰灯</a>
                                <a href="https://demo.dscmall.cn/category.php?id=250" target="_blank">吊灯</a>
                                <a href="https://demo.dscmall.cn/category.php?id=252" target="_blank">氛围照明</a>
                            </dd>
        </dl>
                <dl class="dl_fore6">
            <dt><a href="https://demo.dscmall.cn/category.php?id=255" target="_blank">生活日用</a></dt>
            <dd>
                                <a href="https://demo.dscmall.cn/category.php?id=257" target="_blank">收纳用品</a>
                                <a href="https://demo.dscmall.cn/category.php?id=259" target="_blank">雨伞雨具</a>
                                <a href="https://demo.dscmall.cn/category.php?id=261" target="_blank">浴室用品</a>
                                <a href="https://demo.dscmall.cn/category.php?id=263" target="_blank">缝纫/针织用品</a>
                                <a href="https://demo.dscmall.cn/category.php?id=264" target="_blank">洗晒/熨烫</a>
                                <a href="https://demo.dscmall.cn/category.php?id=266" target="_blank">净化除味</a>
                            </dd>
        </dl>
        
        <div class="item-brands">
            <ul>
                            </ul>
        </div>
        <div class="item-promotions">
                    </div>
    </div>
</div>
<div class="cate-layer-rihgt">
    <div class="cate-brand">
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=5&amp;brand=88" target="_blank" title="养生堂"><img src="/static/index/img/1490072787223453617.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=5&amp;brand=92" target="_blank" title="一品玉"><img src="/static/index/img/1490072835176110718.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=5&amp;brand=124" target="_blank" title="亿健"><img src="/static/index/img/1490073971637187496.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=5&amp;brand=131" target="_blank" title="ZIPPO"><img src="/static/index/img/1490073919711003101.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=5&amp;brand=134" target="_blank" title="帮宝适"><img src="/static/index/img/1490075108722576375.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=5&amp;brand=154" target="_blank" title="匡威"><img src="/static/index/img/1490073529881448780.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=5&amp;brand=160" target="_blank" title="美的"><img src="/static/index/img/1490074901892372216.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=5&amp;brand=163" target="_blank" title="魅族"><img src="/static/index/img/1490073359611343586.jpg"></a></div>
            </div>
        <div class="cate-promotion">
                <a href="https://www.dscmall.cn/" target="_blank"><img src="/static/index/img/1490847695352345291.jpg" width="199" height="97"></a>
            </div>
    </div>
</div>
        </div>
        <div class="clear"></div>
    </div>
                <div class="categorys-item" ectype="cateItem" data-id="6" data-eveval="0">
        <div class="item item-content">
                        <i class="iconfont icon-clothes"></i>
                        <div class="categorys-title">
                <strong>
                                <a href="https://demo.dscmall.cn/category.php?id=6" target="_blank">男装、女装、内衣</a>
                                </strong>
                                <span>
                                                            <a href="https://demo.dscmall.cn/category.php?id=347" target="_blank">女装</a>
                    	
                                                            <a href="https://demo.dscmall.cn/category.php?id=463" target="_blank">男装</a>
                    	
                                        	
                                        	
                                        	
                                    </span>
                            </div>
        </div>
        <div class="categorys-items-layer" ectype="cateLayer">
            <div class="cate-layer-con clearfix" ectype="cateLayerCon_6"></div>
        </div>
        <div class="clear"></div>
    </div>
                <div class="categorys-item" ectype="cateItem" data-id="8" data-eveval="0">
        <div class="item item-content">
                        <i class="iconfont icon-shoes"></i>
                        <div class="categorys-title">
                <strong>
                                <a href="https://demo.dscmall.cn/category.php?id=8" target="_blank">鞋靴、箱包、钟表、奢侈品</a>
                                </strong>
                                <span>
                                                            <a href="https://demo.dscmall.cn/category.php?id=362" target="_blank">奢侈品</a>
                    	
                                                            <a href="https://demo.dscmall.cn/category.php?id=360" target="_blank">功能箱包</a>
                    	
                                        	
                                        	
                                        	
                                        	
                                        	
                                    </span>
                            </div>
        </div>
        <div class="categorys-items-layer" ectype="cateLayer">
            <div class="cate-layer-con clearfix" ectype="cateLayerCon_8"><div class="cate-layer-left">
        <div class="cate_channel">
                <a href="#" target="_blank">男鞋</a>
                <a href="#" target="_blank">女鞋</a>
                <a href="#" target="_blank">箱包</a>
                <a href="#" target="_blank">钟表</a>
                <a href="#" target="_blank">奢侈品</a>
                <a href="#" target="_blank">女包</a>
            </div>
        <div class="cate_detail">
                <dl class="dl_fore1">
            <dt><a href="https://demo.dscmall.cn/category.php?id=362" target="_blank">奢侈品</a></dt>
            <dd>
                                <a href="https://demo.dscmall.cn/category.php?id=443" target="_blank">鞋靴</a>
                                <a href="https://demo.dscmall.cn/category.php?id=439" target="_blank">箱包</a>
                                <a href="https://demo.dscmall.cn/category.php?id=440" target="_blank">钱包</a>
                                <a href="https://demo.dscmall.cn/category.php?id=441" target="_blank">服饰</a>
                                <a href="https://demo.dscmall.cn/category.php?id=442" target="_blank">腰带</a>
                                <a href="https://demo.dscmall.cn/category.php?id=445" target="_blank">太阳镜/眼镜框</a>
                                <a href="https://demo.dscmall.cn/category.php?id=446" target="_blank">饰品</a>
                                <a href="https://demo.dscmall.cn/category.php?id=447" target="_blank">配件</a>
                            </dd>
        </dl>
                <dl class="dl_fore2">
            <dt><a href="https://demo.dscmall.cn/category.php?id=360" target="_blank">功能箱包</a></dt>
            <dd>
                                <a href="https://demo.dscmall.cn/category.php?id=427" target="_blank">拉杆箱/拉杆包</a>
                                <a href="https://demo.dscmall.cn/category.php?id=428" target="_blank">旅行包</a>
                                <a href="https://demo.dscmall.cn/category.php?id=430" target="_blank">电脑包</a>
                                <a href="https://demo.dscmall.cn/category.php?id=432" target="_blank">休闲运动包</a>
                                <a href="https://demo.dscmall.cn/category.php?id=433" target="_blank">相机包</a>
                                <a href="https://demo.dscmall.cn/category.php?id=434" target="_blank">腰包/胸包</a>
                                <a href="https://demo.dscmall.cn/category.php?id=435" target="_blank">登山包</a>
                                <a href="https://demo.dscmall.cn/category.php?id=436" target="_blank">旅行配件</a>
                                <a href="https://demo.dscmall.cn/category.php?id=437" target="_blank">书包</a>
                                <a href="https://demo.dscmall.cn/category.php?id=438" target="_blank">妈咪包</a>
                            </dd>
        </dl>
                <dl class="dl_fore3">
            <dt><a href="https://demo.dscmall.cn/category.php?id=355" target="_blank">流行男鞋</a></dt>
            <dd>
                                <a href="https://demo.dscmall.cn/category.php?id=399" target="_blank">休闲鞋</a>
                                <a href="https://demo.dscmall.cn/category.php?id=401" target="_blank">凉鞋/沙滩鞋</a>
                                <a href="https://demo.dscmall.cn/category.php?id=402" target="_blank">帆布鞋</a>
                                <a href="https://demo.dscmall.cn/category.php?id=403" target="_blank">商务休闲鞋</a>
                                <a href="https://demo.dscmall.cn/category.php?id=404" target="_blank">正装鞋</a>
                                <a href="https://demo.dscmall.cn/category.php?id=405" target="_blank">增高鞋</a>
                                <a href="https://demo.dscmall.cn/category.php?id=406" target="_blank">拖鞋/人字拖</a>
                                <a href="https://demo.dscmall.cn/category.php?id=407" target="_blank">工装鞋</a>
                                <a href="https://demo.dscmall.cn/category.php?id=408" target="_blank">男靴</a>
                                <a href="https://demo.dscmall.cn/category.php?id=409" target="_blank">传统布鞋</a>
                                <a href="https://demo.dscmall.cn/category.php?id=410" target="_blank">功能鞋</a>
                                <a href="https://demo.dscmall.cn/category.php?id=411" target="_blank">鞋配件</a>
                                <a href="https://demo.dscmall.cn/category.php?id=412" target="_blank">定制鞋</a>
                            </dd>
        </dl>
                <dl class="dl_fore4">
            <dt><a href="https://demo.dscmall.cn/category.php?id=353" target="_blank">时尚女鞋</a></dt>
            <dd>
                                <a href="https://demo.dscmall.cn/category.php?id=368" target="_blank">凉鞋</a>
                                <a href="https://demo.dscmall.cn/category.php?id=371" target="_blank">单鞋</a>
                                <a href="https://demo.dscmall.cn/category.php?id=373" target="_blank">高跟鞋</a>
                                <a href="https://demo.dscmall.cn/category.php?id=375" target="_blank">坡跟鞋</a>
                                <a href="https://demo.dscmall.cn/category.php?id=376" target="_blank">松糕鞋</a>
                                <a href="https://demo.dscmall.cn/category.php?id=378" target="_blank">鱼嘴鞋</a>
                                <a href="https://demo.dscmall.cn/category.php?id=380" target="_blank">休闲鞋</a>
                                <a href="https://demo.dscmall.cn/category.php?id=382" target="_blank">帆布鞋</a>
                                <a href="https://demo.dscmall.cn/category.php?id=384" target="_blank">拖鞋/人字拖</a>
                                <a href="https://demo.dscmall.cn/category.php?id=386" target="_blank">妈妈鞋</a>
                                <a href="https://demo.dscmall.cn/category.php?id=387" target="_blank">防水台</a>
                                <a href="https://demo.dscmall.cn/category.php?id=389" target="_blank">雨鞋/雨靴</a>
                                <a href="https://demo.dscmall.cn/category.php?id=391" target="_blank">内增高</a>
                                <a href="https://demo.dscmall.cn/category.php?id=392" target="_blank">布鞋/绣花鞋</a>
                                <a href="https://demo.dscmall.cn/category.php?id=393" target="_blank">女靴</a>
                                <a href="https://demo.dscmall.cn/category.php?id=394" target="_blank">雪地靴</a>
                                <a href="https://demo.dscmall.cn/category.php?id=396" target="_blank">踝靴</a>
                                <a href="https://demo.dscmall.cn/category.php?id=397" target="_blank">马丁靴</a>
                                <a href="https://demo.dscmall.cn/category.php?id=398" target="_blank">鞋配件</a>
                            </dd>
        </dl>
                <dl class="dl_fore5">
            <dt><a href="https://demo.dscmall.cn/category.php?id=357" target="_blank">潮流女包</a></dt>
            <dd>
                                <a href="https://demo.dscmall.cn/category.php?id=413" target="_blank">单肩包</a>
                                <a href="https://demo.dscmall.cn/category.php?id=414" target="_blank">手提包</a>
                                <a href="https://demo.dscmall.cn/category.php?id=415" target="_blank">斜跨包</a>
                                <a href="https://demo.dscmall.cn/category.php?id=416" target="_blank">双肩包</a>
                                <a href="https://demo.dscmall.cn/category.php?id=417" target="_blank">钱包</a>
                                <a href="https://demo.dscmall.cn/category.php?id=418" target="_blank">手拿包/晚宴包</a>
                                <a href="https://demo.dscmall.cn/category.php?id=419" target="_blank">卡包/零钱包</a>
                                <a href="https://demo.dscmall.cn/category.php?id=420" target="_blank">钥匙包</a>
                            </dd>
        </dl>
                <dl class="dl_fore6">
            <dt><a href="https://demo.dscmall.cn/category.php?id=359" target="_blank">精品男包</a></dt>
            <dd>
                                <a href="https://demo.dscmall.cn/category.php?id=421" target="_blank">商务公文包</a>
                                <a href="https://demo.dscmall.cn/category.php?id=422" target="_blank">单肩/斜跨包</a>
                                <a href="https://demo.dscmall.cn/category.php?id=423" target="_blank">男生手包</a>
                                <a href="https://demo.dscmall.cn/category.php?id=424" target="_blank">双肩包</a>
                                <a href="https://demo.dscmall.cn/category.php?id=425" target="_blank">钱包/卡包</a>
                                <a href="https://demo.dscmall.cn/category.php?id=426" target="_blank">钥匙包</a>
                            </dd>
        </dl>
                <dl class="dl_fore7">
            <dt><a href="https://demo.dscmall.cn/category.php?id=364" target="_blank">钟表</a></dt>
            <dd>
                                <a href="https://demo.dscmall.cn/category.php?id=449" target="_blank">男表</a>
                                <a href="https://demo.dscmall.cn/category.php?id=450" target="_blank">女表</a>
                                <a href="https://demo.dscmall.cn/category.php?id=452" target="_blank">儿童表</a>
                                <a href="https://demo.dscmall.cn/category.php?id=453" target="_blank">座钟挂钟</a>
                            </dd>
        </dl>
        
        <div class="item-brands">
            <ul>
                            </ul>
        </div>
        <div class="item-promotions">
                    </div>
    </div>
</div>
<div class="cate-layer-rihgt">
    <div class="cate-brand">
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=8&amp;brand=93" target="_blank" title="同庆和堂"><img src="/static/index/img/1490072850306019115.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=8&amp;brand=84" target="_blank" title="同仁堂"><img src="/static/index/img/1490072746651935979.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=8&amp;brand=85" target="_blank" title="喜瑞"><img src="/static/index/img/1490072756032175204.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=8&amp;brand=87" target="_blank" title="汤臣倍健"><img src="/static/index/img/1490072777790374054.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=8&amp;brand=88" target="_blank" title="养生堂"><img src="/static/index/img/1490072787223453617.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=8&amp;brand=92" target="_blank" title="一品玉"><img src="/static/index/img/1490072835176110718.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=8&amp;brand=115" target="_blank" title="西门子"><img src="/static/index/img/1490074006660107941.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=8&amp;brand=116" target="_blank" title="伊莱克斯"><img src="/static/index/img/1490073109529817869.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=8&amp;brand=124" target="_blank" title="亿健"><img src="/static/index/img/1490073971637187496.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=8&amp;brand=130" target="_blank" title="TP-LINL"><img src="/static/index/img/1490074180745676140.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=8&amp;brand=131" target="_blank" title="ZIPPO"><img src="/static/index/img/1490073919711003101.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=8&amp;brand=132" target="_blank" title="阿玛尼"><img src="/static/index/img/1490073900838296364.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=8&amp;brand=137" target="_blank" title="达利园"><img src="/static/index/img/1490073731822160672.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=8&amp;brand=138" target="_blank" title="迪士尼"><img src="/static/index/img/1490073717776504773.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=8&amp;brand=139" target="_blank" title="飞科"><img src="/static/index/img/1490073705755280994.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=8&amp;brand=154" target="_blank" title="匡威"><img src="/static/index/img/1490073529881448780.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=8&amp;brand=176" target="_blank" title="途牛"><img src="/static/index/img/1490075080126940602.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=8&amp;brand=178" target="_blank" title="文轩网"><img src="/static/index/img/1490073253749057076.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=8&amp;brand=186" target="_blank" title="新百伦"><img src="/static/index/img/1490074308773778697.jpg"></a></div>
            </div>
        <div class="cate-promotion">
                <a href="https://www.dscmall.cn/" target="_blank"><img src="/static/index/img/1490296765062943272.jpg" width="199" height="97"></a>
            </div>
    </div>
</div>
        </div>
        <div class="clear"></div>
    </div>
                <div class="categorys-item" ectype="cateItem" data-id="860" data-eveval="0">
        <div class="item item-content">
                        <i class="iconfont icon-heal"></i>
                        <div class="categorys-title">
                <strong>
                                <a href="https://demo.dscmall.cn/category.php?id=860" target="_blank">个人化妆、清洁用品</a>
                                </strong>
                                <span>
                                                            <a href="https://demo.dscmall.cn/category.php?id=876" target="_blank">面部护肤</a>
                    	
                                                            <a href="https://demo.dscmall.cn/category.php?id=880" target="_blank">洗发护发</a>
                    	
                                        	
                                        	
                                        	
                                        	
                                        	
                                    </span>
                            </div>
        </div>
        <div class="categorys-items-layer" ectype="cateLayer">
            <div class="cate-layer-con clearfix" ectype="cateLayerCon_860"><div class="cate-layer-left">
        <div class="cate_channel">
                <a href="#" target="_blank">清洁用品</a>
                <a href="#" target="_blank">美妆商城</a>
                <a href="#" target="_blank">官方旗舰店</a>
                <a href="#" target="_blank">美妆特卖</a>
                <a href="#" target="_blank">妆比社</a>
                <a href="#" target="_blank">全球购美妆</a>
            </div>
        <div class="cate_detail">
                <dl class="dl_fore1">
            <dt><a href="https://demo.dscmall.cn/category.php?id=876" target="_blank">面部护肤</a></dt>
            <dd>
                                <a href="https://demo.dscmall.cn/category.php?id=877" target="_blank">清洁</a>
                                <a href="https://demo.dscmall.cn/category.php?id=878" target="_blank">护肤</a>
                                <a href="https://demo.dscmall.cn/category.php?id=879" target="_blank">面膜</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1177" target="_blank">洗面奶</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1178" target="_blank">BB霜</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1179" target="_blank">指甲油</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1180" target="_blank">洗面泥</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1181" target="_blank">水润护肤</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1182" target="_blank">卸妆水</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1183" target="_blank">雪花膏</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1184" target="_blank">爽肤水</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1185" target="_blank">清洁套装</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1186" target="_blank">剃须</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1187" target="_blank">洁面刷</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1188" target="_blank">修眉笔</a>
                            </dd>
        </dl>
                <dl class="dl_fore2">
            <dt><a href="https://demo.dscmall.cn/category.php?id=880" target="_blank">洗发护发</a></dt>
            <dd>
                                <a href="https://demo.dscmall.cn/category.php?id=881" target="_blank">洗发</a>
                                <a href="https://demo.dscmall.cn/category.php?id=882" target="_blank">护发</a>
                                <a href="https://demo.dscmall.cn/category.php?id=883" target="_blank">染发</a>
                                <a href="https://demo.dscmall.cn/category.php?id=884" target="_blank">造型</a>
                            </dd>
        </dl>
                <dl class="dl_fore3">
            <dt><a href="https://demo.dscmall.cn/category.php?id=885" target="_blank">身体护肤</a></dt>
            <dd>
                                <a href="https://demo.dscmall.cn/category.php?id=886" target="_blank">沐浴</a>
                                <a href="https://demo.dscmall.cn/category.php?id=887" target="_blank">润肤</a>
                                <a href="https://demo.dscmall.cn/category.php?id=888" target="_blank">手足</a>
                                <a href="https://demo.dscmall.cn/category.php?id=889" target="_blank">美胸</a>
                                <a href="https://demo.dscmall.cn/category.php?id=890" target="_blank">套装</a>
                            </dd>
        </dl>
                <dl class="dl_fore4">
            <dt><a href="https://demo.dscmall.cn/category.php?id=891" target="_blank">口腔护理</a></dt>
            <dd>
                                <a href="https://demo.dscmall.cn/category.php?id=892" target="_blank">牙膏/牙粉</a>
                                <a href="https://demo.dscmall.cn/category.php?id=893" target="_blank">牙刷/牙线</a>
                                <a href="https://demo.dscmall.cn/category.php?id=894" target="_blank">漱口水</a>
                                <a href="https://demo.dscmall.cn/category.php?id=895" target="_blank">套装</a>
                            </dd>
        </dl>
                <dl class="dl_fore5">
            <dt><a href="https://demo.dscmall.cn/category.php?id=896" target="_blank">香水彩妆</a></dt>
            <dd>
                                <a href="https://demo.dscmall.cn/category.php?id=897" target="_blank">香水</a>
                                <a href="https://demo.dscmall.cn/category.php?id=898" target="_blank">底妆</a>
                                <a href="https://demo.dscmall.cn/category.php?id=899" target="_blank">腮红</a>
                                <a href="https://demo.dscmall.cn/category.php?id=900" target="_blank">眼部</a>
                                <a href="https://demo.dscmall.cn/category.php?id=901" target="_blank">美甲</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1349" target="_blank">精油放疗</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1350" target="_blank">假睫毛</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1351" target="_blank">彩妆套装</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1352" target="_blank">蜜粉</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1353" target="_blank">遮瑕</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1354" target="_blank">化妆棉</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1355" target="_blank">双眼皮贴</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1356" target="_blank">高光阴影</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1357" target="_blank">隔离</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1358" target="_blank">粉饼</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1359" target="_blank">气垫BB</a>
                            </dd>
        </dl>
                <dl class="dl_fore6">
            <dt><a href="https://demo.dscmall.cn/category.php?id=1205" target="_blank">女性护理</a></dt>
            <dd>
                                <a href="https://demo.dscmall.cn/category.php?id=1206" target="_blank">卫生巾</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1207" target="_blank">卫生护垫</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1208" target="_blank">私密护理</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1209" target="_blank">脱毛膏</a>
                            </dd>
        </dl>
                <dl class="dl_fore7">
            <dt><a href="https://demo.dscmall.cn/category.php?id=1210" target="_blank">清洁用品</a></dt>
            <dd>
                                <a href="https://demo.dscmall.cn/category.php?id=1211" target="_blank">纸品湿巾</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1212" target="_blank">衣物清洁</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1213" target="_blank">清洁工具</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1214" target="_blank">家庭清洁</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1215" target="_blank">一次性用品</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1216" target="_blank">驱蚊用品</a>
                                <a href="https://demo.dscmall.cn/category.php?id=1217" target="_blank">皮具护理</a>
                            </dd>
        </dl>
        
        <div class="item-brands">
            <ul>
                            </ul>
        </div>
        <div class="item-promotions">
                    </div>
    </div>
</div>
<div class="cate-layer-rihgt">
    <div class="cate-brand">
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=860&amp;brand=79" target="_blank" title="justyle"><img src="/static/index/img/1490072677495061584.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=860&amp;brand=81" target="_blank" title="宝姿"><img src="/static/index/img/1490072685002270742.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=860&amp;brand=102" target="_blank" title="欧亚马"><img src="/static/index/img/1490072941526335126.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=860&amp;brand=129" target="_blank" title="NINE WEST"><img src="/static/index/img/1490073930435480283.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=860&amp;brand=140" target="_blank" title="飞利浦"><img src="/static/index/img/1490073692774466710.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=860&amp;brand=159" target="_blank" title="麦斯威尔"><img src="/static/index/img/1490228075580091113.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=860&amp;brand=160" target="_blank" title="美的"><img src="/static/index/img/1490074901892372216.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=860&amp;brand=164" target="_blank" title="耐克"><img src="/static/index/img/1490073338357697604.jpg"></a></div>
                    <div class="img"><a href="https://demo.dscmall.cn/category.php?id=860&amp;brand=189" target="_blank" title="佳沪数码-华为"><img src="/static/index/img/1490171981556005380.jpg"></a></div>
            </div>
        <div class="cate-promotion">
                <a href="https://www.dscmall.cn/" target="_blank"><img src="/static/index/img/1490847656340816332.jpg" width="199" height="97"></a>
            </div>
    </div>
</div>
        </div>
        <div class="clear"></div>
    </div>
                                                                                    </div>                    </div>
                </div>
                <div class="mall-search">
                   <div class="dsc-search">
                        <div class="form">
                            <form id="searchForm" name="searchForm" method="get" action="search.php" onsubmit="return checkSearchForm(this)" class="search-form">
                                <input autocomplete="off" name="keywords" type="text" id="keyword2" value="内衣" class="search-text">
                                <input type="hidden" name="store_search_cmt" value="0">
                                <button type="submit" class="button button-goods" onclick="checkstore_search_cmt(0)">搜商品</button>
                                <button type="submit" class="button button-store" onclick="checkstore_search_cmt(1)">搜店铺</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="suspend-login">
                    	<a href="https://demo.dscmall.cn/user.php">登录</a>
    |
    <a href="https://demo.dscmall.cn/user.php?act=register">注册</a>
                    </div>
                <div class="shopCart" id="ECS_CARTINFO">
                    
<div class="shopCart-con dsc-cm">
	<a href="https://demo.dscmall.cn/flow.php">
		<i class="iconfont icon-carts"></i>
		<span></span>
		<em class="count cart_num">0</em>
	</a>
</div>
<div class="dorpdown-layer" ectype="dorpdownLayer"><img src="/static/index/css/loadGoods.gif" class="load"></div>

<script type="text/javascript">
function changenum(rec_id, diff, warehouse_id, area_id)
{
	var cValue = $('#cart_value').val();
    var goods_number =Number($('#goods_number_' + rec_id).text()) + Number(diff);
 
	if(goods_number < 1)
	{
		return false;	
	}
	else
	{
		change_goods_number(rec_id,goods_number, warehouse_id, area_id, cValue);
	}
}
function change_goods_number(rec_id, goods_number, warehouse_id, area_id, cValue)
{
	if(cValue != '' || cValue == 'undefined'){
	   var cValue = $('#cart_value').val(); 
	}   
	Ajax.call('flow.php?step=ajax_update_cart', 'rec_id=' + rec_id +'&goods_number=' + goods_number +'&cValue=' + cValue +'&warehouse_id=' + warehouse_id +'&area_id=' + area_id, change_goods_number_response, 'POST','JSON');                
}
function change_goods_number_response(result)
{    
	var rec_id = result.rec_id;           
    if (result.error == 0)
    {
       $('#goods_number_' +rec_id).val(result.goods_number);//更新数量
       $('#goods_subtotal_' +rec_id).html(result.goods_subtotal);//更新小计
       if (result.goods_number <= 0)
        {
			//数量为零则隐藏所在行
            $('#tr_goods_' +rec_id).style.display = 'none';
            $('#tr_goods_' +rec_id).innerHTML = '';
        }
        $('#total_desc').html(result.flow_info);//更新合计
        if($('ECS_CARTINFO'))
        

		if(result.group.length > 0){
			for(var i=0; i<result.group.length; i++){
				$("#" + result.group[i].rec_group).html(result.group[i].rec_group_number);//配件商品数量
				$("#" + result.group[i].rec_group_talId).html(result.group[i].rec_group_subtotal);//配件商品金额
			}
		}

		$("#goods_price_" + rec_id).html(result.goods_price);
		$(".cart_num").html(result.subtotal_number);
	}
	else if (result.message != '')
	{
		$('#goods_number_' +rec_id).val(result.cart_Num);//更新数量
		alert(result.message);
	}                
}

function deleteCartGoods(rec_id,index)
{
	Ajax.call('delete_cart_goods.php', 'id='+rec_id+'&index='+index, deleteCartGoodsResponse, 'POST', 'JSON');
}

/**
 * 接收返回的信息
 */
function deleteCartGoodsResponse(res)
{
  if (res.error)
  {
    alert(res.err_msg);
  }
  else if(res.index==1)
  {
		Ajax.call('get_ajax_content.php?act=get_content', 'data_type=cart_list', return_cart_list, 'POST', 'JSON');
  }
  else
  {
	  $("#ECS_CARTINFO").html(res.content);
	  $(".cart_num").html(res.cart_num);
  }
}

function return_cart_list(result)
{
	$(".cart_num").html(result.cart_num);
	$(".pop_panel").html(result.content);
	tbplHeigth();
}
</script>                </div>
            </div>
    	</div>
        <div class="lift lift-mode-one lift-hide" ectype="lift" data-type="one" style="z-index: 100001; left: 265.5px; top: 50%;">
            <div class="lift-list" ectype="liftList">
            <div class="lift-item" ectype="liftItem" data-target="#h-need_0" title="推荐"><span>推荐</span><i class="lift-arrow"></i></div><div class="lift-item" ectype="liftItem" data-target="#h-brand_0" title="品牌"><span>品牌</span><i class="lift-arrow"></i></div><div class="lift-item" ectype="liftItem" data-target="#homeFloor_0" title="女装"><span>女装</span><i class="lift-arrow"></i></div><div class="lift-item" ectype="liftItem" data-target="#homeFloor_1" title="鞋靴"><span>鞋靴</span><i class="lift-arrow"></i></div><div class="lift-item" ectype="liftItem" data-target="#homeFloor_2" title="食品"><span>食品</span><i class="lift-arrow"></i></div><div class="lift-item" ectype="liftItem" data-target="#homeFloor_3" title="家用"><span>家用</span><i class="lift-arrow"></i></div><div class="lift-item" ectype="liftItem" data-target="#h-master_0" title="达人"><span>达人</span><i class="lift-arrow"></i></div><div class="lift-item" ectype="liftItem" data-target="#h-storeRec_0" title="店铺"><span>店铺</span><i class="lift-arrow"></i></div><div class="lift-item" ectype="liftItem" data-target="#guessYouLike" title="商品"><span>商品</span><i class="lift-arrow"></i></div><div class="lift-item lift-item-top" ectype="liftItem"><i class="iconfont icon-returntop"></i></div></div>
        </div>
        
        <input name="warehouse_id" type="hidden" value="2">
    	<input name="area_id" type="hidden" value="19">
        <input name="area_city" type="hidden" value="543">
        <input name="temp" type="hidden" value="backup_tpl_1">
        
        
    	<div ectype="bonusadv_box"><div class="ejectAdv" ectype="ejectAdv" style="display: none;">
    <div class="ejectAdvbg"></div>
    <div class="ejectAdvimg">
            <a href="#" target="_blank"><img src="/static/index/css/bonusadv_1501618595.png"></a>
        <a href="javascript:void(0);" class="ejectClose" ectype="ejectClose"></a>
    </div>
</div>
</div>
    </div>
    
<div class="mui-mbar-tabs">
	<div class="quick_links_wrap" style="width: 40px;">
		<div class="quick_link_mian" data-userid="62">
	        <div class="quick_links_panel">
	            <div id="quick_links" class="quick_links">
	            	<ul>
					    <li>
					        <a href="#"><i class="setting"></i></a>
					        <div class="ibar_login_box status_login">
						        <div class="avatar_box">
									<p class="avatar_imgbox"><img src="/static/index/img/touxiang.jpg" width="100" height="100"></p>
									<ul class="user_info">
									    <li>用户名：86913361-232247</li>
									    <li>级&nbsp;别：铜牌</li>
									</ul>
						        </div>
						        <div class="login_btnbox">
									<a href="#">我的订单</a>
									<a href="#">我的收藏</a>
								</div>
								<i class="icon_arrow_white"></i>
					        </div>
					    </li>
					    
					    <li id="shopCart">
					        <a href="#">
					            <i class="message"></i>
					            <div class="span">购物车</div>
					            <span class="cart_num">0</span>
					        </a>

					        <!-- <a href="#" class="cart_list">
								<i class="message"></i>
								<div class="span">购物车</div>
								<span class="cart_num">0</span>
	                        </a> -->
					    </li>
					    <li>
					        <a href="#"><i class="chongzhi"></i></a>
					        <div class="mp_tooltip">
					            <font id="mpbtn_money" style="font-size:12px; cursor:pointer;">我的订单</font>
					            <i class="icon_arrow_right_black"></i>
					        </div>
					    </li>
					    <li>
					        <a href="#"><i class="yhq"></i></a>
					        <div class="mp_tooltip">
					            <font id="mpbtn_money" style="font-size:12px; cursor:pointer;">优惠券</font>
					            <i class="icon_arrow_right_black"></i>
					        </div>
					    </li>
					    <li>
					        <a href="#"><i class="view"></i></a>
					        <div class="mp_tooltip" style=" visibility:hidden;">
					            <font id="mpbtn_myMoney" style="font-size:12px; cursor:pointer;">我的资产</font>
					            <i class="icon_arrow_right_black"></i>
					        </div>
					    </li>
					    <li>
					        <a href="#"><i class="zuji"></i></a>
					        <div class="mp_tooltip">
					            <font id="mpbtn_histroy" style="font-size:12px; cursor:pointer;">我的足迹</font>
					            <i class="icon_arrow_right_black"></i>
					        </div>
					    </li>
					    <li>
					        <a href="#"><i class="wdsc"></i></a>
					        <div class="mp_tooltip">
					            <font id="mpbtn_wdsc" style="font-size:12px; cursor:pointer;">我的收藏</font>
					            <i class="icon_arrow_right_black"></i>
					        </div>
					    </li>
					    <li>
					        <a href="#"><i class="email"></i></a>
					        <div class="mp_tooltip">
					            <font id="mpbtn_email" style="font-size:12px; cursor:pointer;">邮箱订阅</font>
					            <i class="icon_arrow_right_black"></i>
					        </div>
					    </li>
					</ul>
	            </div>
	            <div class="quick_toggle">
	            	<ul>
	            		<li>
	            			<a id="IM" im_type="dsc" onclick="openWin(this)" href="javascript:;"><i class="kfzx"></i></a>
							<div class="mp_tooltip">客服中心<i class="icon_arrow_right_black"></i></div>
						</li>
					    <li class="returnTop">
					        <a href="#"><i class="top"></i></a>
					    </li>
					</ul>
				</div>
	        </div>
	        <div id="quick_links_pop" class="quick_links_pop"></div>
	    </div>
	</div>
</div>

<div class="email_sub">
	<div class="attached_bg"></div>
	<div class="w1200">
        <div class="email_sub_btn">
            <input id="user_email" name="user_email" autocomplete="off" placeholder="请输入您的邮箱帐号" type="input">
            <a href="#">订阅</a>
        </div>
    </div>
</div>

<div class="footer-new">
    <div class="footer-new-top">
	<div class="w w1200">
        <div class="service-list">
			<div class="service-item"><i class="f-icon f-icon-qi"></i><span>七天包退</span></div>
			<div class="service-item"><i class="f-icon f-icon-zheng"></i><span>正品保障</span></div>
			<div class="service-item"><i class="f-icon f-icon-hao"></i><span>好评如潮</span></div>
			<div class="service-item"><i class="f-icon f-icon-shan"></i><span>闪电发货</span></div>
			<div class="service-item"><i class="f-icon f-icon-quan"></i><span>权威荣誉</span></div>
		</div>
		<div class="contact">
			<div class="contact-item contact-item-first"><i class="f-icon f-icon-tel"></i><span>4000-000-000</span></div>
			<div class="contact-item">
				<a id="IM" im_type="dsc" onclick="openWin(this)" href="javascript:;" class="btn-ctn"><i class="f-icon f-icon-kefu"></i><span>咨询客服</span></a>
			</div>
        </div>
    </div>
</div>
<div class="footer-new-con">
	<div class="fnc-warp">
        <div class="help-list">
        	<?php if(is_array($bases) || $bases instanceof \think\Collection || $bases instanceof \think\Paginator): $i = 0; $__LIST__ = $bases;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$three): $mod = ($i % 2 );++$i;?>
			<div class="help-item">
			    <h3><?php echo $three['cate_name']; ?> </h3>
			    <ul>
			    	<?php if(is_array($three['arts']) || $three['arts'] instanceof \think\Collection || $three['arts'] instanceof \think\Paginator): $i = 0; $__LIST__ = $three['arts'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$five): $mod = ($i % 2 );++$i;?>
			    	<li><a href="<?php if($five['ar_url']): ?> <?php echo $five['ar_url']; ?>" target="_black"> <?php else: ?> <?php echo url('index/article/index',array('ar_id'=>$five['ar_id'])); ?>"> <?php endif; ?> <?php echo $five['ar_title']; ?></a></li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
			    </ul>
			</div>
			<?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="qr-code">
			<div class="qr-item qr-item-first">
			    <div class="code_img"><img src="/static/index/img/ecjia_qrcode.png"></div>
			    <div class="code_txt">官方网址</div>
			</div>
			<div class="qr-item">
			    <div class="code_img"><img src="/static/index/img/ectouch_qrcode.png"></div>
			    <div class="code_txt">在线课程</div>
			</div>
        </div>
	</div>
</div>
<div class="footer-new-bot">
	<div class="w w1200">
        <p class="copyright_links">
			<a href="<?php echo url('index/Index/index'); ?>">首页</a>
			<?php if(is_array($infos) || $infos instanceof \think\Collection || $infos instanceof \think\Paginator): $i = 0; $__LIST__ = $infos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arts): $mod = ($i % 2 );++$i;?>
			<span class="spacer"></span>
			<a <?php if($arts['ar_url'] != ''): ?> target="_black" <?php endif; ?> href="<?php echo url('index/Article/index',array('ar_id'=>$arts['ar_id'])); ?>"><?php echo $arts['ar_title']; ?></a>
			<?php endforeach; endif; else: echo "" ;endif; ?>
        </p>
    
    	<p>
    		<span><?php echo $configs['banquan']; ?>&nbsp;&nbsp;</span><span><?php echo $configs['icpbenan']; ?></span>
    		<a href="#"><?php echo $configs['icp']; ?></a>&nbsp;<a href="#"><?php echo $configs['powered']; ?></a>
    	</p>
    	<p class="copyright_auth">&nbsp;</p>
	</div>
</div>

<div class="hide" id="pd_coupons">
    <span class="success-icon m-icon"></span>
    <div class="item-fore">
        <h3>领取成功！感谢您的参与，祝您购物愉快~</h3>
        <div class="txt ftx-03">本活动为概率性事件，不能保证所有客户成功领取优惠券</div>
    </div>
</div>

<div class="hidden">
    <input name="seller_kf_IM" value="" rev="" ru_id="" type="hidden">
    <input name="seller_kf_qq" value="349488953" type="hidden">
    <input name="seller_kf_tel" value="4000-000-000" type="hidden">
    <input name="user_id" value="62" type="hidden">
</div>
</div>
    

    <script type="text/javascript" src="/static/index/js/suggest.js"></script>
	<script type="text/javascript" src="/static/index/js/scroll_city.js"></script>
	<script type="text/javascript" src="/static/index/js/utils.js"></script>
	<script type="text/javascript" src="/static/index/js/warehouse.js"></script>
	<script type="text/javascript" src="/static/index/js/warehouse_area.js"></script>
    
    <script type="text/javascript" src="/static/index/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/static/index/js/jquery.yomi.js"></script>
    <script type="text/javascript" src="/static/index/js/cart_common.js"></script>
    <script type="text/javascript" src="/static/index/js/parabola.js"></script>
    <script type="text/javascript" src="/static/index/js/cart_quick_links.js"></script>	
    <script type="text/javascript" src="/static/index/js/dsc-common.js"></script>
    <script type="text/javascript" src="/static/index/js/jquery_004.js"></script>
    <script type="text/javascript" src="/static/index/js/jquery_003.js"></script>
    <script type="text/javascript" src="/static/index/js/jquery_002.js"></script>
    <script type="text/javascript" src="/static/index/js/asyLoadfloor.js"></script>
	<script type="text/javascript" src="/static/index/js/jquery.purebox.js"></script>

    <script type="text/javascript" src="/static/index/js/common.js"></script>
    <script type="text/javascript" src="/static/index/js/compare.js"></script>
    <script type="text/javascript" src="/static/index/js/magiczoomplus.js"></script>
    <script type="text/javascript" src="/static/index/js/goodsFittings.js"></script>



    




    <!-- cart_list -->
    <script type="text/javascript" src="/static/index/js/shopping_flow.js"></script>
    <script type="text/javascript" src="/static/index/js/jquery.nyroModal.js"></script>
    <script type="text/javascript" src="/static/index/js/region.js"></script>
    <script type="text/javascript" src="/static/index/js/checkAll.js"></script>   

    <!-- category -->
    <script type="text/javascript" src="/static/index/js/jd_choose.js"></script>



<script type="text/javascript">
	/*首页轮播*/
	var slideType = $("*[data-mode='lunbo']").find("*[data-type='range']").data("slide");
	var length = $(".banner .bd").find("li").length;
	
	if(slideType == "roll"){
		slideType = "left";
	}
	
	if(length>1){
		$(".banner").slide({titCell:".hd ul",mainCell:".bd ul",effect:slideType,interTime:5000,delayTime:500,autoPlay:true,autoPage:true,trigger:"click",endFun:function(i,c,s){
			$(window).resize(function(){
				var width = $(window).width();
				if(!$('body').hasClass("festival_home")){
					s.find(".bd li").css("width",width);
				}
			});
		}});
	}else{
		$(".banner .hd").hide();
	}
	
	//楼层二级分类商品切换
	$("*[ectype='floorItem']").slide({titCell:".hd-tags li",mainCell:".floor-tabs-content",titOnClassName:"current"});
	
	$("*[ectype='floorItem']").slide({titCell:".floor-nav li",mainCell:".floor-tabs-content",titOnClassName:"current"});
	
	//第五套楼层模板
	$(".floor-fd-slide").slide({mainCell:".bd ul",effect:"left",autoPlay:false,autoPage:true,vis:4,scroll:1,prevCell:".ff-prev",nextCell:".ff-next"});
	
	//第六套楼层模板
	$(".floor-brand").slide({mainCell:".fb-bd ul",effect:"left",pnLoop:true,autoPlay:false,autoPage:true,vis:3,scroll:1,prevCell:".fs_prev",nextCell:".fs_next"});
	
	//楼层轮播图广告
	$("*[data-purebox='homeFloor']").each(function(index, element) {
		var f_slide_length = $(this).find(".floor-left-slide .bd li").length;
		if(f_slide_length > 1){
			$(element).find(".floor-left-slide").slide({titCell:".hd ul",mainCell:".bd ul",effect:"left",interTime:3500,delayTime:500,autoPlay:true,autoPage:true});
		}else{
			$(element).find(".floor-left-slide .hd").hide();
		}
    });
	//异步加载出首页个人信息、秒杀活动、品牌信息、首页弹出广告
    $(function(){
        var site_domain = "";
        var brand_id = $('*[ectype="homeBrand"]').find(".brand-list").data("value");
		var seckillid = $('[data-mode="h-seckill"]').find('[data-type="range"]').data('seckillid');
		var temp = "backup_tpl_1";
		
		var where = '';
		if(!brand_id){
			brand_id = '';
		}
		
        seckillid = JSON.stringify(seckillid);
		
        if(site_domain){
			$.ajax({
				type: "GET",
				url: "ajax_dialog.php", /*jquery Ajax跨域*/
				data: "act=getUserInfo&is_jsonp=1&brand_id="+brand_id + "&seckillid=" + seckillid + "&temp=" + temp,
				dataType:"jsonp",
				jsonp:"jsoncallback",
				success: homeAjax
			});
        }else{
            Ajax.call('ajax_dialog.php?act=getUserInfo', 'brand_id=' + brand_id + "&seckillid=" + seckillid + "&temp=" + temp, homeAjax , 'POST', 'JSON');
        }
		
		function ajax_Homeindex_Bonusadv(){
			var cfg_bonus_adv = "1";//是否开启首页弹出广告
			var suffix = "backup_tpl_1";
			
			if(cfg_bonus_adv == 1 && suffix){
				Ajax.call('ajax_dialog.php?act=ajax_Homeindex_Bonusadv', 'suffix=' + suffix, function(data){
					if(data.error != 1){
						$("[ectype='bonusadv_box']").html(data.content);
					}
				} , 'POST', 'JSON');
			}
		}
		
		ajax_Homeindex_Bonusadv();
		
		function homeAjax(data){
			$("*[ectype='user_info']").html(data.content);
			$("*[ectype='homeBrand']").html(data.brand_list);
			if(data.seckill_goods){
				$('[data-mode="h-seckill"]').show().find('[data-type="range"] .box-bd').html(data.seckill_goods);
				var sec_begin_time =  $('[data-mode="h-seckill"]').find('[data-type="range"] .box-bd').find('input[name="sec_begin_time"]').val();
				var sec_end_time = $('[data-mode="h-seckill"]').find('[data-type="range"] .box-bd').find('input[name="sec_end_time"]').val();
				if(sec_begin_time){
					$('[data-mode="h-seckill"]').find('[data-type="range"] .box-hd [ectype="time"]').attr("data-time",sec_begin_time)
				}else{
					$('[data-mode="h-seckill"]').find('[data-type="range"] .box-hd [ectype="time"]').attr("data-time",sec_end_time)
				}
				$("*[ectype='time']").each(function(){
					$(this).yomi();
				});
				//首页秒杀商品滚动
				$(".seckill-channel").slide({mainCell:".box-bd ul",effect:"leftLoop",autoPlay:true,autoPage:true,interTime:5000,delayTime:500,vis:5,scroll:1,trigger:"click"});
			}else{
				$('[data-mode="h-seckill"]').hide();
			}
			
			$.catetopLift();
			
			$(window).scroll(function(){
				var scrollTop = $(document).scrollTop();
				var navTop = $("*[ectype='dscNav']").offset().top;  //by yanxin
					
				if(scrollTop>navTop){
					$("*[ectype='suspColumn']").addClass("show");
				}else{
					$("*[ectype='suspColumn']").removeClass("show");
				}
			});
		}
                    
		//重新加载商品模块
		$("[data-mode='guessYouLike']").each(function(){
			var _this = $(this);
			var goods_ids = _this.data("goodsid");
			var warehouse_id = $("input[name='warehouse_id']").val();
			var area_id = $("input[name='area_id']").val();
			var area_city = $("input[name='area_city']").val();
			if(goods_ids){
				Ajax.call('ajax_dialog.php?act=getguessYouLike', 'goods_ids=' + goods_ids + "&warehouse_id=" + warehouse_id + "&area_id=" + area_id + "&area_city=" + area_city, function(data){
					if(data.content){
						_this.find(".view .lift-channel ul").html(data.content);
					}
				} , 'POST', 'JSON');
			}
		});
                   
		$("li[ectype='floor_cat_content'].current").each(function(){
			 get_homefloor_cat_content(this);
		});
		
		$("[ectype='identi_floorgoods'].current").each(function(){
			 get_homefloor_cat_content(this);
		});
		
		function checked_article_cat(){
			var cat_ids = '';
			
			$('[data-mode="insertVipEdit"] .tit a').each(function(){
				var val = $(this).data('catid');
				if(cat_ids){
					cat_ids = cat_ids + "," + val;
				}else{
					cat_ids = val;
				}
			});
			
			if(cat_ids){
				Ajax.call('ajax_dialog.php?act=checked_article_cat', 'cat_ids=' + cat_ids, function(data){
					$('[data-mode="insertVipEdit"] .vip_article_cat').html(data.content);
					
					//首页信息栏 新闻文章切换 
					$(".vip-item").slide({titCell:".tit a",mainCell:".con"});
				} , 'POST', 'JSON');
			}
		}
		checked_article_cat();
                    //异步新品排行
                    $("[ectype='h-phb3']").each(function(){
			 var _this = $(this);
                             var activitytype = _this.data('activitytype');
                             var goodsids = _this.data('goodsids');
                             var warehouse_id = $("input[name='warehouse_id']").val();
			var area_id = $("input[name='area_id']").val();
                            
                             Ajax.call('ajax_dialog.php?act=checked_home_rank', 'goodsids=' + goodsids + "&activitytype=" + activitytype + "&warehouse_id=" + warehouse_id + "&area_id=" + area_id, function(data){
					_this.html(data.content);
				} , 'POST', 'JSON');
		});
    });
	
	//楼层左侧栏悬浮框
	readyLoad();
	
	//会员名称*号 by yanxin
	/*var name = $(".suspend-login a.nick_name").text();
	var star = new Array();
	var nameLen = name.length > 2 ? name.length-2:"1";
	for(var i=1;i<=nameLen;i++){
		star.push("*");
	}
	star = star.join("");
	if(name.length > 2){
		var new_name = name[0] + star + name[name.length-1];
	}else{
		var new_name = name[0] + star;
	}
	$(".suspend-login a.nick_name").text(new_name);
	*/
	//去掉悬浮框 我的购物车
	$(".attached-search-container .shopCart-con a span").text("");
	
	/*首页可视化 第八套模板 楼层左侧前后轮播 */
	aroundSilder(".floor_silder")
</script>

</body>
</html>