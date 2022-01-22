<?php
class UserModel extends DB{
    public function checkUser($un,$Email){
        $sql="SELECT * FROM `customer` WHERE `Username` LIKE '".$un."' OR `Email` LIKE '".$Email."'";
        $query=mysqli_query($this->conn,$sql);
        $kq=false;
        $row=mysqli_num_rows($query);
        if($row>0){
                $kq=true;
        }
        return $kq;
    }
    public function UpdatePass($e,$p){
        $sql="SELECT * FROM `customer` WHERE `Email` LIKE '".$e."'";
        $query=mysqli_query($this->conn,$sql);
        $kq=false;
        $row=mysqli_num_rows($query);
        if($row>0){
               $Update="UPDATE `customer` SET `Password` = '".$p."' WHERE `customer`.`Email` = ".$e.";";
               mysqli_query($this->conn,$Update);
               $kq=true;
        }
        return $kq;
    }
    
    public function Get_USER(){ 
        $sql="SELECT* from Customer";
        $list=mysqli_query($this->conn,$sql);
        return $list;
    }
    public function ListAll(){
        $sql="SELECT * from customer";
        $row=mysqli_query($this->conn,$sql);
        $mang=array();
        while($row=mysqli_fetch_array($row)){
            $mang=$row;
        }
        return json_encode($mang);
    }

    public function AddUSER($Username,$Email,$Yourname,$Phone,$Password){
       $sql="INSERT INTO Customer(customer_id,Username,Email,Yourname,Phone,Password) VALUES (null,'$Username','$Email','$Yourname','$Phone',md5('".$Password."'))";
       $kq=false;
       if(mysqli_query($this->conn,$sql)){
        $_SESSION['Email']=$Email;
        $_SESSION['Pass']=$Password;
        $kq=true;
       }
       return json_encode($kq);

    }

public function Login($e,$p){
    $sql="SELECT * FROM `customer`where Email='".$e."'";
    $kq=false;
       $q= mysqli_query($this->conn,$sql);
         while( $row=mysqli_fetch_row($q)){
            if($row[5]==substr($p,0,-12)){
             $_SESSION['Email']=$row[2];
             $_SESSION['PassAdmin']=$row[5];
             $_SESSION['Username']=$row[1];
               $kq=true;
            }
         } 
         return $kq;
       
}
 
    public function Deleted_USER($id){
        //Tìm id muốn xóa customer và xóa customer
        $xoa="DELETE customer  where customer_id='$id'";
        $kq=false;
        if(mysqli_query($this->conn,$xoa)){
            $kq=true;
        }
        return json_encode($kq);

    } 

    public function  FindByID($id){
        $sql="SELECT * from customer where customer_id='$id'";
        $list=mysqli_query($this->conn,$sql);
        return $list;
    }
    public function UpdateUser($Username,$Email,$Yourname,$Phone,$Password){
        $xoa="UPDATE customer  set Username='$Username',Yourname='$Yourname',Phone='$Phone',Passwword='$Password' where Email='$Email'";
        $kq=false;
        if(mysqli_query($this->conn,$xoa)){
            $kq=true;
        }
        return json_encode($kq);
  
    }
   

  
  //public function SinhVien(){
      //  $sql="select * from sinhvien";
        //$list=mysqli_query($this->conn,$sql);
        //return $list;
     //}
    
}
?>