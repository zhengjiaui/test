<?php
class Gonggaoup extends ModleBase
{
    public function __construct($sql)
    {
        parent::__construct();
       
        $this->db->update($sql);
    }
}