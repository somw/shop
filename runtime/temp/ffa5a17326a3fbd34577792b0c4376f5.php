<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:74:"B:\aaaweb\shop\public/../application/index\view\goods_list\goods_list.html";i:1554546149;s:55:"B:\aaaweb\shop\application\index\view\common\_meta.html";i:1554535899;s:58:"B:\aaaweb\shop\application\index\view\common\site-nav.html";i:1554532484;s:56:"B:\aaaweb\shop\application\index\view\common\header.html";i:1554542303;s:53:"B:\aaaweb\shop\application\index\view\common\nav.html";i:1554544260;s:59:"B:\aaaweb\shop\application\index\view\common\mui_right.html";i:1554545940;s:56:"B:\aaaweb\shop\application\index\view\common\footer.html";i:1554545109;s:57:"B:\aaaweb\shop\application\index\view\common\_footer.html";i:1554525139;}*/ ?>
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
<body data-type="goods_list1">
	<div class="site-nav" id="site-nav">
    	<div class="w w1390">
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
	<div class="header">
	    <div class="w w1390">
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
<div class="nav dsc-zoom">
    <div class="w w1390">
        <div class="categorys site-mast">
    <div class="categorys-type"><a href="#" target="_blank">全部商品分类</a></div>
    <div class="categorys-tab-content">
    	<div class="categorys-items" id="cata-nav">
            <div class="categorys-item" ectype="cateItem" data-id="858" data-eveval="0">
		        <div class="item item-content">
		    		<i class="iconfont icon-ele"></i>
		    		<div class="categorys-title">
		                <strong><a href="#" target="_blank">家用电器</a></strong>
		            	<span>
		            		<a href="#" target="_blank">大家电</a>
		            		<a href="#" target="_blank">生活电器</a>
		            	</span>
		            </div>
		        </div>
		        <div class="categorys-items-layer" ectype="cateLayer">
		        	<div class="cate-layer-con clearfix">
		        		<div class="cate-layer-left">
		        			<div class="cate_channel" ectype="channels_858"></div>
		        			<div class="cate_detail" ectype="subitems_858"></div>
		        		</div>
		        		<div class="cate-layer-rihgt" ectype="brands_858"></div>
		        	</div>
		        </div>
		        <div class="clear"></div>
		    </div>
		    <div class="categorys-item" ectype="cateItem" data-id="3" data-eveval="0">
		    	<div class="item item-content">
		    		<i class="iconfont icon-digital"></i>
		    		<div class="categorys-title">
		    			<strong>
		    				<a href="#" target="_blank" class="division_cat">手机</a>、
		    				<a href="#" target="_blank" class="division_cat">数码</a>、
		    				<a href="#" target="_blank" class="division_cat">通信</a>            
		    			</strong>
		    			<span>
		    				<a href="#" target="_blank">智能设备</a>
		    				<a href="#" target="_blank">数码配件</a>
		    			</span>
		    		</div>
		    	</div>
		    	<div class="categorys-items-layer" ectype="cateLayer">
		    		<div class="cate-layer-con clearfix">
		    			<div class="cate-layer-left">
		    				<div class="cate_channel" ectype="channels_3"></div>
		    				<div class="cate_detail" ectype="subitems_3"></div>
		    			</div>
		    			<div class="cate-layer-rihgt" ectype="brands_3"></div>
		    		</div>
		    	</div>
		    	<div class="clear"></div>
		    </div>
		    <div class="categorys-item" ectype="cateItem" data-id="4" data-eveval="0">
		    	<div class="item item-content">
		    		<i class="iconfont icon-computer"></i>
		    		<div class="categorys-title">
		    			<strong>
		    				<a href="#" target="_blank">电脑、办公</a>
		    			</strong>
		    			<span>
		    				<a href="#" target="_blank">服务产品</a>
		    				<a href="#" target="_blank">电脑整机</a>
		    			</span>
		    		</div>
		    	</div>
		    	<div class="categorys-items-layer" ectype="cateLayer">
		    		<div class="cate-layer-con clearfix">
		    			<div class="cate-layer-left">
		    				<div class="cate_channel" ectype="channels_4"></div>
		    				<div class="cate_detail" ectype="subitems_4"></div>
		    			</div>
		    			<div class="cate-layer-rihgt" ectype="brands_4"></div>
		    		</div>
		    	</div>
		    	<div class="clear"></div>
		    </div>
		    <div class="categorys-item" ectype="cateItem" data-id="5" data-eveval="0">
		    	<div class="item item-content">
		    		<i class="iconfont icon-bed"></i>
		    		<div class="categorys-title">
		    			<strong>
		    				<a href="#" target="_blank">家居、家具、家装、厨具</a>
		    			</strong>
		    			<span>
		    				<a href="#" target="_blank">厨具</a>
		    				<a href="#" target="_blank">家装建材</a>
		    			</span>
		    		</div>
		    	</div>
		    	<div class="categorys-items-layer" ectype="cateLayer">
		    		<div class="cate-layer-con clearfix">
		    			<div class="cate-layer-left">
		    				<div class="cate_channel" ectype="channels_5"></div>
		    				<div class="cate_detail" ectype="subitems_5"></div>
		    			</div>
		    			<div class="cate-layer-rihgt" ectype="brands_5"></div>
		    		</div>
		    	</div>
		    	<div class="clear"></div>
		    </div>
		    <div class="categorys-item" ectype="cateItem" data-id="6" data-eveval="0">
		    	<div class="item item-content">
		    		<i class="iconfont icon-clothes"></i>
		    		<div class="categorys-title">
		    			<strong>
		    				<a href="#" target="_blank">男装、女装、内衣</a>
		    			</strong>
		    			<span>
		    				<a href="#" target="_blank">女装</a>
		    				<a href="#" target="_blank">男装</a>
		    			</span>
		    		</div>
		    	</div>
		    	<div class="categorys-items-layer" ectype="cateLayer">
		    		<div class="cate-layer-con clearfix">
		    			<div class="cate-layer-left">
		    				<div class="cate_channel" ectype="channels_6"></div>
		    				<div class="cate_detail" ectype="subitems_6"></div>
		    			</div>
		    			<div class="cate-layer-rihgt" ectype="brands_6"></div>
		    		</div>
		    	</div>
		    	<div class="clear"></div>
		    </div>
		    <div class="categorys-item" ectype="cateItem" data-id="8" data-eveval="0">
		    	<div class="item item-content">
		    		<i class="iconfont icon-shoes"></i>
		    		<div class="categorys-title">
		    			<strong>
		    				<a href="#" target="_blank">鞋靴、箱包、钟表、奢侈品</a>
		    			</strong>
		    			<span>
		    				<a href="#" target="_blank">奢侈品</a>
		    				<a href="#" target="_blank">功能箱包</a>
		    			</span>
		    		</div>
		    	</div>
		    	<div class="categorys-items-layer" ectype="cateLayer">
		    		<div class="cate-layer-con clearfix">
		    			<div class="cate-layer-left">
		    				<div class="cate_channel" ectype="channels_8"></div>
		    				<div class="cate_detail" ectype="subitems_8"></div>
		    			</div>
		    			<div class="cate-layer-rihgt" ectype="brands_8"></div>
		    		</div>
		    	</div>
		    	<div class="clear"></div>
		    </div>
		    <div class="categorys-item" ectype="cateItem" data-id="860" data-eveval="0">
		    	<div class="item item-content">
		    		<i class="iconfont icon-heal"></i>
		    		<div class="categorys-title">
		    			<strong>
		    				<a href="#" target="_blank">个人化妆、清洁用品</a>
		    			</strong>
		    			<span>
		    				<a href="#" target="_blank">面部护肤</a>
		    				<a href="#" target="_blank">洗发护发</a>
		    			</span>
		    		</div>
		    	</div>
		    	<div class="categorys-items-layer" ectype="cateLayer">
		    		<div class="cate-layer-con clearfix">
		    			<div class="cate-layer-left">
		    				<div class="cate_channel" ectype="channels_860"></div>
		    				<div class="cate_detail" ectype="subitems_860"></div>
		    			</div>
		    			<div class="cate-layer-rihgt" ectype="brands_860"></div>
		    		</div>
		    	</div>
		    	<div class="clear"></div>
		    </div>
		</div>
	</div>
