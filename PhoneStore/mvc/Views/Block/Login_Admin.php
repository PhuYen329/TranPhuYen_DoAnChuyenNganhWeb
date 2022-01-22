<?php
define('FILE',dirname(__DIR__));
require_once( FILE.'/Facebook/autoload.php' );
include_once ( FILE.'/Block/fbconfig.php');

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl($a.'/mvc/Views/Block/callback.php', $permissions);


?>
<div class="login-page ">
 	<div class="login-box " >
 		<div class="img wow slideInLeft" data-wow-time = "2s" >
 			<img src="<?=$a?>/mvc/Views/assets/images/logo/images.png">
 		</div>
 		<div class="login-form wow slideInRight" data-wow-offset = "10">
 			<div class="form-heading">
 				<h3>Admin</h3>
 			</div>
 			<form action="./Admin/LoginAdmin" method="POST">
 				<input type="text" class="form-control field" placeholder="Enter Email*" name="AEmail" require>
 				<input type="password" class="form-control field" placeholder="Password*" name="APassword" require>
 				<div class="sign-in-remember field">
 					<label>
 						<input type="checkbox" name="">
 						Keep me logged in
 					</label>
 				</div>
 				<button  type="submit" class="btn" name="loginAdmin">Login</button>
		</form>
			 
			<div style="margin-top: 20px;">
			<a href="<?=$loginUrl?>" class="btn btn-info">Log in with Facebook</a>
			</div>
 		</div>
 	</div>
	 <?php
         if(isset($data["KQ"])){
            ?>
            <h3>
            <?php
              if($data["KQ"]==true){
			
                echo "<script type='text/javascript'>window.location.href = '".$a."/Admin/HomeAdmin';</script>";

               
              }else{
				   echo "<script type='text/javascript'>window.location.href = '".$a."/Admin';</script>";	
			}
			  
            ?>
            </h3>
            <?php
			
            }
            ?>
</div>