<?php
$categories=[];
$categories = $data["list_cate"];
?>
<div>
      <h5>Add New Product</h5>
      <form method="POST" action="<?php echo BASE_URL;?>/Product/AddProduct" enctype="multipart/form-data">
      <div class="modal-body">
      <div>
             <div  class="panel panel-body">
                    <div class="form-group" style="margin-top:10px">
                        <label>Product name</label>
                        <input  required="true" type="text" class="form-control"   name="name_product">
                    </div>

                    <div class="form-group" style="margin-top:10px">
                        <label>Category</label></br>
                        <select style="width:100%" class="form-select" name="category_product">
                            <?php
                            for ($i=0;$i<count($categories);$i++){
                                echo '<option value="'.$categories[$i]['IDDANHMUC'].'">'.$categories[$i]['TENDANHMUC'].'</option>';	
                            }
                            ?>
                           
                        </select>
                        
                    </div>
                
                    <div class="form-group" style="margin-top:10px">
                        <label>Product Image</label>
                        <input required="true" type="file" class="form-control" name="image_product">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit_product">Submit</button>
                    
            </div>
    </div>
      </div>
      </form>
</div>
  