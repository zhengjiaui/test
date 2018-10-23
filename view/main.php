<?php 
    
   //echo $aa; //为什么要提交两次lego的值才会变化过来
   // require_once 'index.php';
    //$mypage=new showpage(3, $aa,'main.php');
    //$sql="select * from student";
    //$arr=$mypage->getdata($sql);
    //var_dump($arr);
    
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<table border=1>
    <tr>
        <td>ID</td>
        <td>姓名</td>
        <td>班级</td>
        <td>年级</td>
    </tr>
    <?php 
        foreach ($arr as $val)
        {
            echo "<tr><td>{$val['stuid']}</td><td>{$val['name']}</td><td>{$val['class']}</td>
            <td>{$val['nianji']}</td></tr>"; 
        }
    ?>
</table>
<?php 
$show->showdiv();
$rc=mysql_query("select * from student");
//echo mysql_num_fileds($rc);字段数
//mysql_data_seek($rc, 2);
//$row=mysql_fetch_assoc($rc);
//var_dump($row);
//echo mysql_result($rc, 3,name);
?>
</body>
