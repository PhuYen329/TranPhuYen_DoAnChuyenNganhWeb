<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <!--CSS link-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Login</title>
    <style>
        /* Footer */
        @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

        section {
            padding: 60px 0;
        }

        section .section-title {
            text-align: center;
            color: #007b5e;
            margin-bottom: 50px;
            text-transform: uppercase;
        }

        #footer {
            background: #007b5e !important;
        }

        #footer h5 {
            padding-left: 10px;
            border-left: 3px solid #eeeeee;
            padding-bottom: 6px;
            margin-bottom: 20px;
            color: #ffffff;
        }

        #footer a {
            color: #ffffff;
            text-decoration: none !important;
            background-color: transparent;
            -webkit-text-decoration-skip: objects;
        }

        #footer ul.social li {
            padding: 3px 0;
        }

        #footer ul.social li a i {
            margin-right: 5px;
            font-size: 25px;
            -webkit-transition: .5s all ease;
            -moz-transition: .5s all ease;
            transition: .5s all ease;
        }

        #footer ul.social li:hover a i {
            font-size: 30px;
            margin-top: -10px;
        }

        #footer ul.social li a,
        #footer ul.quick-links li a {
            color: #ffffff;
        }

        #footer ul.social li a:hover {
            color: #eeeeee;
        }

        #footer ul.quick-links li {
            padding: 3px 0;
            -webkit-transition: .5s all ease;
            -moz-transition: .5s all ease;
            transition: .5s all ease;
        }

        #footer ul.quick-links li:hover {
            padding: 3px 0;
            margin-left: 5px;
            font-weight: 700;
        }

        #footer ul.quick-links li a i {
            margin-right: 5px;
        }

        #footer ul.quick-links li:hover a i {
            font-weight: 700;
        }

        @media (max-width:767px) {
            #footer h5 {
                padding-left: 0;
                border-left: transparent;
                padding-bottom: 0px;
                margin-bottom: 10px;
            }
        }
    </style>
</head>

<body>
    <!--connect-->

    <!--Navbar-->
   
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../assets/images/bg/counter-bg.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../assets/images/bg/crumbs-bg.jpg" alt="Second slide">
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
    <!--Đăng Nhap-->
    <div class="container">
        <h2 style="text-align: center; color:red"> Account's List</h2>
        
        <!--List-->
        <table class="table table-bordered" style="text-align: center;">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Username</th>
                    <th scope="col">Edit Account </th>
                    <th scope="col">Delete Account</th>
                </tr>
            </thead>


            <tbody>
                <?php
                define('HOST', 'localhost');
                define('DATABASE', 'account');
                define('USERNAME', 'root');
                define('PASSWORD', '');
                $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
                $sql = 'Select * from user';
                $resultset = mysqli_query($conn, $sql);
                $list      = [];
                while ($row = mysqli_fetch_array($resultset, 1)) {
                    $list[] = $row;
                }
                $categorylist = $list;
                
                foreach ($categorylist as $item) {
                    echo '  <tr>
                    <th scope="row">'.$item['customer_id'].'</th>
                    <td scope="row">'.$item['Email'].'</td>
                    <td scope="row">'.$item['Password'].'</td>
                    <td scope="row">'.$item['Phone'].'</td>
                    <td scope="row">'.$item['Username'].'</td>
                   
                    <td> <a href="edit_user.php?id=' . $item['customer_id'] . '"><button class="btn btn-warning">Update</button></a></td>
                   
                </tr>';
                }
                ?>

                

            </tbody>

        </table>


    </div>




    <!---js--->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--footer-->


    <footer class="text-center text-lg-start bg-dark text-muted ">
        <section id="footer">
            <div class="container">
                <div class="row text-center text-xs-center text-sm-left text-md-left">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h5>Quick links</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h5>Quick links</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h5>Quick links</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                            <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                        <ul class="list-unstyled list-inline social text-center">
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    </hr>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                        <p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
                        <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
                    </div>
                    </hr>
                </div>
            </div>
        </section>
    </footer>
    <!-- Footer -->
</body>

</html>