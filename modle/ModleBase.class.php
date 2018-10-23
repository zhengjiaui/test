<?php
class ModleBase
{
    protected $db;
    public function __construct()
    {
        $this->db=dealsql::getmy('db/data.xml');
    }
}