<?php
class ShowList extends ModleBase
{
    public function getlist()
    {
        
        $sql="SELECT name from menulist where pid=0;";
        $arr=$this->db->select($sql);
        $sql1="SELECT name from menulist where pid=2;";
        $rc=mysql_query($sql1);
        
        while($row=mysql_fetch_assoc($rc))
       {
            $arr[1][]=$row;
        }
        return $arr;
    }
    public function getmyarr($sql)
    {
        $arr=$this->db->select($sql);
        return $arr;
    }
}