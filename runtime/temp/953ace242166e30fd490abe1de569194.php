<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:72:"B:\aaaweb\shop\public/../application/index\view\cart_list\cart_list.html";i:1554545196;s:55:"B:\aaaweb\shop\application\index\view\common\_meta.html";i:1554535899;s:58:"B:\aaaweb\shop\application\index\view\common\site-nav.html";i:1554532484;s:56:"B:\aaaweb\shop\application\index\view\common\header.html";i:1554542303;s:56:"B:\aaaweb\shop\application\index\view\common\footer.html";i:1554545109;s:57:"B:\aaaweb\shop\application\index\view\common\_footer.html";i:1554525139;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="Keywords" content="童攀课堂-php课堂-www.tongpankt.com" />
		<meta name="Description" content="童攀课堂-php课堂-www.tongpankt.com" />
		<title>交流群：383432579</title>
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

<body class="bg-ligtGary" data-type="cart_list1">
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
	<li>
    	<div class="dt"><a href="#">我的订单</a></div>
    </li>
    <li class="spacer"></li>
	<li>
    	<div class="dt"><a href="#">我的浏览</a></div>
    </li>
    <li class="spacer"></li>
	<li>
    	<div class="dt"><a href="#">我的收藏</a></div>
    </li>
    <li class="spacer"></li>
	<li>
    	<div class="dt"><a href="#">客户服务</a></div>
    </li>
    <li class="spacer"></li>
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
	</li>
</ul>
	    </div>
	</div>
<div class="header header-cart">
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
		    <input autocomplete="off" onkeyup="lookup(this.value);" name="keywords" id="keyword" value="内衣" class="search-text" type="text">
		    <input name="store_search_cmt" value="0" type="hidden">
		    <button type="submit" class="button button-goods" onclick="checkstore_search_cmt(0)">搜商品</button>

			<!-- cart_list -->
		    <button type="submit" class="button button-icon"><i></i></button>

		</form>
		<ul class="keyword">
			<li><a href="#">周大福</a></li>
			<li><a href="#">内衣</a></li>
			<li><a href="#">Five Plus</a></li>
			<li><a href="#">手机</a></li>
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


<div class="container">
        <div class="w w1200">
            
            <div class="cart-warp">
        <div class="cart-filter">
                    <div class="cart-stepflex">
<div class="cart-step-item curr">
    <span>1.我的购物车</span>
    <i class="iconfont icon-arrow-right-alt"></i>
</div>
<div class="cart-step-item">
    <span>2.填写订单信息</span>
    <i class="iconfont icon-arrow-right-alt"></i>
</div>
<div class="cart-step-item">
    <span>3.成功提交订单</span>
</div>
                    </div>
                    <div class="sp-area store-selector">
<div class="text-select" id="area_address" ectype="areaSelect">
    <span class="txt">配送至</span>
    <div class="selector">
			
<div class="tit">
    <span>安徽&nbsp;蚌埠&nbsp;东市区</span><i class="iconfont icon-down"></i>
