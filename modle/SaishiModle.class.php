<?php
class SaishiModle extends ModleBase
{
    public function __construct()
    {
        parent::__construct();
    }
    public function __getarr($sql)
    {
        //parent::__construct();
        
        $myarr=$this->db->select($sql);
        return $myarr;
        
     }
}