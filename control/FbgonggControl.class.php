<?php
class FbgonggControl
{
    public function getDate()
    {
        $action=isset($_REQUEST['action'])? $_REQUEST["action"]:"run";
        if($action=='run')
        {
            include 'view/newgonggao.php';
        }
        if($action=='addvip')
        {
            include 'view/newvip.php';
        }
            
    }
}