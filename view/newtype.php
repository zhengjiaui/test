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
	            	tname:{
	                    required:true,
	                    //maxlength:7,
	                   // minlength:3,
	                    zhongwen:true
	                    /*max:7,*/

	                },//用逗号将不同的name隔开
	                map:{
	                    required:true,
	                    //maxlength:7,
	                    //minlength:3,
	                    /*number:true*/
	                    digits:true
	                },
	                reword:{
	                    required:true,
	                    digits:true
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
			 var pattern = new RegExp("[\u4e00-\u9fa5]"); 
			 if(pattern.test(value))
			 {
				 return true}
			    

	        },'只能输入汉字');
		})
</script>
</head>
<body>
<h2>增加属性名称页面</h2>

<form method='post' action='index.php?c=Jiaoyi&action=doaddtype'>
    <span>新属性名称：</span><input type='text' name='tname'/><br><br>
    <input type='submit' value='确认' />
</form>
</body>
</html>

