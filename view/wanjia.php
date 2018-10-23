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
		url:'view/doo.php?action=vip',
		type:'get',
		dateType:'json',
		success:function(data){
			//console.log(typeof(data));
			var data=eval('('+data+')');
			var myData=new Array();
			for(var i=0;i<data.length;i++)
			{
				myData.push(['vip'+parseInt(data[i].vip),parseInt(data[i].num)]);
			}
			console.log(myData);
			//alert(size);  这个Array数组怎么拼
   			//var myData = new Array(['VIP1',mydata['1']], ['Unit 2',mydata['2']], ['VIP3',mydata['3']], ['VIP4',mydata['4']]);
			var myChart = new JSChart('chartcontainer', 'bar'); 
			myChart.setDataArray(myData);  
			myChart.draw();
			},
		error:function(){alert('error')}
		});
});

	function showit(obj)
	{
		var gow=obj.val();
		$('#chartcontainer').css('display','block');
		if('1'==gow)
		{
			$.ajax({
				url:'view/doo.php?action='+gow,
				type:'get',
				dateType:'json',
				success:function(data){
					//console.log(typeof(data));
					var data=eval('('+data+')');
					//console.log(data.length);
					
					var size=0;
					var myData=new Array();
					
					for(var i=0;i<data.length;i++)
					{
						myData.push(['vip'+parseInt(data[i].vip),parseInt(data[i].num)]);
					}
					console.log(myData);
					
					//alert(size);  这个Array数组怎么拼
	       			//var myData = new Array(['VIP1',mydata['1']], ['Unit 2',mydata['2']], ['VIP3',mydata['3']], ['VIP4',mydata['4']]);
					var myChart = new JSChart('chartcontainer', 'bar'); 
					myChart.setDataArray(myData);  
					myChart.draw();
					},
				error:function(){alert('error')}
				});
		}
		if('2'==gow)
		{
			$.ajax({
				url:'view/doo.php?action='+gow,
				type:'get',
				dateType:'json',
				success:function(data){
					console.log(data);
					var data=eval('('+data+')');
					//console.log(data.length);
					
					var size=0;
					var myData=new Array();
					
					for(var i=0;i<data.length;i++)
					{
						myData.push([data[i].usex,parseInt(data[i].num)]);
					}
					console.log(myData);
					
					//alert(size);  这个Array数组怎么拼
	       			//var myData = new Array(['VIP1',mydata['1']], ['Unit 2',mydata['2']], ['VIP3',mydata['3']], ['VIP4',mydata['4']]);
					var myChart = new JSChart('chartcontainer', 'bar'); 
					myChart.setDataArray(myData);  
					myChart.draw();
					},
				error:function(){alert('error')}
				});
		}
		if('3'==gow)
		{
			$.ajax({
				url:'view/doo.php?action='+gow,
				type:'get',
				dateType:'json',
				success:function(data){
					console.log(data);
					var data=eval('('+data+')');
					//console.log(data.length);
					
					var size=0;
					var myData=new Array();
					
					for(var i=0;i<data.length;i++)
					{
						myData.push([data[i].uage+'岁',parseInt(data[i].num)]);
					}
					console.log(myData);
					
					//alert(size);  这个Array数组怎么拼
	       			//var myData = new Array(['VIP1',mydata['1']], ['Unit 2',mydata['2']], ['VIP3',mydata['3']], ['VIP4',mydata['4']]);
					var myChart = new JSChart('chartcontainer', 'bar'); 
					myChart.setDataArray(myData);  
					myChart.draw();
					},
				error:function(){alert('error')}
				});
		}
		
	}
</script>
</head>
<body>
<h2>玩家分析界面</h2>
<?php 
    
?>
<div><span>玩家数量:<?php echo $tol ?></span></div><br>
<div><span>VIP分布:</span></div><br>
<select style="width: 150px" onchange="showit($(this))">
    <option value='1' selected='selected'>VIP分布</option>
    <option value='2'>男女分布</option>
    <option value='3'>年龄分布</option>
    <option value='4'>关卡分布</option>
</select>
<div  id="chartcontainer">This is just a replacement in case Javascript is not available or used for SEO purposes</div>  
<script type="text/javascript">  
  
</script>

</body>
</html>
