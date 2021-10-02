<?php
$detail=[];
$detail = $data["single"];
?>
<div>
      <h5>Product Details (ID: <?php echo $detail[0]['IDSP'];?>)</h5>
      <div>
             <div  class="panel panel-body">
                    <div class="form-group" style="margin-top:10px">
                        <label>Product name</label>
                        <input  required="true" type="text" class="form-control" value="<?php echo $detail[0]['TENSP']; ?>" readonly="true">
                    </div>

                    <div class="form-group" style="margin-top:10px">
                        <label>Category</label></br>
                        <input  required="true" type="text" class="form-control" value="<?php echo $detail[0]['TENDANHMUC']; ?>" readonly="true">
                        
                    </div>
                
                    <div class="form-group" style="margin-top:10px">
                        <label>Product Image</label>
                        <br>
                        <img src="<?php echo BASE_URL;?>/uploads/<?php echo $detail[0]['HINHANH'];?>" style="width:400px">
                    </div>
                    
                    
            </div>
    </div>
      
      
</div>
  