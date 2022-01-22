<?php
include("mvc/Views/include/config.php");
$sql="SELECT * from customer c JOIN orders o on c.customer_id=o.customer_id ORDER BY c.customer_id;";
$q=mysqli_query($conn,$sql);

?>

    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Order Manager
              </div>
              <div class="card-body">
                <div class="table-responsive">
                
                <table class="table ">
                <thead>
                  <tr>
                    <th>ID Order</th>
                    <th>Consignee's Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>CMND</th>
                    <th>View Order</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                 
                 while($row=mysqli_fetch_array($q)){ 
                   ?>
                <form action="" method="post">
               
                    <tr>
                      <td data-label="ID Order"><?=$row[8]?> </td>
                      <td data-label="Consignee's Name"><?=$row[10]?></td>
                      <td data-label="Address"><?=$row[12]?></td>
                      <td data-label="Phone"><?=$row[4]?></td>
                      <td data-label="CMND"><?=$row[7]?></td>
                      <td data-label="EDIT"> <a href="Order&action=ViewOrder&id=<?=$row[8]?>">View Order</a></td>
                    
                       </tr>
                 
                    </form>
                    <?php
                  }
                  ?>
                </tbody>
              </table>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
              