<?php
include("mvc/Views/include/config.php");
include("mvc/Views/Page/sendMail.php");

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$sucess = false;
$err = false;
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case "add":
            //var_dump($_POST);exit;
            foreach ($_POST['quantity'] as $id => $quantity) {
                $_SESSION['cart'][$id] = $quantity;
            }
            echo "<script>window.location.href = '" . $a . "/Home/Cart';</script>";
            break;
        case "delete":
            if (isset($_GET['id'])) {
                unset($_SESSION['cart'][$_GET['id']]);
                unset($_SESSION['SumMoney']);
                
            }
             echo "<script type='text/javascript'>window.location.href = '".$a."/Home/Cart';</script>";
            break;
        case "submit":
            if (isset($_POST['btn_Update'])) {
                foreach ($_POST['quantity'] as $id => $quantity) {
                    if ($quantity == 0) {
                        unset($_SESSION['cart'][$id]);
                    } else {
                        if (false) {
                            $_SESSION['cart'][$id] += $quantity;
                        } else {
                            $_SESSION['cart'][$id] = $quantity;
                        }
                    }
                }
               // echo "<script type='text/javascript'>alert('Bạn đã cập nhật thành công');window.location.href = '" . $a . "/Home/Cart';</script>";
            } else if (isset($_POST['btn_order'])) {

                if (empty($_POST['email'])) {
                    $err = "Bạn chưa nhập thông tin email";
                } else if (empty($_POST['phone'])) {
                    $err = "Bạn chưa nhập thông tin phone";
                } else if (empty($_POST['name'])) {
                    $err = "Bạn chưa nhập thông tin name";
                } else if (empty($_POST['address1'])) {
                    $err = "Bạn chưa nhập thông tin address";
                } else if (empty($_POST['note'])) {
                    $err = "Bạn chưa nhập thông tin note";
                } else if (empty($_POST['quantity'])) {
                    $err = "Giỏ hàng rỗng";
                }
                if ($err == false && !empty($_POST['quantity'])) {
                    $sql = "SELECT * FROM products WHERE product_id IN (" . implode(",", array_keys($_POST['quantity'])) . ")";
                   $products = mysqli_query($conn, $sql);
                    $total = 0;
                    $OrderProduct = array();
                    while ($row = mysqli_fetch_array($products)) {
                        $OrderProduct[] = $row;
                        $total += $row['price'] * $_POST['quantity'][$row['product_id']];
                    }
                    $SQL_CUS="SELECT * FROM `customer` WHERE `Username` LIKE '".$_SESSION['Username']."'";
                    $SQL_QUERYCUS=mysqli_query($conn,$SQL_CUS);
                    $cus=mysqli_fetch_row($SQL_QUERYCUS);
                    $sql1 = "INSERT INTO `orders` (`order_id`, `customer_id`, `name`, `phone`, `address`, `note`, `total`, `order_status`, `order_date`, `required_date`, `shipped_date`, `store_id`, `staff_id`) 
                            VALUES ('null', '".$cus[0]."', '" . $_POST['name'] . "', '" . $_POST['phone'] . "', '" . $_POST['address1'] . "', '" . $_POST['note'] . "', '" . $total . "', '1', " . time() . ", '" . time() . "', " . time() . ", NULL, NULL) ";
                    $InsertOrder = mysqli_query($conn, $sql1);
                    $orderID = $conn->insert_id;
                    $InserString = "";
                    foreach ($OrderProduct as $key => $products) {
                        $InserString .= "(NULL, '" . $orderID . "','" . $products['product_id'] . "','" . $_POST['quantity'][$products['product_id']] . "','" . $products['price'] . "')";
                        if ($key != count($OrderProduct) - 1) {
                            $InserString .= ",";
                        }
                    }
                    
                    
                    $sql2 = "INSERT INTO `order_items` (`items_id`, `order_id`, `product_id`, `quantity`, `price`) 
                    VALUES " . $InserString . ";";
                    $InsertOrderItem = mysqli_query($conn, $sql2);
                    $sucess = "Order Success";
                    
                    $mail=new Mailer();
                    $title="Order Success";
                    $name=$_POST['name'];
                    $email=$_POST['email'];
                    $a=$_POST['address1'];
                    $p=$_POST['phone'];
                    if (empty($_SESSION['cart'])){
                        $err="Bạn chưa đặt hàng";
                    }else{
                    foreach($_SESSION['cart'] as $keys=>$values){
                        $TTSP='SELECT * FROM products where product_id='.$keys.'';
                        $query1=mysqli_query($conn,$TTSP);
                        $SP=mysqli_fetch_row($query1); 
                        $note='
                        <p> Orders ID:'.$orderID.'</p>;
                        <h4>  Đơn Đặt Hàng Bao Gồm</h4>;
                        <table style="border-style: solid ;  border-color: green;margin-bottom: 20px; color:red">
                        <thead>
                                <tr>
                                    
                                    <th>Product Id</th>
                                    <th>Product Name</th>
                                    
                                </tr>
                            </thead>
                        <tbody>
                        <tr>
                            <td>'.$SP[0].'</td>
                            <td>'.$SP[1].'</td>
                        </tr>
                        </tbody>
                    </table>';
                       
                    }
                    $_SESSION['Order_id']=$orderID;
                   //var_dump($SP);
                 
                    $mail->dathang($name,$email,$note,$title);}

                    unset($_SESSION['cart']);
                    
                }
            }
            break;
    }
}

