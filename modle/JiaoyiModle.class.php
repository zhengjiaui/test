<?php
class JiaoyiModle extends ModleBase
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getarr($sql)
    {
      $myarr=$this->db->select($sql);
      return $myarr;
    }
    public function insertarr($sql)
    {
        $this->db->insert($sql);
    }
}