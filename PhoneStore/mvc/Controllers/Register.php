<?php
 include("mvc/Controllers/Session.php");
class Register extends Controller
{
    protected $Usermodel;

    public function __construct()
    {

        $this->Usermodel = $this->model("UserModel");
    }
    public function SayHi()
    {
        //$u=$this->model("UserModel");
        //echo $u->Get_SV();
        //$this->view("User",["Page"=>"List'sAcount","ac"=>$u->Get_USER()]);
        // $this->view("User",["Page"=>"Register"]);
        //$this->view("User_User",["Block"=>"QL_Customer","ac"=>$u->Get_USER()]);
        $this->view("User", ["Page" => "Register"]);
    }
    public function UserRegister()
    {
        //get data
        if (isset($_POST['btnSubmit'])) {
            $Username = $_POST['UserName'];
            $Email = $_POST['Email'];
            $Yourname = $_POST['Yourname'];
            $Phone = $_POST['Phone'];
            $PPassword = $_POST['Password'];
            $Password = $PPassword;
            $kq = $this->Usermodel->checkUser($Username, $Email);

            if (empty($Username)) {
         echo "<script type='text/javascript'>alert('Vui lòng nhập đầy đủ thông tin');window.location.href = 'http://localhost:8080/PhoneStore/Register';</script>";
          }
            if (empty($Email)) {
         echo "<script type='text/javascript'>alert('Vui lòng nhập đầy đủ thông tin');window.location.href = 'http://localhost:8080/PhoneStore/Register';</script>";
          }
            if (empty($Phone)) {
         echo "<script type='text/javascript'>alert('Vui lòng nhập đầy đủ thông tin');window.location.href = 'http://localhost:8080/PhoneStore/Register';</script>";
          }  
            if (empty($Yourname)) {
         echo "<script type='text/javascript'>alert('Vui lòng nhập đầy đủ thông tin');window.location.href = 'http://localhost:8080/PhoneStore/Register';</script>";
          }
            if (empty($PPassword)) {
         echo "<script type='text/javascript'>alert('Vui lòng nhập đầy đủ thông tin');window.location.href = 'http://localhost:8080/PhoneStore/Register';</script>";
          }
            if (!empty($Username) || !empty($Email) || !empty($Phone) || !empty($Yourname) || !empty($PPassword)) {

                if ($kq == true) {
                    echo "<script type='text/javascript'>alert('Tài khoản này đã tồn tại');window.location.href = 'http://localhost:8080/PhoneStore/Register';</script>";
                } else if ($kq == false) {
                      Session::init();  
                    $KQ = $this->model("UserModel")->AddUSER($Username, $Email, $Yourname, $Phone, $Password);
                   $_SESSION['Username']=$Username;
                    $this->view("User", ["Page" => "Register", "result" => $KQ]);
                }
            } else {
                //echo $password;
                echo "<script type='text/javascript'>alert('Vui lòng nhập đầy đủ thông tin');window.location.href = 'http://localhost:8080/PhoneStore/Register';</script>";
            }
        }
    }
}
