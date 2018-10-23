<?php
class PlayControl
{
    public function getDate()
    {   
        
            
        $plays=new PlayMessage();
        $myarr=$plays->show();
        if('showmessage'==$_REQUEST['action']) //查看详情跳转进来的
        {
            $uid=(int)$_REQUEST['uid'];
            $_SESSION['myid']=$uid;
            echo 'uid:'.$uid;
            $gsql="select uname,regtime,lasttime,coin,exp,vip from user where uid={$uid}";
            $marr=$plays->getarray($gsql);
            $sqla="select `user`.uid,map.id,map.name,map.pid from user,map,gamerecord where `user`.uid={$uid} and `user`.uid=gamerecord.uid and gamerecord.sid=map.id ORDER BY map.id DESC;";
            $sarr=$plays->getarray($sqla); //获得玩家所有的通关记录，关数大的排前面。
            $guanshu=$sarr[0]['name'];//玩到的关数的名称 2-2
            $maxsai=(int)$sarr[0]['pid'];
            $sqlt="select map.name as nam from map where id={$maxsai}";
            $tarr=$plays->getarray($sqlt);
            $nowname=$tarr[0]['nam'];//现在玩到的赛事
            
            include 'view/showplayer.php';
            return ;
        }
        if('search'==$_REQUEST['action'])   //做搜索
        { 
            $ser=$_REQUEST['sear'];
            $aa=$_REQUEST['lego'];
            $bb=$_REQUEST['f'];
            $cc=$_REQUEST['gogo'];
            $dd=$_REQUEST['l'];
            if(!isset($aa))
            {
                $aa=1;
            }
            if($bb=='go' && (int)$cc<=$dd && (int)$cc>0)
            {
                $aa=(int)$cc;
            
            }
            $mypage=new showpage(3, $aa,'index.php','Play');
            $sql="select uid,uname,level,vip,regtime,lasttime,chongzhi,coin from user where uname like '%{$ser}%'";
            $arr=$mypage->getdata($sql);
            include 'view/player.php';
           return;
        }
        if('jiaose'==$_REQUEST['action'])
        {
            $uid=$_REQUEST['uid'];
            echo $uid;
            include 'view/jiaose.php';
            return;
        }
      
        if('jingyan'==$_REQUEST['action'])
        {
            $uid=$_REQUEST['uid'];
            echo $uid;
            include 'view/jingyan.php';
            return;
        }
        
        if('dolock'==$_REQUEST['action'])
        {
            $loca=(int)$_REQUEST['zt'];
            $uuid=(int)$_REQUEST['uid'];
            if($loca==0)
            {
               $loca=1; 
            }
            else {
                $loca=0;
            }
            //echo 'loc:'.$loca.''.'uid:'.$uuid;
            $ss="update user set user.lock={$loca} where uid={$uuid}";
            mysql_query($ss);
          
            
        }
        $aa=$_REQUEST['lego'];
        $bb=$_REQUEST['f'];
        $cc=$_REQUEST['gogo'];
        $dd=$_REQUEST['l'];
        if(!isset($aa))
        {
            $aa=1;
        }
        if($bb=='go' && (int)$cc<=$dd && (int)$cc>0)
        {
            $aa=(int)$cc;
        
        }
        $mypage=new showpage(3, $aa,'index.php','Play');
        $sql="select uid,uname,level,vip,regtime,lasttime,chongzhi,coin from user";
        $arr=$mypage->getdata($sql);
        include 'view/player.php';
    }
}