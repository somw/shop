<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:64:"B:\aaaweb\shop\public/../application/index\view\index\index.html";i:1556930863;s:55:"B:\aaaweb\shop\application\index\view\common\_meta.html";i:1556930863;s:58:"B:\aaaweb\shop\application\index\view\common\site-nav.html";i:1556930863;s:56:"B:\aaaweb\shop\application\index\view\common\header.html";i:1556930863;s:59:"B:\aaaweb\shop\application\index\view\common\index_nav.html";i:1556930863;s:59:"B:\aaaweb\shop\application\index\view\common\mui_right.html";i:1556930863;s:56:"B:\aaaweb\shop\application\index\view\common\footer.html";i:1556930863;s:57:"B:\aaaweb\shop\application\index\view\common\_footer.html";i:1556930863;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
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
<body data-type="index1">
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
<div class="nav dsc-zoom">
	<div class="w w1200">
		<div class="categorys">
	<div class="categorys-type"><a href="#">男装、女装、内衣</a></div>
	<div class="categorys-tab-content">
		<div class="categorys-items" ectype="items">
			<div class="categorys-item" ectype="item" data-catid="347" data-eveval="0">
				<div class="item-content">
					<i class="iconfont icon-right"></i>
					<div class="categorys-title">
						<strong><a href="#">女装</a></strong>
						<span>
				            <a href="#">连衣裙</a>
							<a href="#">蕾丝/雪纺衫</a>
							<a href="#">衬衫</a>
							<a href="#">T恤</a>
							<a href="#">半身裙</a>
							<a href="#">休闲裤</a>
						</span>
					</div>
				</div>
				<div class="categorys-items-layer" ectype="cateLayer" style="display: none;">
					<div class="catetop-layer-con clearfix">
						<h3><a href="#">女装</a></h3>
						<ul class="cate-list">
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
						<ul class="cate-logo">    
							<li><a href="#"><img src="/static/index/img/1490071974970349584.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490072756032175204.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490073577683159021.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490073591535005714.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490072860522023692.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490074030328949587.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490228075580091113.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490074901892372216.jpg" width="112" height="49"></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="categorys-item" ectype="item" data-catid="463" data-eveval="0">
				<div class="item-content">
					<i class="iconfont icon-right"></i>
					<div class="categorys-title">
						<strong><a href="#">男装</a></strong>
						<span>
				            <a href="#">T恤</a>
							<a href="#">裤子</a>
							<a href="#">POLO衫</a>
							<a href="#">针织衫</a>
							<a href="#">夹克</a>
							<a href="#">卫衣</a>
				        </span>
					</div>
				</div>
				<div class="categorys-items-layer" ectype="cateLayer" style="display: none;">
					<div class="catetop-layer-con clearfix">
						<h3><a href="#">男装</a></h3>
						<ul class="cate-list">
							<li><a href="#">T恤</a></li>
							<li><a href="#">裤子</a></li>
							<li><a href="#">POLO衫</a></li>
							<li><a href="#">针织衫</a></li>
							<li><a href="#">夹克</a></li>
							<li><a href="#">卫衣</a></li>
							<li><a href="#">风衣</a></li>
							<li><a href="#">马甲/背心</a></li>
							<li><a href="#">短裤</a></li>
							<li><a href="#">休闲裤</a></li>
							<li><a href="#">牛仔裤</a></li>
							<li><a href="#">西服</a></li>
							<li><a href="#">西裤</a></li>
							<li><a href="#">西服套装</a></li>
							<li><a href="#">真皮皮衣</a></li>
							<li><a href="#">仿皮皮衣</a></li>
							<li><a href="#">羽绒服</a></li>
							<li><a href="#">毛呢大衣</a></li>
							<li><a href="#">棉服</a></li>
							<li><a href="#">羊绒衫</a></li>
							<li><a href="#">羊毛衫</a></li>
							<li><a href="#">卫裤/运动裤</a></li>
						</ul>
						<ul class="cate-logo">    
							<li><a href="#"><img src="/static/index/img/1490073529881448780.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490072981305868823.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490072373278367315.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490072879222701895.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490073539440462760.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490072765604121481.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490073675778205608.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490073240845049320.jpg" width="112" height="49"></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="categorys-item" ectype="item" data-catid="630" data-eveval="0">
				<div class="item-content">
					<i class="iconfont icon-right"></i>
					<div class="categorys-title">
						<strong><a href="#">服饰配件</a></strong>
						<span>
				            <a href="#">配饰</a>
							<a href="#">光学镜架/镜片</a>
							<a href="#">防辐射眼镜</a>
							<a href="#">女士丝巾/围巾/披肩</a>
							<a href="#">棒球帽</a>
							<a href="#">遮阳伞/雨伞</a>
						</span>
					</div>
				</div>
				<div class="categorys-items-layer" ectype="cateLayer" style="display: none;">
					<div class="catetop-layer-con clearfix">
						<h3><a href="#">服饰配件</a></h3>
						<ul class="cate-list">
							<li><a href="#">配饰</a></li>
							<li><a href="#">光学镜架/镜片</a></li>
							<li><a href="#">防辐射眼镜</a></li>
							<li><a href="#">女士丝巾/围巾/披肩</a></li>
							<li><a href="#">棒球帽</a></li>
							<li><a href="#">遮阳伞/雨伞</a></li>
							<li><a href="#">遮阳帽</a></li>
							<li><a href="#">领带/领结/领带夹</a></li>
							<li><a href="#">男士腰带/礼盒</a></li>
							<li><a href="#">防晒手套</a></li>
							<li><a href="#">老花镜</a></li>
							<li><a href="#">袖扣</a></li>
							<li><a href="#">鸭舌帽</a></li>
							<li><a href="#">装饰眼镜</a></li>
							<li><a href="#">女士腰带/礼盒</a></li>
						</ul>
						<ul class="cate-logo">    
							<li><a href="#"><img src="/static/index/img/1490228100138579787.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490072804442637685.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490171981556005380.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490073561018734078.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490072823106532144.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490072677495061584.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490074901892372216.jpg" width="112" height="49"></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="categorys-item" ectype="item" data-catid="547" data-eveval="0">
				<div class="item-content">
					<i class="iconfont icon-right"></i>
					<div class="categorys-title">
						<strong><a href="#">内衣</a></strong>
						<span>
				            <a href="#">内衣配件</a>
							<a href="#">文胸</a>
							<a href="#">睡衣/家居服</a>
							<a href="#">情侣睡衣</a>
							<a href="#">文胸套装</a>
							<a href="#">少女文胸</a>
				        </span>
					</div>
				</div>
				<div class="categorys-items-layer" ectype="cateLayer" style="display: none;">
					<div class="catetop-layer-con clearfix">
						<h3><a href="#">内衣</a></h3>
						<ul class="cate-list">
							<li><a href="#">内衣配件</a></li>
							<li><a href="#">文胸</a></li>
							<li><a href="#">睡衣/家居服</a></li>
							<li><a href="#">情侣睡衣</a></li>
							<li><a href="#">文胸套装</a></li>
							<li><a href="#">少女文胸</a></li>
							<li><a href="#">女式内裤</a></li>
							<li><a href="#">男式内裤</a></li>
							<li><a href="#">商务男袜</a></li>
							<li><a href="#">休闲棉袜</a></li>
							<li><a href="#">吊带/背心</a></li>
							<li><a href="#">打底衫</a></li>
							<li><a href="#">抹胸</a></li>
							<li><a href="#">连裤袜/丝袜</a></li>
							<li><a href="#">美腿袜</a></li>
							<li><a href="#">打底裤袜</a></li>
							<li><a href="#">塑身美体</a></li>
							<li><a href="#">大码内衣</a></li>
						</ul>
						<ul class="cate-logo">    
							<li><a href="#"><img src="/static/index/img/1490072950580851309.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490227784119952387.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490073518703639070.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490073982547710498.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490074308773778697.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490072313895957648.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490073454678614186.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490227986732712711.jpg" width="112" height="49"></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="categorys-item" ectype="item" data-catid="1442" data-eveval="0">
				<div class="item-content">
					<i class="iconfont icon-right"></i>
					<div class="categorys-title">
						<strong><a href="#">运动户外</a></strong>
						<span>
				            <a href="#">跑步运动</a>
							<a href="#">室内健身</a>
							<a href="#">自行车运动</a>
							<a href="#">轮滑运动</a>
							<a href="#">羽毛球/网球/乒乓球</a>
							<a href="#">足球/篮球/排球</a>
				        </span>
					</div>
				</div>
				<div class="categorys-items-layer" ectype="cateLayer" style="display: none;">
					<div class="catetop-layer-con clearfix">
						<h3><a href="#">运动户外</a></h3>
						<ul class="cate-list">
							<li><a href="#">跑步运动</a></li>
							<li><a href="#">室内健身</a></li>
							<li><a href="#">自行车运动</a></li>
							<li><a href="#">轮滑运动</a></li>
							<li><a href="#">羽毛球/网球/乒乓球</a></li>
							<li><a href="#">足球/篮球/排球</a></li>
							<li><a href="#">运动休闲</a></li>
							<li><a href="#">钓鱼用品</a></li>
							<li><a href="#">野营烧烤</a></li>
							<li><a href="#">游泳运动</a></li>
							<li><a href="#">舞蹈运动</a></li>
							<li><a href="#">瑜伽运动</a></li>
							<li><a href="#">防狼防身</a></li>
							<li><a href="#">水上运动</a></li>
						</ul>
						<ul class="cate-logo">    
							<li><a href="#"><img src="/static/index/img/1490072850306019115.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490072931218635674.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490072898345358625.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490073009638652059.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490073324022460149.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490072918339853569.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490072889090025069.jpg" width="112" height="49"></a></li>
						    <li><a href="#"><img src="/static/index/img/1490072993409028193.jpg" width="112" height="49"></a></li>
						</ul>
					</div>
				</div>
			</div>
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
		<div class="banner catetop-banner">
	<div class="bd"><ul style="position: relative; width: 1903px; height: 450px;">
  <li style="position: absolute; width: 1903px; left: 0px; top: 0px; display: none;"><div class="banner-width"><a style="background: url(/static/index/img/1489958299308242697.jpg) no-repeat;" href="https://www.dscmall.cn/" width="1903" height="327"></a></div></li>
  <li style="position: absolute; width: 1903px; left: 0px; top: 0px; display: none;"><div class="banner-width"><a style="background: url(/static/index/img/1490123276201426626.jpg) no-repeat;" href="https://www.dscmall.cn/" width="1903" height="327"></a></div></li>
  <li style="position: absolute; width: 1903px; left: 0px; top: 0px; display: none;"><div class="banner-width"><a style="background: url(/static/index/img/1490123436237080312.jpg) no-repeat;" href="https://www.dscmall.cn/" width="1903" height="327"></a></div></li>
  <li style="position: absolute; width: 1903px; left: 0px; top: 0px; display: none;"><div class="banner-width"><a style="background: url(/static/index/img/1490123306523369831.jpg) no-repeat;" href="https://www.dscmall.cn/" width="1903" height="327"></a></div></li>
  <li style="position: absolute; width: 1903px; left: 0px; top: 0px; display: list-item;"><div class="banner-width"><a style="background: url(/static/index/img/1490123319351624402.jpg) no-repeat;" href="https://www.dscmall.cn/" width="1903" height="327"></a></div></li>
