<html>
<head>
<meta charset="utf-8">
<title>越野机车后台</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/adminStyle.css" rel="stylesheet" type="text/css" />

<title>越野机车后台</title>
<script type="text/javascript" src="js/jquery1.js"></script>
<script type="text/javascript">
	$(document).ready(
			function() {
				$(".div2").click(
						function() {
							$(this).next("div").slideToggle("slow").siblings(
									".div3:visible").slideUp("slow");
						});
			});
	function openurl(url) {
		var rframe = parent.document.getElementById("rightFrame");
		rframe.src = url;
	}
</script>
<style>
body {
	margin: 0;
	font-family: 微软雅黑;
	background-image: url();
	background-repeat: no-repea;
	background-size: cover;
	background-attachment: fixed;
	background-color: #DDDDDD
	
}

.top1 {
	position: absolute;
	top: 0px;
	width: 100%;
	height: 20px;
	text-align: center;
	color: #FFFFFF;
	font-size: 17px;
	font-height: 20px;
	font-family: 楷体;
	background-color: #888888
}

.title {
float:left;
    margin:-32px 20px;
	font-size: 40px;
	color: #FFFFFF;
	font-height: 55px;
	font-family: 隶书;
}

.top2 {
	position: absolute;
	top: 20px;
	width: 100%;
	height: 77px;
	text-align: center;
	color: #ccffff;
	background-color: #888888
}

.left {
	position: absolute;
	left: 0px;
	top: 97px;
	width: 200px;
	height: 500px;
	border-right: 1px solid #9370DB;
	color: #000000;
	font-size: 20px;
	text-align: center;
	background-color: #B3B3B3
}

.right {
	position: absolute;
	left: 200px;
	top:97px;
	width: 85.2%;
	height: 85%;
	border-top: 0px solid #484860;
	font-size: 14px;
	text-align: center;
}

.end {
	position: absolute;
	bottom: 0px;
	width: 100%;
	height: 30px;
	text-align: center;
	color: #556B2F;
	font-size: 17px;
	font-height: 20px;
	font-family: 楷体;
	background-color: #C0C0C0
}

.div1 {
	text-align: center;
	width: 200px;
	padding-top: 10px;
}

.div2 {
	height: 40px;
	line-height: 40px;
	cursor: pointer;
	font-size: 18px;
	position: relative;
	border-bottom: #ccc 0px dotted;
}

.spgl {
	position: absolute;
	height: 20px;
	width: 20px;
	left: 40px;
	top: 10px;
	background: url(img/1.png);
}

.yhgl {
	position: absolute;
	height: 20px;
	width: 20px;
	left: 40px;
	top: 10px;
	background: url(img/4.png);
}

.gggl {
	position: absolute;
	height: 20px;
	width: 20px;
	left: 40px;
	top: 10px;
	background: url(img/4.png);
}

.zlgl {
	position: absolute;
	height: 20px;
	width: 20px;
	left: 40px;
	top: 10px;
	background: url(img/4.png);
}

.pjgl {
	position: absolute;
	height: 20px;
	width: 20px;
	left: 40px;
	top: 10px;
	background: url(img/4.png);
}

.tcht {
	position: absolute;
	height: 20px;
	width: 20px;
	left: 40px;
	top: 10px;
	background: url(img/2.png);
}

.div3 {
	display: none;
	cursor: pointer;
	font-size: 15px;
}

.div3 ul {
	margin: 0;
	padding: 0;
}

.div3 li {
	height: 30px;
	line-height: 30px;
	list-style: none;
	border-bottom: #ccc 1px dotted;
	text-align: center;
}

.a {
	text-decoration: none;
	color: #000000;
	font-size: 15px;
}

