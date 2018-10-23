<?php
class JingyanControl{
    public function getDate()
    {
        $mydate=new GonggaoModle();
        $uid=(int)$_REQUEST['uid'];
        $myid=$_SESSION['myid'];
        echo $myid;
        $asql="select a.exittime,b.id,a.getcoin from gamerecord as a,map as b where a.uid=1 and a.sid=b.id";
        $arr=$mydate->getarr($asql, 'Jingyan');
        include 'view/jingyan.php';
        return;
    }
}
