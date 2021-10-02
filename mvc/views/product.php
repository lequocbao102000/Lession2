<?php
$products=[];
$products = $data["list_pro"];
$totalresult = $data["result"];
$products1page = 10;
$totalpages = ceil($totalresult/$products1page);
$minpage = 1;
$maxpage = $totalpages;
if (isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page']>0)
  {
     $active = $_GET['page'];
  }
else{
    $active = 1;
  }

?>

<form action="?page=1" method="post">
    <input style="width:95%" type="text" name="search" id="txtsearch"  placeholder="Search">
    <button  type="submit" name="btnsearch"><i class="fa fa-search" aria-hidden="true"></i></button>
</form>
<div class="row" style="margin-top:10px">
  <div class="col-md-4">Search found <b><?php echo $totalresult;?></b> results</div>
  <div class="col-md-4"></div>
  <div class="col-md-4 col-md-offset-4 ml-auto">
    <a href="<?php echo BASE_URL;?>/Product/AddProduct/">
        <i class="fa fa-plus-circle fa-2x" style="color:blue;"></i>
    </a>  
  </div>
</div>



<table class="table table-bordered" id="tableproduct">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product name</th>
      <th scope="col">Category</th>
      <th scope="col">Image</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody class="list">
      <?php
        
        for ($i=0;$i<count($products);$i++){
            echo '<tr>
            <td>'.$products[$i]['IDSP'].'</td>
            <td>'.$products[$i]['TENSP'].'</td>
            <td>'.$products[$i]['TENDANHMUC'].'</td>
            <td><img src="'.BASE_URL.'/uploads/'.$products[$i]['HINHANH'].'" style="width:100px"></td>
            <td>
            <a href="'.BASE_URL.'/Product/EditProduct?edit='.$products[$i]['IDSP'].'">
            <i class="fa fa-edit fa-lg editbtn" style="color:blue;cursor: pointer;"></i>
            <a href="'.BASE_URL.'/Product/DelProduct?id='.$products[$i]['IDSP'].'">
            <i class="fa fa-minus-circle fa-lg" style="color:blue;cursor: pointer;"></i>
            </a>
            <a href="'.BASE_URL.'/Product/ProductCopy?copy='.$products[$i]['IDSP'].'">
            <i class="fa fa-copy fa-lg " style="color:blue;cursor: pointer;"></i>
            </a>
            <a href="'.BASE_URL.'/Product/DetailProduct?detail='.$products[$i]['IDSP'].'">
            <i class="fa fa-eye fa-lg " style="color:blue;cursor: pointer;"></i>
            </a>
            </td>
          </tr>';
        }
      ?>
    
  </tbody>
</table>
<div style="margin:auto; width:25%" >
  <nav>
    <ul class="pagination" style=" text-align:center;">
       <?php
       if ($active > $minpage){
         $previos = $active-1;
         echo '<li class="page-item"><a class="page-link" href="'.BASE_URL.'/Product?page='.$previos.'">Previous</a></li>';
       }
       else{
         echo '<li class="page-item"><a class="page-link" href="'.BASE_URL.'/Product?page='.$minpage.'">Previous</a></li>';
       }
      
      for ($page=1;$page<=$totalpages;$page++){
        if ($page == $active){
          echo '<li class="page-item active"><a class="page-link" href="'.BASE_URL.'/Product?page='.$page.'">'.$page.'</a></li>';
        }
        else{
          echo '<li class="page-item"><a class="page-link" href="'.BASE_URL.'/Product?page='.$page.'">'.$page.'</a></li>';
        }
        
      }

      if ($active < $maxpage){
        $next = $active+1;
        echo '<li class="page-item"><a class="page-link" href="'.BASE_URL.'/Product?page='.$next.'">Next</a></li>';
      }
      else{
        echo '<li class="page-item"><a class="page-link" href="'.BASE_URL.'/Product?page='.$maxpage.'">Next</a></li>';
      }
      ?>
      
    </ul>
  </nav>
</div>
 