</div>
<div class="nav-main" id="nav">
    <ul class="navitems">
        <li><a href="#" class="curr">首页</a></li>
        <li><a href="#"  >女装街</a></li>
        <li><a href="#"  >男人柜</a></li>
        <li><a href="#"  >品牌专区</a></li>
        <li><a href="#"  >聚划算</a></li>
        <li><a href="#"  >积分商城</a></li>
	</ul>
</div>
    </div>
</div>
    
<div class="hot-sales">
    <div class="hotsale w1390 w">
        <div class="hatsale-mt">热门推荐</div>
        <div class="bd">
            <ul>
            	    <li>
                    <div class="item">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489100550574.jpg" /></a></div>
                        <div class="p-name"><a href="#" title='法国DK正品文胸套装女内衣性感蕾丝聚拢深V调整型小胸品牌收副乳 法国正品 蕾丝性感 原装包装 送女神必备' target="_blank">法国DK正品文胸套装女内衣性感蕾丝聚拢深V调整型小胸品牌收副乳 法国正品 蕾丝性感 原装包装 送女神必备</a></div>
                        <div class="p-price">
                        	    <em>¥</em>258.00                        </div>
                        <div class="p-btn"><a class="btn sc-redBg-btn" href="goods.php?id=630">立即购买</a></div>
                    </div>
                </li>
        <li>
                    <div class="item">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169030833.jpg" /></a></div>
                        <div class="p-name"><a href="#" title='韩都衣舍2017韩版女装夏装新款时尚修身显瘦圆领条纹T恤OGY7711娋 显瘦版型 舒适面料 条纹元素' target="_blank">韩都衣舍2017韩版女装夏装新款时尚修身显瘦圆领条纹T恤OGY7711娋 显瘦版型 舒适面料 条纹元素</a></div>
                        <div class="p-price">
                        	    <em>¥</em>88.00                        </div>
                        <div class="p-btn"><a class="btn sc-redBg-btn" href="goods.php?id=768">立即购买</a></div>
                    </div>
                </li>
        <li>
                    <div class="item">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169216444.jpg" /></a></div>
                        <div class="p-name"><a href="#" title='韩都衣舍2016新款秋冬款长袖连衣裙宽松学生冬季内搭打底裙子韩版 领券下单立减/单件包邮/先拍先发货！' target="_blank">韩都衣舍2016新款秋冬款长袖连衣裙宽松学生冬季内搭打底裙子韩版 领券下单立减/单件包邮/先拍先发货！</a></div>
                        <div class="p-price">
                        	    <em>¥</em>159.00                        </div>
                        <div class="p-btn"><a class="btn sc-redBg-btn" href="goods.php?id=773">立即购买</a></div>
                    </div>
                </li>
        <li class="last">
                    <div class="item">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169250846.jpg" /></a></div>
                        <div class="p-name"><a href="#" title='韩都衣舍秋冬喇叭长袖针织衫毛衣女套头宽松纯色百搭学生韩版打底 领券下单立减/单件包邮/先拍先发货！' target="_blank">韩都衣舍秋冬喇叭长袖针织衫毛衣女套头宽松纯色百搭学生韩版打底 领券下单立减/单件包邮/先拍先发货！</a></div>
                        <div class="p-price">
                        	    <em>¥</em>159.00                        </div>
                        <div class="p-btn"><a class="btn sc-redBg-btn" href="goods.php?id=774">立即购买</a></div>
                    </div>
                </li>
                        </ul>
            <a href="#" class="prev"></a>
            <a href="#" class="next"></a>
        </div>
    </div>
</div>
	<div class="w w1390">
    	<div class="crumbs-nav">
	<div class="crumbs-nav-main clearfix">
				<div class="crumbs-nav-item">
			<div class="menu-drop">
				<div class="trigger">
					<a href="#"><span>男装、女装、内衣</span></a>
					<i class="iconfont icon-down"></i>
				</div>
                				<div class="menu-drop-main">
					<ul>
			<li><a href="#">女装</a></li>
			<li><a href="#">男装</a></li>
			<li><a href="#">内衣</a></li>
			<li><a href="#">服饰配件</a></li>
			<li><a href="#">运动户外</a></li>
		</ul>
				</div>
                			</div>
			<i class="iconfont icon-right"></i>		</div>
				<div class="crumbs-nav-item">
			<div class="menu-drop">
				<div class="trigger">
					<a href="#"><span>女装</span></a>
					<i class="iconfont icon-down"></i>
				</div>
                				<div class="menu-drop-main">
					<ul>
			<li><a href="#">连衣裙</a></li>
			<li><a href="#">蕾丝/雪纺衫</a></li>
			<li><a href="#">衬衫</a></li>
			<li><a href="#">T恤</a></li>
			<li><a href="#">半身裙</a></li>
			<li><a href="#">休闲裤</a></li>
			<li><a href="#">短裤</a></li>
			<li><a href="#">牛仔裤</a></li>
			<li><a href="#">针织衫</a></li>
			<li><a href="#">吊带/背心</a></li>
			<li><a href="#">打底衫</a></li>
			<li><a href="#">打底裤</a></li>
			<li><a href="#">正装裤</a></li>
			<li><a href="#">小西服</a></li>
			<li><a href="#">马甲</a></li>
			<li><a href="#">风衣</a></li>
			<li><a href="#">羊毛衫</a></li>
			<li><a href="#">羊绒衫</a></li>
			<li><a href="#">短外套</a></li>
			<li><a href="#">棉服</a></li>
			<li><a href="#">毛呢大衣</a></li>
			<li><a href="#">加绒裤</a></li>
			<li><a href="#">羽绒服</a></li>
			<li><a href="#">皮草</a></li>
			<li><a href="#">真皮皮衣</a></li>
			<li><a href="#">仿皮皮衣</a></li>
			<li><a href="#">旗袍/唐装</a></li>
			<li><a href="#">礼服</a></li>
			<li><a href="#">婚纱</a></li>
			<li><a href="#">中老年女装</a></li>
			<li><a href="#">大码女装</a></li>
		</ul>
				</div>
                			</div>
					</div>
					</div>
</div>
    </div>
    <div class="container">
    	<div class="w w1390">
            <div class="selector">
                
<div class="right-extra" rewrite=0>
    <div class="u_cloose">
        <dl>
            <dt>已选条件：</dt>
            <dd>
    &nbsp;





                
            
</dd>
            <dd class="give_up_all"><a href="#" class="ftx-05">全部撤销</a></dd>
        </dl>
    </div>
	<div class="goods_list">
		<ul class="attr_father">
			
                        <li class="s-line">
                <div class="s-l-wrap brand_img attr_list">
                    <div class="s-l-tit brand_name_l">品牌：</div>
                    <div class="s-l-value brand_select_more">
                        <div class="all_a_z">
<ul class="a_z">
    <li class="all_brand curr">所有品牌</li>
        <li data-key="A">A</li>
        <li data-key="B">B</li>
        <li data-key="C">C</li>
        <li data-key="D">D</li>
        <li data-key="E">E</li>
        <li data-key="F">F</li>
        <li data-key="G">G</li>
        <li data-key="H">H</li>
        <li data-key="I">I</li>
        <li data-key="J">J</li>
        <li data-key="K">K</li>
        <li data-key="L">L</li>
        <li data-key="M">M</li>
        <li data-key="N">N</li>
        <li data-key="O">O</li>
        <li data-key="P">P</li>
        <li data-key="Q">Q</li>
        <li data-key="R">R</li>
        <li data-key="S">S</li>
        <li data-key="T">T</li>
        <li data-key="U">U</li>
        <li data-key="V">V</li>
        <li data-key="W">W</li>
        <li data-key="X">X</li>
        <li data-key="Y">Y</li>
        <li data-key="Z">Z</li>
        <li class="other_brand">其他</li>
</ul>
                        </div>
                        <div class="wrap_brand">  
