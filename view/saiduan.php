<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php 
$map=$_REQUEST['map'];
$img=$_REQUEST['img'];
$reword=$_REQUEST['reword'];
$npc=$_REQUEST['npc'];
$name=$_REQUEST['name'];
//echo $map,$img,$reword,$npc;
?>
<div style="line-height: 50px">
    <div>赛段名称：<?php echo $name?></div>
    <div>赛段图片：<img style="height:90px;width:90px" src='<?php echo $img?>'/></div>
    <div>赛事地图:</div>
    <img style="height: 100px;width:300px" src='<?php echo $map?>'/>
    <div>NPC配置:<?php echo $npc?></div>
    <div>经验奖励：<?php echo $reword?></div>
    
</div>
</body>
</html>