 <?php
class FactoryBase
{
    public function __construct()
    {   
        require_once 'tool/fenye.php';
        require_once 'control/ControlBase.class.php';
        require_once 'db/sql.class.php';
        spl_autoload_register(array(__CLASS__,'loadmodle'));
        //spl_autoload_register(array(__CLASS__,'loadcontrol'));
        spl_autoload_register(array(__CLASS__,'loadcontrol'));
    }   
        function loadmodle($filename)
        {
            $file='modle/'.$filename.'.class.php';
            if(file_exists($file))
            {
                require_once $file;
            }
        }
        function loadcontrol($filename)
        {
            $file='control/'.$filename.'.class.php';
            if(file_exists($file))
            {
                require_once $file;
            }
        }
    
    public function run()
    {
        $c=isset($_REQUEST['c'])?$_REQUEST['c']:'Login';
        $myname=$c.'Control';
        $control=new $myname();
        $control->getDate();
        
    }
}