<main role="main">
 <!-- Block content - Punch a hole in the general layout interface, name it `content` -->
 <div class="container mt-4">
     <form  method="get" action="./Home/Search">
         <h1 class="text-center">Search for products</h1>
         <div class="row">
             <div class="col col-md-12">
                   
                 <div class="text-center">
                     <button type="button" id="btnReset" class="btn btn-warning">Clear filter</button>
                     <button class="btn btn-primary btn-lg">Search <i class="fa fa-forward"
                             aria-hidden="true"></i></button>
                 </div>
             </div>
         </div>
         <div class="row">
             <aside class="col-sm-4">
                 <p>Filter </p>
                 <div class="card">
                     <!-- Search by product name -->
                     <article class="card-group-item">
                         <header class="card-header">
                             <h6 class="title">Product name </h6>
                         </header>
                         <div class="filter-content">
                            
                             <div class="card-body">
                                 <input class="form-control" type="text" placeholder="Search" name="Search"
                                     aria-label="Search"  value="">
                             </div> <!-- card-body.// -->
                             
                         </div>
                     </article> <!-- // Search by Product Name -->

                     <!-- Search by Product Type -->
                     <article class="card-group-item">
                         <header class="card-header">
                             <h6 class="title">Product type </h6>
                         </header>
                         <div class="filter-content">
                             <div class="card-body">
                                 <div class="custom-control custom-checkbox">
                                     <span class="float-right badge badge-light round">3</span>
                                     <input type="checkbox" class="custom-control-input"
                                         name="keyword_loaisanpham[]" value="1" id="chk-loaisanpham-1">
                                     <label class="custom-control-label" for="chk-loaisanpham-1">&nbsp;&nbsp;&nbsp;&nbsp;Computer
                                         table</label>
                                 </div> <!-- form-check.// -->
                                 <div class="custom-control custom-checkbox">
                                     <span class="float-right badge badge-light round">1</span>
                                     <input type="checkbox" class="custom-control-input"
                                         name="keyword_loaisanpham[]" value="2" id="chk-loaisanpham-2">
                                     <label class="custom-control-label" for="chk-loaisanpham-2">&nbsp;&nbsp;&nbsp;&nbsp;Notebook
                                         hand</label>
                                 </div> <!-- form-check.// -->
                                 <div class="custom-control custom-checkbox">
                                     <span class="float-right badge badge-light round">4</span>
                                     <input type="checkbox" class="custom-control-input"
                                         name="keyword_loaisanpham[]" value="3" id="chk-loaisanpham-3">
                                     <label class="custom-control-label" for="chk-loaisanpham-3">&nbsp;&nbsp;&nbsp;&nbsp;Electricity
                                         dialog</label>
                                 </div> <!-- form-check.// -->
                                 <div class="custom-control custom-checkbox">
                                     <span class="float-right badge badge-light round">1</span>
                                     <input type="checkbox" class="custom-control-input"
                                         name="keyword_loaisanpham[]" value="4" id="chk-loaisanpham-4">
                                     <label class="custom-control-label" for="chk-loaisanpham-4">&nbsp;&nbsp;&nbsp;&nbsp;Spirit Father
                                         event</label>
                                 </div> <!-- form-check.// -->
                             </div> <!-- card-body.// -->
                         </div>
                     </article> <!-- // Search by Product Type -->

                     <!-- Search by Manufacturer -->
                     <article class="card-group-item">
                         <header class="card-header">
                             <h6 class="title">Producer </h6></header>
                         <div class="filter-content">
                             <div class="card-body">
                                 <div class="custom-control custom-checkbox">
                                     <span class="float-right badge badge-light round">3</span>
                                     <input type="checkbox" class="custom-control-input"
                                         name="keyword_nhasanxuat[]" value="1" id="chk-nhasanxuat-1">
                                     <label class="custom-control-label" for="chk-nhasanxuat-1">&nbsp;&nbsp;&nbsp;&nbsp;Apple</label>
                                 </div> <!-- form-check.// -->
                                 <div class="custom-control custom-checkbox">
                                     <span class="float-right badge badge-light round">3</span>
                                     <input type="checkbox" class="custom-control-input"
                                         name="keyword_nhasanxuat[]" value="2" id="chk-nhasanxuat-2">
                                     <label class="custom-control-label" for="chk-nhasanxuat-2">&nbsp;&nbsp;&nbsp;&nbsp;Samsung</label>
                                 </div> <!-- form-check.// -->
                                 <div class="custom-control custom-checkbox">
                                     <span class="float-right badge badge-light round">1</span>
                                     <input type="checkbox" class="custom-control-input"
                                         name="keyword_nhasanxuat[]" value="3" id="chk-nhasanxuat-3">
                                     <label class="custom-control-label" for="chk-nhasanxuat-3">&nbsp;&nbsp;&nbsp;&nbsp;HTC</label>
                                 </div> <!-- form-check.// -->
                                 <div class="custom-control custom-checkbox">
                                     <span class="float-right badge badge-light round">1</span>
                                     <input type="checkbox" class="custom-control-input"
                                         name="keyword_nhasanxuat[]" value="4" id="chk-nhasanxuat-4">
                                     <label class="custom-control-label" for="chk-nhasanxuat-4">&nbsp;&nbsp;&nbsp;&nbsp;Nokia</label>
                                 </div> <!-- form-check.// -->
                             </div> <!-- card-body.// -->
                         </div>
                     </article> <!-- // Search by Manufacturer -->

                     <!-- Search by Promotion -->
                     <article class="card-group-item">
                         <header class="card-header">
                             <h6 class="title">Promotion </h6>
                         </header>
                         <div class="filter-content">
                             <div class="card-body">
                             </div> <!-- card-body.// -->
                         </div>
                     </article> <!-- // Search by Manufacturer -->

                     <!-- Search by price range -->
                     <article class="card-group-item">
                         <header class="card-header">
                             <h6 class="title">Amount </h6>
                         </header>
                         <div class="filter-content">
                             <div class="card-body">
                                 <div class="form-row">
                                     <div class="form-group col-md-6">
                                         <label>From</label>
                                         <input type="range" class="custom-range" min="0" max="50000000"
                                             step="10000" id="sotientu" name="keyword_sotientu" value="0">
                                         <span><span id="sotientu-text">0</span></span>
                                     </div>
                                     <div class="form-group col-md-6 text-right">
                                         <label>To</label>
                                         <input type="range" class="custom-range" min="0" max="50000000"
                                             step="10000" id="sotienden" name="keyword_sotienden"
                                             value="50000000">
                                         <span><span id="sotienden-text">50000000</span></span>
                                     </div>
                                 </div>
                             </div> <!-- card-body.// -->
                         </div>
                     </article> <!-- // Search by price range -->

                     <!-- Search by product color -->
                     <article class="card-group-item">
                         <header class="card-header">
                             <h6 class="title">Color (optional)</h6>
                         </header>
                         <div class="filter-content"><div class="card-body">
                                 <label class="btn btn-danger">
                                     <input class="" type="checkbox" value="">
                                     <span class="form-check-label">Red</span>
                                 </label>
                                 <label class="btn btn-success">
                                     <input class="" type="checkbox" value="">
                                     <span class="form-check-label">Green</span>
                                 </label>
                                 <label class="btn btn-primary">
                                     <input class="" type="checkbox" value="">
                                     <span class="form-check-label">Blue</span>
                                 </label>
                             </div> <!-- card-body.// -->
                         </div>
                     </article> <!-- // Search by product color -->
                 </div> <!-- card.// -->
             </aside> <!-- col.// -->

             <!-- Bootstrap's Product List browsing and rendering algorithm by row and column -->
             <div class="col-sm-8 mt-2">
                 <div class="row">
                     <div class="col-md-12">
                         <h6>Searched for 7 products</h6>
                     </div>
                 </div>

                 <div class="row">
                 <?php
                     while ($row = mysqli_fetch_array($data["Search"])) {
                       
                    ?>
                     <div class="col-md-6">
                         <div class="card mb-4 shadow-sm">
                             <a href="product-detail.html">
                                 <img class="bd-placeholder-img card-img-top" width="100%" height="350"
                                     src="<?=$a?>/mvc/Views/assets/images/product/<?=$row['image']?>">
                             </a>
                             <div class="card-body">
                                 <a href="product-detail.html">
                                     <h5><?=$row[1]?></h5>
                                 </a>
                                 <h6>price:<?=$row[5]?></h6>
                               
                                 <div class="d-flex justify-content-between align-items-center">
                                     <div class="btn-group">
                                         <a class="btn btn-sm btn-outline-secondary"
                                             href="<?=$a?>/Home/product_detail&id=<?=$row['product_id']?>">View
                                             details</a>
                                     </div>
                                    
                                 </div>
                             </div>
                         </div>
                     </div>
                        <?php
                     }
                        ?>
                     
                 </div>
                 
             </div>
         </div> <!-- row.// -->
     </form>
 </div>
 <!-- End block content -->
</main>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popperjs/popper.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom script - Các file js do mình tự viết -->
    <script src="../assets/js/app.js"></script>
