
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>

</head>
<body>
<form action="index.php?action=login&c=Login" method="post">
    <span>账号：</span><input type="text" name='admin'><br/><br/>
    <span>密码：</span><input type="password" name='pwd'><br/><br/>
    <span>请输入验证码</span>
      <input type='text' size='10' name='yanzheng'/>
   
    <input type="submit" value="登陆"/>
    <input id='zc' type="button" value="注册"/>
    
</form>

</body>

</html>
