<?php
class ProductModel extends DB{
   
    public function  Get_Pro(){
        $sql="SELECT * from products ";
        $list=mysqli_query($this->conn,$sql);
        return $list;
    }
    public function  Get_PhanTrang($item_page,$offset){
        $sql="SELECT * from products ORDER BY product_id ASC LIMIT ".$item_page." OFFSET ".$offset.";";
        $list=mysqli_query($this->conn,$sql);
        return $list;
    }
    public function category(){
        $sql="SELECT * from categories ";
        $list=mysqli_query($this->conn,$sql);
        return $list;
    }
    public function category_DD($DD){
        $sql="SELECT * from categories as cat join products as pro on pro.category_id=cat.category_id WHERE cat.category_id like '%".$DD."%';";
        $list=mysqli_query($this->conn,$sql);
        return $list;
    }
    public function Search($tenSB){
        $sql="SELECT * FROM `products` WHERE `product_name` LIKE '%".$tenSB."%'";
        $list=mysqli_query($this->conn,$sql);
        return $list;
      }
    public function  Get_GT(){
        $sql="SELECT * from introduce where HC=1";
        $list=mysqli_query($this->conn,$sql);
        return $list;
    }
    public function detail($id){
        $sql = 'Select * from products where product_id='.$id;
        $list=mysqli_query($this->conn,$sql);
        return $list;
    
    }
    public function findByid($id){
        $sql = 'Select * from products where product_id='.$id;
        $list=mysqli_query($this->conn,$sql);
        //$row=mysqli_fetch_row($list);
        $product_cart=array();
        foreach($list as $value){
            $product_cart[$value['product_id']]=$value;
        }
        return $product_cart[$id];
    }
    public function findByid1($id){
        $sql_s="SELECT * FROM products  WHERE product_id={$id}"; 
        $query_s=mysqli_query($this->conn,$sql_s);
        return $query_s;
    }
}
?>