<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<script src="js/jquery-2.1.4.js"></script>
<script>
	function show($uid)
	{
		
		alert($uid);
		/* $.ajax({

			url:'index.php?c=Play&action=doajax',
			
			type:'get',
			dataType:'text',
			success:function(data)
			{
				alert(data);
			},
			error:function()
			{
				alert('error');
			}

			}) */
	}
</script>
<style>
 table td{
	background:white;
 }
</style>
</head>
<body>
<form action='index.php?c=Play&action=search' method='post'>
    <input type='text' name='sear' placeholder='输入关键字···' /> 
    <input style='border-radius:6px;background-color:black;color:white' type='submit' value='搜索'/>
</form>
<table style="margin-top:15px" border=1 cellspacing=0>
    <tr style="color:red;font-weight:bold;text-align:center">
        <td>ID</td>
        <td>玩家名</td>
        <td>等级</td>
        <td>VIP</td>
        <td>注册时间</td>
        <td>上次登录时间</td>
        <td>充值</td>
        <td>游戏币</td>
        <td>操作</td>
    </tr>
    <?php
        $lock='';
        $loc;
        $uuid;
        foreach ($arr as $val)
        {echo "<tr>";
            foreach ($val as $va)
            {
                echo "<td>$va</td>";
                $sqq="select user.lock from user where uid={$val['uid']}";
                $arrlock=$plays->getarray($sqq);
                $loc=$arrlock[0]['lock'];
                //echo 'loc是'.$loc;
                $uuid=$val['uid'];
                if($loc==0)
                {
                    $lock='未锁定';
                }
                if($loc==1)
                {
                    $lock='锁定';
                }
            }
            echo "<td><a href='index.php?c=Play&action=showmessage&uid={$val['uid']}'>查看详情</a><span>|</span><a href='index.php?c=Play&action=dolock&zt={$loc}&uid={$uuid}' target='rightFrame'>{$lock}</a></td></tr>";
        }
    ?>
</table>
<div style='height:30px'></div>
<?php 
$mypage->showdiv();
$rc=mysql_query("select * from student");
?>

</body>

