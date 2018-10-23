<?php
class GonggaoupControl
{
   public function getDate() {
       if($_SESSION['star']==1)
       {
           $a=$_REQUEST['uname'];
           $b=$_REQUEST['pwd'];
           $e=$_REQUEST['mytime'];
           $c=$_REQUEST['up1'];
           $d=$_REQUEST['up2'];
           //echo 'ashi：'.$a.'Cshi'.$c;
            
           if($_REQUEST['action']=='del')
           {
             $sql="delete from gonggao where title='{$c}'";
             $mydate=new Gonggaoup($sql);
             header('location:index.php?c=Gonggao');
           }
           else
           {
               $sql="update gonggao set title='{$a}',content='{$b}',youxiao='{$e}' where title='{$c}'";
               //$sql="delete from gonggao where title='{$c}'";
               $mydate=new Gonggaoup($sql);
               //mysql_query($sql);
               header('location:index.php?c=Gonggao');
           }
          
       }
       else 
       {
           include 'view/loginn.php';
       }
       
   }
}