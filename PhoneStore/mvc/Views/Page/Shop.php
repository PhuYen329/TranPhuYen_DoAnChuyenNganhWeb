<?php
if(isset($_GET['item_page'])){
    $cat=$data['PT'];
}
else if(isset($_GET['category_id'])){
    $cat=$data['Cat1'];
}else{
    $cat=$data['Pro'];
}
?>
<div class="row">
            <?php include("Category.php");?>
            
            <div class="col-lg-9">
                <div class="row">
                    <!-- <div class="col-md-6">
                        <ul class="list-inline shop-top-menu pb-3 pt-1">
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">All</a>
                            </li>
                         
                        </ul>
                    </div> -->
                    <!-- <div class="col-md-6 pb-4">
                        <div class="d-flex">
                            <select class="form-control">
                                <option>Featured</option>
                                <option>A to Z</option>
                                <option>Item</option>
                            </select>
                        </div>
                    </div> -->
                </div>
                <form action="Cart&action=add" method="Post">
                <div class="row">
                    <!---Thêm Hình Ảnh vào php--->
                    <?php
                     while ($row = mysqli_fetch_array($cat)) {
                       
                    ?>
                    
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="<?=$a?>/mvc/Views/assets/images/product/<?=$row['image']?>" style="height: 300px;">
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        
                                        <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="<?=$a?>/Home/product_detail&id=<?=$row['product_id']?>" ><i class="far fa-eye"></i></a></li>
                                
                                        <li><a class="btn btn-success text-white mt-2" href="<?=$a?>/Home/Cart&action=addgio&id=<?=$row['product_id']?>"><i class="fas fa-cart-plus"></i></a></li>
                                        
                                        
                                        </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="shop-single.html" class="h3 text-decoration-none"><?=$row['product_name']?></a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li>M/L/X/XL</li>
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>
                                <p class="text-center mb-0"><?=$row['price']?></p>
                            </div>
                        </div>
                    </div>
                     <?php }?>
                    </form>
                    
                </div>
                <div div="row">
                    <ul class="pagination pagination-lg justify-content-end">
                        <?php 
                         $tongTrangSP=mysqli_num_rows($data['Pro']);
                         $item_page=!empty($_GET['item_page'])?$_GET['item_page']:"3";
                         $curent_page=!empty($_GET['page'])?$_GET['page']:"1";
                         $tongTrangShow=ceil($tongTrangSP/$item_page);
                         if($curent_page>2){
                            $first_page=1; 
                            ?>
                              <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark"
                              href="Shop&item_page=<?=$item_page?>&page=<?=$first_page?>">First</a>
                        <?php
                        }
                        if($curent_page>1){
                                $Prev=$curent_page-1;
                         ?>
                         <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark"
                              href="Shop&item_page=<?=$item_page?>&page=<?=$Prev?>">Preview</a>
                         <?php
                         }
                         
                        for($i=1;$i<=$tongTrangShow;$i++){
                         if($i!=$curent_page){
                             if($i>$curent_page-2 && $i<$curent_page+2){
                             ?>
                        <li class="page-item">
                            <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark"
                              href="Shop&item_page=<?=$item_page?>&page=<?=$i?>"><?=$i?></a>
                        </li>
                        <?php
                        }
                        }else{?>
                              <li class="page-item disabled">
                            <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0"
                            style="background-color: black; color:white" href="Shop&Page?item_page=3&page=1" ><?=$i?></a>
                        </li> 
                            <?php
                            }
                        }?>
                         <?php
                        if($curent_page>$tongTrangShow-1){
                            $next_page=$curent_page+1;    
                        ?>
                        <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark"
                              href="Shop&item_page=<?=$item_page?>&page=<?=$next_page?>">Next</a>
                        <?php
                        }
                        ?>
                        <?php
                        if($curent_page>$tongTrangShow-2){
                            $end_page=$tongTrangShow;    
                        ?>
                        <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark"
                              href="Shop&item_page=<?=$item_page?>&page=<?=$end_page?>">Last</a>
                        <?php
                        }
                        ?>
                           <!-- <li class="page-item disabled">
                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0"
                             href="Shop&Page?item_page=3&page=1" tabindex="-1">1</a>
                        </li> 
                        <li class="page-item">
                            <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark"
                             href="Shop&Page?item_page=3&page=2">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark"
                             href="Shop&Page?item_page=3&page=3">3</a>
                        </li> -->
                    </ul>
                </div>
            </div>

        </div>
    
    <!-- End Content -->

 <!-- Start Brands -->
 <section class="bg-light py-5">
        <div class="container my-4">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Our Brands</h1>
                    <p>
                        
                    </p>
                </div>
                <div class="col-lg-9 m-auto tempaltemo-carousel">
                    <div class="row d-flex flex-row">
                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="prev">
                                <i class="text-light fas fa-chevron-left"></i>
                            </a>
                        </div>
                        <!--End Controls-->

                        <!--Carousel Wrapper-->
                        <div class="col">
                            <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="templatemo-slide-brand" data-bs-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">

                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="<?=$a?>/mvc/Views/assets/images/logo/brand_01.webp" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="<?=$a?>/mvc/Views/assets/images/logo/brand_02.jpg" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="<?=$a?>/mvc/Views/assets/images/logo/brand_03.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="<?=$a?>/mvc/Views/assets/images/logo/brand_04.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        
                                    </div>
                                    <!--End Second slide-->

                                    
                                    <!--End Third slide-->

                                </div>
                                <!--End Slides-->
                            </div>
                        </div>
                        <!--End Carousel Wrapper-->

                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="next">
                                <i class="text-light fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Script -->
    <script src="<?= $a ?>/mvc/Views/assets/js/jquery-1.11.0.min.js"></script>
    <script src="<?= $a ?>/mvc/Views/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?= $a ?>/mvc/Views/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $a ?>/mvc/Views/assets/js/templatemo.js"></script>
    <script src="<?= $a ?>/mvc/Views/assets/js/custom.js"></script>