</ul>
</div>
	<div class="cloth-hd"><ul><li class="">1</li><li class="">2</li><li class="">3</li><li class="">4</li><li class="on">5</li></ul></div>
</div>
<div class="catetop-main w w1200" ectype="catetopWarp">
	
	<div class="limitime" id="limitime">
		<div class="hd">
			<h2>限时抢购</h2>
			<h3>每日精彩不断</h3>
		</div>
		<div class="bd">
			<ul class="limitime-list clearfix">
		
				<li class="mod-shadow-card">
					<a href="#" class="img"><img src="/static/index/img/0_thumb_G_1490174547624.jpg" alt=""></a>
					<p class="price">
													 <em>¥</em>124.00											
						<del><em>¥</em>165.60</del>
					</p>
					<a href="#" class="name" title="贝妍夏季薄款女士睡衣性感V领女南韩丝家居服运动可外穿中袖套装">贝妍夏季薄款女士睡衣性感V领女南韩丝家居服运动可外穿中袖套装</a>
					<a href="#" class="limitime-btn">查看详情</a>
				</li>
				<li class="mod-shadow-card">
					<a href="#" class="img"><img src="/static/index/img/0_thumb_G_1490174303715.jpg" alt=""></a>
					<p class="price">
													 <em>¥</em>130.00											
						<del><em>¥</em>190.79</del>
					</p>
					<a href="#" class="name" title="YOHO有货潮牌LAL/数字贴布连帽套头卫衣男女通用 吴亦凡亲着同款 春夏焕新季，3.21日00:00开始抢购">YOHO有货潮牌LAL/数字贴布连帽套头卫衣男女通用 吴亦凡亲着同款 春夏焕新季，3.21日00:00开始抢购</a>
					<a href="#" class="limitime-btn">查看详情</a>
				</li>
				<li class="mod-shadow-card">
					<a href="#" class="img"><img src="/static/index/img/0_thumb_G_1490174741051.jpg" alt=""></a>
					<p class="price">
													 <em>¥</em>40.00											
						<del><em>¥</em>78.00</del>
					</p>
					<a href="#" class="name" title="初棉纯色圆领长袖T恤打底衫秋衣女上衣体恤女士修身打底衣春秋 挺拔有型 棉氨材质 柔软舒适 耐洗耐磨">初棉纯色圆领长袖T恤打底衫秋衣女上衣体恤女士修身打底衣春秋 挺拔有型 棉氨材质 柔软舒适 耐洗耐磨</a>
					<a href="#" class="limitime-btn">查看详情</a>
				</li>
				<li class="mod-shadow-card">
					<a href="#" class="img"><img src="/static/index/img/0_thumb_G_1490174547624.jpg" alt=""></a>
					<p class="price">
													 <em>¥</em>124.00											
						<del><em>¥</em>165.60</del>
					</p>
					<a href="#" class="name" title="贝妍夏季薄款女士睡衣性感V领女南韩丝家居服运动可外穿中袖套装">贝妍夏季薄款女士睡衣性感V领女南韩丝家居服运动可外穿中袖套装</a>
					<a href="#" class="limitime-btn">查看详情</a>
				</li>
				<li class="mod-shadow-card">
					<a href="#" class="img"><img src="/static/index/img/0_thumb_G_1490174303715.jpg" alt=""></a>
					<p class="price">
													 <em>¥</em>130.00											
						<del><em>¥</em>190.79</del>
					</p>
					<a href="#" class="name" title="YOHO有货潮牌LAL/数字贴布连帽套头卫衣男女通用 吴亦凡亲着同款 春夏焕新季，3.21日00:00开始抢购">YOHO有货潮牌LAL/数字贴布连帽套头卫衣男女通用 吴亦凡亲着同款 春夏焕新季，3.21日00:00开始抢购</a>
					<a href="#" class="limitime-btn">查看详情</a>
				</li>
							
	</ul>
		</div>
	</div>
	
		
	
	<div class="catetop-floor-wp" ectype="goods_cat_level">
