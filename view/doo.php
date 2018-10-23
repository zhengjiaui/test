<?php
require_once '../db/sql.class.php';

$db=dealsql::getmy('../db/data.xml');

//$sql="select * from vip";
//$arr=$db->select($sql);
if('vip'==$_REQUEST['action']) //vip查询
{
   // $sql="select count(vipid) as cou from vip";
    $sql="select count(uid) as num,vip from user GROUP BY vip";
    $carr=$db->select($sql);
    //$tol=(int)$carr[0]['cou'];
    //echo $tol;
   // $arr=array();
   /* for($i=1;$i<=$tol;$i++)
    {
        $sqla="SELECT count(uid) as vv from user where vip={$i}";
        $caarr=$db->select($sqla);
        $toll=(int)$caarr[0]['vv'];
        $arr[$i]=$toll;
    } */
    //$arr=array(0=>'haha',1=>'gaga');
    echo json_encode($carr);
}
if('1'==$_REQUEST['action']) //vip查询
{
    // $sql="select count(vipid) as cou from vip";
    $sql="select count(uid) as num,vip from user GROUP BY vip";
    $carr=$db->select($sql);
    
    echo json_encode($carr);
}
if('2'==$_REQUEST['action']) //男女
{
    // $sql="select count(vipid) as cou from vip";
    $sql="select count(uid) as num,usex from user GROUP BY usex";
    $carr=$db->select($sql);

    echo json_encode($carr,JSON_UNESCAPED_UNICODE);
}
if('3'==$_REQUEST['action']) //年龄
{
    // $sql="select count(vipid) as cou from vip";
    $sql="select count(uid) as num,uage from user GROUP BY uage";
    $carr=$db->select($sql);

    echo json_encode($carr,JSON_UNESCAPED_UNICODE);
}
if('yingshou'==$_REQUEST['action']) //年龄
{
    // $sql="select count(vipid) as cou from vip";
    $sql="SELECT sum(a.gprice) as shouru,FROM_UNIXTIME(UNIX_TIMESTAMP(b.buytime),'%Y') as years from goods as a,buys as b where a.gid=b.gid GROUP BY years";
    $carr=$db->select($sql);

    echo json_encode($carr,JSON_UNESCAPED_UNICODE);
}
if('renwu'==$_REQUEST['action']) //人物购买
{
    // $sql="select count(vipid) as cou from vip";
    $sql="SELECT count(c.uid ) as zb,FROM_UNIXTIME(UNIX_TIMESTAMP(c.buytime),'%Y') as years from goods as b,buys as c where b.gtypeid=1 and b.gid=c.gid GROUP BY years";
    $carr=$db->select($sql);

    echo json_encode($carr,JSON_UNESCAPED_UNICODE);
}
if('biker'==$_REQUEST['action']) //人物购买
{
    // $sql="select count(vipid) as cou from vip";
    $sql="SELECT count(c.uid ) as zb,FROM_UNIXTIME(UNIX_TIMESTAMP(c.buytime),'%Y') as years from goods as b,buys as c where b.gtypeid=1 and b.gid=c.gid GROUP BY years";
    $carr=$db->select($sql);

    echo json_encode($carr,JSON_UNESCAPED_UNICODE);
}
if('equip'==$_REQUEST['action']) //装备购买
{
    // $sql="select count(vipid) as cou from vip";
    $sql="SELECT count(c.uid) as equip,FROM_UNIXTIME(UNIX_TIMESTAMP(c.buytime),'%Y') as years from goods as b,buys as c where b.gtypeid!=1 and b.gid=c.gid GROUP BY years";
    $carr=$db->select($sql);

    echo json_encode($carr,JSON_UNESCAPED_UNICODE);
}

