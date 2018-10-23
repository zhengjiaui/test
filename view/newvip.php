<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<script src="js/jquery-2.1.4.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/messages_zh.js"></script>

<script>
	$(function(){
		//alert(1);
		 $('form').validate({
	            rules:{
	            	title:{
	                    required:true,
	                    //maxlength:7,
	                   // minlength:3,
	                    digits:true
	                    /*max:7,*/

	                },//用逗号将不同的name隔开
	                chongzhi:{
	                    required:true,
	                    //maxlength:7,
	                    //minlength:3,
	                    /*number:true*/
	                    digits:true
	                },
	                usetime:{
	                    required:true,
	                    zhongwen:true
	                    //equalTo: "input[name=mima]"

	                }
	            },
	            messages:{
	            	title:{
	                    required:'亲,这个可一定要填哦！',
	                    maxlength:'不要太多，少于7个亲！',
	                    minlength:'多敲几个字符吧，要三个哦！'
	                    /*max:'省省吧，打那么多字，要少于7个咯',*/
	                }


	            }

	        });
		 $.validator.addMethod('zhongwen',function(value){
			 var pattern = new RegExp("[~'!@#$%^&*()-+_=:]"); 
			 if(!pattern.test(value))
			 {
				 return true}
			    

	        },'请输入中文或英文');
		})
</script>
</head>
<body>
<h2>新增VIP页面</h2>
<form action='index.php?c=Vip&action=add' method='post'>
    <span>VIP等级：</span><input type='text' name='title' required='required'/><br/><br/>
    <span>充值量：</span><input name='neirong' name='chongzhi' required='required'/><br/><br/>
    <span>名称：</span><input type='text' name='usetime' required='required'/><br/><br/>
    <input type='submit' value='确认' />
    <input type='button' value='返回' onclick="javascript:window.history.go(-1)"/>
    </form>
</body>
</html>