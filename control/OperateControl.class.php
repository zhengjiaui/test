<?php 
 class OperateControl
 {
     public function getDate()
     {
         if($_SESSION['star']==1)
         {
            $getsome=new OperateModle();
            if("yingshou"==$_REQUEST['action'])
            {   
                date_default_timezone_set('UTC');
                $nowtime=date("Y-m-d",time());
                $sql="SELECT sum(a.gprice) as yingshou from goods as a,buys as b where a.gid=b.gid";
                $carr=$getsome->getarr($sql);
                
                $tol=$carr[0]['yingshou'];
                include 'view/yingshou.php';
                return;
            }
            if("wanjia"==$_REQUEST['action'])
            {
                $sql="select count(uid) as cou from user";
                $carr=$getsome->getarr($sql);
                
                $tol=$carr[0]['cou'];
                include 'view/wanjia.php';
                return;
            }
            if("jiaoyifenxi"==$_REQUEST['action'])
            {
                include 'view/jiaoyifenxi.php';
                return;
            }
            if("youxi"==$_REQUEST['action'])
            {
                include 'view/youxi.php';
                return;
            }
            include 'view/yingshou.php';
            return;
         }
         else
         {
             include 'view/loginn.php';
         }
     }
 }