</div>
<div class="area-warp" id="area_list">
	    <ul class="tab" id="select_area">
        <li onclick="region.selectArea(this, 1);" value="3" id="province_li">安徽<i class="sc-icon-right"></i></li>
        <li onclick="region.selectArea(this, 2);" value="37" id="city_li">蚌埠<i class="sc-icon-right"></i></li>
        <li class="curr" onclick="region.selectArea(this, 3);" value="" id="district_type">东市区<i class="sc-icon-right"></i></li>
    </ul>
    <div class="tab-content" id="house_list" style="display:none;" >
        <ul id="province_list">
             
    <li>
                    <a v="2" title="北京" onclick="region.getRegion(2, 2, city_list, this,0,);" href="javascript:void(0);">北京</a>
                </li>
    <li>
                    <a v="3" title="安徽" onclick="region.getRegion(3, 2, city_list, this,0,);" href="javascript:void(0);">安徽</a>
                </li>
    <li>
                    <a v="4" title="福建" onclick="region.getRegion(4, 2, city_list, this,0,);" href="javascript:void(0);">福建</a>
                </li>
    <li>
                    <a v="5" title="甘肃" onclick="region.getRegion(5, 2, city_list, this,0,);" href="javascript:void(0);">甘肃</a>
                </li>
    <li>
                    <a v="6" title="广东" onclick="region.getRegion(6, 2, city_list, this,0,);" href="javascript:void(0);">广东</a>
                </li>
    <li>
                    <a v="7" title="广西" onclick="region.getRegion(7, 2, city_list, this,0,);" href="javascript:void(0);">广西</a>
                </li>
    <li>
                    <a v="8" title="贵州" onclick="region.getRegion(8, 2, city_list, this,0,);" href="javascript:void(0);">贵州</a>
                </li>
    <li>
                    <a v="9" title="海南" onclick="region.getRegion(9, 2, city_list, this,0,);" href="javascript:void(0);">海南</a>
                </li>
    <li>
                    <a v="10" title="河北" onclick="region.getRegion(10, 2, city_list, this,0,);" href="javascript:void(0);">河北</a>
                </li>
    <li>
                    <a v="11" title="河南" onclick="region.getRegion(11, 2, city_list, this,0,);" href="javascript:void(0);">河南</a>
                </li>
    <li>
                    <a v="12" title="黑龙江" onclick="region.getRegion(12, 2, city_list, this,0,);" href="javascript:void(0);">黑龙江</a>
                </li>
    <li>
                    <a v="13" title="湖北" onclick="region.getRegion(13, 2, city_list, this,0,);" href="javascript:void(0);">湖北</a>
                </li>
    <li>
                    <a v="14" title="湖南" onclick="region.getRegion(14, 2, city_list, this,0,);" href="javascript:void(0);">湖南</a>
                </li>
    <li>
                    <a v="15" title="吉林" onclick="region.getRegion(15, 2, city_list, this,0,);" href="javascript:void(0);">吉林</a>
                </li>
    <li>
                    <a v="16" title="江苏" onclick="region.getRegion(16, 2, city_list, this,0,);" href="javascript:void(0);">江苏</a>
                </li>
    <li>
                    <a v="17" title="江西" onclick="region.getRegion(17, 2, city_list, this,0,);" href="javascript:void(0);">江西</a>
                </li>
    <li>
                    <a v="18" title="辽宁" onclick="region.getRegion(18, 2, city_list, this,0,);" href="javascript:void(0);">辽宁</a>
                </li>
    <li>
                    <a v="19" title="内蒙古" onclick="region.getRegion(19, 2, city_list, this,0,);" href="javascript:void(0);">内蒙古</a>
                </li>
    <li>
                    <a v="20" title="宁夏" onclick="region.getRegion(20, 2, city_list, this,0,);" href="javascript:void(0);">宁夏</a>
                </li>
    <li>
                    <a v="21" title="青海" onclick="region.getRegion(21, 2, city_list, this,0,);" href="javascript:void(0);">青海</a>
                </li>
    <li>
                    <a v="22" title="山东" onclick="region.getRegion(22, 2, city_list, this,0,);" href="javascript:void(0);">山东</a>
                </li>
    <li>
                    <a v="23" title="山西" onclick="region.getRegion(23, 2, city_list, this,0,);" href="javascript:void(0);">山西</a>
                </li>
    <li>
                    <a v="24" title="陕西" onclick="region.getRegion(24, 2, city_list, this,0,);" href="javascript:void(0);">陕西</a>
                </li>
    <li>
                    <a v="25" title="上海" onclick="region.getRegion(25, 2, city_list, this,0,);" href="javascript:void(0);">上海</a>
                </li>
    <li>
                    <a v="26" title="四川" onclick="region.getRegion(26, 2, city_list, this,0,);" href="javascript:void(0);">四川</a>
                </li>
    <li>
                    <a v="27" title="天津" onclick="region.getRegion(27, 2, city_list, this,0,);" href="javascript:void(0);">天津</a>
                </li>
    <li>
                    <a v="28" title="西藏" onclick="region.getRegion(28, 2, city_list, this,0,);" href="javascript:void(0);">西藏</a>
                </li>
    <li>
                    <a v="29" title="新疆" onclick="region.getRegion(29, 2, city_list, this,0,);" href="javascript:void(0);">新疆</a>
                </li>
    <li>
                    <a v="30" title="云南" onclick="region.getRegion(30, 2, city_list, this,0,);" href="javascript:void(0);">云南</a>
                </li>
    <li>
                    <a v="31" title="浙江" onclick="region.getRegion(31, 2, city_list, this,0,);" href="javascript:void(0);">浙江</a>
                </li>
    <li>
                    <a v="32" title="重庆" onclick="region.getRegion(32, 2, city_list, this,0,);" href="javascript:void(0);">重庆</a>
                </li>
    <li>
                    <a v="33" title="香港" onclick="region.getRegion(33, 2, city_list, this,0,);" href="javascript:void(0);">香港</a>
                </li>
    <li>
                    <a v="34" title="澳门" onclick="region.getRegion(34, 2, city_list, this,0,);" href="javascript:void(0);">澳门</a>
                </li>
    <li>
                    <a v="35" title="台湾" onclick="region.getRegion(35, 2, city_list, this,0,);" href="javascript:void(0);">台湾</a>
                </li>

        </ul>   
    </div>
    <div style="display: none;" class="tab-content" id="city_list_id">
        <ul id="city_list">    
       	     
 
                <li>
                    <a v="36" title="安庆" onclick="region.getRegion(36, 3, district_list, '安庆',0,);" href="javascript:void(0);">安庆</a>  
                </li>
 
                <li>
                    <a v="37" title="蚌埠" onclick="region.getRegion(37, 3, district_list, '蚌埠',0,);" href="javascript:void(0);">蚌埠</a>  
                </li>
 
                <li>
                    <a v="38" title="巢湖" onclick="region.getRegion(38, 3, district_list, '巢湖',0,);" href="javascript:void(0);">巢湖</a>  
                </li>
 
                <li>
                    <a v="39" title="池州" onclick="region.getRegion(39, 3, district_list, '池州',0,);" href="javascript:void(0);">池州</a>  
                </li>
 
                <li>
                    <a v="40" title="滁州" onclick="region.getRegion(40, 3, district_list, '滁州',0,);" href="javascript:void(0);">滁州</a>  
                </li>
 
                <li>
                    <a v="41" title="阜阳" onclick="region.getRegion(41, 3, district_list, '阜阳',0,);" href="javascript:void(0);">阜阳</a>  
                </li>
 
                <li>
                    <a v="42" title="淮北" onclick="region.getRegion(42, 3, district_list, '淮北',0,);" href="javascript:void(0);">淮北</a>  
                </li>
 
                <li>
                    <a v="43" title="淮南" onclick="region.getRegion(43, 3, district_list, '淮南',0,);" href="javascript:void(0);">淮南</a>  
                </li>
 
                <li>
                    <a v="44" title="黄山" onclick="region.getRegion(44, 3, district_list, '黄山',0,);" href="javascript:void(0);">黄山</a>  
                </li>
 
                <li>
                    <a v="45" title="六安" onclick="region.getRegion(45, 3, district_list, '六安',0,);" href="javascript:void(0);">六安</a>  
                </li>
 
                <li>
                    <a v="46" title="马鞍山" onclick="region.getRegion(46, 3, district_list, '马鞍山',0,);" href="javascript:void(0);">马鞍山</a>  
                </li>
 
                <li>
                    <a v="47" title="宿州" onclick="region.getRegion(47, 3, district_list, '宿州',0,);" href="javascript:void(0);">宿州</a>  
                </li>
 
                <li>
                    <a v="48" title="铜陵" onclick="region.getRegion(48, 3, district_list, '铜陵',0,);" href="javascript:void(0);">铜陵</a>  
                </li>
 
                <li>
                    <a v="49" title="芜湖" onclick="region.getRegion(49, 3, district_list, '芜湖',0,);" href="javascript:void(0);">芜湖</a>  
                </li>
 
                <li>
                    <a v="50" title="宣城" onclick="region.getRegion(50, 3, district_list, '宣城',0,);" href="javascript:void(0);">宣城</a>  
                </li>
 
                <li>
                    <a v="51" title="亳州" onclick="region.getRegion(51, 3, district_list, '亳州',0,);" href="javascript:void(0);">亳州</a>  
                </li>
 
                <li>
                    <a v="3401" title="合肥" onclick="region.getRegion(3401, 3, district_list, '合肥',0,);" href="javascript:void(0);">合肥</a>  
                </li>
               
      
        </ul>
    </div>
    <div class="tab-content" id="district_list_id" style="display: block;">
        <ul id="district_list">              
                
    <li>                     
                    <a v="" title="中市区" onclick="region.changedDis(409,0);" href="javascript:void(0);" id="district_409">中市区</a>  
                </li>    
    <li>                     
                    <a v="" title="东市区" onclick="region.changedDis(410,0);" href="javascript:void(0);" id="district_410">东市区</a>  
                </li>    
    <li>                     
                    <a v="" title="西市区" onclick="region.changedDis(411,0);" href="javascript:void(0);" id="district_411">西市区</a>  
                </li>    
    <li>                     
                    <a v="" title="郊区" onclick="region.changedDis(412,0);" href="javascript:void(0);" id="district_412">郊区</a>  
                </li>    
    <li>                     
                    <a v="" title="怀远县" onclick="region.changedDis(413,0);" href="javascript:void(0);" id="district_413">怀远县</a>  
                </li>    
    <li>                     
                    <a v="" title="五河县" onclick="region.changedDis(414,0);" href="javascript:void(0);" id="district_414">五河县</a>  
                </li>    
    <li>                     
                    <a v="" title="固镇县" onclick="region.changedDis(415,0);" href="javascript:void(0);" id="district_415">固镇县</a>  
                </li>    
                 
                   
        </ul>
    </div>
    <div class="mod_storage_state">商品暂时只支持配送至中国大陆地区</div>
    <input type="hidden" value="3" id="province_id" name="province_region_id">
    <input type="hidden" value="37" id="city_id" name="city_region_id">
    <input type="hidden" value="410" id="district_id" name="district_region_id">         
    <input type="hidden" value="" id="merchantId" name="merchantId">