.a1 {
	text-decoration: none;
	color: #000000;
	font-size: 18px;
}
</style>
</head>
<body >

	<div class="top1">
		<marquee scrollAmount=2 width=300>数据无价，请谨慎操作！</marquee>
	</div>
	<div class="top2">
		<div class="logo">
			<img src="img/admin_logo.png" title="在哪儿" />
		</div>
		<div class="title" >
			<h3>越野机车后台</h3>
		</div>
		<?php 
		$ad=$_SESSION['admin'];
		date_default_timezone_set('PRC');
		$aaw=date("Y-m-d h:i:s",time());
		?>
		<div class="fr top-link">
			<a href="" >
			<i class="adminIcon"></i><span>管理员：<?php echo $ad;?></span></a> 
			<i class="adminIcon"></i><span>登陆时间：<?php echo $aaw;?></span></a>
		</div>
	</div>

	<div class="left">
		<div class="div1">
			<div class="left_top">
				<img src="img/bbb_01.jpg"><img src="img/bbb_02.jpg"
					id="2"><img src="img/bbb_03.jpg"><img
					src="img/bbb_04.jpg">
			</div>
			<?php 
			
			foreach ($nowarr as $val)
			{
			    if($val['pid']==0)
			    {
			        echo "<div class='div2'> 
				<div class='spgl'></div>
				{$val['name']}
			</div>
			";
			         
			       
			    }
			    echo "<div class='div3'><ul>";
			    foreach ($nowarr as $va)
			    {
			        if($val['id']==$va['pid'])
			        {
			            echo "<li><a class='a' href='{$va['myc']}' target='rightFrame'>{$va['name']}</a></li>";
			            
			            
			        }
			    }
			    echo "</ul></div>";
			}
			
			
			?>
          <!--  
          <div class="div2"> 
				<div class="spgl"></div>
				<?php echo $myarr[0]['name'] ?>
			</div>
			<div class="div3">
				<li><a class="a" href="index.php?c=Play" target="rightFrame"
					><?php echo $myarr[0]['name'] ?></a></li>
				<li><a class="a" href="javascript:void(0);"
					onClick="openurl('uservideoQuery.html');">用户视频列表</a></li>
			   
			</div>
			<div class="div2"> 
				<div class="spgl"></div>
				<?php echo $myarr[1]['name'] ?>
			</div>
			<div class="div3">
				<ul>
					<li><a class="a" href="index.php?c=Gonggao" target="rightFrame"><?php echo $myarr[1][0]['name'] ?></a></li>
						<li><a class="a" href="index.php?c=Vip" target="rightFrame"><?php echo $myarr[1][1]['name'] ?></a></li>
						<li><a class="a" href="index.php?c=Saishi" target="rightFrame"><?php echo $myarr[1][2]['name'] ?></a></li>
						<li><a class="a" href="index.php?c=Jiaoyi" target="rightFrame"><?php echo $myarr[1][3]['name'] ?></a></li>
					
				</ul>
			</div>
			<div class="div2">
				<div class="spgl"></div>
				<?php echo $myarr[2]['name'] ?>
			</div>
			<div class="div3">
				<ul>
					<li><a class="a" href="index.php?c=Gonggao&action=dogame" target="rightFrame"><?php echo $myarr[2][0]['name'] ?></a></li>
						<li><a class="a" href="index.php?c=Gonggao&action=dogame" target="rightFrame"><?php echo $myarr[2][1]['name'] ?></a></li>
						<li><a class="a" href="index.php?c=Gonggao&action=dogame" target="rightFrame"><?php echo $myarr[2][2]['name'] ?></a></li>
						
				</ul>
			</div>
			<div class="div2">
				<div class="yhgl"></div>
				<?php echo $myarr[3]['name'] ?>
			</div>
			<div class="div3">
				<ul>
					<li><a class="a" href="index.php?c=Operate&action=yingshou" target="rightFrame"><?php echo $myarr[3][0]['name'] ?></a></li>
					<li><a class="a" href="index.php?c=Operate&action=wanjia" target="rightFrame"><?php echo $myarr[3][1]['name'] ?></a></li>
						<li><a class="a" href="index.php?c=Operate&action=jiaoyifenxi" target="rightFrame"><?php echo $myarr[3][2]['name'] ?></a></li>
						<li><a class="a" href="index.php?c=Operate&action=youxi" target="rightFrame"><?php echo $myarr[3][3]['name'] ?></a></li>
				</ul>
			</div>
			-->
		
			<a class="a1" href="index.php"><div class="div2">
					<div class="tcht"></div>
					退出后台
				</div></a>
		</div>
	</div>

	<div class="right">
		<iframe style="padding:20px 0 0 20px" src='view/message.php' id="rightFrame" name="rightFrame" width="100%" height="100%"
			scrolling="auto" marginheight="0" marginwidth="0" align="center"
			style="border: 0px solid #CCC; margin: 0; padding: 0;"></iframe>
	</div>







</body>
<div style="position:absolute;top:597px;width:100%;height:100px;border:1px solid black;background:#ccc">版权说明:最终解释权归开发者所有</div>
</html>
