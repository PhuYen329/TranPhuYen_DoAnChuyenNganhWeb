
<?php

?>
<div class="col-lg-3">  
    <form method="get" acction="./Hom/shop">           
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                        <h1 class="h2 pb-4">Categories </h1>
                            <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>                    
                        <ul class="collapse show list-unstyled pl-3">
                        <?php
                                    while ($row = mysqli_fetch_array($data["Cat"])) {  
                                        
                        ?>
                            <li><a class="text-decoration-none btn btn-info text-center" href="<?=$a?>/Home/shop/category&category_id=<?=$row[0]?>" ><?=$row['category_name']?></a></li>
                            <?php 
                            }
                        ?>
                        </ul>
                    </li>
                </ul>
    </form>       
 </div>
 <?php ?>