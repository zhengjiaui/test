<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<script type="text/javascript" src="js/jquery1.js"></script>
<script type="text/javascript" src="js/showimg.js"></script>
<script src="js/jquery-2.1.4.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/messages_zh.js"></script>
<script>
	$(function(){
		//alert(1);
		 $('form').validate({
	            rules:{
	            	sname:{
	                    required:true,
	                    //maxlength:7,
	                   // minlength:3,
	                    //zhongwen:true
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
			    

	        },'请输入中文');
		})
</script>
</head>
<body>

<?php $pid=$_REQUEST['pid']?>
<h2>赛段修改界面</h2>
<div style="line-height: 50px">
<form method='post' action='index.php?c=Saishi&action=upsaiduan' enctype="multipart/form-data">
    <span>赛段名称：</span><input required='required' type='text' name='sname'/><br/>
    <span>赛段图片:</span><input required='required' type='file' name='file[]' onchange="getImgURL(this)"/><br/>
    <div style="" id="show">  
        <div class="mark"></div>  
    </div> 
    <span>赛事地图:</span><input required='required' type='file' name='file[]' onchange="getImgURLa(this)"/><br/>
    <div style="" id="show">  
        <div class="marka"></div>  
    </div> 
    <span>NPC配置:</span><input required='required' type='text' name='map'/><br/>
    <span>经验奖励：</span><input required='required' type='text' name='reword'/><br/>
    <input type='hidden' name='fid' value='<?php echo $sid ?>' />
    <input type='submit' value='确认'/>
   
</form>    
</div>
</body>
</html>
