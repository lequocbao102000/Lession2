<?php
$categories=[];
$categories = $data["list_cate"];

$product=[];
$product = $data["single"];
?>

      <h5>Edit Product ID: <?php echo $_GET['edit'];?></h5>
      <form method="POST" action="" enctype="multipart/form-data">
      <div class="modal-body">
      <div>
             <div  class="panel panel-body">
                    <div class="form-group" style="margin-top:10px">
                        <label>Product name</label>
                        <input  required="true" type="text" class="form-control"  name="name_update" value="<?php echo $product[0]['TENSP'];?>">
                    </div>

                    <div class="form-group" style="margin-top:10px">
                        <label>Category</label></br>
                        <select style="width:100%" class="form-select" name="category_update">
                            <?php
                            for ($i=0;$i<count($categories);$i++){
                                if ($product[0]['IDDANHMUC']==$categories[$i]['IDDANHMUC']){
                                    echo '<option selected value="'.$categories[$i]['IDDANHMUC'].'">'.$categories[$i]['TENDANHMUC'].'</option>';	
                                }
                                else{
                                    echo '<option value="'.$categories[$i]['IDDANHMUC'].'">'.$categories[$i]['TENDANHMUC'].'</option>';	
                                }
                                
                            }
                            ?>
                           
                       </select>
                        
                    </div>
                
                    <div class="form-group" style="margin-top:10px">
                        <label>Product Image</label>
                        <input  type="file" class="form-control" name="image_update" >
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit_update">Submit</button>
                    
            </div>
    </div>
      </div>
      </form>
