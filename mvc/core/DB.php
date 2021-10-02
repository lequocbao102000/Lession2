<?php
require_once("./mvc/core/Config.php");
class DB{
    public $connect;

    function __construct(){
        $this->connect = mysqli_connect(HOST, USERNAME, PASSWORD);
        mysqli_select_db($this->connect, DATABASE);
        mysqli_query($this->connect,"SET NAMES 'utf8'");
    }
}
?>