<div class="catetop-floor" id="floor_1" ectype="floorItem">
	<div class="f-hd">
		<h2>女装</h2>
		<h3>1F</h3>
		<div class="extra">
			<div class="fgoods-hd">
				<ul>
			<li class="on">连衣裙</li>
			<li>蕾丝/雪纺衫</li>
			<li>衬衫</li>
			<li>T恤</li>
			<li>半身裙</li>
	
				</ul>
			</div>
		</div>
	</div>
	<div class="f-bd clearfix">
		<div class="bd-left">
			<div class="l-ad"><ul>    <li><a href="#"><img src="/static/index/img/1489959091429324080.jpg" width="400" height="660"></a></li>
</ul></div>
		</div>
		<div class="bd-right">
			<div class="right-top clearfix">
				<div class="rt-ad"><a href="#"><img src="/static/index/img/1490902198662849705.png" width="399" height="170"></a></div>
<div class="rt-ad"><a href="#"><img src="/static/index/img/1490902716880024601.jpg" width="399" height="170"></a></div>
			</div>
			<div class="right-bottom" style="position: relative; width: 800px; height: 488px;">
<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px;">
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490169030833.jpg" alt=""></a></div>
<div class="p-name"><a href="#">韩都衣舍2017韩版女装夏装新款时尚修身显瘦圆领条纹T恤OGY7711娋 显瘦版型 舒适面料 条纹元素</a></div>
<div class="p-price"><em>¥</em>88.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490169216444.jpg" alt=""></a></div>
<div class="p-name"><a href="#">韩都衣舍2016新款秋冬款长袖连衣裙宽松学生冬季内搭打底裙子韩版 领券下单立减/单件包邮/先拍先发货！</a></div>
<div class="p-price"><em>¥</em>159.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490169250846.jpg" alt=""></a></div>
<div class="p-name"><a href="#">韩都衣舍秋冬喇叭长袖针织衫毛衣女套头宽松纯色百搭学生韩版打底 领券下单立减/单件包邮/先拍先发货！</a></div>
<div class="p-price"><em>¥</em>159.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490169151126.jpg" alt=""></a></div>
<div class="p-name"><a href="#">韩都衣舍春季韩国ulzzang连帽卫衣女套头宽松百搭学生韩版潮bf风 领券下单立减/单件包邮/先拍先发货！</a></div>
<div class="p-price"><em>¥</em>148.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174894779.jpg" alt=""></a></div>
<div class="p-name"><a href="#">2017韩版女装夏装新款A字宽松松紧腰印花连衣裙DT7039乾 舒适松紧腰 A字版型 时尚印花</a></div>
<div class="p-price"><em>¥</em>166.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490169281436.jpg" alt=""></a></div>
<div class="p-name"><a href="#">韩都衣舍2017韩版女装春装新款条纹显瘦百搭宽松v领七分袖衬衫潮 领券立减/单件包邮/七天无理由退换</a></div>
<div class="p-price"><em>¥</em>78.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490169186175.jpg" alt=""></a></div>
<div class="p-name"><a href="#">韩都衣舍2017春装新款女装春款拼接喇叭长袖连衣裙中长款时尚韩版 领券立减/单件包邮/七天无理由退换</a></div>
<div class="p-price"><em>¥</em>118.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490169118213.jpg" alt=""></a></div>
<div class="p-name"><a href="#">小米红米3s手机壳保护套红米3高配版指纹男女款潮版磨砂硬壳防摔 收藏截图 送大礼包</a></div>
<div class="p-price"><em>¥</em>15.90</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490169074773.jpg" alt=""></a></div>
<div class="p-name"><a href="#">朴信惠明显同款韩都衣舍2017春装新款高领毛衣女套头宽松纯色韩版 领券下单立减/单件包邮/先拍先发货！</a></div>
<div class="p-price"><em>¥</em>259.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490168991044.jpg" alt=""></a></div>
<div class="p-name"><a href="#">韩都衣舍2017韩版女装夏装新款纯色镂空露腰短袖T恤OU7163堯 韩版版型 时尚镂空 舒适面料 个性穿搭</a></div>
<div class="p-price"><em>¥</em>112.00</div>
					</li>
			</ul>
				<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174858999.jpg" alt=""></a></div>
<div class="p-name"><a href="#">韩美格2017春秋新款修身大码蕾丝网纱打底衫女长袖薄款圆领女T恤 全店商品 二件减5元 三件减10</a></div>
<div class="p-price"><em>¥</em>68.00</div>
					</li>
			</ul>
				<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
			</ul>
				<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174741051.jpg" alt=""></a></div>
