<?php
class LoginModle extends ModleBase
{
    function checkname($a,$b)
    {
        $sql="select * from admin where uname='{$a}' and pwd='{$b}'";
        $arr=$this->db->select($sql);
        if(count($arr)>0)
        {
            return $arr[0];
        }
        else
        {
            return NUll;
        }
    }
}
