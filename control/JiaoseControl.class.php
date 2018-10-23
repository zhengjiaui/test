<?php
class JiaoseControl{
    public function getDate()
    {
        $mydate=new GonggaoModle();
        $uid=(int)$_REQUEST['uid'];
        $myid=$_SESSION['myid'];
        echo $myid;
        $csql="select goods.gname,buys.buytime,buys.dengji from buys,goods where uid={$myid} and buys.gid=goods.gid";
        $arr=$mydate->getarr($csql, 'Jiaose');
        include 'view/jiaose.php';
        return;
    }
}
