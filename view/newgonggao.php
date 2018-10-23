<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<h2>新增公告页</h2>
<form action='index.php?c=Gonggao&action=add' method='post'>
    <span>标题：</span><input type='text' name='title' required='required'/><br/><br/>
    <span>内容：</span><textarea name='neirong' required='required'></textarea><br/><br/>
    <span>发布时间：</span><input type='date' name='usetime' required='required'/><br/><br/>
    <span>有效时间：</span><input type='date' name='outtime' required='required'/><br/><br/>
    <input type='submit' value='确认' />
    <input type='button' value='返回' onclick="javascript:window.history.go(-1)"/>
    </form>
</body>
</html>