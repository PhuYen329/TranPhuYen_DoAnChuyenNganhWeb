
<div id="carouselExampleIndicators" class="carousel slide wow slideInDown" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?=$a?>/mvc/Views/assets/images/bg/crumbs-bg.jpg" width="500px" height="400px" alt="First slide"/>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?=$a?>/mvc/Views/assets/images/case/img4.jpg"  width="500px" height="400px" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?=$a?>/mvc/Views/assets/images/bg/counter-bg.jpg"  width="500px" height="400px" alt="Second slide">
        </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5 ">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categories of The Month</h1>
                <p></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3 ">
                <a href="#"><img src="http://cf.shopee.vn/file/5ca4ba79be28050213b8f8f9b7d4de95" class="rounded-circle img-fluid border animate zoomInLeft wow" ></a>
                <h5 class="text-center mt-3 mb-3">VSMART ACTIVE 3</h5>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="http://product.hstatic.net/1000267672/product/6_01_373c43ce13e34eadbfebbb4cced853d1_grande.jpg" class="rounded-circle img-fluid border animate rotateIn wow"></a>
                <h2 class="h5 text-center mt-3 mb-3">IPHONE 6 FOXCOM</h2>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="https://saigoncomputer.vn/uploads/product/1_ASUS_K55.JPG" class="rounded-circle img-fluid border animate zoomInRight wow"></a>
                <h2 class="h5 text-center mt-3 mb-3">PIN ASSUS K55</h2>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->
   
    <div class="danhsachsanpham py-5 bg-light ">
    <div class="col-lg-6 m-auto" style="text-align: center;">
                <h1 class="h1">Product</h1>
                <p></p>
            </div>
        <div class="container">
            <div class="row">
                 <?php
                     while ($row = mysqli_fetch_array($data["GT"])) {
                    ?>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="product-detail.html">
                            <img class="bd-placeholder-img card-img-top"  style="height: 450px;" src="<?=$a?>/mvc/Views/assets/images/GT/<?=$row['image']?>">
                        </a>
                        <div class="card-body">
                            <a href="product-detail.html">
                                <h5><?=$row['Pro_name']?></h5>
                            </a>
                            
                            <p class="card-text"></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a class="btn btn-sm btn-outline-secondary" href="product-detail.html">View
                                        details</a>
                                </div>
                                <small class="text-muted text-right">
                                    <s>12,600,000.00</s>
                                    <b>12,000,000.00 VND</b>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                     <?php }?>

            </div>

        </div>
    </div>

    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Featured Product</h1>
                    <p>
                        
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4 animate fadeIn wow "data-wow-delay="0.5s">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="https://cdn.tgdd.vn/Products/Images/3885/92042/gay-chup-anh-bluetooth-cosano-hd-p7-ava-600x600.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$240.00</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark"> Product information</a>
                            <p class="card-text">
                          
Cosano HD-P7 Bluetooth photography stick helps to connect the phone by bluetooth to take pictures, with only half an hour of charging for more than 20 hours of use.
The photography stick has a large size, meticulous design, beautiful colors            </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4 animate fadeIn wow "data-wow-delay="0.5s">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="https://product.hstatic.net/1000379731/product/sps005-red_1557483087_dbccac576e074bf79d175bb529635167_master.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$480.00</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Frek </a>
                            <p class="card-text">
                            Small but powerful- Ultra-compact design, but with high performance DSP chip, the volume can be extremely clear and high (up to 3W) The whole...       
                            <p class="text-muted">Reviews (48)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4 animate fadeIn wow "data-wow-delay="0.5s">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="https://cf.shopee.vn/file/3fc85f1d305dc7f62a8372786ef1f9b8" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$360.00</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Pin Vmart</a>
                            <p class="card-text">
                            393 / 5.000
Kết quả dịch
Batteries for Vsmart Bee 3 BVSM-230 with a stable voltage help your work to operate smoothly without interruption.

In the process of long-term use, watching movies, playing games will lead to a situation where the battery is bottle, swollen or damaged, you will immediately think of buying yourself a new battery to replace. Come to us for peace of mind about the quality of the battery without having to worry about any obstacles.        <p class="text-muted">Reviews (74)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Featured Product -->