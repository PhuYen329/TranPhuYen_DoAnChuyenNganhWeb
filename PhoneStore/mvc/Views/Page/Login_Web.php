    <style>
    body {
        margin: 0;
        font-family: sans-serif;
    }

    * {
        box-sizing: border-box;
    }

    .login-page {
        background-color: #eeeeee;
        min-height: 100vh;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        padding: 15px;
    }

    .login-page .login-box {
        background-color: #ffffff;
        flex-basis: 850px;
        max-width: 850px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        padding: 30px;
        display: flex;
    }

    .login-page .login-box .img {
        flex-basis: 50%;
        max-width: 50%;
    }

    .login-page .login-box .img img {
        display: block;
        width: 100%;
    }

    .login-page .login-box .login-form {
        flex-basis: 50%;
        max-width: 50%;
        padding-left: 30px;
    }

    .login-page .login-box .login-form h3 {
        text-transform: uppercase;
        color: #444444;
        font-size: 30px;
        margin: 20px 0 45px;
        border-bottom: 1px solid #ff5722;
        padding-bottom: 5px;
    }

    .login-page .login-box .login-form .form-heading,
    .login-page .login-box .login-form form {
        width: 100%;
    }

    .login-page .login-box .login-form form .field {
        width: 100%;
        margin-bottom: 20px;
    }

    .login-page .login-box .login-form form .form-control {
        height: 45px;
        font-size: 14px;
        padding: 6px 12px;
        background-color: #e7e7e7;
        border: none;
    }

    .login-page .login-box .login-form form .sign-in-remember label {
        color: #444444;
        cursor: pointer;
        font-size: 16px;
    }

    .login-page .login-box .login-form form .btn {
        height: 45px;
        background-color: #ff5722;
        padding: 0 40px;
        text-transform: uppercase;
        font-size: 16px;
        color: #ffffff;
        cursor: pointer;
        border: none;
        transition: background-color .5s ease;
    }

    .login-page .login-box .login-form form .btn:hover {
        background-color: #e13c08;
    }

    /*Responsive*/

    @media(max-width: 767px) {
        .login-page .login-box .img {
            display: none;
        }

        .login-page .login-box .login-form {
            flex-basis: 100%;
            max-width: 100%;
            padding-left: 0px;
        }
    }
</style>


 <div class="login-page ">
 	<div class="login-box " >
 		<div class="img wow slideInLeft" data-wow-time = "2s" >
 			<img src="<?=$a?>/mvc/Views/assets/images/bg/login.jpg">
 		</div>
 		<div class="login-form wow slideInRight" data-wow-offset = "10">
 			<div class="form-heading">
 				<h3>Welcome</h3>
 			</div>
 			<form action="./Login_User/Login" method="POST">
 				<input type="text" class="form-control field" placeholder="Enter Email*" name="LEmail" require>
 				<input type="password" class="form-control field" placeholder="Password*" name="LPassword" require>
 				<div class="sign-in-remember field">
 					<label>
 						<input type="checkbox" name="ghinho">
 						Keep me logged in
                         
 					</label>
 				</div>
                 <div style="text-align: center;">
                 <button type="submit" class="btn" name="btn_login">Login</button>
                 </div>
 				
                 <div style="text-align: center;">
                 <a href="http://localhost:8080/PhoneStore/Register" >Register</a>
                 </div>
                 
 			</form>
 		</div>
 	</div>
 </div>
<div>
<?php
         if(isset($data["KQ"])){
            ?>
            <h3>
            <?php
              if($data["KQ"]==true){
                               // var_dump($data["KQ"]);
                //setcookie("success", "Đăng ký thành công!", time()+1, "/","", 0);
               // session_destroy();
            
                echo "<script>window.location.href = '".$a."/Home';</script>";
               //header("Location:http://localhost:8080/PhoneStore/Home");
               //var_dump($_SESSION);
              }else{
               //var_dump($data["KQ"]);
            //setcookie("Fail", "Đăng ký thành công!", time()+1, "/","", 0);
                echo "<script type='text/javascript'>alert('Đăng nhập thất bại');window.location.href = '".$a."/Login_User';</script>";
            
              }
            ?>
            </h3>
            <?php
            }
            ?>
</div>