<div class="brand_div">
        <div class="brand_img_word" brand ="E">
                    <a href="#">
            	<img src="/static/index/img/1490071974970349584.jpg" alt="esprit" title="esprit"> 
            	<span>esprit</span>
            </a>
            </div>
        <div class="brand_img_word" brand ="X">
                    <a href="#">
            	<img src="/static/index/img/1490072756032175204.jpg" alt="喜瑞" title="喜瑞"> 
            	<span>喜瑞</span>
            </a>
            </div>
        <div class="brand_img_word" brand ="L">
                    <a href="#">
            	<img src="/static/index/img/1490072860522023692.jpg" alt="乐力" title="乐力"> 
            	<span>乐力</span>
            </a>
            </div>
        <div class="brand_img_word" brand ="L">
                    <a href="#">
            	<img src="/static/index/img/1490074030328949587.jpg" alt="LG" title="LG"> 
            	<span>LG</span>
            </a>
            </div>
        <div class="brand_img_word" brand ="H">
                    <a href="#">
            	<img src="/static/index/img/1490073591535005714.jpg" alt="鸿星尔克" title="鸿星尔克"> 
            	<span>鸿星尔克</span>
            </a>
            </div>
        <div class="brand_img_word" brand ="H">
                    <a href="#">
            	<img src="/static/index/img/1490073577683159021.jpg" alt="华帝" title="华帝"> 
            	<span>华帝</span>
            </a>
            </div>
        <div class="brand_img_word" brand ="M">
                    <a href="#">
            	<img src="/static/index/img/1490228075580091113.jpg" alt="麦斯威尔" title="麦斯威尔"> 
            	<span>麦斯威尔</span>
            </a>
            </div>
        <div class="brand_img_word" brand ="M">
                    <a href="#">
            	<img src="/static/index/img/1490074901892372216.jpg" alt="美的" title="美的"> 
            	<span>美的</span>
            </a>
            </div>
    </div>
                        </div>
                        <div class="zimu_list">
<ul class="get_more" >
        <li class="is_no" brand ="E" url_id="71"><span class="choose_ico"></span><a class="goods_brand_name" data-url="category.php?id=347&amp;brand=71">esprit</a></li>
        <li class="is_no" brand ="X" url_id="85"><span class="choose_ico"></span><a class="goods_brand_name" data-url="category.php?id=347&amp;brand=85">喜瑞</a></li>
        <li class="is_no" brand ="L" url_id="94"><span class="choose_ico"></span><a class="goods_brand_name" data-url="category.php?id=347&amp;brand=94">乐力</a></li>
        <li class="is_no" brand ="L" url_id="113"><span class="choose_ico"></span><a class="goods_brand_name" data-url="category.php?id=347&amp;brand=113">LG</a></li>
        <li class="is_no" brand ="H" url_id="149"><span class="choose_ico"></span><a class="goods_brand_name" data-url="category.php?id=347&amp;brand=149">鸿星尔克</a></li>
        <li class="is_no" brand ="H" url_id="150"><span class="choose_ico"></span><a class="goods_brand_name" data-url="category.php?id=347&amp;brand=150">华帝</a></li>
        <li class="is_no" brand ="M" url_id="159"><span class="choose_ico"></span><a class="goods_brand_name" data-url="category.php?id=347&amp;brand=159">麦斯威尔</a></li>
        <li class="is_no" brand ="M" url_id="160"><span class="choose_ico"></span><a class="goods_brand_name" data-url="category.php?id=347&amp;brand=160">美的</a></li>
    </ul>
                        </div>
                        <div class="enter_yes_no">
<div class="ct_auto">
    <span class="yes_bt botton disabled">确定</span>
    <span class="no_bt botton">关闭</span>
</div>
                        </div>
                    </div>
                    <div class="s-l-opt sl-ext">
                        <div class="choose_open s-l-more"><i class="iconfont icon-down"></i></div>
                        <div class="choose_more s-l-multiple"><i class="iconfont icon-plus"></i>多选</div>
                    </div>
                </div>
            </li>
                        
            
                        <li class="s-line">
                <dl class="s-l-wrap">
                    <div class="s-l-tit filter_attr_name">价格：</div>
                    <div class="s-l-value attr_son">
                        <div class="price_auto fl">
<div class="price_range"><a href="#">10&nbsp;-&nbsp;90</a></div>
<div class="price_range"><a href="#">90&nbsp;-&nbsp;170</a></div>
<div class="price_range"><a href="#">170&nbsp;-&nbsp;250</a></div>
<div class="price_range"><a href="#">250&nbsp;-&nbsp;330</a></div>
<div class="price_range"><a href="#">410&nbsp;-&nbsp;490</a></div>
                        </div>
                        <div class="price_auto price_bottom fl">
<input type="text" title="最低价" name="price_min" class="price_class price_min">
<span class="price_class span_price_class">-</span>
<input type="text" title="最高价" name="price_max" class="price_class price_max">
<button class="price_ok price_class">确定</button>
                        </div>
                    </div>
                </dl>
            </li>
             
            
             
            
            		</ul>
    </div>
	<div class="click_more s-more"><span class="sm-wrap"><strong>更多选项</strong><i class="iconfont icon-down"></i></span></div>
</div>
            </div>
            <div class="filter">
        <div class="filter-wrap">
    <div class="filter-sort">
        <a href="#" class="">综合<i class="iconfont icon-arrow-up"></i></a>
        <a href="#" class="">销量<i class="iconfont icon-arrow-up"></i></a>
        <a href="#" class="">新品<i class="iconfont icon-arrow-up"></i></a>
        <a href="#" class="">评论数<i class="iconfont icon-arrow-up"></i></a>
        <a href="#" class="">价格<i class="iconfont icon-arrow-up"></i></a>
    </div>
    <div class="filter-range">
        <div class="fprice">
        	<form method="GET" action="category.php" class="sort" name="listform">
    <div class="fP-box">
                    <input type="text" name="price_min" class="f-text price-min" autocomplete="off" maxlength="6" placeholder="￥" id="price-min" value="">
                    <span>&nbsp;~&nbsp;</span>
                    <input type="text" name="price_max" class="f-text price-max" autocomplete="off" maxlength="6" id="price-max"value="" placeholder="￥">
                </div>
                <div class="fP-expand">
                	<a class="ui-btn-s ui-btn-clear" href="javascript:void(0);" id="clear_price">清空</a>
					<a href="#" class="ui-btn-s ui-btn-s-primary ui-btn-submit">确定</a>
                </div>
    <input type="hidden" name="category" value="347" />
                <input type="hidden" name="display" value="grid" id="display" />
                <input type="hidden" name="brand" value="" />
                <input type="hidden" name="ubrand" value="0" />
                <input type="hidden" name="filter_attr" value="0" />
                <input type="hidden" name="sort" value="goods_id" />
                <input type="hidden" name="order" value="DESC" />
            </form>
        </div>
        <div class="fcheckbox">
                <div class="checkbox_items">
                <div class="checkbox_item ">
                    <input type="checkbox" name="fk-type" class="ui-checkbox" value="" id="store-checkbox-011" >
                    <label class="ui-label" for="store-checkbox-011">包邮</label>
                    <i id="input-i1" rev="category.php?category=347&display=grid&brand=&ubrand=0&price_min=0&price_max=0&filter_attr=0&ship=1&self=0&have=0&sort=goods_id&order=DESC#goods_list"></i>
                    <i id="input-i2" rev="category.php?category=347&display=grid&brand=&ubrand=0&price_min=0&price_max=0&filter_attr=0&ship=0&self=0&have=0&sort=goods_id&order=DESC#goods_list"></i>
                </div>
                <div class="checkbox_item ">
                    <input type="checkbox" name="fk-type" class="ui-checkbox" value="" id="store-checkbox-012" >
                    <label class="ui-label" for="store-checkbox-012">自营商品</label>
                    <i id="input-i1" rev="category.php?category=347&display=grid&brand=&ubrand=0&price_min=0&price_max=0&filter_attr=0&ship=0&self=1&have=0&sort=goods_id&order=DESC#goods_list"></i>
                    <i id="input-i2" rev="category.php?category=347&display=grid&brand=&ubrand=0&price_min=0&price_max=0&filter_attr=0&ship=0&self=0&have=0&sort=goods_id&order=DESC#goods_list"></i>
                </div>
                <div class="checkbox_item ">
                    <input type="checkbox" name="fk-type" class="ui-checkbox" value="" id="store-checkbox-013" >
                    <label class="ui-label" for="store-checkbox-013">仅显示有货</label>
                    <i id="input-i1" rev="category.php?category=347&display=grid&brand=&ubrand=0&price_min=0&price_max=0&filter_attr=0&ship=0&self=0&have=1&sort=goods_id&order=DESC#goods_list"></i>
                    <i id="input-i2" rev="category.php?category=347&display=grid&brand=&ubrand=0&price_min=0&price_max=0&filter_attr=0&ship=0&self=0&have=0&sort=goods_id&order=DESC#goods_list"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="filter-right">
                <div class="button-page">
            <span class="pageState"><span>1</span>/1</span>
            <a href="#" title="上一页"><i class="iconfont icon-left"></i></a>
            <a href="#" title="下一页"><i class="iconfont icon-right"></i></a>
        </div>
                 
        <div class="styles">
            <ul class="items" ectype="fsortTab">
                <li class="item current" data-type="large"><a href="#" title="大图模式"><span class="iconfont icon-switch-grid"></span>大图</a></li>
                <li class="item" data-type="samll"><a href="#" title="小图模式"><span class="iconfont icon-switch-list"></span>小图</a></li>
            </ul>
        </div>
            </div>
