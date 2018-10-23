<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
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
</script>
<style>
    table td{
	width:170px;
    background:white;
    
    }
    table td:hover
    {
	color:red;
    background:blue;
    }
</style>
</head>
<body>
<form action='index.php?c=Vip&action=search' method='post'>
    <input  type='text' name='sear' placeholder='输入VIP等级···' /> 
    <input style='border-radius:6px;background-color:black;color:white' type='submit' value='搜索'/>
</form>
<form action='index.php?c=Fbgongg&action=addvip' method='post'>
    <input style='border-radius:6px;background-color:black;color:white' type='submit' value='添加新设定'/>
</form>
<table style="margin-top:15px" border=1 cellspacing=0>
    <tr>
        <td>VIP</td>
        <td>充值量</td>
        <td>名称</td>
        <td>管理</td>
    </tr>
    <?php 
        $jishu=0;
        $tt=0;
        foreach ($arr as $val)
        {echo "<tr>";
        $jishu++;
        $tt=$val['vipid'];
        $neirong=$val['content'];
        
            foreach ($val as $va)
            {
                echo "<td>$va</td>";
                
            }
            
            echo "<td><a onclick='aa({$jishu})'>更改</a><span>|</span><a href='index.php?c=Vip&action=del&up1={$tt}'>删除</a></td></tr>";
            echo "<div id={$jishu} class='bb' style='border: 1px solid black;width:200px;position:absolute;
            top:40%;left:40%;display:none'>
            <div>修改VIP</div>
            <form   width='200' method='post' action='index.php?c=Vip&action=change'>
            <span>VIP等级:</span><input name='uname' placeholder='{$tt}' type='text' required='required'/><br/><br/>
            <span>充值量:</span><input name='pwd' type='text'/><br/><br/>
            <span>名   称:</span><input type='text' name='mytime'/><br/><br/>
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
