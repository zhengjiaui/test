<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<div>物品名称：<?php echo $goodarr[0]['gname']?></div><br/>
<div>
    <span>商城图片：</span><img src="<?php echo $goodarr[0]['gyulan'] ?>"/>
    <span>比赛图片：</span><img src='<?php echo $goodarr[0]['gurl'] ?>'/>
</div><br/>
<div>属性类型:<?php echo $attrarr[0]['attr'] ?></div><br/>
<div>属性值:<?php echo $goodarr[0]['gvalue'] ?></div><br/>
<div>价格:<?php echo $goodarr[0]['gprice'] ?></div><br/>
<div>VIP:<?php echo $goodarr[0]['gvipid'] ?></div><br/>
</body>
</html>

