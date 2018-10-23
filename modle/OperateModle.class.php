<?php
class OperateModle extends ModleBase
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getarr($sql)
    {
        $arr=$this->db->select($sql);
        return $arr;
    }
    
}