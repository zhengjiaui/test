<?php
class VipControl
{
    public function getDate()
    {
        if($_SESSION['star']==1)
        {
            $mydate=new GonggaoModle();
            if($_REQUEST['action']=='search')
            {
                $ser=(int)$_REQUEST['sear'];
                //echo $ser;
                $mysq="select * from vip where vipid={$ser}";
            
                //$arr=mysql_query($mysq);
                $arr=$mydate->getarr($mysq, 'Vip');
                //print_r($arr);
                include 'view/Vip.php';
                return;
            }
            if($_REQUEST['action']=='del')
            {
                $c=(int)$_REQUEST['up1'];
                $sq="delete from vip where vipid={$c}";
                $rc=mysql_query($sq);
                //$viparr=$mydate->getsom($sq);
                //echo 'vipID:'.$c;
                //echo '一共:'.count($viparr);
                if(!$rc)
                {
                    //echo hahah;
                    echo "<script>alert('该VIP等级已被使用无法删除！');window.location='index.php?c=Vip'</script>";
                    return;
                }
                else
                {   //$mydate=new GonggaoModle();
                   // $sql="delete from vip where vipid=4";
                    //echo $c;
                   // mysql_query($sql);
                    //$mydate=new Gonggaoup($sql);
                    header('location:index.php?c=Vip');
                    return;
                }
               
            }
            if($_REQUEST['action']=='change')
            {
                $a=(int)$_REQUEST['uname'];
                $b=(int)$_REQUEST['pwd'];
                $e=$_REQUEST['mytime'];
                $c=(int)$_REQUEST['up1'];
                $chages="update vip set vipid={$a},chongzhi={$b},name='{$e}' where vipid={$c}";
                mysql_query($chages);
                //echo gettype($c);
                //return;
            }
            if($_REQUEST['action']=='add')
            {
                $tit=(int)$_REQUEST['title'];
                $cont=(int)$_REQUEST['neirong'];
                $uset=$_REQUEST['usetime'];
                $sqq="insert into vip(vipid,chongzhi,name) values({$tit},{$cont},'{$uset}')";
                mysql_query($sqq);
            }
            $sql="select * from vip";
            $arr=$mydate->getarr($sql, 'Vip');
            //print_r($arr);
            include 'view/vip.php';
        }
        else 
        {
            include 'view/loginn.php';
        }
    }
}