<div class="p-name"><a href="#">初棉纯色圆领长袖T恤打底衫秋衣女上衣体恤女士修身打底衣春秋 挺拔有型 棉氨材质 柔软舒适 耐洗耐磨</a></div>
<div class="p-price"><em>¥</em>65.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489102753231.jpg" alt=""></a></div>
<div class="p-name"><a href="#">新款韩版chic学生宽松短款外套上衣字母长袖连帽套头卫衣女潮</a></div>
<div class="p-price"><em>¥</em>300.00</div>
					</li>
			</ul>
				<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174791219.jpg" alt=""></a></div>
<div class="p-name"><a href="#">17年春夏新款百搭半身裙蛋糕裙 a字裙 裤裙伞裙大码裙子超短裙女 松紧腰围 带裤边打底衬 涤针织面料</a></div>
<div class="p-price"><em>¥</em>49.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489102299856.jpg" alt=""></a></div>
<div class="p-name"><a href="#">新款学院风韩版时尚太空棉宽松长袖印花圆领卫衣女</a></div>
<div class="p-price"><em>¥</em>233.00</div>
					</li>
			</ul>
		</div>
		</div>
		<div class="clear"></div>
				<ul class="brands">
			<li><a href="#"><img src="/static/index/img/1490071974970349584.jpg" alt="esprit"></a></li>
<li><a href="#"><img src="/static/index/img/1490072756032175204.jpg" alt="喜瑞"></a></li>
<li><a href="#"><img src="/static/index/img/1490073577683159021.jpg" alt="华帝"></a></li>
<li><a href="#"><img src="/static/index/img/1490073591535005714.jpg" alt="鸿星尔克"></a></li>
<li><a href="#"><img src="/static/index/img/1490072860522023692.jpg" alt="乐力"></a></li>
<li><a href="#"><img src="/static/index/img/1490074030328949587.jpg" alt="LG"></a></li>
<li><a href="#"><img src="/static/index/img/1490228075580091113.jpg" alt="麦斯威尔"></a></li>
<li><a href="#"><img src="/static/index/img/1490074901892372216.jpg" alt="美的"></a></li>
		</ul>
			</div>
</div>





<div class="catetop-floor" id="floor_2" ectype="floorItem">
	<div class="f-hd">
		<h2>男装</h2>
		<h3>2F</h3>
		<div class="extra">
			<div class="fgoods-hd">
				<ul>
			<li class="on">T恤</li>
			<li>裤子</li>
			<li>POLO衫</li>
			<li>针织衫</li>
			<li>夹克</li>
			
				</ul>
			</div>
		</div>
	</div>
	<div class="f-bd clearfix">
		<div class="bd-left">
			<div class="l-ad"><ul>    <li><a href="#"><img src="/static/index/img/1490211733278354775.png" width="400" height="660"></a></li>
</ul></div>
		</div>
		<div class="bd-right">
			<div class="right-top clearfix">
				<div class="rt-ad"><a href="#"><img src="/static/index/img/1490902568354711628.jpg" width="399" height="170"></a></div>
<div class="rt-ad"><a href="#"><img src="/static/index/img/1490902583818745610.jpg" width="399" height="170"></a></div>
			</div>
			<div class="right-bottom" style="position: relative; width: 800px; height: 488px;">
<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px;">
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490211620029.jpg" alt=""></a></div>
<div class="p-name"><a href="#">马克华菲长袖T恤男士圆领修身韩版刺绣纯棉2017春装新款潮t 7002 立体3D绣花 欧美潮流范 17春装新品</a></div>
<div class="p-price"><em>¥</em>128.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490211575591.jpg" alt=""></a></div>
<div class="p-name"><a href="#">马克华菲长袖T恤男 冬季新品纯棉圆领黑白潮款印花休闲t恤   98</a></div>
<div class="p-price"><em>¥</em>98.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490211700709.jpg" alt=""></a></div>
<div class="p-name"><a href="#">美特斯邦威长袖T恤男士2017春装新款时尚印花百搭205064商场同款 1元秒100元优惠券丨限量抢丨立即抢购</a></div>
<div class="p-price"><em>¥</em>89.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489099773629.jpg" alt=""></a></div>
<div class="p-name"><a href="#">2017春装新款男士卫衣套头圆领韩版潮流时尚男生休闲外套</a></div>
<div class="p-price"><em>¥</em>200.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489099544749.jpg" alt=""></a></div>
<div class="p-name"><a href="#">秋冬新款加绒圆领套头卫衣男青年男生韩版潮流学生休闲外套男</a></div>
<div class="p-price"><em>¥</em>168.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489099437211.jpg" alt=""></a></div>
<div class="p-name"><a href="#">秋季新款男士套头卫衣印花外套韩版简约百搭潮流男生上衣服</a></div>
<div class="p-price"><em>¥</em>120.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174019725.jpg" alt=""></a></div>
<div class="p-name"><a href="#">HLA/海澜之家撞色长袖T恤春季热卖圆领修身拼接T恤男 简约圆领 微弹修身 撞色拼接 触感柔软</a></div>
<div class="p-price"><em>¥</em>98.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490211843119.jpg" alt=""></a></div>
<div class="p-name"><a href="#">马克华菲短袖T恤 夏装新款舒适圆领条纹拼接男简约修身短袖上衣</a></div>
<div class="p-price"><em>¥</em>128.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174208112.jpg" alt=""></a></div>
<div class="p-name"><a href="#">森马夹克 2016冬装新款男士飞行夹克贴布绣立领休闲外套韩版潮流</a></div>
<div class="p-price"><em>¥</em>199.90</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174303715.jpg" alt=""></a></div>
<div class="p-name"><a href="#">YOHO有货潮牌LAL/数字贴布连帽套头卫衣男女通用 吴亦凡亲着同款 春夏焕新季，3.21日00:00开始抢购</a></div>
<div class="p-price"><em>¥</em>159.00</div>
					</li>
			</ul>
				<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174241651.jpg" alt=""></a></div>
<div class="p-name"><a href="#">裤子男士哈伦裤春季新款2017束脚裤修身韩版潮流小脚裤男裤休闲裤 弹力</a></div>
<div class="p-price"><em>¥</em>99.00</div>
					</li>
			</ul>
				<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
			</ul>
				<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
			</ul>
				<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
			</ul>
					</div>
		</div>
		<div class="clear"></div>
				<ul class="brands">
			<li><a href="#"><img src="/static/index/img/1490073529881448780.jpg" alt="匡威"></a></li>
<li><a href="#"><img src="/static/index/img/1490072981305868823.jpg" alt="开普特"></a></li>
<li><a href="#"><img src="/static/index/img/1490072373278367315.jpg" alt="金利来"></a></li>
<li><a href="#"><img src="/static/index/img/1490072879222701895.jpg" alt="金史密斯"></a></li>
<li><a href="#"><img src="/static/index/img/1490073539440462760.jpg" alt="康恩贝"></a></li>
<li><a href="#"><img src="/static/index/img/1490072765604121481.jpg" alt="康比特"></a></li>
<li><a href="#"><img src="/static/index/img/1490073675778205608.jpg" alt="哥弟"></a></li>
<li><a href="#"><img src="/static/index/img/1490073240845049320.jpg" alt="小米"></a></li>
		</ul>
			</div>