if (!empty($_SESSION['cart'])) {
    //var_dump();exit;
  $sql = "SELECT * FROM products WHERE product_id IN (" . implode(",", array_keys($_SESSION['cart'])) . ") ";
    //$sql = "SELECT * FROM products WHERE product_id IN ".$_SESSION['cart'];
    $product = mysqli_query($conn, $sql);
    // var_dump($query);
}


?>
<link rel="stylesheet" href="<?= $a ?>/mvc/Views/assets/css/Reponsive.css">
<link rel="stylesheet" href="<?= $a ?>/mvc/Views/assets/css/reponsiveFroms.css">

<!-- end header -->

<?php
if (!empty($err)) {
?>
    <div style="border-style: solid ;  border-color: green;margin-bottom: 20px; color:red">
        <h1>Note:<?= $err ?>.<a href="javascript:history.back()">
                <h1>Go Back</h1>
            </a></h1>
    </div>
<?php } else if (!empty($sucess)) { ?>
    <div style="border-style: solid ;  border-color: green;margin-bottom: 20px; color:red">
        <h1><?= $sucess ?>.<a href="<?= $a ?>/Home/Shop">
                <h1>keep buying</h1>
            </a></h1>
    </div>
<?php } else { ?>

    <form action="<?= $a ?>/Home/Cart&action=submit" method="post" style="margin-left: 100px; margin-bottom: 50px; ">
        <main role="main">
            <!-- Block content - Punch a hole in the general layout interface, name it `content` -->
            <div class="container mt-4">
                <div id="thongbao" class="alert alert-danger d-none face" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <h1 class="text-center">Product In Cart</h1>
                <div class="row">


                    <div class="col col-md-12">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Available photo</th>
                                    <th>Product Name</th>
                                    <th>Amount</th>
                                    <th>Unit price</th>
                                    <th>To money</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="datarow">
                                <?php
                            
                                if (!empty($product)) {
                                    $num = 1;
                                    $sum = 0;
                                    while ($row = mysqli_fetch_array($product)) {
                                      
                                ?>
                                        <tr>
                                            <td data-label="STT"><?= $num++ ?></td>
                                            <td data-label="Available photo">
                                                <img src="<?= $a ?>/mvc/Views/assets/images/product/<?= $row['image'] ?>" width="100px" class="hinhdaidien">
                                            </td>
                                            <td data-label="Product Name"><?= $row['product_name'] ?></td>
                                            <td data-label="Amount"> <input type="number" class="form-control" id="soluong" min="0" name="quantity[<?= $row['product_id'] ?>]" size="5px" value="<?= $_SESSION['cart'][$row['product_id']] ?>"></td>
                                            <td class="text-right" data-label="Unit price"><?= number_format($row['price'], 0, ',','.') ?></td>
                                            <td class="text-right" data-label="To money"><?= number_format($row['price'] * $_SESSION['cart'][$row['product_id']], 0, ',','.') ?></td>

                                            <td data-label="Action">
                                                <a href="Cart&action=delete&id=<?= $row['product_id'] ?>" id="delete_3" data-sp-ma="4" class="btn btn btn-outline-danger">
                                                    <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                                </a>


                                                <!-- Delete button, click will delete information based on primary key `sp_ma` -->

                                            </td>
                                        </tr>

                                    <?php
                                        $sum +=  $row['price'] * $_SESSION['cart'][$row['product_id']];
                                        
                                        $_SESSION['SumMoney']=$sum;
    
                                     
                                    } ?>
                                    <tr>
                                        <td colspan="4" data-label="">Sum Money</td>
                                        <td colspan="3" data-label="Sum Money"><?= number_format($sum, 0, ',') ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>

                        <!-- <a href="/Home/Pay" class="btn btn-primary btn-md">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;I want to order
                </a>--->
                    </div>
                </div>
            </div>
            <!-- End block content -->
        </main>
        <a href="<?= $a ?>/Home" class="btn btn-warning btn-md"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Rotate home page</a>
        <button class="btn btn-info btn-md" name="btn_Update" value="Update"><i class="fa fa-refresh" aria-hidden="true"></i>Update</button>
        <hr>
        <h1 style="color:blue;">Thông tin khách hàng</h1>


        <div style="border-style: solid ;padding: 40px 40px 40px; background-color: greenyellow;">
            <div class="form-row col-md-10" style="margin-top: 50px; ">
                <div class="form-group col-md-6 inputfield">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" require name="email" placeholder="Email">
                </div>
                <div class="form-group col-md-4 inputfield">
                    <label for="inputPassword4">Phone</label>
                    <input type="password" class="form-control" id="inputPassword4" require name="phone" placeholder="Phone">
                </div>
            </div>
            <div class="form-group inputfield col-md-10">
                <label for="inputAddress">Name</label>
                <input type="text" class="form-control" id="inputAddress" require name="name" placeholder=" Name">
            </div>
            <div class="form-group inputfield col-md-10">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" require name="address1" placeholder="1234 Main St">
            </div>
            <div class="form-group inputfield col-md-10">
                <label for="inputAddress2">Note</label>
                <input type="text" class="form-control" id="inputAddress2" name="note" placeholder="Apartment, studio, or floor">
            </div>

            <button type="submit" class="btn btn-primary" value="I want to order" name="btn_order">I want to order</button>
          
           
        </div>
        </form>
      
        <Form method="post" action="./vnpay" style="margin-left: 100px; margin-bottom: 50px;">
        <h1 style="color:blue;">Thanh toán bằng VNPAY</h1>
            <button type="submit" class="btn btn-primary" value="I want to order" name="redirect">Pay By VNPAY</button>
         </Form>
         <Form method="post" action="./momo" style="margin-left: 100px; margin-bottom: 50px;">
        <h1 style="color:blue;">Thanh toán bằng MOMO</h1>
            <button type="submit" class="btn btn-primary" value="I want to order" name="redirect">Pay By MOMO</button>
         </Form>


<?php }

?>

<!-- footer
    <footer class="footer mt-auto py-3">
        <div class="container">
            <span>Copyright © by <a href="https://nentang.vn">Platform</a> - <script>document.write(new Date().getFullYear());</script>. </span>
            <span class="text-muted">Pluggage to the Future</span>

            <p class="float-right">
                <a href="#">Back to top</a>
            </p>
        </div>
    </footer>
    end footer -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/popperjs/popper.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Custom script - Js files written by myself -->
<!-- <script src="../assets/js/app.js"></script> --> 