<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<script type="text/javascript" src="js/jquery1.js"></script>
<script>
function aa(a)
{
	var ze=document.getElementsByClassName('bb');
	for(var i=0;i<ze.length;i++)
	{
		ze[i].style.display='none';
	}
	document.getElementById(a).style.display='block';
}
function show()
{
	//$('#mes').css('display','block');
}
function dis()
{
	//$('#mes').css('display','none');
}
function gaja()
{
	var neirong=$('input').eq(0).val();
	
	 $.ajax({
	url:'index.php?c=Gonggao&action=dobaidu&neirong='+neirong,
	type:'get',
	dataType:'json',
	success:function(data){
		$('#mycon').empty();

		if(data.length==0)
		{
			$('#mes').css('display','none');
			return;
		}
		if(neirong!='')
		{
			$('#mes').css('display','block');
		};	
		for(var i=0;i<data.length;i++)
    		{
    		
    			var mya=$("<li></li>");
    			var myaa=$("<a href='index.php?c=Gonggao&action=ajaxsearch&neirong="+data[i]['title']+"'></a>");
    			mya.append(myaa);
    			myaa.append(data[i]['title']);
    			$('#mycon').append(mya);
    		};
		if(neirong=='')
		{
			$('#mycon').empty();
			$('#mes').css('display','none');
		}
	},
	error:function(){}
	
	
		});
}
</script>
</head>
<body>
<form action='index.php?c=Gonggao&action=search' method='post'>
    <input  type='text' name='sear' placeholder='输入关键字···' autocomplete="off"  onkeyup="gaja()" /> 
    <input style='border-radius:6px;background-color:black;color:white' type='submit' value='搜索'/>
</form>
<div id='mes' style="display:none;width:400px;height:100px;border:1px solid black"><ul style='margin:0;list-style-type:none' id='mycon'></ul></div>
<form action='index.php?c=Fbgongg' method='post'>
    <input style='border-radius:6px;background-color:black;color:white' type='submit' value='发布新公告'/>
</form>
<table style="margin-top:15px" border=1 cellspacing=0>
    <tr>
        <td>公告标题</td>
        <td>公告内容</td>
        <td>发布时间</td>
        <td>有效时间</td>
        <td>管理</td>
    </tr>
    <?php 
        $jishu=0;
        $tt=0;
        foreach ($arr as $val)
        {echo "<tr>";
        $jishu++;
        $tt=$val['title'];
        $neirong=$val['content'];
        
            foreach ($val as $va)
            {
                echo "<td>$va</td>";
                
            }
            
            echo "<td><a onclick='aa({$jishu})'>更改</a><span>|</span><a href='index.php?c=Gonggaoup&action=del&up1={$tt}'>删除</a></td></tr>";
            echo "<div id={$jishu} class='bb' style='border: 1px solid black;width:200px;position:absolute;
            top:40%;left:40%;display:none'>
            <div>修改公告</div>
            <form   width='200' method='post' action='index.php?c=Gonggaoup'>
            <span>公告名:</span><input name='uname' placeholder='{$tt}' type='text' required='required'/><br/><br/>
            <span>内    容:</span><textarea name='pwd' required='required'></textarea><br/><br/>
            <span>时    间:</span><input type='date' name='mytime' required='required'/><br/><br/>
            <input type='hidden' name='up1' value='{$tt}'/>
            <input type='hidden' name='up2' value='{$neirong}'/>
            <input type='submit' value='SURE'/>
            </form>
            <span style='cursor:pointer' onclick=\"javascript:document.getElementById({$jishu}).style.display='none'\">返回</span>
            </div>";
        }
    ?>
    </table>
    <?php 
$mydate->showd->showdiv();
$rc=mysql_query("select * from student");

?>
</body>
</html>
