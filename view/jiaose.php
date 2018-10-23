<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
 <div> <!-- 拥有角色/装备的DIV -->
        <table border=1 cellspacing=0>
            <tr>
                <td>装备类型</td>
                <td>购买时间</td>
                <td>等级</td>
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
