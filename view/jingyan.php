<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
 <div> <!-- 经验记录的DIV -->
        <table border=1 cellspacing=0>
            <tr>
                <td>游戏时间</td>
                <td>游戏关卡</td>
                <td>游戏结果</td>
            </tr>
            <?php 
                foreach ($arr as $val)
                {
                    echo "<tr>";
                    foreach ($val as $va)
                    {
                        echo "<td>{$va}</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
     <?php 
$mydate->showd->showdiv();
?>
</body>
</html>