</div>    </div>
<div class="g-view w">
    <div class="goods-list" ectype="gMain">
                <div class="gl-warp gl-warp-large">
        	            <form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);" class="goodslistForm" data-state="0">
                        <ul>
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490174925807.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/0_thumb_P_1490174925008.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>158.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">逸阳女裤春装新款韩版休闲裤女九分裤黑色弹力微喇叭裤子显瘦0032 浓郁复古风 修饰腿型 生而优雅</a></div>
                        <div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu p-c-violet"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-sr">
	<i class="i-left"></i>
    自营    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="801" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 801,'逸阳女裤春装新款韩版休闲裤女九分裤黑色弹力微喇叭裤子显瘦0032 浓郁复古风 修饰腿型 生而优雅','0', '/static/index/img/0_thumb_G_1490174925807.jpg', '<em>¥</em>158.00', '<em>¥</em>189.60')">
    <label class="ui-label" for="801">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(801,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490174925807.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490174894779.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/0_thumb_P_1490174894049.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>166.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">2017韩版女装夏装新款A字宽松松紧腰印花连衣裙DT7039乾 舒适松紧腰 A字版型 时尚印花</a></div>
                        <div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu p-c-violet"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-sr">
	<i class="i-left"></i>
    自营    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="800" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 800,'2017韩版女装夏装新款A字宽松松紧腰印花连衣裙DT7039乾 舒适松紧腰 A字版型 时尚印花','0', '/static/index/img/0_thumb_G_1490174894779.jpg', '<em>¥</em>166.00', '<em>¥</em>199.20')">
    <label class="ui-label" for="800">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(800,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490174894779.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490174858999.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/0_thumb_P_1490174858959.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>68.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">韩美格2017春秋新款修身大码蕾丝网纱打底衫女长袖薄款圆领女T恤 全店商品 二件减5元 三件减10</a></div>
                        <div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu p-c-violet"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-sr">
	<i class="i-left"></i>
    自营    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="799" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 799,'韩美格2017春秋新款修身大码蕾丝网纱打底衫女长袖薄款圆领女T恤 全店商品 二件减5元 三件减10','0', '/static/index/img/0_thumb_G_1490174858999.jpg', '<em>¥</em>68.00', '<em>¥</em>81.60')">
    <label class="ui-label" for="799">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(799,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490174858999.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490174824075.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/0_thumb_P_1490174824415.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>149.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">逸阳女裤2017夏修身白色牛仔裤超短裤三分裤mm热裤女夏宽松大码潮</a></div>
                        <div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu p-c-violet"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-sr">
	<i class="i-left"></i>
    自营    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="798" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 798,'逸阳女裤2017夏修身白色牛仔裤超短裤三分裤mm热裤女夏宽松大码潮','0', '/static/index/img/0_thumb_G_1490174824075.jpg', '<em>¥</em>149.00', '<em>¥</em>178.79')">
    <label class="ui-label" for="798">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(798,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490174824075.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490174791219.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/0_thumb_P_1490174791247.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1490174794253.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>49.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">17年春夏新款百搭半身裙蛋糕裙 a字裙 裤裙伞裙大码裙子超短裙女 松紧腰围 带裤边打底衬 涤针织面料</a></div>
                        <div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu p-c-violet"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-sr">
	<i class="i-left"></i>
    自营    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="797" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 797,'17年春夏新款百搭半身裙蛋糕裙 a字裙 裤裙伞裙大码裙子超短裙女 松紧腰围 带裤边打底衬 涤针织面料','0', '/static/index/img/0_thumb_G_1490174791219.jpg', '<em>¥</em>49.00', '<em>¥</em>58.80')">
    <label class="ui-label" for="797">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(797,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490174791219.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490174741051.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/0_thumb_P_1490174741400.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>40.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">初棉纯色圆领长袖T恤打底衫秋衣女上衣体恤女士修身打底衣春秋 挺拔有型 棉氨材质 柔软舒适 耐洗耐磨</a></div>
                        <div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu p-c-violet"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-sr">
	<i class="i-left"></i>
    自营    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="796" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 796,'初棉纯色圆领长袖T恤打底衫秋衣女上衣体恤女士修身打底衣春秋 挺拔有型 棉氨材质 柔软舒适 耐洗耐磨','0', '/static/index/img/0_thumb_G_1490174741051.jpg', '<em>¥</em>65.00', '<em>¥</em>78.00')">
    <label class="ui-label" for="796">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(796,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490174741051.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169281436.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/_thumb_P_1490169285844.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1490169285863.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/0_thumb_P_1490169281822.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>78.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">韩都衣舍2017韩版女装春装新款条纹显瘦百搭宽松v领七分袖衬衫潮 领券立减/单件包邮/七天无理由退换</a></div>
                        <div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="775" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 775,'韩都衣舍2017韩版女装春装新款条纹显瘦百搭宽松v领七分袖衬衫潮 领券立减/单件包邮/七天无理由退换','0', '/static/index/img/0_thumb_G_1490169281436.jpg', '<em>¥</em>78.00', '<em>¥</em>93.60')">
    <label class="ui-label" for="775">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(775,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490169281436.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169250846.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/_thumb_P_1490169255374.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1490169255340.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/0_thumb_P_1490169250295.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>159.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">韩都衣舍秋冬喇叭长袖针织衫毛衣女套头宽松纯色百搭学生韩版打底 领券下单立减/单件包邮/先拍先发货！</a></div>
                        <div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="774" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 774,'韩都衣舍秋冬喇叭长袖针织衫毛衣女套头宽松纯色百搭学生韩版打底 领券下单立减/单件包邮/先拍先发货！','0', '/static/index/img/0_thumb_G_1490169250846.jpg', '<em>¥</em>159.00', '<em>¥</em>190.79')">
    <label class="ui-label" for="774">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(774,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490169250846.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169216444.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/_thumb_P_1490169221093.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1490169221057.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/0_thumb_P_1490169216735.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>159.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">韩都衣舍2016新款秋冬款长袖连衣裙宽松学生冬季内搭打底裙子韩版 领券下单立减/单件包邮/先拍先发货！</a></div>
                        <div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="773" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 773,'韩都衣舍2016新款秋冬款长袖连衣裙宽松学生冬季内搭打底裙子韩版 领券下单立减/单件包邮/先拍先发货！','0', '/static/index/img/0_thumb_G_1490169216444.jpg', '<em>¥</em>159.00', '<em>¥</em>190.79')">
    <label class="ui-label" for="773">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(773,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490169216444.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169186175.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/_thumb_P_1490169190760.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1490169190653.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/0_thumb_P_1490169186098.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>118.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">韩都衣舍2017春装新款女装春款拼接喇叭长袖连衣裙中长款时尚韩版 领券立减/单件包邮/七天无理由退换</a></div>
                        <div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="772" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 772,'韩都衣舍2017春装新款女装春款拼接喇叭长袖连衣裙中长款时尚韩版 领券立减/单件包邮/七天无理由退换','0', '/static/index/img/0_thumb_G_1490169186175.jpg', '<em>¥</em>118.00', '<em>¥</em>141.60')">
    <label class="ui-label" for="772">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(772,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490169186175.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169151126.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/_thumb_P_1490169157142.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1490169158322.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1490169158351.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/0_thumb_P_1490169151557.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>148.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">韩都衣舍春季韩国ulzzang连帽卫衣女套头宽松百搭学生韩版潮bf风 领券下单立减/单件包邮/先拍先发货！</a></div>
                        <div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="771" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 771,'韩都衣舍春季韩国ulzzang连帽卫衣女套头宽松百搭学生韩版潮bf风 领券下单立减/单件包邮/先拍先发货！','0', '/static/index/img/0_thumb_G_1490169151126.jpg', '<em>¥</em>148.00', '<em>¥</em>177.60')">
    <label class="ui-label" for="771">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(771,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490169151126.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169118213.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/_thumb_P_1490169123927.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1490169123565.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/0_thumb_P_1490169111600.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/0_thumb_P_1490169118199.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>15.90    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">小米红米3s手机壳保护套红米3高配版指纹男女款潮版磨砂硬壳防摔 收藏截图 送大礼包</a></div>
                        <div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="770" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 770,'小米红米3s手机壳保护套红米3高配版指纹男女款潮版磨砂硬壳防摔 收藏截图 送大礼包','0', '/static/index/img/0_thumb_G_1490169118213.jpg', '<em>¥</em>15.90', '<em>¥</em>19.08')">
    <label class="ui-label" for="770">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(770,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490169118213.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169074773.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/_thumb_P_1490169077239.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1490169077389.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/0_thumb_P_1490169074855.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>259.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">朴信惠明显同款韩都衣舍2017春装新款高领毛衣女套头宽松纯色韩版 领券下单立减/单件包邮/先拍先发货！</a></div>
                        <div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="769" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 769,'朴信惠明显同款韩都衣舍2017春装新款高领毛衣女套头宽松纯色韩版 领券下单立减/单件包邮/先拍先发货！','0', '/static/index/img/0_thumb_G_1490169074773.jpg', '<em>¥</em>259.00', '<em>¥</em>310.80')">
    <label class="ui-label" for="769">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(769,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490169074773.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169030833.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/_thumb_P_1490169039971.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1490169039705.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/0_thumb_P_1490169030177.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>88.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">韩都衣舍2017韩版女装夏装新款时尚修身显瘦圆领条纹T恤OGY7711娋 显瘦版型 舒适面料 条纹元素</a></div>
                        <div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="768" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 768,'韩都衣舍2017韩版女装夏装新款时尚修身显瘦圆领条纹T恤OGY7711娋 显瘦版型 舒适面料 条纹元素','0', '/static/index/img/0_thumb_G_1490169030833.jpg', '<em>¥</em>88.00', '<em>¥</em>105.60')">
    <label class="ui-label" for="768">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(768,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490169030833.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490168991044.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/_thumb_P_1490168995911.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1490168995071.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/0_thumb_P_1490168991357.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>112.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">韩都衣舍2017韩版女装夏装新款纯色镂空露腰短袖T恤OU7163堯 韩版版型 时尚镂空 舒适面料 个性穿搭</a></div>
                        <div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="767" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 767,'韩都衣舍2017韩版女装夏装新款纯色镂空露腰短袖T恤OU7163堯 韩版版型 时尚镂空 舒适面料 个性穿搭','0', '/static/index/img/0_thumb_G_1490168991044.jpg', '<em>¥</em>112.00', '<em>¥</em>134.40')">
    <label class="ui-label" for="767">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(767,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1490168991044.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489102950633.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/0_thumb_P_1489102950134.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1489102960258.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1489102960697.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1489102960787.jpg" width="26" height="26" /></li>
</ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>450.00    </div>
<div class="p-num">已售<em>1</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">韩都衣舍2017韩版女装新款黑白拼接插肩棒球服春季短外套HH5597妠 朴信惠同款 黑白拼接 插肩袖 棒球服</a></div>
                        <div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu p-c-violet"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-sr">
	<i class="i-left"></i>
    自营    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="635" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 635,'韩都衣舍2017韩版女装新款黑白拼接插肩棒球服春季短外套HH5597妠 朴信惠同款 黑白拼接 插肩袖 棒球服','0', '/static/index/img/0_thumb_G_1489102950633.jpg', '<em>¥</em>450.00', '<em>¥</em>540.00')">
    <label class="ui-label" for="635">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(635,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1489102950633.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489102753231.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/0_thumb_P_1489102753387.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1489102766368.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1489102767107.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1489102767718.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>300.00    </div>
<div class="p-num">已售<em>2</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">新款韩版chic学生宽松短款外套上衣字母长袖连帽套头卫衣女潮</a></div>
                        <div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu p-c-violet"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-sr">
	<i class="i-left"></i>
    自营    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="634" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 634,'新款韩版chic学生宽松短款外套上衣字母长袖连帽套头卫衣女潮','0', '/static/index/img/0_thumb_G_1489102753231.jpg', '<em>¥</em>300.00', '<em>¥</em>360.00')">
    <label class="ui-label" for="634">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(634,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1489102753231.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489102299856.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/0_thumb_P_1489102299193.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1489102305334.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1489102305350.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>233.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">新款学院风韩版时尚太空棉宽松长袖印花圆领卫衣女</a></div>
                        <div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu p-c-violet"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-sr">
	<i class="i-left"></i>
    自营    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="633" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 633,'新款学院风韩版时尚太空棉宽松长袖印花圆领卫衣女','0', '/static/index/img/0_thumb_G_1489102299856.jpg', '<em>¥</em>233.00', '<em>¥</em>279.59')">
    <label class="ui-label" for="633">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(633,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1489102299856.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
    				                <li class="gl-item">
                    <div class="gl-i-wrap">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489100550574.jpg" /></a></div>
                    <div class="sider">
<a href="#" class="sider-prev"><i class="iconfont icon-left"></i></a>
<ul>
            <li  class="curr"><img src="/static/index/img/0_thumb_P_1489100550173.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1489100561245.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1489100561054.jpg" width="26" height="26" /></li>
<li ><img src="/static/index/img/_thumb_P_1489100561298.jpg" width="26" height="26" /></li>
        </ul>
<a href="#" class="sider-next"><i class="iconfont icon-right"></i></a>
                        </div>
                    <div class="p-lie">
<div class="p-price">
            <em>¥</em>258.00    </div>
<div class="p-num">已售<em>0</em>件</div>
                        </div>
                        <div class="p-name"><a href="#" target="_blank">法国DK正品文胸套装女内衣性感蕾丝聚拢深V调整型小胸品牌收副乳 法国正品 蕾丝性感 原装包装 送女神必备</a></div>
                        <div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu p-c-violet"><i class="iconfont icon-kefu"></i></a>

                        </div>
                    <div class="p-activity">
                        	                        	<span class="tag tac-mn">
	<i class="i-left"></i>
    新品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mh">
	<i class="i-left"></i>
    热卖    <i class="i-right"></i>
</span>
                        	<span class="tag tac-mb">
	<i class="i-left"></i>
    精品    <i class="i-right"></i>
</span>
                        	<span class="tag tac-sr">
	<i class="i-left"></i>
    自营    <i class="i-right"></i>
</span>
                        </div>
                    <div class="p-operate">
<a href="#" id="compareLink">
    <input id="630" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 630,'法国DK正品文胸套装女内衣性感蕾丝聚拢深V调整型小胸品牌收副乳 法国正品 蕾丝性感 原装包装 送女神必备','0', '/static/index/img/0_thumb_G_1489100550574.jpg', '<em>¥</em>258.00', '<em>¥</em>309.59')">
    <label class="ui-label" for="630">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(630,0,event,this,'flyItem');" rev="/static/index/img/0_thumb_G_1489100550574.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
