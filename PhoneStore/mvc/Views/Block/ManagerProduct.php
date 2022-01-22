<?php
include("mvc/Views/include/config.php");
$sql = "SELECT * from products c JOIN brands o on c.brand_id=o.brand_id 
        ORDER BY c.brand_id DESC;";
$q = mysqli_query($conn, $sql);


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

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case "Delete":
            if (isset($_GET['id'])) {
                $sql="DELETE FROM `products` WHERE `products`.`product_id`=".$_GET['id'];
                $query =mysqli_query($conn,$sql);
                 echo "<script type='text/javascript'>window.location.href = '".$a."/Admin/ProductManager';</script>";
            }
            // case "Update":
            //     if (isset($_GET['id'])) {
            //         $sql="DELETE FROM `products` WHERE `products`.`product_id`=".$_GET['id'];
            //         $query =mysqli_query($conn,$sql);
            //          echo "<script type='text/javascript'>window.location.href = '".$a."/Admin/ProductManager';</script>";
            //     }
          
}
}
       
?>

<!-- offcanvas -->
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        <span><i class="bi bi-table me-2"></i></span> Manager Product
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Brand</th>
                                        <th>Amount</th>
                                        <th>Price</th>
                                        <th>Description</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;

                                    while ($row = mysqli_fetch_assoc($q)) {

                                    ?>

                                        <tr>
                                            
                                                <td data-label="#"><?= $i++ ?> </td>
                                                <td data-label="Image"><img src="<?= $a ?>/mvc/Views/assets/images/product/<?= $row['image'] ?>" style="width: 70px;"></td>
                                                <td data-label="Product Name"><?= $row['product_name'] ?></td>
                                                <td data-label="Brand"><?= $row['brand_name'] ?></td>
                                                <td data-label="Amount"><?= $row['quantity'] ?></td>
                                                <td data-label="Price"><?= $row['price'] ?></td>
                                                <td data-label="Price"><?= word_cut($row['Decription'], 15) ?></td>
                                                <td data-label="UPDATE"> <a href="<?=$a?>/Admin/UpdateProduct&action=Update&id=<?=$row['product_id']?>" 
                                                class="btn btn-warning">
                                                UPDATE</a></td>
                                                <td data-label="DELETE"> <a onclick="return del('<?=$row['product_name']?>')" href="ProductManager&action=Delete&id=<?=$row['product_id']?>" class="btn btn-danger">DELETE</a></td>
                                            
                                        </tr>
                                    <?php } ?>
                                    <tr>
                                        <a class="btn btn-primary" href="<?= $a ?>/Admin/AddProduct">ADD NEW PRODUCTS</a>
                                        
                                         
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<Script>
    function del( name){
        return confirm("Bạm chắc chắn muốn xóa: "+name+"?");
    }
</Script>