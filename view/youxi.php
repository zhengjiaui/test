<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<script type="text/javascript" src="js/jquery1.js"></script>
<script type="text/javascript" src="js/jscharts.js"></script>
</head>
<body>
<h2>游戏分析界面</h2>
<div><span>赛事数量：</span></div><br>
<span>赛事分析：</span>
<select style="width: 150px">
    <option>赛事通过率</option>
    <option>赛事三星率</option>
</select>
<div id="chartcontainer">This is just a replacement in case Javascript is not available or used for SEO purposes</div>  
<script type="text/javascript">  
var myData = new Array(['1-1',26], ['1-2',30], ['1-3',45], ['1-4',33]);
var myChart = new JSChart('chartcontainer', 'line'); 
myChart.setDataArray(myData);  
myChart.draw();
</script>  
</body>
</html>

