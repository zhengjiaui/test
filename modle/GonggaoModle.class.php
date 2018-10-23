<?php
class GonggaoModle extends ModleBase
{
    public $showd;
    public function __construct()
    {
        parent::__construct();
    }
    public function getsom($sql)
    {
        $arr=array();
        $rc=mysql_query($sql);
        while($row=mysql_fetch_assoc($rc))
        {
            $arr[]=$row;
        }
        return $arr;
    }
    public function getarr($sql,$gowhere)
    {
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
        $this->showd=new showpage(3, $aa,'index.php',$gowhere);
        //$sql="select uid,uname,level,vip,regtime,lasttime,chongzhi,coin from user";
        $arr=$this->showd->getdata($sql);
        return $arr;
    }
}