</div>





<div class="catetop-floor" id="floor_3" ectype="floorItem">
	<div class="f-hd">
		<h2>服饰配件</h2>
		<h3>3F</h3>
		<div class="extra">
			<div class="fgoods-hd">
				<ul>
			<li class="on">配饰</li>
			<li>光学镜架/镜片</li>
			<li>防辐射眼镜</li>
			<li>女士丝巾/围巾/披肩</li>
			<li>棒球帽</li>
		
				</ul>
			</div>
		</div>
	</div>
	<div class="f-bd clearfix">
		<div class="bd-left">
			<div class="l-ad"><ul>    <li><a href="#"><img src="/static/index/img/1490211940085510775.png" width="400" height="660"></a></li>
</ul></div>
		</div>
		<div class="bd-right">
			<div class="right-top clearfix">
				<div class="rt-ad"><a href="#"><img src="/static/index/img/1490902595862278495.jpg" width="399" height="170"></a></div>
<div class="rt-ad"><a href="#"><img src="/static/index/img/1490902606945055998.jpg" width="399" height="170"></a></div>
			</div>
			<div class="right-bottom" style="position: relative; width: 800px; height: 488px;">
<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px;">
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490173894447.jpg" alt=""></a></div>
<div class="p-name"><a href="#">红叶伞遮阳伞防紫外线黑胶防晒晴雨两用太阳伞女糖果色折叠雨伞大 黑胶防晒 晴雨两用 糖果色 都市风情</a></div>
<div class="p-price"><em>¥</em>38.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490173663577.jpg" alt=""></a></div>
<div class="p-name"><a href="#">男女韩版纯棉可爱冬季个性防尘情侣口罩保暖透气黑色时尚潮款春 15元一共2个口罩 防尘个性时尚</a></div>
<div class="p-price"><em>¥</em>15.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490155369648.jpg" alt=""></a></div>
<div class="p-name"><a href="#">Apple/苹果 Apple Watch Series 2 智能手表42mm</a></div>
<div class="p-price"><em>¥</em>3188.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489108087695.jpg" alt=""></a></div>
<div class="p-name"><a href="#">【新品发售】 Beats Beats Solo3 Wireless 头戴式无线蓝牙耳机 分期免息 全国联保 免费保修一年</a></div>
<div class="p-price"><em>¥</em>1888.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490173626566.jpg" alt=""></a></div>
<div class="p-name"><a href="#">74超薄非球面镜片高度近视眼镜片近视镜片防蓝光配眼镜镜片加工 套餐价低至359元 6款镜架任您选</a></div>
<div class="p-price"><em>¥</em>399.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490173699371.jpg" alt=""></a></div>
<div class="p-name"><a href="#">宝石蝶真丝围巾女士春秋季高档丝巾重磅桑蚕丝大方巾披肩丝绸礼品 16姆米重磅真丝丝滑缎面90方巾礼盒包装</a></div>
<div class="p-price"><em>¥</em>169.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490173534127.jpg" alt=""></a></div>
<div class="p-name"><a href="#">NewEra纽亦华 新款MLB棒球帽男女字母NY洋基LA道奇调节平沿嘻哈帽 官方正品</a></div>
<div class="p-price"><em>¥</em>219.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490173860746.jpg" alt=""></a></div>
<div class="p-name"><a href="#">6林志玲花样姐姐同款海伦凯勒太阳镜女 偏光蛤蟆镜潮墨镜H8535 花样姐姐同款 林志玲设计 炫彩镂空</a></div>
<div class="p-price"><em>¥</em>378.00</div>
					</li>
			</ul>
				<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
			</ul>
				<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
			</ul>
				<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
			</ul>
				<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490173534127.jpg" alt=""></a></div>
<div class="p-name"><a href="#">NewEra纽亦华 新款MLB棒球帽男女字母NY洋基LA道奇调节平沿嘻哈帽 官方正品</a></div>
<div class="p-price"><em>¥</em>219.00</div>
					</li>
			</ul>
				</div>
		</div>
		<div class="clear"></div>
				<ul class="brands">
			<li><a href="#"><img src="/static/index/img/1490228100138579787.jpg" alt="杰克琼斯"></a></li>
<li><a href="#"><img src="/static/index/img/1490072804442637685.jpg" alt="健安喜"></a></li>
<li><a href="#"><img src="/static/index/img/1490171981556005380.jpg" alt="佳沪数码-华为"></a></li>
<li><a href="#"><img src="/static/index/img/1490073561018734078.jpg" alt="姬芮"></a></li>
<li><a href="#"><img src="/static/index/img/1490072823106532144.jpg" alt="金奥力"></a></li>
<li><a href="#"><img src="/static/index/img/1490072677495061584.jpg" alt="justyle"></a></li>
<li><a href="#"><img src="/static/index/img/1490074901892372216.jpg" alt="美的"></a></li>
		</ul>
			</div>
</div>





<div class="catetop-floor" id="floor_4" ectype="floorItem">
	<div class="f-hd">
		<h2>内衣</h2>
		<h3>4F</h3>
		<div class="extra">
			<div class="fgoods-hd">
				<ul>
			<li class="on">内衣配件</li>
			<li>文胸</li>
			<li>睡衣/家居服</li>
			<li>情侣睡衣</li>
			<li>文胸套装</li>
		
				</ul>
			</div>
		</div>
	</div>
	<div class="f-bd clearfix">
		<div class="bd-left">
			<div class="l-ad"><ul>    <li><a href="#"><img src="/static/index/img/1490211951765051111.png" width="400" height="660"></a></li>
</ul></div>
		</div>
		<div class="bd-right">
			<div class="right-top clearfix">
				<div class="rt-ad"><a href="#"><img src="/static/index/img/1490902618861680555.jpg" width="399" height="170"></a></div>
<div class="rt-ad"><a href="#"><img src="/static/index/img/1490902628538237349.jpg" width="399" height="170"></a></div>
			</div>
			<div class="right-bottom" style="position: relative; width: 800px; height: 488px;">
