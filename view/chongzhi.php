<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<div> <!-- 充值记录的DIV -->
        <table border=1 cellspacing=0>
            <tr>
                <td>充值时间</td>
                <td>充值金额</td>
                <td>VIP</td>
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
