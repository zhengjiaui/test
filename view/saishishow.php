<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php 
$name=$_REQUEST['name'];
$img=$_REQUEST['img'];
?>
<div style="line-height: 50px">
    <div>赛事名称：<?php echo $name?></div>
    <div>赛事图片：</div>
   
    <img style="height: 100px;width:300px" src='<?php echo $img?>'/>
</div>
</body>
</html>