</div>
          <input type="hidden" value="2" id="region_id" name="region_id">
        <input type="hidden" value="" id="good_id" name="good_id">
        <input type="hidden" value="0" id="user_id" name="user_id">
        <input type="hidden" value="16" id="area_id" name="area_id">
        <input type="hidden" value="3" id="province_id" name="province_region_id">
    </div>
</div>
                    </div>
                </div>
                <div class="cart-table">
                    <div class="cart-head">
<div class="column c-checkbox">
    <div class="cart-checkbox cart-all-checkbox" ectype="ckList">
        <input type="checkbox" id="cart-selectall" class="ui-checkbox checkboxshopAll" ectype="ckAll" />
        <label for="cart-selectall" class="ui-label-14">全选</label>
    </div>
</div>
<div class="column c-goods">商品</div>
<div class="column c-props"></div>
<div class="column c-price">单价（元）</div>
<div class="column c-quantity">数量</div>
<div class="column c-sum">小计</div>
<div class="column c-action">操作</div>
                    </div>
                    <div class="cart-tbody" ectype="cartTboy">
<div class="cart-item" ectype="shopItem">
    <div class="shop">
        <div class="cart-checkbox" ectype="ckList">
            <input type="checkbox" id="shopid_6" name="checkShop" class="ui-checkbox CheckBoxShop" ectype="ckShopAll" />
            <label for="shopid_6" class="ui-label-14">&nbsp;</label>
        </div>
        <div class="shop-txt">
				            <a href="#" class="shop-name self-shop-name" target="_blank"><strong>韩都衣舍</strong></a>
				            
	<a href="#" id="IM" onclick="openWin(this)" goods_id="" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

        </div>
    </div>
    <div class="item-list" ectype="itemList">
