<?php

class dealsql
{
    public $server;
    public $uname;
    public $pwd;
    public $db;
    public $checkdb;
    public $con;
    public $rc;
    public static $my;
    public function __construct($filename)
    {   
        
        
        //加载XML文档
        $xm=simplexml_load_file($filename);
        $this->server=$xm->server;
      $this->uname=$xm->uname;
        $this->pwd=$xm->pwd;
        $this->db=$xm->mydb;
        //$this->server='localhost';
        //$this->uname='root';
        //$this->pwd='12345678';
       // $this->db='mydb';
        $this->con=mysql_connect($this->server,$this->uname,$this->pwd);
        if(!$this->con)
        {
            echo '服务器加载失败';
        }
        else
        {
            mysql_query("set name 'utf8'");
            $this->checkdb=mysql_select_db($this->db,$this->con);
            if(mysql_errno())
            {
                echo '数据库选择失败';
                // die();
            }
           
        
        }
    }
    public function insert($yuju) //插入
    {
        
        $sql=$yuju;
        $this->rc=mysql_query($yuju);
        if($this->rc==false)
        {
            echo '出错了';
        }
    }
    public function delete($yuju) //删除
    {
        $sql=$yuju;
        $this->rc=mysql_query($yuju);
        if($this->rc==false)
        {
            echo '出错了';
        }
    }
    public function update($yuju) //修改
    {
        //$sql=$yuju;
        echo '我是阵阵的阿迪斯多少是多少';
        $this->rc=mysql_query($yuju);
        
        if($this->rc==false)
        {
            echo '出错了';
        }
    }
    public function select($yuju)
    {
        $arr=array();
        $this->rc=mysql_query($yuju);
        while($row=mysql_fetch_assoc($this->rc))
        {
            $arr[]=$row;
        }
        return $arr;
    }
    /* 
    public static function getmy()
    {
        if(self::$my==null)
        {
            self::$my=new dealsql();
        }
        return self::$my
    } */
    public static function getmy($filename)
    {
        if(self::$my==null)
        {
            self::$my=new dealsql($filename);
        }
        return self::$my;
    }
    public function __destruct()
    {
        if(is_resource($this->rc))
        {
            mysql_free_result($this->rc);
        }
        if(is_resource($this->con))
        {
            mysql_close($this->con);
        }
         
    }
}