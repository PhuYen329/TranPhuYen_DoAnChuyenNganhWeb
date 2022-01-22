<style>
    body{
        margin: 0;
        
        font-family: sans-serif;
    }
    *{
        box-sizing: border-box;
    }
    .table{
        width: 100%;
        border-collapse: collapse;
    }
    .table td,table th{
        padding: 15px,12px;
        border:1px solid #ddd;
        text-align: center;
        font-size: 16px;
    }
    .table th{
        background-color: darkslategray;
        color: white;
    }
    .table tbody tr:nth-child(even){
        background-color: #f5f5f5;

    }
    @media (max-width:700px) {
        .table thead{
            display: none;
        }
        .table,.table tbody, .table tr, .table td{
            display: block;
            width: 100%;
        }
        .table tr{
            margin-bottom: 15px;
        }
        .table td{
            text-align: right;
            padding-left: 50%;
            text-align: right;
            position: relative;
        }
        .table td::before{
            content: attr(data-label);
            position: absolute;
            left:0;
            width: 50%;
            padding-left: 15px;
            font-size: 15px;
            font-weight: bold;
            text-align: left;
        }
    }
</style>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://media.milpatagonias.com/adjuntos/243/imagenes/000/101/0000101564.jpg" width="500px" height="400px" alt="First slide"/>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?=$a?>/mvc/Views/assets/images/bg/slider-bg3.jpg"  width="500px" height="400px" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2020/05/25/10/48/woman-5218083_640.jpg"  width="500px" height="400px" alt="Second slide">
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


    
            <div >
                <h3 style="text-align: center; color: red;">List's Customer</h3>
                <table class="table ">
                    <thead>
                        <tr>
                            <th >STT</th>
                            <th >Yourname </th>
                            <th >Email</th>
                            <th >Username</th>
                            <th >Password</th>
                            <th >Phone</th>
                            
                            <th >Edit Account </th>
                            <th >Delete Account</th>
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