<div class="item-single">
                	<div class="item-item" ectype="item" id="product_775" data-goodsid="775">
                <div class="item-form">
                    <div class="cell s-checkbox">
<div class="cart-checkbox" ectype="ckList">
    <input type="checkbox" id="checkItem_8" value="8" name="checkItem" class="ui-checkbox" ectype="ckGoods" />
    <label for="checkItem_8" class="ui-label-14">&nbsp;</label>
</div>
                    </div>
                    <div class="cell s-goods">
<div class="goods-item">
    <div class="p-img">
                <a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169281436.jpg" width="70" height="70" /></a>
            </div>
    <div class="item-msg">
    	        <a href="#" target="_blank">韩都衣舍2017韩版女装春装新款条纹显瘦百搭宽松v领七分袖衬衫潮 领券立减/单件包邮/七天无理由退换</a>
                <div class="gds-types">
        </div>
    </div>
</div>
                    </div>
                    <div class="cell s-props">
&nbsp;                    </div>
                    <div class="cell s-price">
<strong id="goods_price_8"><em>¥</em>78.00</strong>
                    </div>
                    <div class="cell s-quantity">
<div class="amount-warp">
            <input type="text" value="1" name="goods_number[8]" id="goods_number_8" onchange="change_goods_number(8, this.value, 2, 16)" class="text buy-num" ectype="number" defaultnumber="1">
        <div class="a-btn">
    	        <a href="#" onclick="changenum(8, 1, 2, 16)"  class="btn-add"><i class="iconfont icon-up"></i></a>
        <a href="#" onclick="changenum(8, -1, 2, 16)" class="btn-reduce btn-disabled"><i class="iconfont icon-down"></i></a>
            </div>
    </div>
<div class="tc ftx-03">有货</div>
                    </div>
                    <div class="cell s-sum">
<strong id="goods_subtotal_8"><font id="_8_subtotal"><em>¥</em>78.00</font></strong>
<div class="cuttip hide">
	<span class="tit">优惠</span>
    <span class="price" id="discount_amount_8"><em>¥</em>0.00</span>
</div>
                    </div>
                    <div class="cell s-action">
<a href="#" id="remove_8" ectype="cartOperation" data-value='{"divId":"cart_remove","url":"flow.php?step=drop_goods&amp;id=8","cancelUrl":"flow.php?step=drop_to_collect&amp;id=8","recid":8,"title":"删除"}' class="cart-remove">删除</a>
<a href="#" id="store_8" ectype="cartOperation" data-value='{"divId":"cart_collect","url":"flow.php?step=drop_to_collect&amp;id=8","recid":8,"title":"关注"}' class="cart-store">收藏</a>
                    </div>
                </div>
            </div>
                </div>
                    </div>
