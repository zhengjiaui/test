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
	            	gname:{
	                    required:true,
	                    //maxlength:7,
	                   // minlength:3,
	                    zhongwen:true
	                    /*max:7,*/

	                },//用逗号将不同的name隔开
	                attr:{
	                    required:true,
	                    //maxlength:7,
	                    //minlength:3,
	                    /*number:true*/
	                    digits:true
	                },
	                price:{
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
<h2>物品修改界面</h2>
<form method='post' action='index.php?c=Jiaoyi&action=doupgood' enctype="multipart/form-data">
<span>物品名称：</span><input required='required' type='text' name='gname' placeholder='<?php echo $gname ?>'/><br/><br/>
<span>商城图片：</span><input required='required' type='file' name='file[]' onchange="getImgURL(this)"/><br/><br/>
<div style="" id="show">  
        <div class="mark"></div>  
    </div> 
<span>比赛图片：</span><input required='required' type='file' name='file[]' onchange="getImgURLa(this)"/><br/><br/>
<div style="" id="show">  
        <div class="marka"></div>  
    </div> 
<span>属性类型：</span>
<!-- <select name='type'>  
  <option value ="1">金</option>  
  <option value ="2">木</option>  
  <option value="3">水</option>  
  <option value="4">火</option>
  <option value="4">土</option>  
</select> -->
<select required='required' name='type'>
<?php 
    foreach ($attrarr as $val)
    {
        
            echo "<option value ='{$val['aid']}'>{$val['aname']}</option>";
        
    }
?>
</select>
<br><br/>
<span>属性值：</span><input required='required' type='text' name='attr' /><br/><br/>
<span>价格：</span><input required='required' type='text' name='price' /><br/><br/>
<span>VIP：</span>
 <!--  <select name='vip'>  
  <option value ="1">1</option>  
  <option value ="2">2</option>  
  <option value="3">3</option>  
  <option value="4">4</option>  
</select> -->
<select required='required' name='vip'>
<?php 
    foreach ($viparr as $val)
    {
        echo "<option value ='{$val['vipid']}'>{$val['vipid']}</option>";
    }
?>
</select>
<input type='hidden' value='<?php echo $gid ?>'  name='gid' />
<input type='submit' value='确认'/>
</form>

</body>
</html>
