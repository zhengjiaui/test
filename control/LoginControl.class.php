<?php
class LoginControl
{
    
    public function getDate()
    {
        $action=isset($_REQUEST['action'])?$_REQUEST['action']:'run';
        if($action=='run')
        {
            include 'view/loginn.php';
        }else 
            if($action=="login")
        {
            $this->login();
            
        }
    }
    public function login()//验证登陆
    {
        $uname=$_REQUEST['admin'];
        $pwd=$_REQUEST['pwd'];
        $c=$_REQUEST['yanzheng'];
        //调用模型
        $myname=new LoginModle();
        $arr=$myname->checkname($uname,$pwd);
        if(is_null($arr))
        {
            echo "<script>alert('账号或密码错误！')</script>";
            include 'view/loginn.php';
           
        }
        else
        {
            if($c==$_SESSION['yan'])
            {
                $_SESSION['admin']=$uname;
                $_SESSION['star']=1;
                header("location:index.php?c=Admin&action=admin");
            }
            else {
                
                echo "<script>alert('验证码错误！')</script>";
                include 'view/loginn.php';
            }
            //header("location:index.php?c=Admin");
            
        }
    }
}