</div>
<div class="cart-item" ectype="shopItem">
    <div class="shop">
        <div class="cart-checkbox" ectype="ckList">
            <input type="checkbox" id="shopid_0" name="checkShop" class="ui-checkbox CheckBoxShop" ectype="ckShopAll" />
            <label for="shopid_0" class="ui-label-14">&nbsp;</label>
        </div>
        <div class="shop-txt">
			<a href="#" class="shop-name self-shop-name">童攀课堂</a>
				            
	<a href="#" id="IM" onclick="openWin(this)" goods_id="775" class="p-kefu p-c-violet"><i class="iconfont icon-kefu"></i></a>

        </div>
    </div>
    <div class="item-list" ectype="itemList">
<div class="item-single">
                	<div class="item-item" ectype="item" id="product_800" data-goodsid="800">
                <div class="item-form">
                    <div class="cell s-checkbox">
<div class="cart-checkbox" ectype="ckList">
    <input type="checkbox" id="checkItem_7" value="7" name="checkItem" class="ui-checkbox" ectype="ckGoods" />
    <label for="checkItem_7" class="ui-label-14">&nbsp;</label>
</div>
                    </div>
                    <div class="cell s-goods">
<div class="goods-item">
    <div class="p-img">
                <a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490174894779.jpg" width="70" height="70" /></a>
            </div>
    <div class="item-msg">
    	        <a href="#" target="_blank">2017韩版女装夏装新款A字宽松松紧腰印花连衣裙DT7039乾 舒适松紧腰 A字版型 时尚印花</a>
                <div class="gds-types">
        </div>
    </div>
</div>
                    </div>
                    <div class="cell s-props">
&nbsp;                    </div>
                    <div class="cell s-price">
<strong id="goods_price_7"><em>¥</em>166.00</strong>
                    </div>
                    <div class="cell s-quantity">
<div class="amount-warp">
            <input type="text" value="1" name="goods_number[7]" id="goods_number_7" onchange="change_goods_number(7, this.value, 2, 16)" class="text buy-num" ectype="number" defaultnumber="1">
        <div class="a-btn">
    	        <a href="#" onclick="changenum(7, 1, 2, 16)"  class="btn-add"><i class="iconfont icon-up"></i></a>
        <a href="#" onclick="changenum(7, -1, 2, 16)" class="btn-reduce btn-disabled"><i class="iconfont icon-down"></i></a>
            </div>
    </div>
<div class="tc ftx-03">有货</div>
                    </div>
                    <div class="cell s-sum">
<strong id="goods_subtotal_7"><font id="_7_subtotal"><em>¥</em>166.00</font></strong>
<div class="cuttip hide">
	<span class="tit">优惠</span>
    <span class="price" id="discount_amount_7"><em>¥</em>0.00</span>
</div>
                    </div>
                    <div class="cell s-action">
<a href="#" id="remove_7" ectype="cartOperation" data-value='{"divId":"cart_remove","url":"flow.php?step=drop_goods&amp;id=7","cancelUrl":"flow.php?step=drop_to_collect&amp;id=7","recid":7,"title":"删除"}' class="cart-remove">删除</a>
<a href="#" id="store_7" ectype="cartOperation" data-value='{"divId":"cart_collect","url":"flow.php?step=drop_to_collect&amp;id=7","recid":7,"title":"关注"}' class="cart-store">收藏</a>
                    </div>
                </div>
            </div>
                </div>
                    </div>
</div>
                    </div>
                    <div class="cart-tfoot">
                    	<div class="cart-toolbar">
	<div class="w w1200">
    <div class="cart-checkbox cart-all-checkbox" ectype="ckList">
        <input type="checkbox" id="toggle-checkboxes-down" class="ui-checkbox checkboxshopAll" ectype="ckAll" />
        <label for="toggle-checkboxes-down" class="ui-label-14">全选</label>
    </div>
	    <div class="operation">
        <a href="#" class="cart-remove-batch" data-dialog="remove_collect_dialog" data-divid="cart-remove-batch" data-removeurl="ajax_dialog.php?act=delete_cart_goods" data-collecturl="ajax_dialog.php?act=drop_to_collect" data-title="删除">删除选中的商品</a>
        <a href="#" class="cart-follow-batch" data-dialog="remove_collect_dialog" data-divid="cart-collect-batch" data-removeurl="ajax_dialog.php?act=delete_cart_goods" data-collecturl="ajax_dialog.php?act=drop_to_collect" data-title="关注">移到我的收藏</a>
    </div>
    <div class="toolbar-right">
        <div class="comm-right">
            <div class="btn-area">
                <form name="formCart" method="post" action="flow.php" onsubmit="return get_toCart();">
                    <input name="goPay" type="submit" class="submit-btn" value="去支付"  id="go_pay" data-url="flow.php"/>
                    <input name="step" value="checkout" type="hidden" />
                    <input name="store_seller" value="" type="hidden" id="cart_store_seller" />
                    <input name="cart_value" id="cart_value" value="" type="hidden" />
	<input name="goods_ru" id="goods_ru" value="" type="hidden" />
                </form>
            </div>
            <div class="price-sum" id="total_desc">
                <span class="txt">总价(不含运费)：</span>
                <span class="price sumPrice" id="cart_goods_amount" ectype="goods_total"></span>
            </div>
            <div class="reduce-sum">
                <span class="txt">已节省：</span>
                <span class="price totalRePrice" id="save_total_amount" ectype="save_total"></span>
            </div>
            <div class="amount-sum">已选择<em class="cart_check_num" ectype="cartNum">0</em>件商品</div>
        </div>
    </div>
    </div>
                    	</div>
                    </div>
                </div>
            </div>

            <div class="p-panel-main c-history">
                <div class="ftit ftit-delr"><h3>猜你喜欢</h3></div>
                <div class="gl-list clearfix">
                    <ul class="clearfix">
