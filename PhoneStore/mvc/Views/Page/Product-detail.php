



<link rel="stylesheet" href="<?= $a ?>/mvc/Views/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?=$a?>/mvc/Views/assets/css/product-detail.css">
    <link rel="stylesheet" href="<?=$a?>/mvc/Views/assets/css/app.css">

    <main role="main">
        <!-- Block content - Punch a hole in the general layout interface, name it `content` -->
        <div class="container mt-4">
            <div id="thongbao" class="alert alert-danger d-none face" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
          
            <div class="card">
                <div class="container-fliud">
                <?php
            //if(isset($_GET['product_id']))){
              // $id=$_GET['product_id'];
            //$sql = 'Select * from products where product_id='.$id;
            //$resultset = mysqli_query($conn, $sql);
            //$row=mysqli_fetch_row($resultset);
           
                while ($row = mysqli_fetch_row($data["result"])) {

            ?>
                    <form name="frmsanphamchitiet" id="frmsanphamchitiet" action="Cart&action=add" method="post">
                 
                        <input type="hidden" name="sp_ma" id="sp_ma" value="5">
                        <input type="hidden" name="sp_ten" id="sp_ten" value="<?=$row[1]?>">
                       <!--- <input type="hidden" name="sp_gia" id="sp_gia" value="">-->
                        <input type="hidden" name="hinhdaidien" id="hinhdaidien" value="samsung-galaxy-tab-10.jpg">

                        <div class="wrapper row">
                            <div class="preview col-md-6">
                                <div class="tab-content">
                                  
                                    <div class="tab-pane active" id="pic-3">
                                        <img src="<?=$a?>/mvc/Views/assets/images/product/<?=$row[6]?>" >
                                    </div>
                                </div>
                                <!---
                                <ul class="preview-thumbnail nav-tabs">
                                    <li class="active">
                                        <a data-target="#pic-1" data-toggle="tab" class="">
                                            <img src="../assets/img/product/samsung-galaxy-tab-10.jpg">
                                        </a>
                                    </li>
                                    <li class="">
                                        <a data-target="#pic-2" data-toggle="tab" class="">
                                            <img src="../assets/img/product/samsung-galaxy-tab.jpg">
                                        </a>
                                    </li>
                                    <li class="">
                                        <a data-target="#pic-3" data-toggle="tab" class="active">
                                            <img src="../assets/img/product/samsung-galaxy-tab-4.jpg">
                                        </a>
                                    </li>
                                </ul>--->
                            </div>
                            <div class="details col-md-6">
                                <h3 class="product-title"><?=$row[1]?></h3>
                                <div class="rating">
                                    <div class="stars">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <span class="review-no">999 reviews</span>
                                </div>
                                <p class="product-description"> 10.1 inch multi-touch screen</p>
                                <!--<small class="text-muted">Old price: <s><span>10,990,000.00 VND</span></s></small>-->
                                <h4 class="price">Current price: <span><?php echo number_format($row[5],0,',')?> VND</span></h4>
                                <p class="vote"><strong>100%</strong> goods <strong>Quality</strong>, guaranteed
                                    <strong>Ugh
                                        credit</strong>!</p>
                                <h5 class="sizes">sizes:
                                    <span class="size" data-toggle="tooltip" title="Small size">s</span>
                                    <span class="size" data-toggle="tooltip" title="Medium size">m</span>
                                    <span class="size" data-toggle="tooltip" title="Large size">l</span>
                                    <span class="size" data-toggle="tooltip" title="large size">xl</span>
                                </h5>
                                <h5 class="colors">colors:
                                    <span class="color orange not-available" data-toggle="tooltip"
                                        title="Out of stock"></span>
                                    <span class="color green"></span>
                                    <span class="color blue"></span>
                                </h5>
                                <h5 class="colors">Amount
                                    <input type="number" value="1" min="0 class="form-control" id="soluong" name="quantity[<?=$row[0]?>]" style="width: 100px;" >
                                </h5>
                                 
                                <div class="action">
                                    <button class="add-to-cart btn btn-default" id="btnThemVaoGioHang" name="add-to-cart" >Add to cart</button>
                                    <button class="like btn btn-default"><span class="fa fa-heart"></span></button>
                                </div>
                                
                            </div>

                        </div>
                    </form>
                </div>
            </div>
           
            <div class="card">
                <div class="container-fluid">
                    <h3>Product Details</h3>
                
                    <div class="row">
                        <div class="col">
                           <?=$row[7]?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <?php
            } ?>
        <!-- End block content -->
    </main>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popperjs/popper.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom script - Js files written by myself -->
    <script src="../assets/js/app.js"></script>