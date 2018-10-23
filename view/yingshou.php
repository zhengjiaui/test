<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<script type="text/javascript" src="js/jquery1.js"></script>
<script type="text/javascript" src="js/jscharts.js"></script>
<script>
$(function(){
	$('#chartcontainer').css('display','block');
	$.ajax({
		url:'view/doo.php?action=yingshou',
		type:'get',
		dateType:'json',
		success:function(data){
			//console.log(typeof(data));
			var data=eval('('+data+')');
			var myData=new Array();
			for(var i=0;i<data.length;i++)
			{
				myData.push([data[i].years+'年',parseInt(data[i].shouru)]);
			}
			//console.log(myData);
			//alert(size);  这个Array数组怎么拼
   			//var myData = new Array(['VIP1',mydata['1']], ['Unit 2',mydata['2']], ['VIP3',mydata['3']], ['VIP4',mydata['4']]);
			var myChart = new JSChart('chartcontainer', 'line'); 
			myChart.setDataArray(myData);  
			myChart.draw();
			},
		error:function(){alert('error')}
		});
});
</script>
</head>
<body>

<h2>营收分析界面</h2>
<div><span>营收时间：2010-6-6 ~ <?php echo $nowtime ?></span></div><br>
<div><span>平台总收入：<?php echo $tol ?></span></div><br>
<span>收入曲线</span>
<select style="width: 150px">
    <option>选择</option>
</select>

<div id="chartcontainer">This is just a replacement in case Javascript is not available or used for SEO purposes</div>  

</body>
</html>
