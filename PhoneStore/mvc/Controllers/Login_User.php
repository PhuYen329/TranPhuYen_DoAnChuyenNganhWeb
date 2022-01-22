<?php
 include("mvc/Controllers/Session.php");
class Login_User extends Controller{
    public function SayHi(){
        //$u=$this->model("UserModel");
        //echo $u->Get_SV();
        //$this->view("User",["Page"=>"List'sAcount","ac"=>$u->Get_USER()]);
       // $this->view("User",["Page"=>"Register"]);
       //$this->view("User_User",["Block"=>"QL_Customer","ac"=>$u->Get_USER()]);
 
      
       $this->view("User",["Page"=>"Login_Web"]);
     
    }
    public function Login(){
        //get data
        if(isset($_POST['btn_login'])){
            
            $Email=$_POST['LEmail'];
            $Password=md5($_POST['LPassword']);
            $ghi=$_POST['ghinho'];
       
            //var_dump($Password);    
            //$Pa=password_verify($PPassword,PASSWORD_DEFAULT); 
            
            if(!empty($Email) || !empty($Password)){
                Session::init();
                $KQ=$this->model("UserModel")->Login($Email,$Password);
                if(isset($ghi)){
                    setcookie('User',$_SESSION['Username'],time()+3600);
                    setcookie('Pass',$Password,time()+3600);
                }else{
                    header('Location:http://localhost:8080/PhoneStore/Home');
                }

                $this->view("User",["Page"=>"Login_Web","KQ"=>$KQ]);
                    
            }
            //$KQ=$this->model("UserModel")->AddUSER($Username,$Email,$Yourname,$Phone,$Password);
            //$this->view("User",["Page"=>"Register","result"=>$KQ]);      
           
        }
       
    }
}
?>




   