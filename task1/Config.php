<?php
class Config{
    function __construct()
    {
        $con=new mysqli("localhost","root","123456","treehouse_sample");
        $this->con_obj=$con;
    }
    public function connect()
    {
        if($this->con_obj)
        {
            $ok="Connected..";
            return $ok;
        }
    }
    public function insert($in)
    {
        $inserted=$this->con_obj->query($in);
        if($inserted)
            return  $this->con_obj->insert_id;
    }
    public function select($s)
    {
        $result=$this->con_obj->query($s);
        if (mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_array($result))
            {
                $rows[]=$row;
            }
        }
        return $rows;
    }
}
