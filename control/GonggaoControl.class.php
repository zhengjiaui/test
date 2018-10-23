<?php
class GonggaoControl{
    public function getDate()
    {
        if($_SESSION['star']==1)
        {   
            $mydate=new GonggaoModle();
            if($_REQUEST['action']=='dobaidu')
            {
                $neirong=$_REQUEST['neirong'];
                $sql="select gonggao.title from gonggao where title like '%{$neirong}%'";
                $arr=$mydate->getsom($sql);
                echo json_encode($arr,JSON_UNESCAPED_UNICODE);
                return;
            }
            if($_REQUEST['action']=='add')
            {
                $tit=$_REQUEST['title'];
                $cont=$_REQUEST['neirong'];
                $uset=$_REQUEST['usetime'];
                $outt=$_REQUEST['outtime'];
                $sqq="insert into gonggao(title,content,fabu,youxiao) values('{$tit}','{$cont}','{$uset}','{$outt}')";
                mysql_query($sqq);
            }
            if($_REQUEST['action']=='search')
            {
                $ser=$_REQUEST['sear'];
                //echo $ser;
                $mysq="select title,content,fabu,youxiao from gonggao where title like '%{$ser}%'";
 
                //$arr=mysql_query($mysq);
                $arr=$mydate->getarr($mysq, 'Gonggao');
                //print_r($arr);
                include 'view/gonggao.php';
                return;
            }
            if($_REQUEST['action']=='ajaxsearch')//做AJAX的搜索
            {
                $ser=$_REQUEST['neirong'];
                //echo $ser;
                $mysq="select title,content,fabu,youxiao from gonggao where title like '%{$ser}%'";
            
                //$arr=mysql_query($mysq);
                $arr=$mydate->getarr($mysq, 'Gonggao');
                //print_r($arr);
                include 'view/gonggao.php';
                return;
            }
            if($_REQUEST['action']=='dogame')
            {
                include 'view/dogame.php';
                return;
            }
            
            $sql="select title,content,fabu,youxiao from gonggao";
            $arr=$mydate->getarr($sql, 'Gonggao');
            //print_r($arr);
            include 'view/gonggao.php';
        }
    }
}