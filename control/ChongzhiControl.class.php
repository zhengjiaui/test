<?php
class ChongzhiControl{
    public function getDate()
    {
        $mydate=new GonggaoModle();
        $uid=(int)$_REQUEST['uid'];
        $myid=$_SESSION['myid'];
        echo $myid;
        $csql="select chongzhi.time,chongzhi.adds,chongzhi.vipid from chongzhi where uid={$myid}";
        $arr=$mydate->getarr($csql, 'Chongzhi');
        include 'view/chongzhi.php';
        return;
    }
}