<li class="opacity_img">
    <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489109583798.jpg" width="190" height="190"></a></div>
    <div class="p-price"><em>¥</em>555.00</div>
    <div class="p-name"><a href="#" target="_blank">【情侣款】Camel骆驼男靴 时尚潮流英伦风马丁靴高帮皮靴 爆卖1万双！ 情侣马丁靴 好评如潮</a></div>
    <div class="p-num">已售<em>35</em>件</div>
</li>
<li class="opacity_img">
    <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489109633806.jpg" width="190" height="190"></a></div>
    <div class="p-price"><em>¥</em>1000.00</div>
    <div class="p-name"><a href="#" target="_blank">春季马丁靴男真皮男靴黄靴工装军靴韩版短靴沙漠靴高帮男鞋大黄靴 头层牛皮</a></div>
    <div class="p-num">已售<em>2</em>件</div>
</li>
<li class="opacity_img">
    <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489108999364.jpg" width="190" height="190"></a></div>
    <div class="p-price"><em>¥</em>200.00</div>
    <div class="p-name"><a href="#" target="_blank">特步女鞋2017春季新款运动鞋休闲鞋女慢跑步鞋旅游鞋轻便舒适时尚 早春特惠 爆款休闲女鞋 赠运费险</a></div>
    <div class="p-num">已售<em>2</em>件</div>
</li>
<li class="opacity_img">
    <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489102753231.jpg" width="190" height="190"></a></div>
    <div class="p-price"><em>¥</em>300.00</div>
    <div class="p-name"><a href="#" target="_blank">新款韩版chic学生宽松短款外套上衣字母长袖连帽套头卫衣女潮</a></div>
    <div class="p-num">已售<em>2</em>件</div>
</li>
<li class="opacity_img">
    <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489109337889.jpg" width="190" height="190"></a></div>
    <div class="p-price"><em>¥</em>330.00</div>
    <div class="p-name"><a href="#" target="_blank">igtt铝框行李箱拉杆箱旅行箱万向轮男女20/24/26寸密码箱登机箱子 铝合金框 加强密码锁 万向轮 终身保修</a></div>
    <div class="p-num">已售<em>1</em>件</div>
</li>
<li class="opacity_img">
    <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489109282145.jpg" width="190" height="190"></a></div>
    <div class="p-price"><em>¥</em>250.00</div>
    <div class="p-name"><a href="#" target="_blank">波米铝框拉杆箱万向轮密码旅行箱子20/24寸行李箱女登机箱男26/28 顺丰速运赠运费险赠十礼品终身质保</a></div>
    <div class="p-num">已售<em>1</em>件</div>
