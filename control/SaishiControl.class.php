<?php
class SaishiControl
{
    public function getDate()
    {
        if($_SESSION['star']==1)
        {
            if($_REQUEST['action']=='saiduan')
            {
                include 'view/saiduan.php';
                return;
            }
            if($_REQUEST['action']=='saishi')
            {
                include 'view/saishishow.php';
                return;
            }
            if($_REQUEST['action']=='add')
            {
                
                include 'view/newsaishi.php';
                return;
            }
            if($_REQUEST['action']=='addsaiduan')
            {
            
                include 'view/newsaiduan.php';
                return;
            }
            if($_REQUEST['action']=='delsaishi')  //删除赛事
            {
                //echo"<script>confirm('真的要删除吗')</script>";
                 $sid=(int)$_REQUEST['id'];
                //echo $sid;
                $my=new SaishiModle();
                
                $sql="delete from map where id={$sid}";
                mysql_query($sql);
                $sqll="delete from havemap where sid={$sid} ";
                mysql_query($sqll);
                $sql="select * from map;";
                $myarr=$my->__getarr($sql);
                echo "<script>alert('删除成功！'+$sid);</script>";
                include 'view/saishi.php';
                return; 
                
            }
            if($_REQUEST['action']=='delsaiduan')  //删除赛段
            {
                $sid=(int)$_REQUEST['id'];
                //echo $sid;
                if($sid==1)
                {   $my=new SaishiModle();
                    echo "<script>alert('原始赛段不能删除！');</script>";
                    
                    $sql="select * from map;";
                    $myarr=$my->__getarr($sql);
                    include 'view/saishi.php';
                    return;
                }
                $my=new SaishiModle();
                $sql="delete from map where id={$sid} or pid={$sid}";
                mysql_query($sql);
                $sqll="delete from havemap where pid={$sid}";
                mysql_query($sqll);
                $sql="select * from map;";
                $myarr=$my->__getarr($sql);
                echo "<script>alert('删除成功！');</script>";
                include 'view/saishi.php';
                return;
            
            }
            if($_REQUEST['action']=='xiusaishi')//修改赛事页面的跳转
            {
                $sid=(int)$_REQUEST['id'];
                $name=$_REQUEST['name'];
                include 'view/upsaishi.php';
                return;
            }
            if($_REQUEST['action']=='upsaishi')//修改赛事页面处理
            {
                date_default_timezone_set('PRC');
                $sid=(int)$_REQUEST['sid']; //要修改的ID号
                $sname=$_REQUEST['fname'];//修改的新赛事名
                $a=rand(0, 99);
                $b=rand(0, 99);
                $c=rand(0, 99);
                $d=date("Y",time());
                $e=date("m",time());
                $f=date("s",time());
                $g=$_FILES['file']['name'];
                $nowpath=$a.$b.$c.$d.$e.$f.$g;
                //var_dump($_FILES['file']);
                $path='../img/'.$nowpath;//新的图片地址
                move_uploaded_file($_FILES['file']['tmp_name'], $path);
                $my=new SaishiModle();
                $sql="update map set name='{$sname}',img='{$path}' where id={$sid}";
                mysql_query($sql);
                echo "<script>alert('修改成功！');window.parent.location='index.php?c=Saishi'</script>";
                return;
            }
            if($_REQUEST['action']=='xiusaiduan')//修改赛段页面的跳转
            {
                $sid=(int)$_REQUEST['id'];
                $name=$_REQUEST['name'];
                include 'view/upsaiduan.php';
                return;
            }
            if($_REQUEST['action']=='upsaiduan')//修改赛段页面处理
            {
                date_default_timezone_set('PRC');
                $pid=(int)$_REQUEST['fid']; //ID
                $sname=$_REQUEST['sname'];//修改的名称
                $reword=(int)$_REQUEST['reword'];//经验奖励
                $map=(int)$_REQUEST['map'];//NPC设置
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
                //$path1='text/'.$_FILES['file']['name'][0];//赛段图片
                //$path2='text/'.$_FILES['file']['name'][1];//赛事地图
                move_uploaded_file($_FILES[file][tmp_name][0], $path1);
                move_uploaded_file($_FILES[file][tmp_name][1], $path2);
                $my=new SaishiModle();
                $sql="update map set name='{$sname}',img='{$path1}',map='{$path2}',reword={$reword},npc={$map} where id={$pid}";
                mysql_query($sql);
                
                echo "<script>alert('修改成功！');window.parent.location='index.php?c=Saishi'</script>";
                return;
            }
            
            if($_REQUEST['action']=='tian')//添加赛段
           
            {
               // var_dump($_FILES['file']);
               if($_FILES['file']['type']!='image/png')
               {
                   echo "<script>alert('文件类型错误');window.parent.location='index.php?c=Saishi'</script>";
                   return;
               }
               date_default_timezone_set('PRC');
                $sname=$_REQUEST['fname'];
                $a=rand(0, 99);
                $b=rand(0, 99);
                $c=rand(0, 99);
                $d=date("Y",time());
                $e=date("m",time());
                $f=date("s",time());
                $g=$_FILES['file']['name'];
                $nowpath=$a.$b.$c.$d.$e.$f.$g;
                //var_dump($_FILES['file']);
                $path='../img/'.$nowpath;//新的图片地址
                //$path='img/'.$_FILES['file']['name'];
                move_uploaded_file($_FILES[file][tmp_name], $path);
                $my=new SaishiModle();
                $sql="select count(pid) as num from map";
                $myarr=$my->__getarr($sql);
                $id=(int)$myarr[0]['num']+1;
                var_dump($id);
                $sql="insert into map(pid,name,map,img,reword,npc,suoding) values(0,'{$sname}','','{$path}',0,0,1)";
                mysql_query($sql);
                //echo "<script>history.go(0);</script>";
                echo "<script>alert('添加成功！');window.parent.location='index.php?c=Saishi'</script>";
                return;
            }
            if($_REQUEST['action']=='newsai')
            {
                //var_dump($_FILES[file]);
                date_default_timezone_set('PRC');
                $pid=(int)$_REQUEST['fid'];
                $sname=$_REQUEST['sname'];
                $reword=(int)$_REQUEST['reword'];
                $map=(int)$_REQUEST['map'];
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
                //$path1='text/'.$_FILES['file']['name'][0];
                //$path2='text/'.$_FILES['file']['name'][1];
                move_uploaded_file($_FILES[file][tmp_name][0], $path1);
                move_uploaded_file($_FILES[file][tmp_name][1], $path2);
                $my=new SaishiModle();
                $sql="select count(id) as num from map";
                $myarr=$my->__getarr($sql);
                $id=(int)$myarr[0]['num']+1;
                $sql="insert into map(pid,name,map,img,reword,npc,suoding) values($pid,'{$sname}','{$path2}','{$path1}',{$reword},{$map},1)";
                mysql_query($sql);
                echo "<script>alert('添加成功！');window.parent.location='index.php?c=Saishi'</script>";
                return;
            }
            
            $my=new SaishiModle();
            $sql="select * from map;";
            $myarr=$my->__getarr($sql);
            include 'view/saishi.php';
            //var_dump($myarr);
 
        }
        else
        {
            include 'view/loginn.php';
        }
    }
}