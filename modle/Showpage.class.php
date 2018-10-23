<?php

class Showpage extends ModleBase
{
    private $everypage;//每页几条
    private $curpage;//当前页
    private $totalpage;//总页数
    private $totaldada;//总条数
    private $web;//跳转的网站地址
    public $suba=0;//控制从第几个开始
    public $myte;
    private $firs;
    private $dbaa;
    public function __construct($evepage,$cuup,$web)
    {
       parent::__construct();
        //$eee=$this->db;
        $arr=array();
        $this->everypage=$evepage;
        $this->curpage=$cuup;
        $this->web=$web;
       
      
    }
    public function getdata($sql)
    {
        $arr=array();
        
        $rs=mysql_query($sql);
        $this->firs=($this->everypage)*($this->curpage-1);
        //$this->$suba=($cuup-1)*$evepage;
        $this->myte=($this->everypage)*($this->curpage-1);
        $this->totaldada=mysql_num_rows($rs);//总条数
        $this->totalpage=ceil($this->totaldada/$this->everypage);//总页数
        $sqla=$sql." limit {$this->myte},{$this->everypage}";
        $rsa=mysql_query($sqla);
        while($row=mysql_fetch_assoc($rsa))
        {
            $arr[]=$row;
        }
        return $arr;
    }
    public function showdiv()
    {
        
        $nextp=$this->curpage==$this->totalpage?$this->totalpage:$this->curpage+1;
        $pretp=$this->curpage==1?$this->curpage:$this->curpage-1;
        echo "<form method='post' action='{$this->web}?f=go&l={$this->totalpage}&lego=$this->curpage&c=Admin'>{$this->curpage}/{$this->totalpage}<a href='{$this->web}?lego=1&c=Admin'>首页</a><a href='{$this->web}?lego={$pretp}&c=Admin'>上一页</a><a href='{$this->web}?lego={$nextp}&c=Admin'>下一页</a><a href='{$this->web}?lego={$this->totalpage}&c=Admin'>末页</a>
        <input type='text' name='gogo' /><input type='submit' value='GO'/></form>";
    }
}