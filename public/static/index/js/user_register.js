/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * user_passport.dwt 验证提交
 */
$(function(){
	//注册页面验证
	$("#registsubmit").click(function(){
		if($("form[name='formUser']").valid()){
			$("form[name='formUser']").submit();
		}
	});
	
	$("form[name='formUser']").validate({
		errorPlacement:function(error, element){
			var error_div = element.parents('div.item').find('div.input-tip');
			error_div.html("").append(error);
		},
		ignore:".ignore",
		rules:{
			username :{
				required : true,
				StringminLength: true, 
				StringLength: true,
				stringCheck: true,
				remote : {
					cache: false,
					async:false,
					type:'POST',
					url:is_registered,
					data:{
						username:function(){
							return $("input[name='username']").val();
						}
					}
				}
			},
			password :{
				required : true,
				minlength: 6
			},
			confirm_password :{
				required : true,
				equalTo : "#pwd"
			},
			mobile_phone:{
				required : true,
				isMobile : true,
				notequalTo:"#username",
				remote : {
					cache: false,
					async:false,
					type:'POST',
					url:'user.php?act=check_phone',
					data:{
						mobile_phone:function(){
							return $("input[name='mobile_phone']").val();
						}
					}
				}
			},
			captcha:{
				required : true,
				remote : {
					cache: false,
					async:false,
					type:'POST',
					url:'user.php?act=phone_captcha',
					data:{
						captcha:function(){
							return $("input[name='captcha']").val();
						}
					},
					dataFilter:function(data,type){
						if(data == "false"){
							$("input[name='captcha']").siblings(".captcha_img").click();
						}
						return data;
					}
				}
			},
			mobile_code :{
				required : true,
				remote : {
					cache: false,
					async:false,
					type:'POST',
					url:'user.php?act=code_notice',
					data:{
						mobile_code:function(){
							return $("input[name='mobile_code']").val();
						}
					}
				}
			},
			email:{
				required : true,
				email:true,
				remote : {
					cache: false,
					async:false,
					type:'POST',
					url:'user.php?act=check_email',
					data:{
						email:function(){
							return $("input[name='email']").val();
						}
					}
				}
			},
			mobileagreement : {
				required : true
			},
			send_code : {
				required : true,
				remote : {
					cache: false,
					async:false,
					type:'POST',
					url:'user.php?act=checkd_email_send_code',
					data:{
						send_code:function(){
							return $("input[name='send_code']").val();
						}
					}
				}
			},
			sel_question:{
				required : true
			},
			passwd_answer:{
				required : true
			}
		},
		// messages:{
		// 	username:{
		// 		required : username_empty,
		// 		StringminLength : msg_un_length,
		// 		StringLength : username_shorter,
		// 		stringCheck : msg_un_format,
		// 		remote : msg_un_registered
		// 	},
		// 	password :{
		// 		required : password_empty,
		// 		minlength : password_shorter
		// 	},
		// 	confirm_password :{
		// 		required : msg_confirm_pwd_blank,
		// 		equalTo : confirm_password_invalid
		// 	},
		// 	mobile_phone:{
		// 		required : msg_phone_blank,
		// 		isMobile : mobile_phone_invalid,
		// 		notequalTo : mobile_phone_username_equalTo,
		// 		remote : msg_phone_registered
		// 	},
		// 	captcha :{
		// 		required : msg_identifying_code,
		// 		remote : msg_identifying_not_correct
		// 	},
		// 	mobile_code :{
		// 		required : msg_mobile_code_blank,
		// 		remote : msg_mobile_code_not_correct
		// 	},
		// 	email :{
		// 		required : msg_email_blank,
		// 		email : msg_email_format,
		// 		remote : msg_email_registered
		// 	},
		// 	mobileagreement:{
		// 		required : agreement
		// 	},
		// 	send_code :{
		// 		required : msg_email_code,
		// 		remote : msg_email_code_not
		// 	},
		// 	sel_question :{
		// 		required : select_password_question
		// 	},
		// 	passwd_answer:{
		// 		required : null_password_question
		// 	}
		// },
		success:function(label){
			label.removeClass().addClass("succeed").html("<i></i>");
		},
		onkeyup:function(element,event){
			var name = $(element).attr("name");
			
			var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g"); 
			var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g"); 
		
			if(name == "password"){
				if(strongRegex.test($(element).val())){
					$(element).parents(".item-info").next(".input-tip").html("<div class='strength strengthC'><b></b><span>强</span></div>");
				}else if(mediumRegex.test($(element).val())){
					$(element).parents(".item-info").next(".input-tip").html("<div class='strength strengthB'><b></b><span>中</span></div>");
				}else{
					$(element).parents(".item-info").next(".input-tip").html("<div class='strength strengthA'><b></b><span>弱</span></div>");
				}
			}else if(name == "captcha"){
				//不可去除，当是验证码输入必须失去焦点才可以验证（错误刷新验证码）
				return true;
			}
		}
	});
	
	//找回密码验证
	$("*[ectype='submitBtn']").click(function(){
		var formName = $(this).parents("*[ectype='form']").attr("name"); //form表单name值
		var form = $("form[name='"+formName+"']");
		var seKey = form.find("img[name='img_captcha']").data("key"); //验证码key值

		$("form[name='"+formName+"']").validate({
			errorPlacement:function(error, element){
				var error_div = element.parents('div.item').find('div.input-tip');
				error_div.html("").append(error);
			},
			ignore : ".ignore"
		});
		
		if(formName != 'getPhonePassword'){
			//用户名验证
			form.find("input[name='user_name']").rules("add",{
				required : true,
				messages : {
					required : null_username
				}
			});
		}
		
		//手机号码验证
		form.find("input[name='mobile_phone']").rules("add",{
			required : true,
			messages : {
				required : null_phone
			}
		});
		
		//手机短信验证码
		form.find("input[name='mobile_code']").rules("add",{
			required : true,
			remote : {
				cache: false,
				async:false,
				type:'POST',
				url:'user.php?act=code_notice',
				data:{
					mobile_code:function(){
						return $("input[name='mobile_code']").val();
					}
				}
			},
			messages : {
				required : msg_mobile_code_blank,
				remote : msg_mobile_code_not_correct
			}
		});
		
		//验证码验证
		form.find("input[name='captcha']").rules("add",{
			required : true,
			remote : {
				cache: false,
				async:false,
				type:'POST',
				url:'user.php?act=captchas_pass&seKey='+seKey,
				data:{
					captcha:function(){
						return form.find("input[name='captcha']").val();
					},
					dataFilter:function(data,type){
						if(data == "false"){
							form.find("input[name='captcha']").siblings(".captcha_img").click();
						}
						return data;
					}
				}
			},
			messages : {
				required : msg_identifying_code,
				remote : msg_identifying_not_correct
			}
		});
		
		//邮箱账号
		form.find("input[name='email']").rules("add",{
			required : true,
			email : true,
			messages : {
				required : msg_email_blank,
				email : msg_email_format
			}
		});
		
		//密码提示问题选择
		form.find("input[name='sel_question']").rules("add",{
			required : true,
			messages : {
				required : select_password_question
			}
		});
		
		//密码提示问题答案
		form.find("input[name='passwd_answer']").rules("add",{
			required : true,
			messages : {
				required : null_password_question
			}
		});
		
		//新密码
		form.find("input[name='new_password']").rules("add",{
			required : true,
			minlength: 6,
			messages : {
				required : new_password_empty,
				minlength : password_shorter
			}
		});
		
		//确认新密码
		form.find("input[name='confirm_password']").rules("add",{
			required : true,
			equalTo : "#pwd",
			messages : {
				required : confirm_password_empty,
				equalTo : both_password_error
			}
		});
	});
});

