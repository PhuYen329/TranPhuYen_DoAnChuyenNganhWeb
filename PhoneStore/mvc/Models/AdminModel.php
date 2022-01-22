<?php
class AdminModel extends DB{
    public function LoginAdmin($Email,$Password){
        $sql="SELECT * FROM `staffs`";
        $kq=false;
       $q= mysqli_query($this->conn,$sql);
        $row=mysqli_fetch_array($q);
        if($row['Password']==$Password && $Email==$row['email']){
            $_SESSION['Password']=$row['Password'];
            $_SESSION['last_name']=$row['last_name'];
         $kq=true;
         }
        return $kq;    
 }  
}
?>