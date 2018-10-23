<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<!-- 相信信息的窗口 -->
<div id='message' style='height: 550px;width:530px;background:white;font-size:10px;border:1px solid black'>
    <div>
        <span>玩家信息</span><span style='float:right;' onclick="javascript:history.go(-1);">X</span>
    </div>
    <div>
    <?php 
    foreach ($marr as $val)
    {
        
    }
    ?>
        <p>player:<?php echo $marr[0]['uname'] ?></p>
        <p>VIP等级:<?php echo $marr[0]['vip'] ?></p>
        <p>上次登录时间:<?php echo $marr[0]['lattime'] ?></p>
        <p>账号游戏币:<?php echo $marr[0]['coin'] ?></p>
        <p>经验值:<?php echo $marr[0]['exp'] ?></p>
        <p>玩至关卡:<?php echo $nowname ?><?php echo $guanshu ?></p>
    </div>
    <div style='display:inline-block;border:1px solid black;padding:10px 20px;margin-left:30px'><a href="index.php?c=Jiaose&action=jiaose&uid=<?php echo $uid ?>" target='PlayFrame'>拥有角色/装备</a></div>
    <div style='display:inline-block;border:1px solid black;padding:10px 20px'><a href="index.php?c=Chongzhi&action=chongzhi&uid=<?php echo $uid ?>" target='PlayFrame'>充值记录</a></div>
    <div style='display:inline-block;border:1px solid black;padding:10px 20px'><a href="index.php?c=Jingyan&action=jingyan&uid=<?php echo $uid ?>" target='PlayFrame'>经验记录</a></div>
   <iframe style="padding:20px 0 0 20px;margin:0 20px 0 0" src='view/smile.php' id="PlayFrame" name="PlayFrame" width="500px" height="400px"
			scrolling="auto" marginheight="0" marginwidth="0" align="center"
			style="border: 0px solid #CCC; margin: 0; padding: 0;"></iframe>
    
    
</div>
</body>

