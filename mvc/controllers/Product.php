<?php
class Product extends Controller{
    protected $product;
    function __construct(){   
        $this->product = $this->model("ProductModel");
    }

    function Index(){      
        if (isset($_POST['btnsearch'])){
            $search = $_POST['search'];
        }
        else{
            $search = "";         
        }
        $count_product = $this->product->CountResult($search);
        if (isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page']>0)
        {
            $from = ($_GET['page']-1)*10;
        }
        else{
            $from = 1;
        }
        $list_product = $this->product->LoadProduct($search,$from);
        $this->view("masterview",[
            "view"=>"product",
            "list_pro"=>$list_product,
            "result"=>$count_product
            
        ]);
    }

    function AddProduct(){
        if (isset($_POST['submit_product'])){
            if ($this->product->AddProduct($_POST['name_product'],$_POST['category_product'],$_FILES['image_product']['name'])){
                $file = $_FILES['image_product']['name'];
                move_uploaded_file($_FILES['image_product']['tmp_name'],"uploads/".$file."");
            }
            header ('Location:'.BASE_URL);
            
        }
        else{
            $list_category = $this->product->LoadCategory();
            $this->view("masterview",[
                "view"=>"add",
                "list_cate"=>$list_category
            ]);
        }
        
    }

    function DelProduct(){
        if (isset($_GET['id'])){
            if (is_numeric($_GET['id'])&&$_GET['id']>0){
                $this->product->DeleteProduct($_GET['id']);
            }
        }
        header ('Location:'.BASE_URL);
    }
    function EditProduct(){
        if (isset($_GET['edit'])){
            if (is_numeric($_GET['edit'])&&$_GET['edit']>0){
                if (!isset($_POST['submit_update'])){
                    $list_category = $this->product->LoadCategory();
                    $singleproduct = $this->product->LoadSingleProduct($_GET['edit']);
                    $this->view("masterview",[
                        "view"=>"edit",
                        "list_cate"=>$list_category,
                        "single"=>$singleproduct
                    ]);
                }
                else{
                    $this->product->EditProduct($_GET['edit'],$_POST['name_update'],$_POST['category_update'],$_FILES['image_update']['name']);
                    $file = $_FILES['image_update']['name'];
                    move_uploaded_file($_FILES['image_update']['tmp_name'],"uploads/".$file."");
                    header ('Location:'.BASE_URL);
                }
            }
            else{
                header ('Location:'.BASE_URL);
            }
        }
        else{
            header ('Location:'.BASE_URL);
        }
    }

    function DetailProduct(){
        if (isset($_GET['detail'])){
            if (is_numeric($_GET['detail'])&&$_GET['detail']>0){
                $singleproduct = $this->product->LoadSingleProduct($_GET['detail']);
                $this->view("masterview",[
                    "view"=>"detail",
                    "single"=>$singleproduct
                ]);
            }
            else{
                header ('Location:'.BASE_URL);
            }
        }
        else{
            header ('Location:'.BASE_URL);
        }
       
    }

    function ProductCopy(){
        if (isset($_GET['copy'])){
            if (is_numeric($_GET['copy'])&&$_GET['copy']>0){
                $singleproduct = $this->product->LoadSingleProduct($_GET['copy']);
                $this->product->AddProduct($singleproduct[0]['TENSP'],$singleproduct[0]['IDDANHMUC'],$singleproduct[0]['HINHANH']);
            }
        }
        header ('Location:'.BASE_URL);
        
    }
}
?>
