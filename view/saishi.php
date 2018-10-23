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
		    window.location='index.php?c=Saishi&action=delsaiduan&id='+obj;
			//alert(obj);	
		}
		
	}
	function delduan(obj)
	{
		if(confirm('是否要删除'))
		{
			window.location='index.php?c=Saishi&action=delsaishi&id='+obj;
			//alert(obj);
		}
	}
</script>
</head>
<body>
<div style=" float:left;width:200px;height:350px;border:1px solid black;margin:0 20px 0 20px">
<?php

foreach ($myarr as $val)
{
    if($val['pid']==0)
    {
        echo "<div><a href='index.php?c=Saishi&action=saishi&name={$val['name']}&img={$val['img']}' target='SaishiFrame'>{$val['name']}</a><a href='index.php?c=Saishi&action=addsaiduan&pid={$val['id']}' target='SaishiFrame'><img style='height:10px;width:10px;margin-left:10px;cursor:pointer' src='img/jiahao.png'/></a><a href='javascript:this.onclick=godo({$val['id']})'><img style='height:10px;width:10px;margin-left:10px;cursor:pointer' src='img/jianhao.png' /></a>
        <a href='index.php?c=Saishi&action=xiusaishi&id={$val['id']}&name={$val['name']}' target='SaishiFrame'><img style='height:15px;width:15px;margin-left:5px;cursor:pointer' src='img/xiugai.png'/></a></div>";
        foreach ($myarr as $vall)
        {
            if($val['id']==$vall['pid'])
            {
                echo "<div><a href='index.php?c=Saishi&action=saiduan&name={$vall['name']}&map={$vall['map']}&img={$vall['img']}&reword={$vall['reword']}&npc={$vall['npc']}' target='SaishiFrame'>{$vall['name']}<a/><a href='javascript:this.onclick=delduan({$vall['id']})'><img style='height:10px;width:10px;margin-left:10px;cursor:pointer' src='img/jianhao.png'/></a>
                       <a href='index.php?c=Saishi&action=xiusaiduan&id={$vall['id']}&name={$vall['name']}' target='SaishiFrame'><img style='height:15px;width:15px;margin-left:5px;cursor:pointer' src='img/xiugai.png'/></a></div>";
            }
        }
    }
}
?>
<a style='border-radius:7px;margin-top:80%;background-color:black;color:white' href='index.php?c=Saishi&action=add' target='SaishiFrame'>添加</a>
</div>

<iframe style="padding:20px 0 0 20px;margin:0 20px 0 0" src='view/saishimain.php' id="SaishiFrame" name="SaishiFrame" width="500px" height="400px"
			scrolling="auto" marginheight="0" marginwidth="0" align="center"
			style="border: 0px solid #CCC; margin: 0; padding: 0;"></iframe>
</body>
</html>