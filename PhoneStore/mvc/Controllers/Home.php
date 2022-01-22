<?php
include("mvc/Controllers/Session.php");
class Home extends Controller{
protected $Promoedl;


    public function __construct()
{
 $this->model('ProductModel');
 $this->Usermodel=$this->model("UserModel");
 //$this->Promoedl=new ProductModel();
}
    function SayHi(){
        //echo "Hello";
        //$u=$this->model("UserModel");
        //echo $u->Get_SV();
        //$this->view("User",["Page"=>"List'sAcount","ac"=>$u->Get_USER()]);
      
       //$this->view("User_User",["Block"=>"QL_Customer","ac"=>$u->Get_USER()]);
       // $this->view("LoginUser_User",["Block"=>""]);  
       //session_start();
       
       Session::init();
       $u=$this->model("ProductModel");       
       
       $this->view("User",["Page"=>"Home","GT"=>$u->Get_GT()]);

       //$this->view("User",["Page"=>"Home"]);       
    }
      public function product_detail(){
        Session::init();
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $u=$this->model("ProductModel");
           
            $this->view("User",["Page"=>"Product-detail","result"=>$u->detail($id)]);
            // $this->view("User",["Page"=>"Search","result"=>$u->detail($id)]);
        }
    }
   
    public function Logout(){
        Session::init();
        if(isset($_SESSION['Username'])){
            unset($_SESSION['Username']);
            
            echo "<script type='text/javascript'>;window.location.href = 'http://localhost:8080/PhoneStore/Login_User';</script>";
    
        }else{
        $this->view("User",["Page"=>"Home"]);
        }
    }
 
    public function Cart(){
     //   $product_id=$_GET['product_id']?? null;
       // $product=$this->Promoedl->findByid($product_id);        
       Session::init();
       if(!isset($_SESSION['Username'])){
        echo "<script type='text/javascript'>;window.location.href = 'http://localhost:8080/PhoneStore/Login_User';</script>";
       }else{
        $this->view("User",["Page"=>"Cart"]);
       }
    }

  
   public function contact(){
    Session::init();
        $this->view("User",["Page"=>"Contact"]);
    }
   public function shop(){
    Session::init();
    $u=$this->model("ProductModel");
        if(isset($_GET['item_page'])){
            $item_page=!empty($_GET['item_page'])?$_GET['item_page']:"3";
            $curent_page=!empty($_GET['page'])?$_GET['page']:"1";
            $offset=($curent_page-1)*$item_page;
           $this->view("User",["Page"=>"Shop",
           "Pro"=>$u->Get_Pro(),
           "Cat"=>$u->category(),
           "PT"=>$u-> Get_PhanTrang($item_page,$offset)]);
            
        }    
       if(isset($_GET['category_id'])){
        $id=$_GET['category_id'];
        $this->view("User",["Page"=>"Shop",
        "Pro"=>$u->Get_Pro(),
        "Cat"=>$u->category(),
        "Cat1"=>$u->category_DD($id)]); 
       }
       else{
        $this->view("User",["Page"=>"Shop","Pro"=>$u->Get_Pro(),"Cat"=>$u->category()]);
       }
}

    public function about(){
        Session::init();
        $this->view("User",["Page"=>"About"]);
    }
    public function vnpay(){
        Session::init();
        if(!isset($_SESSION['SumMoney'])){
            $this->view("User",["Page"=>"cart"]);
        }else{
        $this->view("VNPay",["vnpay"=>"Payment1"]);
        }
    }
    public function momo(){
        Session::init();
        if(!isset($_SESSION['SumMoney'])){
            $this->view("User",["Page"=>"cart"]);
        }else{
        $this->view("VNPay",["momo"=>"PaymentMoMo"]);
        }
    }
    public function Search(){
        Session::init();
        $search=$_POST['Search'];
        if(isset($_POST['btn-Search'])){
            $u=$this->model("ProductModel");
            $this->view("User",["Page"=>"Search","Search"=>$u->Search($search)]);
        }else if(isset($_GET['Search'])){
            $u=$this->model("ProductModel");
            $this->view("User",["Page"=>"Search","Search"=>$u->Search($search)]);
        }
      
    }

}
  
?>