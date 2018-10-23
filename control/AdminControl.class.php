<?php
class AdminControl implements ControlBase 
{
    public function getDate()
    {
        $aw=$_SESSION['star'];
        // "<script>alert({$aw});</script>";
        
       $action=isset($_REQUEST['action'])? $_REQUEST["actoin"]:"run";
       if($_SESSION['star']==1)
       {
           $getarr=new ShowList();
           $myarr=$getarr->getlist();
           $sql1="SELECT name from menulist where pid=7;";
           $rc=mysql_query($sql1);
           
           while($row=mysql_fetch_assoc($rc))
           {
               $myarr[2][]=$row;
           }
           $sql1="SELECT name from menulist where pid=11;";
           $rc=mysql_query($sql1);
           
           while($row=mysql_fetch_assoc($rc))
           {
               $myarr[3][]=$row;
           }
           
           echo '<pre>';
           //print_r($myarr);
           echo '</pre>';
         
           $ssql="select * from menulist";
           $nowarr=$getarr->getmyarr($ssql);
           
           
           include 'view/content.php';
       }
       else
       {
           include 'view/loginn.php';
       }
       
    }
}