<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px;">
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489099987431.jpg" alt=""></a></div>
<div class="p-name"><a href="#">爆款 爱慕经典KiKi裤轻薄无痕女士中腰三角内裤多色内衣A</a></div>
<div class="p-price"><em>¥</em>88.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174547624.jpg" alt=""></a></div>
<div class="p-name"><a href="#">贝妍夏季薄款女士睡衣性感V领女南韩丝家居服运动可外穿中袖套装</a></div>
<div class="p-price"><em>¥</em>138.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174469373.jpg" alt=""></a></div>
<div class="p-name"><a href="#">Calvin Klein Underwear/CK 2017春夏新款 男士平角内裤NU8638 初上市价格290元</a></div>
<div class="p-price"><em>¥</em>290.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489100049187.jpg" alt=""></a></div>
<div class="p-name"><a href="#">2017新品 加一尚品无痕内衣女 前扣无钢圈薄款交叉美背文胸M37 厚杯+薄杯 无钢圈 前扣 美背 上薄下厚</a></div>
<div class="p-price"><em>¥</em>158.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489100653308.jpg" alt=""></a></div>
<div class="p-name"><a href="#">樱尚雅一片式无痕无钢圈文胸聚拢调整型性感小胸罩厚薄款少女内衣 2件减5元 不聚拢包退 送运费险</a></div>
<div class="p-price"><em>¥</em>200.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489100914563.jpg" alt=""></a></div>
<div class="p-name"><a href="#">舒适睡眠文胸罩无痕薄款运动内衣无钢圈女士调整型背心式少女聚拢 赠运费险 无痕无钢圈 舒适聚拢</a></div>
<div class="p-price"><em>¥</em>211.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174663688.jpg" alt=""></a></div>
<div class="p-name"><a href="#">都市丽人文胸旗舰店 林志玲有钢圈少女小胸文胸 聚拢 调整型内衣V 官方正品 赠运费险 收藏有礼 全国包邮</a></div>
<div class="p-price"><em>¥</em>69.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174703131.jpg" alt=""></a></div>
<div class="p-name"><a href="#">都市丽人一片式无痕文胸厚杯性感聚拢舒适光面胸罩纯色商场同款 2016新品明星同款舒适Q软托无痕体验</a></div>
<div class="p-price"><em>¥</em>91.00</div>
					</li>
			</ul>
				<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
			</ul>
				<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
			</ul>
				<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
			</ul>
				<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
			</ul>
			</div>
		</div>
		<div class="clear"></div>
				<ul class="brands">
			<li><a href="#"><img src="/static/index/img/1490072950580851309.jpg" alt="Masentek"></a></li>
<li><a href="#"><img src="/static/index/img/1490227784119952387.jpg" alt="李医生"></a></li>
<li><a href="#"><img src="/static/index/img/1490073518703639070.jpg" alt="兰蔻"></a></li>
<li><a href="#"><img src="/static/index/img/1490073982547710498.jpg" alt="Five Plus"></a></li>
<li><a href="#"><img src="/static/index/img/1490074308773778697.jpg" alt="新百伦"></a></li>
<li><a href="#"><img src="/static/index/img/1490072313895957648.jpg" alt="ELLE HOME"></a></li>
<li><a href="#"><img src="/static/index/img/1490073454678614186.jpg" alt="狼爪"></a></li>
<li><a href="#"><img src="/static/index/img/1490227986732712711.jpg" alt="立邦"></a></li>
		</ul>
			</div>
</div>





<div class="catetop-floor" id="floor_5" ectype="floorItem">
	<div class="f-hd">
		<h2>运动户外</h2>
		<h3>5F</h3>
		<div class="extra">
			<div class="fgoods-hd">
				<ul>
			<li class="on">跑步运动</li>
			<li>室内健身</li>
			<li>自行车运动</li>
			<li>轮滑运动</li>
			<li>羽毛球/网球/乒乓球</li>
				
				</ul>
			</div>
		</div>
	</div>
	<div class="f-bd clearfix">
		<div class="bd-left">
			<div class="l-ad"><ul>    <li><a href="#"><img src="/static/index/img/1490211964186681053.png" width="400" height="660"></a></li>
</ul></div>
		</div>
		<div class="bd-right">
			<div class="right-top clearfix">
				<div class="rt-ad"><a href="#"><img src="/static/index/img/1490902637953027856.jpg" width="399" height="170"></a></div>
<div class="rt-ad"><a href="#"><img src="/static/index/img/1490902646240694917.jpg" width="399" height="170"></a></div>
			</div>
			<div class="right-bottom" style="position: relative; width: 800px; height: 488px;">
<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px;">
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490218873837.jpg" alt=""></a></div>
<div class="p-name"><a href="#">Nike 耐克官方 PRO COOL COMP LONG-SLEEVE 男子训练紧身衣703088</a></div>
<div class="p-price"><em>¥</em>249.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490218667022.jpg" alt=""></a></div>
<div class="p-name"><a href="#">马克华菲长袖T恤男 冬季新品纯棉圆领黑白潮款印花休闲t恤</a></div>
<div class="p-price"><em>¥</em>98.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490218800612.jpg" alt=""></a></div>
<div class="p-name"><a href="#">洽福 转椅轮子万向轮 老板椅办公椅子滑轮电脑椅配件滚轮脚轮轱辘 静音灵活不伤地板质保三年下单备注安装方式</a></div>
<div class="p-price"><em>¥</em>23.80</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490218770962.jpg" alt=""></a></div>
<div class="p-name"><a href="#">哑铃男士钢制家用电镀哑铃杠铃25 40公斤 纯钢哑铃盒装 健身器材 纯钢哑铃杠铃送哑铃架</a></div>
<div class="p-price"><em>¥</em>360.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490218732576.jpg" alt=""></a></div>
<div class="p-name"><a href="#">T1多功能健身器材家用仰卧板收腹机哑铃凳仰卧起坐板折叠 健身椅 进口格子皮八档调节 承重500斤</a></div>
<div class="p-price"><em>¥</em>260.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490218701469.jpg" alt=""></a></div>
<div class="p-name"><a href="#">迪卡侬健身手套 力量训练哑铃护掌防滑 DOMYOS QS 轻盈透气 重量训练</a></div>
<div class="p-price"><em>¥</em>39.90</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490218905472.jpg" alt=""></a></div>
<div class="p-name"><a href="#">专业瑜伽服双线美背瑜伽背心吊带含胸垫一体式弹力修身运动健身服</a></div>
<div class="p-price"><em>¥</em>159.00</div>
					</li>
				<li>
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490218835060.jpg" alt=""></a></div>
<div class="p-name"><a href="#">马克华菲长袖T恤男 冬季新品纯棉圆领黑白潮款印花休闲t恤</a></div>
<div class="p-price"><em>¥</em>98.00</div>
					</li>
			</ul>
				<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
			</ul>
				<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
			</ul>
				<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
			</ul>
				<ul class="fgoods-list" style="position: absolute; width: 804px; left: 0px; top: 0px; display: none;">
			</ul>
		</div>
		</div>
		<div class="clear"></div>
				<ul class="brands">
			<li><a href="#"><img src="/static/index/img/1490072850306019115.jpg" alt="同庆和堂"></a></li>
