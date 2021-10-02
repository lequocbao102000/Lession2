<?php
class App{
    protected $controller = "Product";
    protected $action = "Index";
    protected $params = [];

    function __construct(){
      
        $arr = $this->UrlProccess();
     
        //Xu ly controller
        //kiem tra controller tren url co ton tai kh?
        if (isset($arr[0])){
            if (file_exists("./mvc/controllers/".$arr[0].".php")){
                $this->controller = $arr[0];
                
            }
            //xoa gia tri trong arr
            unset($arr[0]);
        }
        
        require_once ("./mvc/controllers/".$this->controller.".php");
        $this->controller = new $this->controller;

        //Xu ly action
        if (isset($arr[1])){
            if (method_exists($this->controller,$arr[1])){
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }
       

        //Xu ly params
        $this->params = $arr?array_values($arr):[];
        // $this->controller = new $this->controller;
        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    function UrlProccess(){
        if (isset($_GET["url"])){
            return explode("/",filter_var(trim($_GET["url"],"/")));
        }
    }
}
?>