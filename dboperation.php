<?php
class dboperation
{
    public $con,$res;
    function __construct()
    {
        $this->con=mysqli_connect("localhost:3307","root","","db_craftzone");
        if(!$this->con)
        {
         die("connection failed:".mysqli_connect_error());
        }
    }
public function executequery($sql)
    {
    $this->res=mysqli_query($this->con,$sql);
    return $this->res;
    }
}
?>