</div>
                        
                </div>
                </li>
				                 
     
                 
            </ul>
                        </form>
                        <div id="flyItem" class="fly_item"><img src="" width="40" height="40"></div>
        </div>
        <div class="gl-warp gl-warp-samll">
        	            <form name="compareForm_cat" id="compareForm_cat" action="compare.php" method="post" onSubmit="return compareGoods(this);" class="goodslistForm" data-state="0">
                        <ul>
                    <li class="gl-h-item ">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490174925807.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="逸阳女裤春装新款韩版休闲裤女九分裤黑色弹力微喇叭裤子显瘦0032 浓郁复古风 修饰腿型 生而优雅" target="_blank">逸阳女裤春装新款韩版休闲裤女九分裤黑色弹力微喇叭裤子显瘦0032 浓郁复古风 修饰腿型 生而优雅</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>158.00            </div>
    <div class="original-price"><em>¥</em>189.60</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_801" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 801,'逸阳女裤春装新款韩版休闲裤女九分裤黑色弹力微喇叭裤子显瘦0032 浓郁复古风 修饰腿型 生而优雅','0', '/static/index/img/0_thumb_G_1490174925807.jpg', '<em>¥</em>158.00', '<em>¥</em>189.60')">
    <label class="ui-label" for="duibi_801">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(801,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490174925807.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item item_bg">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490174894779.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="2017韩版女装夏装新款A字宽松松紧腰印花连衣裙DT7039乾 舒适松紧腰 A字版型 时尚印花" target="_blank">2017韩版女装夏装新款A字宽松松紧腰印花连衣裙DT7039乾 舒适松紧腰 A字版型 时尚印花</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>166.00            </div>
    <div class="original-price"><em>¥</em>199.20</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_800" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 800,'2017韩版女装夏装新款A字宽松松紧腰印花连衣裙DT7039乾 舒适松紧腰 A字版型 时尚印花','0', '/static/index/img/0_thumb_G_1490174894779.jpg', '<em>¥</em>166.00', '<em>¥</em>199.20')">
    <label class="ui-label" for="duibi_800">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(800,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490174894779.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item ">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490174858999.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="韩美格2017春秋新款修身大码蕾丝网纱打底衫女长袖薄款圆领女T恤 全店商品 二件减5元 三件减10" target="_blank">韩美格2017春秋新款修身大码蕾丝网纱打底衫女长袖薄款圆领女T恤 全店商品 二件减5元 三件减10</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>68.00            </div>
    <div class="original-price"><em>¥</em>81.60</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_799" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 799,'韩美格2017春秋新款修身大码蕾丝网纱打底衫女长袖薄款圆领女T恤 全店商品 二件减5元 三件减10','0', '/static/index/img/0_thumb_G_1490174858999.jpg', '<em>¥</em>68.00', '<em>¥</em>81.60')">
    <label class="ui-label" for="duibi_799">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(799,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490174858999.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item item_bg">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490174824075.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="逸阳女裤2017夏修身白色牛仔裤超短裤三分裤mm热裤女夏宽松大码潮" target="_blank">逸阳女裤2017夏修身白色牛仔裤超短裤三分裤mm热裤女夏宽松大码潮</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>149.00            </div>
    <div class="original-price"><em>¥</em>178.79</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_798" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 798,'逸阳女裤2017夏修身白色牛仔裤超短裤三分裤mm热裤女夏宽松大码潮','0', '/static/index/img/0_thumb_G_1490174824075.jpg', '<em>¥</em>149.00', '<em>¥</em>178.79')">
    <label class="ui-label" for="duibi_798">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(798,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490174824075.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item ">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490174791219.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="17年春夏新款百搭半身裙蛋糕裙 a字裙 裤裙伞裙大码裙子超短裙女 松紧腰围 带裤边打底衬 涤针织面料" target="_blank">17年春夏新款百搭半身裙蛋糕裙 a字裙 裤裙伞裙大码裙子超短裙女 松紧腰围 带裤边打底衬 涤针织面料</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>49.00            </div>
    <div class="original-price"><em>¥</em>58.80</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_797" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 797,'17年春夏新款百搭半身裙蛋糕裙 a字裙 裤裙伞裙大码裙子超短裙女 松紧腰围 带裤边打底衬 涤针织面料','0', '/static/index/img/0_thumb_G_1490174791219.jpg', '<em>¥</em>49.00', '<em>¥</em>58.80')">
    <label class="ui-label" for="duibi_797">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(797,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490174791219.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item item_bg">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490174741051.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="初棉纯色圆领长袖T恤打底衫秋衣女上衣体恤女士修身打底衣春秋 挺拔有型 棉氨材质 柔软舒适 耐洗耐磨" target="_blank">初棉纯色圆领长袖T恤打底衫秋衣女上衣体恤女士修身打底衣春秋 挺拔有型 棉氨材质 柔软舒适 耐洗耐磨</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>40.00            </div>
    <div class="original-price"><em>¥</em>78.00</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_796" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 796,'初棉纯色圆领长袖T恤打底衫秋衣女上衣体恤女士修身打底衣春秋 挺拔有型 棉氨材质 柔软舒适 耐洗耐磨','0', '/static/index/img/0_thumb_G_1490174741051.jpg', '<em>¥</em>65.00', '<em>¥</em>78.00')">
    <label class="ui-label" for="duibi_796">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(796,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490174741051.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item ">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169281436.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="韩都衣舍2017韩版女装春装新款条纹显瘦百搭宽松v领七分袖衬衫潮 领券立减/单件包邮/七天无理由退换" target="_blank">韩都衣舍2017韩版女装春装新款条纹显瘦百搭宽松v领七分袖衬衫潮 领券立减/单件包邮/七天无理由退换</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>78.00            </div>
    <div class="original-price"><em>¥</em>93.60</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_775" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 775,'韩都衣舍2017韩版女装春装新款条纹显瘦百搭宽松v领七分袖衬衫潮 领券立减/单件包邮/七天无理由退换','0', '/static/index/img/0_thumb_G_1490169281436.jpg', '<em>¥</em>78.00', '<em>¥</em>93.60')">
    <label class="ui-label" for="duibi_775">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(775,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490169281436.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item item_bg">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169250846.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="韩都衣舍秋冬喇叭长袖针织衫毛衣女套头宽松纯色百搭学生韩版打底 领券下单立减/单件包邮/先拍先发货！" target="_blank">韩都衣舍秋冬喇叭长袖针织衫毛衣女套头宽松纯色百搭学生韩版打底 领券下单立减/单件包邮/先拍先发货！</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>159.00            </div>
    <div class="original-price"><em>¥</em>190.79</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_774" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 774,'韩都衣舍秋冬喇叭长袖针织衫毛衣女套头宽松纯色百搭学生韩版打底 领券下单立减/单件包邮/先拍先发货！','0', '/static/index/img/0_thumb_G_1490169250846.jpg', '<em>¥</em>159.00', '<em>¥</em>190.79')">
    <label class="ui-label" for="duibi_774">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(774,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490169250846.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item ">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169216444.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="韩都衣舍2016新款秋冬款长袖连衣裙宽松学生冬季内搭打底裙子韩版 领券下单立减/单件包邮/先拍先发货！" target="_blank">韩都衣舍2016新款秋冬款长袖连衣裙宽松学生冬季内搭打底裙子韩版 领券下单立减/单件包邮/先拍先发货！</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>159.00            </div>
    <div class="original-price"><em>¥</em>190.79</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_773" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 773,'韩都衣舍2016新款秋冬款长袖连衣裙宽松学生冬季内搭打底裙子韩版 领券下单立减/单件包邮/先拍先发货！','0', '/static/index/img/0_thumb_G_1490169216444.jpg', '<em>¥</em>159.00', '<em>¥</em>190.79')">
    <label class="ui-label" for="duibi_773">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(773,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490169216444.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item item_bg">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169186175.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="韩都衣舍2017春装新款女装春款拼接喇叭长袖连衣裙中长款时尚韩版 领券立减/单件包邮/七天无理由退换" target="_blank">韩都衣舍2017春装新款女装春款拼接喇叭长袖连衣裙中长款时尚韩版 领券立减/单件包邮/七天无理由退换</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>118.00            </div>
    <div class="original-price"><em>¥</em>141.60</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_772" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 772,'韩都衣舍2017春装新款女装春款拼接喇叭长袖连衣裙中长款时尚韩版 领券立减/单件包邮/七天无理由退换','0', '/static/index/img/0_thumb_G_1490169186175.jpg', '<em>¥</em>118.00', '<em>¥</em>141.60')">
    <label class="ui-label" for="duibi_772">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(772,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490169186175.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item ">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169151126.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="韩都衣舍春季韩国ulzzang连帽卫衣女套头宽松百搭学生韩版潮bf风 领券下单立减/单件包邮/先拍先发货！" target="_blank">韩都衣舍春季韩国ulzzang连帽卫衣女套头宽松百搭学生韩版潮bf风 领券下单立减/单件包邮/先拍先发货！</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>148.00            </div>
    <div class="original-price"><em>¥</em>177.60</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_771" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 771,'韩都衣舍春季韩国ulzzang连帽卫衣女套头宽松百搭学生韩版潮bf风 领券下单立减/单件包邮/先拍先发货！','0', '/static/index/img/0_thumb_G_1490169151126.jpg', '<em>¥</em>148.00', '<em>¥</em>177.60')">
    <label class="ui-label" for="duibi_771">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(771,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490169151126.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item item_bg">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169118213.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="小米红米3s手机壳保护套红米3高配版指纹男女款潮版磨砂硬壳防摔 收藏截图 送大礼包" target="_blank">小米红米3s手机壳保护套红米3高配版指纹男女款潮版磨砂硬壳防摔 收藏截图 送大礼包</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>15.90            </div>
    <div class="original-price"><em>¥</em>19.08</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_770" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 770,'小米红米3s手机壳保护套红米3高配版指纹男女款潮版磨砂硬壳防摔 收藏截图 送大礼包','0', '/static/index/img/0_thumb_G_1490169118213.jpg', '<em>¥</em>15.90', '<em>¥</em>19.08')">
    <label class="ui-label" for="duibi_770">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(770,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490169118213.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item ">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169074773.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="朴信惠明显同款韩都衣舍2017春装新款高领毛衣女套头宽松纯色韩版 领券下单立减/单件包邮/先拍先发货！" target="_blank">朴信惠明显同款韩都衣舍2017春装新款高领毛衣女套头宽松纯色韩版 领券下单立减/单件包邮/先拍先发货！</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>259.00            </div>
    <div class="original-price"><em>¥</em>310.80</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_769" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 769,'朴信惠明显同款韩都衣舍2017春装新款高领毛衣女套头宽松纯色韩版 领券下单立减/单件包邮/先拍先发货！','0', '/static/index/img/0_thumb_G_1490169074773.jpg', '<em>¥</em>259.00', '<em>¥</em>310.80')">
    <label class="ui-label" for="duibi_769">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(769,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490169074773.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item item_bg">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169030833.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="韩都衣舍2017韩版女装夏装新款时尚修身显瘦圆领条纹T恤OGY7711娋 显瘦版型 舒适面料 条纹元素" target="_blank">韩都衣舍2017韩版女装夏装新款时尚修身显瘦圆领条纹T恤OGY7711娋 显瘦版型 舒适面料 条纹元素</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>88.00            </div>
    <div class="original-price"><em>¥</em>105.60</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_768" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 768,'韩都衣舍2017韩版女装夏装新款时尚修身显瘦圆领条纹T恤OGY7711娋 显瘦版型 舒适面料 条纹元素','0', '/static/index/img/0_thumb_G_1490169030833.jpg', '<em>¥</em>88.00', '<em>¥</em>105.60')">
    <label class="ui-label" for="duibi_768">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(768,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490169030833.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item ">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490168991044.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="韩都衣舍2017韩版女装夏装新款纯色镂空露腰短袖T恤OU7163堯 韩版版型 时尚镂空 舒适面料 个性穿搭" target="_blank">韩都衣舍2017韩版女装夏装新款纯色镂空露腰短袖T恤OU7163堯 韩版版型 时尚镂空 舒适面料 个性穿搭</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="韩都衣舍" class="store" target="_blank">韩都衣舍</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="6" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>112.00            </div>
    <div class="original-price"><em>¥</em>134.40</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_767" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 767,'韩都衣舍2017韩版女装夏装新款纯色镂空露腰短袖T恤OU7163堯 韩版版型 时尚镂空 舒适面料 个性穿搭','0', '/static/index/img/0_thumb_G_1490168991044.jpg', '<em>¥</em>112.00', '<em>¥</em>134.40')">
    <label class="ui-label" for="duibi_767">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(767,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1490168991044.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item item_bg">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489102950633.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="韩都衣舍2017韩版女装新款黑白拼接插肩棒球服春季短外套HH5597妠 朴信惠同款 黑白拼接 插肩袖 棒球服" target="_blank">韩都衣舍2017韩版女装新款黑白拼接插肩棒球服春季短外套HH5597妠 朴信惠同款 黑白拼接 插肩袖 棒球服</a></div>
    <div class="p-lie">
        <div class="p-num">销量：1</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>450.00            </div>
    <div class="original-price"><em>¥</em>540.00</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_635" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 635,'韩都衣舍2017韩版女装新款黑白拼接插肩棒球服春季短外套HH5597妠 朴信惠同款 黑白拼接 插肩袖 棒球服','0', '/static/index/img/0_thumb_G_1489102950633.jpg', '<em>¥</em>450.00', '<em>¥</em>540.00')">
    <label class="ui-label" for="duibi_635">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(635,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1489102950633.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item ">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489102753231.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="新款韩版chic学生宽松短款外套上衣字母长袖连帽套头卫衣女潮" target="_blank">新款韩版chic学生宽松短款外套上衣字母长袖连帽套头卫衣女潮</a></div>
    <div class="p-lie">
        <div class="p-num">销量：2</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>300.00            </div>
    <div class="original-price"><em>¥</em>360.00</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_634" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 634,'新款韩版chic学生宽松短款外套上衣字母长袖连帽套头卫衣女潮','0', '/static/index/img/0_thumb_G_1489102753231.jpg', '<em>¥</em>300.00', '<em>¥</em>360.00')">
    <label class="ui-label" for="duibi_634">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(634,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1489102753231.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item item_bg">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489102299856.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="新款学院风韩版时尚太空棉宽松长袖印花圆领卫衣女" target="_blank">新款学院风韩版时尚太空棉宽松长袖印花圆领卫衣女</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>233.00            </div>
    <div class="original-price"><em>¥</em>279.59</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_633" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 633,'新款学院风韩版时尚太空棉宽松长袖印花圆领卫衣女','0', '/static/index/img/0_thumb_G_1489102299856.jpg', '<em>¥</em>233.00', '<em>¥</em>279.59')">
    <label class="ui-label" for="duibi_633">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(633,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1489102299856.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
        <li class="gl-h-item ">
                    <div class="gl-i-wrap">
                        <div class="col col-1">
<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489100550574.jpg" /></a></div>
<div class="p-right">
    <div class="p-name"><a href="#" title="法国DK正品文胸套装女内衣性感蕾丝聚拢深V调整型小胸品牌收副乳 法国正品 蕾丝性感 原装包装 送女神必备" target="_blank">法国DK正品文胸套装女内衣性感蕾丝聚拢深V调整型小胸品牌收副乳 法国正品 蕾丝性感 原装包装 送女神必备</a></div>
    <div class="p-lie">
        <div class="p-num">销量：0</div>
        <div class="p-comm">评价：0</div>
    </div>
</div>
                        </div>
                        <div class="col col-2">
<div class="p-store">
<a href="#" title="童攀课堂" class="store">童攀课堂</a>

<a href="#" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu"><i class="iconfont icon-kefu"></i></a>

</div>
                        </div>
                        <div class="col col-3">
<div class="p-price">
    <div class="shop-price">
                    <em>¥</em>258.00            </div>
    <div class="original-price"><em>¥</em>309.59</div>
</div>
                        </div>
                        <div class="col col-4">
<div class="p-operate">
    <a href="#" id="compareLink">
    <input id="duibi_630" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, 630,'法国DK正品文胸套装女内衣性感蕾丝聚拢深V调整型小胸品牌收副乳 法国正品 蕾丝性感 原装包装 送女神必备','0', '/static/index/img/0_thumb_G_1489100550574.jpg', '<em>¥</em>258.00', '<em>¥</em>309.59')">
    <label class="ui-label" for="duibi_630">对比</label>
</a>
<a href="#" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>
        <a href="#" onClick="javascript:addToCart(630,0,event,this,'flyItem2');" rev="/static/index/img/0_thumb_G_1489100550574.jpg" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
        <i class="iconfont icon-carts"></i>加入购物车    </a>
    </div>
                        </div>
                    </div>
                </li>
         
            </ul>
                        </form>
                        <div id="flyItem2" class="fly_item2"><img src="" width="40" height="40"></div>
        </div>
        <input type="hidden" value="2" id="region_id" name="region_id">
        <input type="hidden" value="16" id="area_id" name="area_id">
                
                    
            
                        
            
                <div class="clear"></div>
    </div>
    <div class="goods-spread">
    <a href="#" class="g-stop" ectype="gstop"><i class="iconfont icon-right"></i></a>
    <div class="gs-warp">
        <div class="gs-tit">推广商品</div>
        <ul class="gs-list">
<li class="opacity_img">
                <div class="">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489100550574.jpg" width="190" height="190"></a></div>
                        <div class="p-price">
                        <em>¥</em>258.00                    </div>
                    <div class="p-name"><a href="#" target="_blank" title='法国DK正品文胸套装女内衣性感蕾丝聚拢深V调整型小胸品牌收副乳 法国正品 蕾丝性感 原装包装 送女神必备'>法国DK正品文胸套装女内衣性感蕾丝聚拢深V调整型小胸品牌收副乳 法国正品 蕾丝性感 原装包装 送女神必备</a></div>
                    <div class="p-num">已售<em>0</em>件</div>
                </div>
            </li>
<li class="opacity_img">
                <div class="">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169030833.jpg" width="190" height="190"></a></div>
                        <div class="p-price">
                        <em>¥</em>88.00                    </div>
                    <div class="p-name"><a href="#" target="_blank" title='韩都衣舍2017韩版女装夏装新款时尚修身显瘦圆领条纹T恤OGY7711娋 显瘦版型 舒适面料 条纹元素'>韩都衣舍2017韩版女装夏装新款时尚修身显瘦圆领条纹T恤OGY7711娋 显瘦版型 舒适面料 条纹元素</a></div>
                    <div class="p-num">已售<em>0</em>件</div>
                </div>
            </li>
<li class="opacity_img">
                <div class="">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169216444.jpg" width="190" height="190"></a></div>
                        <div class="p-price">
                        <em>¥</em>159.00                    </div>
                    <div class="p-name"><a href="#" target="_blank" title='韩都衣舍2016新款秋冬款长袖连衣裙宽松学生冬季内搭打底裙子韩版 领券下单立减/单件包邮/先拍先发货！'>韩都衣舍2016新款秋冬款长袖连衣裙宽松学生冬季内搭打底裙子韩版 领券下单立减/单件包邮/先拍先发货！</a></div>
                    <div class="p-num">已售<em>0</em>件</div>
                </div>
            </li>
<li class="opacity_img">
                <div class="">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169250846.jpg" width="190" height="190"></a></div>
                        <div class="p-price">
                        <em>¥</em>159.00                    </div>
                    <div class="p-name"><a href="#" target="_blank" title='韩都衣舍秋冬喇叭长袖针织衫毛衣女套头宽松纯色百搭学生韩版打底 领券下单立减/单件包邮/先拍先发货！'>韩都衣舍秋冬喇叭长袖针织衫毛衣女套头宽松纯色百搭学生韩版打底 领券下单立减/单件包邮/先拍先发货！</a></div>
                    <div class="p-num">已售<em>0</em>件</div>
                </div>
            </li>
<li class="opacity_img">
                <div class="">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490169151126.jpg" width="190" height="190"></a></div>
                        <div class="p-price">
                        <em>¥</em>148.00                    </div>
                    <div class="p-name"><a href="#" target="_blank" title='韩都衣舍春季韩国ulzzang连帽卫衣女套头宽松百搭学生韩版潮bf风 领券下单立减/单件包邮/先拍先发货！'>韩都衣舍春季韩国ulzzang连帽卫衣女套头宽松百搭学生韩版潮bf风 领券下单立减/单件包邮/先拍先发货！</a></div>
                    <div class="p-num">已售<em>0</em>件</div>
                </div>
            </li>
<li class="opacity_img">
                <div class="">
                        <div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1490174824075.jpg" width="190" height="190"></a></div>
                        <div class="p-price">
                        <em>¥</em>149.00                    </div>
                    <div class="p-name"><a href="#" target="_blank" title='逸阳女裤2017夏修身白色牛仔裤超短裤三分裤mm热裤女夏宽松大码潮'>逸阳女裤2017夏修身白色牛仔裤超短裤三分裤mm热裤女夏宽松大码潮</a></div>
                    <div class="p-num">已售<em>0</em>件</div>
                </div>
            </li>
                    </ul>
    </div>
</div>
</div>            
            <div class="p-panel-main guess-love">
            	<div class="ftit ftit-delr"><h3>猜你喜欢</h3></div>
                <div class="gl-list clearfix">
                	<ul class="clearfix">
            	<li class="opacity_img">
                        	<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489109583798.jpg" width="190" height="190"></a></div>
<div class="p-price">
            <em>¥</em>555.00    </div>
<div class="p-name"><a href="#" target="_blank">【情侣款】Camel骆驼男靴 时尚潮流英伦风马丁靴高帮皮靴 爆卖1万双！ 情侣马丁靴 好评如潮</a></div>
                        	<div class="p-num">已售<em>35</em>件</div>
                        </li>
        	<li class="opacity_img">
                        	<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489109633806.jpg" width="190" height="190"></a></div>
<div class="p-price">
            <em>¥</em>1000.00    </div>
<div class="p-name"><a href="#" target="_blank">春季马丁靴男真皮男靴黄靴工装军靴韩版短靴沙漠靴高帮男鞋大黄靴 头层牛皮</a></div>
                        	<div class="p-num">已售<em>2</em>件</div>
                        </li>
        	<li class="opacity_img">
                        	<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489108999364.jpg" width="190" height="190"></a></div>
<div class="p-price">
            <em>¥</em>200.00    </div>
<div class="p-name"><a href="#" target="_blank">特步女鞋2017春季新款运动鞋休闲鞋女慢跑步鞋旅游鞋轻便舒适时尚 早春特惠 爆款休闲女鞋 赠运费险</a></div>
                        	<div class="p-num">已售<em>2</em>件</div>
                        </li>
        	<li class="opacity_img">
                        	<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489102753231.jpg" width="190" height="190"></a></div>
<div class="p-price">
            <em>¥</em>300.00    </div>
<div class="p-name"><a href="#" target="_blank">新款韩版chic学生宽松短款外套上衣字母长袖连帽套头卫衣女潮</a></div>
                        	<div class="p-num">已售<em>2</em>件</div>
                        </li>
        	<li class="opacity_img">
                        	<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489109337889.jpg" width="190" height="190"></a></div>
<div class="p-price">
            <em>¥</em>330.00    </div>
<div class="p-name"><a href="#" target="_blank">igtt铝框行李箱拉杆箱旅行箱万向轮男女20/24/26寸密码箱登机箱子 铝合金框 加强密码锁 万向轮 终身保修</a></div>
                        	<div class="p-num">已售<em>1</em>件</div>
                        </li>
        	<li class="opacity_img">
                        	<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489109282145.jpg" width="190" height="190"></a></div>
<div class="p-price">
            <em>¥</em>250.00    </div>
<div class="p-name"><a href="#" target="_blank">波米铝框拉杆箱万向轮密码旅行箱子20/24寸行李箱女登机箱男26/28 顺丰速运赠运费险赠十礼品终身质保</a></div>
                        	<div class="p-num">已售<em>1</em>件</div>
                        </li>
        	<li class="opacity_img">
                        	<div class="p-img"><a href="#" target="_blank"><img src="/static/index/img/0_thumb_G_1489109130174.jpg" width="190" height="190"></a></div>
<div class="p-price">
            <em>¥</em>458.00    </div>
<div class="p-name"><a href="#" target="_blank">2016秋冬季新款尖头粗跟短靴女高跟真皮加绒中跟马丁靴女靴子女鞋 优质全头层牛皮，品质女鞋</a></div>
                        	<div class="p-num">已售<em>1</em>件</div>
                        </li>
            </ul>
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
	            <input type="input" id="user_email" name="user_email" autocomplete="off" placeholder="请输入您的邮箱帐号">
	            <a href="#" onClick="add_email_list();" class="emp_btn">订阅</a>
	        </div>
	    </div>
	</div>    	 
	
	<div class="duibi_box" id="slideTxtBox">
	    <div class="parWarp">
	        <div class="parTit">对比栏</div>
	        <div class="parBd">
	            <div class="slideBox5" id="duibilan">
	                <div id="diff-items" class="diff-items clearfix">
	                    <dl class="hasItem" id="compare_goods1">  
	                        <dt><h1>1</h1></dt>
	                        <dd><span class="ts">您还可以继续添加</span></dd>
	                    </dl>
	                    <dl class="hasItem" id="compare_goods2">  
	                        <dt><h1>2</h1></dt>
	                        <dd><span class="ts">您还可以继续添加</span></dd>
	                    </dl>
	                    <dl class="hasItem" id="compare_goods3">  
	                        <dt><h1>3</h1></dt>
	                        <dd><span class="ts">您还可以继续添加</span></dd>
	                    </dl>
	                    <dl class="hasItem" id="compare_goods4">  
	                        <dt><h1>4</h1></dt>
	                        <dd><span class="ts">您还可以继续添加</span></dd>
	                    </dl>
	                </div>
	                <div class="diff-operate">
	                	<a id="compare_button" class="compare-active"></a>
						<a id="qingkong" class="del-items">清空对比栏</a>
	                    <a href="#" class="hide-me" ectype="db_hide">隐藏</a>
	                </div>
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
	$(function(){
		$(".gl-i-wrap").slide({mainCell:".sider ul",effect:"left",pnLoop:false,autoPlay:false,autoPage:true,prevCell:".sider-prev",nextCell:".sider-next",vis:5});
		
		//对比
		Compare.init();
	});
    </script>
</body>
</html>