<li><a href="#"><img src="/static/index/img/1490072931218635674.jpg" alt="皮克朋"></a></li>
<li><a href="#"><img src="/static/index/img/1490072898345358625.jpg" alt="皮尔瑜伽"></a></li>
<li><a href="#"><img src="/static/index/img/1490073009638652059.jpg" alt="苹果"></a></li>
<li><a href="#"><img src="/static/index/img/1490073324022460149.jpg" alt="七匹狼"></a></li>
<li><a href="#"><img src="/static/index/img/1490072918339853569.jpg" alt="乔山"></a></li>
<li><a href="#"><img src="/static/index/img/1490072889090025069.jpg" alt="斯伯丁"></a></li>
<li><a href="#"><img src="/static/index/img/1490072993409028193.jpg" alt="三星"></a></li>
		</ul>
			</div>
</div>




</div>
	
    <div class="atwillgo" id="atwillgo">
            <div class="awg-hd">
<h2>随手购</h2>
            </div>
            <div class="awg-bd">
<div class="atwillgo-slide">
    <a href="#"><i class="iconfont icon-left"></i></a>
    <a href="#"><i class="iconfont icon-right"></i></a>
    <div class="hd">
        <ul><li class="on"></li><li></li><li></li></ul>
    </div>
    <div class="bd">
        <div class="tempWrap" style="overflow:hidden; position:relative; width:1200px"><ul style="width: 3600px; left: 0px; position: relative; overflow: hidden; padding: 0px; margin: 0px;">
        <li style="float: left; width: 158px;">
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489102753231.jpg" alt=""></a></div>
<div class="p-price">
        <em>¥</em>300.00    </div>
<div class="p-name"><a href="#">新款韩版chic学生宽松短款外套上衣字母长袖连帽套头卫衣女潮</a></div>
<div class="p-btn"><a href="#">加入购物车</a></div>
            </li>
        <li style="float: left; width: 158px;">
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174208112.jpg" alt=""></a></div>
<div class="p-price">
        <em>¥</em>199.90    </div>
<div class="p-name"><a href="#">森马夹克 2016冬装新款男士飞行夹克贴布绣立领休闲外套韩版潮流</a></div>
<div class="p-btn"><a href="#">加入购物车</a></div>
            </li>
        <li style="float: left; width: 158px;">
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490173534127.jpg" alt=""></a></div>
<div class="p-price">
        <em>¥</em>219.00    </div>
<div class="p-name"><a href="#">NewEra纽亦华 新款MLB棒球帽男女字母NY洋基LA道奇调节平沿嘻哈帽 官方正品</a></div>
<div class="p-btn"><a href="#">加入购物车</a></div>
            </li>
        <li style="float: left; width: 158px;">
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490218873837.jpg" alt=""></a></div>
<div class="p-price">
        <em>¥</em>249.00    </div>
<div class="p-name"><a href="#">Nike 耐克官方 PRO COOL COMP LONG-SLEEVE 男子训练紧身衣703088</a></div>
<div class="p-btn"><a href="#">加入购物车</a></div>
            </li>
        <li style="float: left; width: 158px;">
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490169216444.jpg" alt=""></a></div>
<div class="p-price">
        <em>¥</em>159.00    </div>
<div class="p-name"><a href="#">韩都衣舍2016新款秋冬款长袖连衣裙宽松学生冬季内搭打底裙子韩版 领券下单立减/单件包邮/先拍先发货！</a></div>
<div class="p-btn"><a href="#">加入购物车</a></div>
            </li>
        <li style="float: left; width: 158px;">
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489099544749.jpg" alt=""></a></div>
<div class="p-price">
        <em>¥</em>168.00    </div>
<div class="p-name"><a href="#">秋冬新款加绒圆领套头卫衣男青年男生韩版潮流学生休闲外套男</a></div>
<div class="p-btn"><a href="#">加入购物车</a></div>
            </li>
        <li style="float: left; width: 158px;">
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490169030833.jpg" alt=""></a></div>
<div class="p-price">
        <em>¥</em>88.00    </div>
<div class="p-name"><a href="#">韩都衣舍2017韩版女装夏装新款时尚修身显瘦圆领条纹T恤OGY7711娋 显瘦版型 舒适面料 条纹元素</a></div>
<div class="p-btn"><a href="#">加入购物车</a></div>
            </li>
        <li style="float: left; width: 158px;">
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490169281436.jpg" alt=""></a></div>
<div class="p-price">
        <em>¥</em>78.00    </div>
<div class="p-name"><a href="#">韩都衣舍2017韩版女装春装新款条纹显瘦百搭宽松v领七分袖衬衫潮 领券立减/单件包邮/七天无理由退换</a></div>
<div class="p-btn"><a href="#">加入购物车</a></div>
            </li>
        <li style="float: left; width: 158px;">
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174508974.jpg" alt=""></a></div>
<div class="p-price">
        <em>¥</em>44.50    </div>
<div class="p-name"><a href="#">迷瞳盒装女士内裤莫代尔透气少女三角裤夏季性感低腰无痕大码裤头 5条盒装 莫代尔面料 小内裤 窄边三角裤</a></div>
<div class="p-btn"><a href="#">加入购物车</a></div>
            </li>
        <li style="float: left; width: 158px;">
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490218835060.jpg" alt=""></a></div>
<div class="p-price">
        <em>¥</em>98.00    </div>
<div class="p-name"><a href="#">马克华菲长袖T恤男 冬季新品纯棉圆领黑白潮款印花休闲t恤</a></div>
<div class="p-btn"><a href="#">加入购物车</a></div>
            </li>
        <li style="float: left; width: 158px;">
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174791219.jpg" alt=""></a></div>
<div class="p-price">
        <em>¥</em>49.00    </div>
<div class="p-name"><a href="#">17年春夏新款百搭半身裙蛋糕裙 a字裙 裤裙伞裙大码裙子超短裙女 松紧腰围 带裤边打底衬 涤针织面料</a></div>
<div class="p-btn"><a href="#">加入购物车</a></div>
            </li>
        <li style="float: left; width: 158px;">
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489100914563.jpg" alt=""></a></div>
<div class="p-price">
        <em>¥</em>211.00    </div>
<div class="p-name"><a href="#">舒适睡眠文胸罩无痕薄款运动内衣无钢圈女士调整型背心式少女聚拢 赠运费险 无痕无钢圈 舒适聚拢</a></div>
<div class="p-btn"><a href="#">加入购物车</a></div>
            </li>
        <li style="float: left; width: 158px;">
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490218800612.jpg" alt=""></a></div>
<div class="p-price">
        <em>¥</em>23.80    </div>
