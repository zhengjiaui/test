<?php

class FactoryBase
{
    public function __construct() {
       
        require_once 'control/ControlBase.class.php';
        require_once 'db/sql.class.php';
        spl_autoload_register(array(__CLASS__,'loadmodle'));
        spl_autoload_register(array(__CLASS__,'loadcontrol'));
    }
    
    public function loadmodle($filename){
        $file = 'modle/'.$filename.'.class.php';
        if(file_exists($file)){
            require_once $file;
        }
    }
    
    
    public function loadcontrol($filename){
        $file = 'control/'.$filename.'.class.php';
        if(file_exists($file)){
            require_once $file;
        }
    }
    
    public function run(){
        $c  = isset($_REQUEST["c"]) ? $_REQUEST["c"]:"Login";
        $cname = $c."Control";
        $contorl = new $cname();
        $contorl->getDate();
        
    }
}
?> 