</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        
        
    
        
    
    <div class="hide">
    
    <div id="dialog_remove" class="hide">
        <div class="tip-box icon-box">
            <span class="warn-icon m-icon"></span>
            <div class="item-fore">
                <h3 class="ftx-04">删除商品？</h3>
                <div class="ftx-03">您可以选择移到收藏，或删除商品。</div>
            </div>
        </div>
    </div>
    
    <div id="dialog_collect" class="hide">
        <div class="tip-box icon-box">
            <span class="warn-icon m-icon"></span>
            <div class="item-fore">
                <h3 class="ftx-04">移到收藏</h3>
                <div class="ftx-03">移动后选中商品将不在购物车中显示。</div>
            </div>
        </div>
    </div>
    
    <div id="flow_add_cart" class="hide">
        <div class="tip-box icon-box">
            <span class="warn-icon m-icon"></span>
            <div class="item-fore">
                <h3 class="ftx-04">请至少选中一件商品！</h3>
            </div>
        </div>
    </div>
    
    <div id="cart_gift_goods" class="hide">
        <div class="tip-box icon-box">
            <span class="warn-icon m-icon"></span>
            <div class="item-fore">
                <h3 class="ftx-04 rem">最多领取<em ectype="giftNumber"></em>个商品</h3>
            </div>
        </div>
    </div>
    
    
    
    
    <div id="set_default" class="hide">
        <div class="tip-box icon-box">
            <span class="warn-icon m-icon"></span>
            <div class="item-fore">
                <h3 class="ftx-04">您确定要设置为默认收货地址吗？</h3>
            </div>
        </div>
    </div>
    
    <div id="del_address" class="hide">
        <div class="tip-box icon-box">
            <span class="warn-icon m-icon"></span>
            <div class="item-fore">
                <h3 class="ftx-04">你确认要删除该收货地址吗？</h3>
            </div>
        </div>
    </div>
    
    <div id="no_address_cart" class="hide">
        <div class="tip-box icon-box">
            <span class="warn-icon m-icon"></span>
            <div class="item-fore">
                <h3 class="ftx-04">您还没有选择收货地址！</h3>
            </div>
        </div>
    </div>
    
    <div id="no_goods_cart" class="hide">
        <div class="tip-box icon-box">
            <span class="warn-icon m-icon"></span>
            <div class="item-fore">
                <h3 class="ftx-04">您的购物车中没有商品！</h3>
            </div>
        </div>
    </div>
    
    <div id="cart_address_not" class="hide">
        <div class="tip-box icon-box">
            <span class="warn-icon m-icon"></span>
            <div class="item-fore">
                <h3 class="ftx-04">您还没有选择收货地址！</h3>
            </div>
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
			<div class="help-item">
			    <h3>新手上路 </h3>
			    <ul>
			    	<li><a href="#">售后流程</a></li>
					<li><a href="#">购物流程</a></li>
					<li><a href="#">订购方式</a></li>
			    </ul>
			</div>
			<div class="help-item">
			    <h3>配送与支付 </h3>
			    <ul>
			        <li><a href="#">货到付款区域</a></li>
					<li><a href="#">配送支付智能查询</a></li>
					<li><a href="#">支付方式说明</a></li>
			    </ul>
			</div>
			<div class="help-item">
			    <h3>会员中心</h3>
			    <ul>
			        <li><a href="#">资金管理</a></li>
					<li><a href="#">我的收藏</a></li>
					<li><a href="#">我的订单</a></li>
			    </ul>
			</div>
			<div class="help-item">
			    <h3>服务保证 </h3>
			    <ul>
			    	<li><a href="#">退换货原则</a></li>
					<li><a href="#">售后服务保证</a></li>
					<li><a href="#">产品质量保证</a></li>
			    </ul>
			</div>
			<div class="help-item">
			    <h3>联系我们 </h3>
			    <ul>
			    	<li><a href="#">网站故障报告</a></li>
					<li><a href="#">选机咨询</a></li>
					<li><a href="#">投诉与建议</a></li>
				</ul>
			</div>
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
			<a href="#">首页</a><span class="spacer"></span>
			<a href="#">隐私保护</a><span class="spacer"></span>
			<a href="#">联系我们</a><span class="spacer"></span>
			<a href="#">免责条款</a><span class="spacer"></span>			 
			<a href="#">公司简介</a><span class="spacer"></span>
			<a href="#">意见反馈</a> 
        </p>
    
    	<p>
    		<span>©&nbsp;2015-2017&nbsp;tongpankt.com&nbsp;版权所有&nbsp;&nbsp;</span><span>ICP备案证书号:</span>
    		<a href="#">豫ICP备*****号-1</a>&nbsp;<a href="#">POWERED by童攀课堂</a>
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
    <script type="text/javascript" src="/static/index/js/asyLoadfloor.js"></script>
	<script type="text/javascript" src="/static/index/js/jquery.purebox.js"></script>

    <script type="text/javascript" src="/static/index/js/common.js"></script>
    <script type="text/javascript" src="/static/index/js/compare.js"></script>
    <script type="text/javascript" src="/static/index/js/magiczoomplus.js"></script>
    <script type="text/javascript" src="/static/index/js/calendar.php?lang="></script>
    <script type="text/javascript" src="/static/index/js/perfect-scrollbar.min.js"></script>
    <script type="text/javascript" src="/static/index/js/goodsFittings.js"></script>



    <!-- login -->
    <script type="text/javascript" src="/static/index/js/user.js"></script>
    <script type="text/javascript" src="/static/index/js/user_register.js"></script>
    <script type="text/javascript" src="/static/index/js/sms.js"></script>


    <!-- cart_list -->
    <script type="text/javascript" src="/static/index/js/shopping_flow.js"></script>
    <script type="text/javascript" src="/static/index/js/jquery.nyroModal.js"></script>
    <script type="text/javascript" src="/static/index/js/region.js"></script>
    <script type="text/javascript" src="/static/index/js/checkAll.js"></script>   

    <!-- category -->
    <script type="text/javascript" src="./js/jd_choose.js"></script>

    <!-- m_index -->
    <script type="text/javascript" src="./js/jquery.validation.min.js"></script>
    <script type="text/javascript" src="./js/ZeroClipboard.js"></script>

 
    <script type="text/javascript">
    	function changenum(rec_id, diff, warehouse_id, area_id, favourable_id){
            var cValue = $("#cart_value").val();
            var goods_number = Number($('#goods_number_' + rec_id).val()) + Number(diff);    
            if(goods_number < 1){
				pbDialog(json_languages.Purchase_restrictions,"",0)
            }else{
                change_goods_number(rec_id,goods_number, warehouse_id, area_id, cValue, favourable_id);
            }
        }
		
        function change_goods_number(rec_id, goods_number, warehouse_id, area_id, cValue, favourable_id){
            if(cValue != "" || cValue == 'undefined'){
               var cValue = $("#cart_value").val(); 
            }
            if(goods_number == 0){
                //pbDialog("数量不能为0","",0);
                goods_number = 1;
            }

            var items = $("#checkItem_" +rec_id).parents("*[ectype='promoItem']");
            var input = items.find("*[ectype='ckGoods']");
            var str ='';
            input.each(function(){
                if($(this).prop('checked')== true){
                    var val = $(this).val();
                    str += val + ',';
                }
            });
            str = str.substring(str.length-1,0);
            
            Ajax.call('flow.php?step=ajax_update_cart', 'rec_id=' + rec_id + '&sel_id=' + str + '&sel_flag=' + 'cart_sel_flag' +'&goods_number=' + goods_number +'&cValue=' + cValue +'&warehouse_id=' + warehouse_id +'&area_id=' + area_id +'&favourable_id=' + favourable_id, change_goods_number_response, 'POST','JSON');                
        }
		
        function change_goods_number_response(result)
        {
            var rec_id = result.rec_id;           
            if(result.error == 0){
                $('#goods_number_' +rec_id).val(result.goods_number);//更新数量
                $('#goods_subtotal_' +rec_id).html(result.goods_subtotal);//更新小计
				
				if(result.dis_amount > 0){
$('#discount_amount_' +rec_id).parents('.cuttip').removeClass("hide");
				}else{
$('#discount_amount_' +rec_id).parents('.cuttip').addClass("hide");
				}
				
				$('#discount_amount_' +rec_id).html(result.discount_amount);//商品优惠价格
				
                if(result.goods_number == 1){
                    $('#goods_number_' +rec_id).parents('.amount-warp').find('.btn-reduce').addClass("btn-disabled");
                }else{
                    $('#goods_number_' +rec_id).parents('.amount-warp').find('.btn-reduce').removeClass("btn-disabled");
                }
                if(result.goods_number <= 0){
                    $('#tr_goods_' +rec_id).style.display = 'none'; //数量为零则隐藏所在行
                    $('#tr_goods_' +rec_id).innerHTML = '';
                }
                $('#total_desc').html(result.flow_info);//更新合计
                if ($('ECS_CARTINFO')){
                    $('#ECS_CARTINFO').html(result.cart_info); //更新购物车数量
                }
        
                if(result.group.length > 0){
                    for(var i=0; i<result.group.length; i++){
$("#" + result.group[i].rec_group).html(result.group[i].rec_group_number);//配件商品数量
$("#" + result.group[i].rec_group_talId).html(result.group[i].rec_group_subtotal);//配件商品金额
                    }
                }
                
                $("#goods_price_" + rec_id).html(result.goods_price);
                $("*[ectype='save_total']").html(result.save_total_amount); //优惠节省总金额
                $("*[ectype='cartNum']").html(result.subtotal_number); //商品总数
        
                // 如果是优惠活动内的商品，更新优惠活动局部 qin
                if (result.act_id){
                    $("#product_promo_" + result.ru_id + "_" + result.act_id).html(result.favourable_box_content);
                }
            }else if(result.message != ''){
				//更新数量
                $('#goods_number_' +rec_id).val(result.cart_Num);
				pbDialog(result.message," ",0,"",90,10);
            }                
        }
		
		//购物车悬浮框
		cartScroll();
		
		//超值礼包
		$(".package_goods ul").perfectScrollbar("destroy");
		$(".package_goods ul").perfectScrollbar();
    </script>
    
	</body>
</html>