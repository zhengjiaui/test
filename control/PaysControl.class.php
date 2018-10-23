<?php
class OperateControl
{
    public function getDate()
    {
        if($_SESSION['star']==1)
        {
            include 'view/wanjia.php';
        } 
        else
        {
            include 'view/loginn.php';
        }
    }
}         