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
</head>
<script>
$(function(){
	//alert(1);
	 $('form').validate({
            rules:{
            	fname:{
                    required:true,
                    //maxlength:7,
                   // minlength:3,
                    zhongwen:true
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
		 var pattern = new RegExp("[\u4e00-\u9fa5]"); 
		 if(pattern.test(value))
		 {
			 return true}
		    

        },'请输入中文');
	})
</script>
<body>
<h2>赛事添加页面</h2>
<div style="line-height: 50px">
    <form  action='index.php?c=Saishi&action=tian' method='post' enctype="multipart/form-data">
    <span>赛事名称:</span><input required='required' name='fname' type='text'/><br>
    
    
    <div>赛事图片：</div>
    <input required='required' type='file' name='file' onchange="getImgURL(this)"/>
    <input required='required' type='submit' value='确认' />
    </form>
</div> 
<div style="width:200px; height:100px; overflow:hidden; border:1px solid red;" id="show">  
        <div class="mark"></div>  
</div> 
</body>
</html>