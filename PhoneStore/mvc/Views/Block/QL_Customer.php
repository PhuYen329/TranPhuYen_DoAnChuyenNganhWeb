
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Data Table
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <table class="table ">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Yourname </th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Phone</th>

                    <th>Edit Account </th>
                    <th>Delete Account</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  while ($row = mysqli_fetch_array($data["ac"])) {
                  ?>
                    <tr>
                      <td data-label="ID"><?php echo $row['customer_id']++; ?></td>
                      <td data-label="USERNAME"><?php echo $row['Username'] ?></td>
                      <td data-label="EMAIL"><?php echo $row['Email'] ?></td>
                      <td data-label="YOURNAME"><?php echo $row['Yourname'] ?></td>

                      <td data-label="PASSWORD"><?php echo $row['Password'] ?></td>
                      <td data-label="PHONE"><?php echo $row['Phone'] ?></td>



                      <td data-label="EDIT"> <a href="edit_user.php?id=' . $row['customer_id'] . '"><button class="btn btn-warning">Update</button></a></td>
                      <td data-label="DELETE"> <a href="edit_user.php?id=' . $row['customer_id'] . '"><button class="btn btn-danger">Delete</button></a></td>
                    </tr>
                  <?php
                  }
                  ?>
                  <?php

                  //while ($row = mysqli_fetch_array($data["ac"])) {
                  //  echo '  <tr>
                  //<th scope="row">' . $row['customer_id'] . '</th>
                  //<td >' . $row['Email'] . '</td>
                  //<td >' . $row['Password'] . '</td>
                  //<td >' . $row['Phone'] . '</td>
                  //<td >' . $row['Username'] . '</td>
                  //<td> <a href="edit_user.php?id=' . $row['customer_id'] . '"><button class="btn btn-warning">Update</button></a></td>         
                  //<td> <a href="edit_user.php?id=' . $row['customer_id'] . '"><button class="btn btn-danger">Delete</button></a></td>       
                  //</tr>';
                  //      }
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
