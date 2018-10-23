<?php
class JiaoyiControl
{
    public function getDate()
    {
        if($_SESSION['star']==1)
        {
            $good=new JiaoyiModle();
            if($_REQUEST['action']=='show')
            {
                $gid=(int)$_REQUEST['gid'];
                $sqla="select * from goods where gid={$gid}";
                $goodarr=$good->getarr($sqla);//物品的数组
                $sqlb="select attribute.aname as attr from goods,attribute where goods.gattrid=attribute.aid and goods.gid={$gid};";
                $attrarr=$good->getarr($sqlb);//属性名称
                //var_dump($goodarr);
                include 'view/jiaoyishow.php';
                return;
            }
            if($_REQUEST['action']=='addgood')
            {
                $tid=$_REQUEST['tid'];
                //echo $tid;
                include 'view/newjiaoyi.php';
                return;
            }
            if($_REQUEST['action']=='endgood')
            {
                date_default_timezone_set('UTC');
                $tid=(int)$_REQUEST['tid'];//类型ID
                $gname=$_REQUEST['gname'];
                $gattrid=(int)$_REQUEST['type'];//属性ID
                $gprice=(int)$_REQUEST['price'];
                $gvalue=(int)$_REQUEST['attr'];
                $gvip=(int)$_REQUEST['vip'];
                $a=rand(0, 99);
                $b=rand(0, 99);
                $c=rand(0, 99);
                $d=date("Y",time());
                $e=date("m",time());
                $f=date("s",time());
                $g=$_FILES['file']['name'][0];
                $nowpath=$a.$b.$c.$d.$e.$f.$g;
                $h=rand(0, 99);
                $z=rand(0, 50);
                $i=rand(0, 99);
                $j=rand(0, 99);
                $k=date("Y",time());
                $l=date("m",time());
                $m=date("s",time());
                $n=$_FILES['file']['name'][1];
                $nowpath2=$z.$h.$i.$j.$k.$l.$m.$n;
                
                $path1='../img/'.$nowpath;//新的图片地址
                
                $path2='../img/'.$nowpath2;//新的图片地址
                //$path1='text/'.$_FILES['file']['name'][0];//路径 山城图片 w1s
                //$path2='text/'.$_FILES['file']['name'][1];//比赛图片 w1
                move_uploaded_file($_FILES[file][tmp_name][0], $path1);
                move_uploaded_file($_FILES[file][tmp_name][1], $path2);
                $sql="insert into goods(gname,gattrid,gtypeid,gprice,gvalue,gvipid,gurl,gyulan) values('{$gname}',{$gattrid},{$tid},{$gprice},{$gvalue},{$gvip},'{$path2}','{$path1}')";
                //$attrarr=$good->getarr($sqlb);
               // echo $tid,$gattrid,$gvip;
                mysql_query($sql);
                echo "<script>alert('success!');window.parent.location='index.php?c=Jiaoyi'</script>";
                return;
            }
            if($_REQUEST['action']=='doupgood') //更新数据
            {
                date_default_timezone_set('UTC');
                $gid=(int)$_REQUEST['gid'];// 商品ID
                $gname=$_REQUEST['gname'];//物品名称gname
                $gittrid=(int)$_REQUEST['type'];//属性id
                $gvalue=(int)$_REQUEST['attr'];//属性值
                $gprice=(int)$_REQUEST['price'];//价格
                $gvipid=(int)$_REQUEST['vip'];//vip id
                $a=rand(0, 99);
                $b=rand(0, 99);
                $c=rand(0, 99);
                $d=date("Y",time());
                $e=date("m",time());
                $f=date("s",time());
                $g=$_FILES['file']['name'][0];
                $nowpath=$a.$b.$c.$d.$e.$f.$g;
                $h=rand(0, 99);
                $z=rand(0, 50);
                $i=rand(0, 99);
                $j=rand(0, 99);
                $k=date("Y",time());
                $l=date("m",time());
                $m=date("s",time());
                $n=$_FILES['file']['name'][1];
                $nowpath2=$z.$h.$i.$j.$k.$l.$m.$n;
                
                $path1='../img/'.$nowpath;//新的图片地址
                
                $path2='../img/'.$nowpath2;//新的图片地址
                //$path1='text/'.$_FILES['file']['name'][0];//路径 山城图片 w1s
                //$path2='text/'.$_FILES['file']['name'][1];//比赛图片 w1
                move_uploaded_file($_FILES[file][tmp_name][0], $path1);
                move_uploaded_file($_FILES[file][tmp_name][1], $path2);
                $sql="update goods set gname='{$gname}',gattrid={$gittrid},gprice={$gprice},gvalue={$gvalue},gvipid={$gvipid},gurl='{$path2}',gyulan='{$path1}' where gid={$gid}";
                mysql_query($sql);
                echo "<script>alert('success!');window.parent.location='index.php?c=Jiaoyi'</script>";
                return;
                
            }
            if($_REQUEST['action']=='delgood') //删除物品
            {
                $gid=(int)$_REQUEST['id'];
                $sql="delete from goods where gid={$gid}";
                echo "<script>alert('success!');window.parent.location='index.php?c=Jiaoyi'</script>";
                mysql_query($sql);
                return;
            }
            if($_REQUEST['action']=='deltype')//删除名称操作
            {
                $tid=(int)$_REQUEST['tid'];
                $sql="delete from goodtype where tid={$tid}";
                mysql_query($sql);
                //include 'view/newtype.php';
                echo "<script>alert('success!');window.location='index.php?c=Jiaoyi'</script>";
                return;
            }
            if($_REQUEST['action']=='upgood') //修改物品
            {
                $gid=(int)$_REQUEST['id']; //物品ID
                $gname=$_REQUEST['gname']; //物品名称
                $sqll="select * from attribute";
                $attrarr=$good->getarr($sqll);//属性值数组 金木水火土
                //var_dump($attrarr);
                $sqla="select * from vip";
                $viparr=$good->getarr($sqla);//vip array
                include 'view/upgood.php';
                return;
            }
            if($_REQUEST['action']=='uptype')//修改type名称
            {
                $tid=$_REQUEST['tid'];
                include 'view/uptype.php';
                return;
            }
            if($_REQUEST['action']=='douptype')//修改type名称操作
            {
                $tid=(int)$_REQUEST['tid'];
                $tname=$_REQUEST['tname'];
                $sql="update goodtype set tname='{$tname}' where tid={$tid}";
                mysql_query($sql);
                echo "<script>alert('success!');window.parent.location='index.php?c=Jiaoyi'</script>";
                return;
            }
            if($_REQUEST['action']=='addtype')//增加名称操作
            {
                include 'view/newtype.php';
                return;
            }
            if($_REQUEST['action']=='doaddtype')//增加名称操作
            {
                $tname=$_REQUEST['tname'];
                $sql="insert into goodtype(tname) values('{$tname}') ";
                mysql_query($sql);
                echo "<script>alert('success!');window.parent.location='index.php?c=Jiaoyi'</script>";
                return;
            }
            
           $sql="select * from goodtype";
           $typearr=$good->getarr($sql);//物品的类型数组
           $sqla="select * from goods";
           $goodarr=$good->getarr($sqla);//物品的数组
           
           include 'view/jiaoyi.php'; 
        }
        else
        {
            include 'view/loginn.php';
        }
    }
}