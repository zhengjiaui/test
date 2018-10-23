<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<script>
	function godo(obj)
	{
		if(confirm('是否删除'))
		{
			window.location='index.php?c=Jiaoyi&action=deltype&tid='+obj;
			//alert(obj);	
		}
		
	}
	function delduan(obj)
	{
		if(confirm('是否删除'))
		{
			window.location='index.php?c=Saishi&action=delsaishi&id='+obj;
			//alert(obj);
		}
	}
</script>
</head>
<body>
<h2>交易物品页面</h2>
<a href='index.php?c=Jiaoyi&action=addtype' target='JiaoyiFrame' style='height: 30px;width:30px;background:black;color:white;padding:5px 10px'>添加</a>
<div style=" float:left;width:200px;height:350px;border:1px solid black;margin:0 20px 0 20px">
<?php 
foreach ($typearr as $val)
{
    echo "<div>{$val['tname']}<a href='index.php?c=Jiaoyi&action=addgood&tid={$val['tid']}' target='JiaoyiFrame'><img style='height:10px;width:10px;margin-left:10px;cursor:pointer' src='img/jiahao.png'/></a>
            <a href='index.php?c=Jiaoyi&action=uptype&tid={$val['tid']}' target='JiaoyiFrame'><img style='height:15px;width:15px;margin-left:5px;cursor:pointer' src='img/xiugai.png'/></a>
            <a href='javascript:this.onlick=godo({$val['tid']});' target='JiaoyiFrame'><img style='height:10px;width:10px;margin-left:5px;cursor:pointer' src='img/jianhao.png' /></a></div>";
    foreach($goodarr as $va)
    {
        if($val['tid']==$va['gtypeid'])
        {
            echo "<div><a href='index.php?c=Jiaoyi&action=show&gid={$va['gid']}' target='JiaoyiFrame'>{$va['gname']}</a>
            <a href='index.php?c=Jiaoyi&action=delgood&id={$va['gid']}' target='JiaoyiFrame'><img style='height:10px;width:10px;margin-left:10px;cursor:pointer' src='img/jianhao.png'/></a>
            <a  href='index.php?c=Jiaoyi&action=upgood&id={$va['gid']}&typeid={$va['gtypeid']}&gname={$va['gname']}' target='JiaoyiFrame'><img style='height:15px;width:15px;margin-left:5px;cursor:pointer' src='img/xiugai.png'/><a/></div>";
        }
         
    }
}
?>
<!--<div ><a style="padding:10px;margin-top:30px;height: 30px;width:50px;background:blue;border-radius:5px;display:inline-block" >添加</a></div>  -->
</div>

<iframe style="padding:20px 0 0 20px;margin:0 20px 0 0" src='view/jiaoyifir.php' id="JiaoyiFrame" name="JiaoyiFrame" width="500px" height="400px"
			scrolling="auto" marginheight="0" marginwidth="0" align="center"
			style="border: 0px solid #CCC; margin: 0; padding: 0;"></iframe>
</body>
</html>