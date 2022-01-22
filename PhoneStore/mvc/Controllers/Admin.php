<?php
 include("mvc/Controllers/Session.php");
class  Admin extends Controller{
    
    function SayHi(){
        //echo "Hello";
        //echo $u->Get_SV();
        //$this->view("Admin",["Page"=>"List'sAcount","ac"=>$u->Get_USER()]);
        Session::init();
        $this->view("LoginAdmin_User",["Block"=>"Login_Admin"]);    
     
       //$this->view("Admin",["Block"=>"QL_Customer","ac"=>$u->Get_USER()]);
          
    }
   
     function HomeAdmin(){
        Session::init();        
         $this->view("Admin",["Block"=>"Admin"]);
     }
    function Customer(){
        Session::init();
        $u=$this->model("UserModel");
        $this->view("Admin",["Block"=>"QL_Customer","ac"=>$u->Get_USER()]);
    }
    function Order(){
        Session::init();
        $this->view("Admin",["Block"=>"Order"]);   
    } 
    function LoginAdmin(){
    //   Session::init();
        if(isset($_POST['loginAdmin'])){
            
            $Email=$_POST['AEmail'];
            $Password=$_POST['APassword'];           
            //echo $Password;
            //$Pa=password_verify($PPassword,PASSWORD_DEFAULT);
            if(empty($Email)){echo "<script type='text/javascript'>alert('Nhập Email');window.location.href = 'http://localhost:8080/PhoneStore/Admin';</script>";}
            if(empty($Password)){echo "<script type='text/javascript'>alert('Nhập Password');window.location.href = 'http://localhost:8080/PhoneStore/Admin';</script>";}
            if(!empty($Email) || !empty($Password)){
                Session::init();
                $KQ=$this->model("AdminModel");
                $this->view("LoginAdmin_User",["Block"=>"Login_Admin","KQ"=>$KQ->LoginAdmin($Email,$Password)]);             
            } 
           
            //$KQ=$this->model("UserModel")->AddUSER($Username,$Email,$Yourname,$Phone,$Password);
            //$this->view("User",["Page"=>"Register","result"=>$KQ]);      
        }
    }
    function ProductManager(){       
        Session::init();
    $this->view("Admin",["Block"=>"ManagerProduct"]);   
    }
    function AddProduct(){
        Session::init();
        $this->view("Admin",["Block"=>"ADDPRODUCT"]);  
    }
    function UPDATEProduct(){
        Session::init();
        $this->view("Admin",["Block"=>"UpdateProduct"]);  
    }
    
}
?>