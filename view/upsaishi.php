<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<script type="text/javascript" src="js/jquery1.js"></script>
<script src="js/jquery-2.1.4.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/messages_zh.js"></script>
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
<script type="text/javascript">  
  
//var imgurl = "";  
  
function getImgURL(node) {    
    var imgURL = "";      
    try{     
        var file = null;  
        if(node.files && node.files[0] ){  
            file = node.files[0];   
        }else if(node.files && node.files.item(0)) {                                  
            file = node.files.item(0);     
        }     
        //Firefox 因安全性问题已无法直接通过input[file].value 获取完整的文件路径  
        try{  
            //Firefox7.0   
            imgURL =  file.getAsDataURL();    
            //alert("//Firefox7.0"+imgRUL);                           
        }catch(e){  
            //Firefox8.0以上                                
            imgRUL = window.URL.createObjectURL(file);  
            //alert("//Firefox8.0以上"+imgRUL);  
        }  
     }catch(e){      //这里不知道怎么处理了，如果是遨游的话会报这个异常                   
        //支持html5的浏览器,比如高版本的firefox、chrome、ie10  
        if (node.files && node.files[0]) {                            
            var reader = new FileReader();   
            reader.onload = function (e) {                                        
                imgURL = e.target.result;    
            };  
            reader.readAsDataURL(node.files[0]);   
        }    
     }  
    //imgurl = imgURL;  
    creatImg(imgRUL);
    //alert($('.im'));
    //$('.im').attr('src','aaaaa.jpg');  
    return imgURL;  
     
     
}  
         
function creatImg(imgRUL){   //根据指定URL创建一个Img对象  
    var textHtml = "<img style='height:100px;width:200px' src='"+imgRUL+"'/>"; 
    $(".mark").next().remove(); 
    $(".mark").after(textHtml);  
}  
         
</script>

</head>
<body>
<h2>赛事修改页面</h2>
<div style="line-height: 50px">
    <form  action='index.php?c=Saishi&action=upsaishi' method='post' enctype="multipart/form-data">
    <span>赛事名称:</span><input required='required' name='fname' type='text' required='required' placeholder='<?php echo $name ?> '/><br>
    <div >赛事图片：</div>
    <input required='required' type='file' name='file' required='required' onchange="getImgURL(this)"/>
    <input type='submit' value='确认' />
    <input type='hidden' name='sid' value='<?php echo $sid ?>'/>
    </form>
</div>
<div style="width:200px; height:100px; overflow:hidden; border:1px solid red;" id="show">  
        <div class="mark"></div>  
    </div> 
    
</body>
</html>
