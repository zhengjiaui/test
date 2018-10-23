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
		url:'view/doo.php?action=renwu',
		type:'get',
		dateType:'json',
		success:function(data){
			//console.log(typeof(data));
			var data=eval('('+data+')');
			var myData=new Array();
			for(var i=0;i<data.length;i++)
			{
				myData.push([data[i].years+'年',parseInt(data[i].zb)]);
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
function showit(obj)
{
	var gow=obj.val();
	$('#chartcontainer').css('display','block');
	if('biker'==gow)
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
					myData.push([data[i].years+'年',parseInt(data[i].zb)]);
				}
				console.log(myData);
				
				//alert(size);  这个Array数组怎么拼
       			//var myData = new Array(['VIP1',mydata['1']], ['Unit 2',mydata['2']], ['VIP3',mydata['3']], ['VIP4',mydata['4']]);
				var myChart = new JSChart('chartcontainer', 'line'); 
				myChart.setDataArray(myData);  
				myChart.draw();
				},
			error:function(){alert('error')}
			});
	}
	if('equip'==gow)
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
					myData.push([data[i].years+'年',parseInt(data[i].equip)]);
				}
				console.log(myData);
				
				//alert(size);  这个Array数组怎么拼
       			//var myData = new Array(['VIP1',mydata['1']], ['Unit 2',mydata['2']], ['VIP3',mydata['3']], ['VIP4',mydata['4']]);
				var myChart = new JSChart('chartcontainer', 'line'); 
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
<h2>交易分析界面</h2>
<div><span>人物购买数量：</span></div><br>
<div><span>装备购买数量：</span></div><br>
<span>购买分析：</span>
<select style="width: 150px" onchange="showit($(this))">
    <option value='biker'>人物购买统计</option>
    <option value='equip'>装备购买统计</option>
</select>

<div id="chartcontainer">This is just a replacement in case Javascript is not available or used for SEO purposes</div>  
<script type="text/javascript">  

</script>  
</body>
</html>

