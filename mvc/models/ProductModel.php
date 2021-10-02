<?php
class ProductModel extends DB{
   
    function LoadProduct($search,$from){ //Load san pham theo trang
        $query ="select tblsanpham.*,tbldanhmuc.TENDANHMUC FROM tblsanpham INNER JOIN tbldanhmuc on tblsanpham.IDDANHMUC=tbldanhmuc.IDDANHMUC
        WHERE tbldanhmuc.TENDANHMUC LIKE '%".$search."%' or tblsanpham.TENSP like '%".$search."%' limit ".$from.",10 ";
            $rows= mysqli_query($this->connect, $query);
             $data = [];
             while ($row = mysqli_fetch_array($rows)){
                 $data[]=$row;
             }
             return $data;
    }

    function CountResult($search){ //dem so san pham tim duoc
        $query ="select tblsanpham.*,tbldanhmuc.TENDANHMUC FROM tblsanpham INNER JOIN tbldanhmuc on tblsanpham.IDDANHMUC=tbldanhmuc.IDDANHMUC
        WHERE tbldanhmuc.TENDANHMUC LIKE '%".$search."%' or tblsanpham.TENSP like '%".$search."%'";
            $rows= mysqli_query($this->connect, $query);
             $data = [];
             while ($row = mysqli_fetch_array($rows)){
                 $data[]=$row;
             }
             return count($data);
    }

    function LoadCategory(){ //Lay tat ca danh muc
        $query = 'select * from tbldanhmuc';
            $rows= mysqli_query($this->connect, $query);
             $data = [];
             while ($row = mysqli_fetch_array($rows)){
                 $data[]=$row;
             }
             return $data;
    }

    function AddProduct($name,$category,$image){ //Them san pham
        $query = "insert into tblsanpham (TENSP,IDDANHMUC,HINHANH) values ('$name',$category,'$image')";
        $result = false;
        if (mysqli_query($this->connect, $query)){
            $result =true;
        }
        return $result;
    }

    function DeleteProduct($id){ //Xoa san pham
        $query = "delete from tblsanpham where IDSP=".$id."";
        $result = false;
        if (mysqli_query($this->connect, $query)){
            $result =true;
        }
        return $result;
    }

    function LoadSingleProduct($id){ //Lay 1 san phan
        $query = 'select tblsanpham.*,tbldanhmuc.TENDANHMUC FROM tblsanpham INNER JOIN tbldanhmuc on tblsanpham.IDDANHMUC=tbldanhmuc.IDDANHMUC where IDSP='.$id.'';
            $rows= mysqli_query($this->connect, $query);
             $data = [];
             while ($row = mysqli_fetch_array($rows)){
                 $data[]=$row;
             }
             return $data;
    }

    function EditProduct($id,$name,$id_cate,$image){ // Update san pham
        if (empty($image)){
            $query = 'update tblsanpham set TENSP="'.$name.'",IDDANHMUC='.$id_cate.' where IDSP='.$id.'';
        }
        else{
            $query = 'update tblsanpham set TENSP="'.$name.'",IDDANHMUC='.$id_cate.',HINHANH="'.$image.'" where IDSP='.$id.'';
        }
        
        $result = false;
        if (mysqli_query($this->connect, $query)){
            $result =true;
        }
        return $result;
    }
}
?>