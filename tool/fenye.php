<?php
//require_once 'sql.class.php';
//dealsql::getmy('xml/data.xml');
class showpage
{
    private $everypage;//每页几条
    private $curpage;//当前页
    private $totalpage;//总页数
    private $totaldada;//总条数
    private $web;//跳转的网站地址
    public $suba=0;//控制从第几个开始
    public $myte;
    private $firs;
    public $c;
    public function __construct($evepage,$cuup,$web,$cc)
    {
        $arr=array();
        $this->everypage=$evepage;
        $this->curpage=$cuup;
        $this->web=$web;
        $this->c=$cc;
       
        
        
        //echo '总条数'.$this->totaldada.'<br>';
        //echo '总页数'.$this->totalpage.'<br>';
        echo '<pre>';
        //var_dump($arr);
        echo '</pre>';
      
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
        echo "<form method='post' action='{$this->web}?f=go&l={$this->totalpage}&lego=$this->curpage&c={$this->c}'>{$this->curpage}/{$this->totalpage}<a href='{$this->web}?lego=1&c={$this->c}'>首页</a><a href='{$this->web}?lego={$pretp}&c={$this->c}'>上一页</a><a href='{$this->web}?lego={$nextp}&c={$this->c}'>下一页</a><a href='{$this->web}?lego={$this->totalpage}&c={$this->c}'>末页</a>
        <input type='text' name='gogo' /><input type='submit' value='GO'/></form>";
    }
}