<div class="p-name"><a href="#">洽福 转椅轮子万向轮 老板椅办公椅子滑轮电脑椅配件滚轮脚轮轱辘 静音灵活不伤地板质保三年下单备注安装方式</a></div>
<div class="p-btn"><a href="#">加入购物车</a></div>
            </li>
        <li style="float: left; width: 158px;">
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174303715.jpg" alt=""></a></div>
<div class="p-price">
        <em>¥</em>130.00    </div>
<div class="p-name"><a href="#">YOHO有货潮牌LAL/数字贴布连帽套头卫衣男女通用 吴亦凡亲着同款 春夏焕新季，3.21日00:00开始抢购</a></div>
<div class="p-btn"><a href="#">加入购物车</a></div>
            </li>
        <li style="float: left; width: 158px;">
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490174547624.jpg" alt=""></a></div>
<div class="p-price">
        <em>¥</em>124.00    </div>
<div class="p-name"><a href="#">贝妍夏季薄款女士睡衣性感V领女南韩丝家居服运动可外穿中袖套装</a></div>
<div class="p-btn"><a href="#">加入购物车</a></div>
            </li>
        <li style="float: left; width: 158px;">
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489099437211.jpg" alt=""></a></div>
<div class="p-price">
        <em>¥</em>120.00    </div>
<div class="p-name"><a href="#">秋季新款男士套头卫衣印花外套韩版简约百搭潮流男生上衣服</a></div>
<div class="p-btn"><a href="#">加入购物车</a></div>
            </li>
        <li style="float: left; width: 158px;">
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1489100550574.jpg" alt=""></a></div>
<div class="p-price">
        <em>¥</em>258.00    </div>
<div class="p-name"><a href="#">法国DK正品文胸套装女内衣性感蕾丝聚拢深V调整型小胸品牌收副乳 法国正品 蕾丝性感 原装包装 送女神必备</a></div>
<div class="p-btn"><a href="#">加入购物车</a></div>
            </li>
        <li style="float: left; width: 158px;">
<div class="p-img"><a href="#"><img src="/static/index/img/0_thumb_G_1490169151126.jpg" alt=""></a></div>
<div class="p-price">
        <em>¥</em>148.00    </div>
<div class="p-name"><a href="#">韩都衣舍春季韩国ulzzang连帽卫衣女套头宽松百搭学生韩版潮bf风 领券下单立减/单件包邮/先拍先发货！</a></div>
<div class="p-btn"><a href="#">加入购物车</a></div>
            </li>
    </ul></div>
    </div>
</div>
            </div>
        </div>
    
	
	<div class="catetop-lift lift-hide" ectype="lift" style="left: 261.5px; top: 50%;">
    	<div class="lift-list" ectype="liftList">
        	<div class="catetop-lift-item" ectype="liftItem" data-target="#limitime"><span>限时抢购</span></div>
        	            <div class="catetop-lift-item lift-floor-item" ectype="liftItem"><span>女装</span></div>
        <div class="catetop-lift-item lift-floor-item" ectype="liftItem"><span>男装</span></div>
        <div class="catetop-lift-item lift-floor-item" ectype="liftItem"><span>服饰配件</span></div>
        <div class="catetop-lift-item lift-floor-item" ectype="liftItem"><span>内衣</span></div>
        <div class="catetop-lift-item lift-floor-item" ectype="liftItem"><span>运动户外</span></div>
        <div class="catetop-lift-item" ectype="liftItem" data-target="#atwillgo"><span>随手购</span></div>
        	<div class="catetop-lift-item lift-item-top" ectype="liftItem"><span><i class="iconfont icon-up"></i></span></div>
        </div>
    </div>
    <input name="region_id" value="1" type="hidden">
    <input name="area_id" value="7" type="hidden">
    <input name="cat_id" value="6" type="hidden">
    <input name="tpl" value="1" type="hidden">
    <script type="text/javascript">
		//楼层以后加载后使用js
		function loadCategoryTop(key){
			var Floor = $("#floor_"+key);
			Floor.slide({mainCell:".right-bottom",titCell:".fgoods-hd ul li",effect:"fold"});
		}
	</script>
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

    

</body>
</html>

<script type="text/javascript">
$(function(){
	//顶级分类页模板id
	//tpl==0 默认模板、tpl==1 女装模板、tpl==2 家电模板、tpl==3 食品模板
	var tpl = $("input[name='tpl']").val();
	var length = $(".catetop-banner .bd").find("li").length;
	
	//轮播图
	if(length>1){
		if(tpl == 1){
			$(".catetop-banner").slide({titCell:".cloth-hd ul",mainCell:".bd ul",effect:"fold",interTime:3500,delayTime:500,autoPlay:true,autoPage:true,trigger:"mouseover"});
		}else if(tpl == 3){
			$(".catetop-banner").slide({titCell:".food-hd ul",mainCell:".bd ul",effect:"fold",interTime:3500,delayTime:500,autoPlay:true,autoPage:true,trigger:"mouseover"});
		}else{
			$(".catetop-banner").slide({titCell:".hd ul",mainCell:".bd ul",effect:"fold",interTime:3500,delayTime:500,autoPlay:true,autoPage:true,trigger:"mouseover"});
		}
	}else{
		$(".catetop-banner .hd").hide();
	}
	
	if(tpl == 1){
		//女装模板 精品大牌
		var length2 = $(".selectbrand-slide .bd").find("li").length;
		if(length2>5){
			$(".selectbrand-slide").slide({mainCell:".bd ul",titCell:".hd ul",effect:"left",pnLoop: false,vis: 5,scroll: 5,autoPage:"<li></li>"});
			$(".selectbrand-slide .prev,.selectbrand-slide .next").show();
		}else{
			$(".selectbrand-slide .prev,.selectbrand-slide .next").hide();
		}
	}else if(tpl == 2){
		$(".hotrecommend").slide({hd:".hr-slide-hd ul",effect:"fold"});
	}else if(tpl == 0){
		$(".toprank").slide({effect:"fold",titCell:".hd ul li"});
		$(".catetop-brand .brand-slide").slide({mainCell: '.bs-bd ul',effect: 'left',vis: 10,scroll: 10,autoPage: true});
		$.catetopLift();
		
		if($("input[name='history']").val() == 0){
			$(".lift-history").hide();
		}else{
			$(".lift-history").show();
		}
	}
	
	//随手购
	if($(".atwillgo-slide .bd").find("li").length > 6){
		$(".atwillgo-slide").slide({mainCell:".bd ul",titCell:".hd ul",effect:"left",pnLoop:false,vis: 6,scroll: 6,autoPage:"<li></li>"});
	}else{
		$(".atwillgo-slide").find(".prev,.next").hide();
	}
	
	//楼层异步加载封装函数调用
	if(tpl != 0){
		$.catTopLoad(tpl);
	}
});
</script>