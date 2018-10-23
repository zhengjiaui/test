<?php
class PlayMessage extends ModleBase
{
    public function __construct()
    {
        parent::__construct();
    }
    public function show()
    {
        $sql="select uid,uname,level,vip,regtime,lasttime,chongzhi,coin from user;";
        $playarr=$this->db->select($sql);
        return $playarr;
    }
    public function getarray($sql)
    {
        
        $playarr=$this->db->select($sql);
        return $playarr;
    }
}