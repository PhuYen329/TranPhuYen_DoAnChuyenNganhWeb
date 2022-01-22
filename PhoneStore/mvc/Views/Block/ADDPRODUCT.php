<?php
include("mvc/Views/include/config.php");
$sql = "SELECT * from brands";
$q=mysqli_query($conn,$sql);
if(isset($_POST['sbm'])){
   
        $PRD=$_POST['prd_name']; 
        
        $image=$_FILES['image']['name'];
        $image_tmp=$_FILES['image']['tmp_name'];
        $price=$_POST['quantity'];
        $quantity=$_POST['price'];
        $decription=$_POST['decription'];
        $brand_id=$_POST['brand_id'];
        $sql="INSERT INTO `products` (`product_id`, `product_name`, `brand_id`, `category_id`, `price`, `image`, `Decription`, `status`, `quantity`) 
        VALUES (NULL, '".$PRD."', '".$brand_id."', NULL, '".$quantity."', '".$image."', '".$decription."', '', '".$price."');";
        $QUERY=mysqli_query($conn,$sql);
      //  echo $a."/mvc/Views/assets/images/product/".$image." ====";exit;
        move_uploaded_file($image_tmp, ROOT."/assets/images/product/".$image);
        //header("location:".$a."/Admin/ProductManager");
        echo "<script type='text/javascript'>alert('Bạn đã thêm mới 1 sản phẩm');window.location.href = '".$a."/Admin/ProductManager';</script>";
  
  
}
?>

<script src='<?=$a?>/mvc/Views/ckeditor/ckeditor.js'></script>
<!-- offcanvas -->
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        <span><i class="bi bi-table me-2"></i></span> ADD PRODUCT
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                     
                            <form method="post" enctype="multipart/form-data">
                            
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Name</label>
                                    <input type="text" name="prd_name" class="form-control" require id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Image</label>
                                    <input type="file" name="image"  require id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Price</label>
                                    <input type="number" name="price" class="form-control" min="0" require id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Quantity</label>
                                    <input type="number" class="form-control" require id="soluong" min="0" name="quantity">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Decription</label>
                                    <textarea class="form-control"   name="decription" id="content"></textarea>
                                    
                                    <script type="text/javascript">CKEDITOR.replace( 'content'); </script>
                                  
                                </div>
                                <div class="mb-3 form-group">
                                    <label  class="form-label">Brand</label>
                                    <select class="form-control" require name="brand_id" aria-label="Default select example" >
                                    <?php while($row=mysqli_fetch_assoc($q)){?>
                                    <option value="<?=$row['brand_id']?>"><?=$row['brand_name']?></option>
                                    <?php
                                 
                                    }
                                    ?>    
                                    </select>
                                </div>

                                <button type="submit" name="sbm" class="btn btn-success">Submit</button>
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