//获取邮箱验证码
function sendChangeEmail(){
	var obj = $("input[name='e_email']");
		email = obj.val();
		$.ajax({
			type:'POST',
			dataType:'json',
			url:email_url,
			data:{email:email},
			success: function(data) {
				$("#zemail").html(data.msg);
			}


		});
}

function sendChangePhone(){
	//console.log(1118888);
	var obj = $("input[name='mobile_phone']");
		phoneNum = obj.val();
		$.ajax({
			type:'POST',
			dataType:'json',
			url:phone_url,
			data:{phoneNum:phoneNum},
			success: function(data) {
				// console.log(data);
				// $("#zphone").html(data.msg);
				$('#btn').val(data.msg)
				// if (data.msg == 0) {
					$.cookie('toval',10);
					timekeeping();
				// }
				// invokeSettime(obj2);
			}

		});
}

function timekeeping() {
    $('#btn').attr('disabled',true); //按钮设置为禁止
    var interval = setInterval(function(){
    	toval = $.cookie('toval');
    	toval--;
    	$('#btn').val('请稍等'+toval+'秒');
    	if (toval == 0) {
    		clearInterval(interval);
    		$.cookie('toval',toval,{ expires: -1 });
    		$('#btn').val('重新发送');
    		$('#btn').attr('disabled',false);
    	}else{
    		$.cookie('toval',toval);
    	}
    },1000);

}

function invokeSettime(obj) {
	var countdown=60;
	settime(obj);
	function settime(obj) {
		if (countdown == 0) {
			// $(obj).attr("disabled",false);
			$(obj).val("获取验证码");
			countdown = 60;
			return;
		} else {
			// $(obj).attr("disabled",true);
			$(obj).off("click");
			$(obj).val( "" + countdown + "s 重新发送");
			countdown--;
			if (countdown == 0) {
				$(obj).val("重新发送");
			}
		}
		setTimeout(function(){
			settime(obj)},1000);
	}
}