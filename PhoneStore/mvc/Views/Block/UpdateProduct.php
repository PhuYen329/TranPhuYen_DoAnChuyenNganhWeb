<?php
include("mvc/Views/include/config.php");
$sql_brand = "SELECT * from brands";
$q = mysqli_query($conn, $sql_brand);


if (isset($_GET['id'])) {
    $sql = "SELECT * FROM `products` WHERE `product_id` =" . $_GET['id'];
    $QUERY_UP = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($QUERY_UP);
}
function word_cut(string $string, int $word): string
{
    $split = explode(' ', $string);
    $word_count = count($split);

    // Neu so tu cho phep nho hon thuc te
    if ($word < $word_count) {
        $output = array_slice($split, 0, $word);
        $output = implode(' ', $output);
        $output .= '...';
    } else {
        $output = implode(' ', $split);
    }

    return $output;
}
if (isset($_POST['sbm'])) {


    $PRD = $_POST["prd_name" ];
    // if ($_FILES['image']['name']==" ") {
    //     $image_tmp = $row['image'];
    // } else {
    //     $image_tmp = $row['image'];
    // }
    $image=$_FILES['image']['name'];
    $image_tmp=$_FILES['image']['tmp_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $decription = $_POST['decription'];
    $brand_id = $_POST['brand_id'];
    $sql="UPDATE `products` SET  `product_name`='".$PRD."', 
    `brand_id`='".$brand_id."', `price`='".$price."', `image`='".$image."', 
    `Decription`='".$decription."', `quantity`='".$quantity."' where product_id='".$_GET['id']."'" ;
  //var_dump($sql);
    $QUERY=mysqli_query($conn,$sql);
      //echo $a."/mvc/Views/assets/images/product/".$image;exit;
    //header("location:".$a."/Admin/ProductManager");
    move_uploaded_file($image_tmp, ROOT."/assets/images/product/".$image);
    echo "<script type='text/javascript'>alert('Bạn đã cập nhật 1 sản phẩm');window.location.href = '" . $a . "/Admin/ProductManager';</script>";
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
                        <span><i class="bi bi-table me-2"></i></span> UPDATE PRODUCT
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <form method="post" enctype="multipart/form-data">

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Name</label>
                                    <input type="text" name="prd_name" class="form-control" value="<?= $row['product_name'] ?>" require id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Image</label>
                                    <input type="file" name="image" require id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Price</label>
                                    <input type="number" name="price" class="form-control" min="0" value="<?= $row['price'] ?>" require id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Quantity</label>
                                    <input type="number" class="form-control" require id="soluong" value="<?= $row['quantity'] ?>" min="0" name="quantity">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Decription</label>
                                    <textarea class="form-control"   name="decription" id="content"></textarea>
                                    
                                    <script type="text/javascript">CKEDITOR.replace( 'content'); </script>
                                  
                                </div>
                                <div class="mb-3 form-group">
                                    <label class="form-label">Brand</label>
                                    <select class="form-control" require name="brand_id" aria-label="Default select example">
                                        <?php while ($row = mysqli_fetch_assoc($q)) { ?>
                                            <option value="<?= $row['brand_id'] ?>"><?= $row['brand_name'] ?></option>
                                        <?php

                                        }
                                        ?>
                                    </select>
                                </div>

                                <button type="submit" name="sbm" class="btn btn-success">UPDATE</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>