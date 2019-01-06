<?php
// extends class Model
class ProductM extends CI_Model{
// response jika field ada yang kosong
  public function empty_response(){
    $response['status']=502;
    $response['error']=true;
    $response['message']='No empty field';
    return $response;
  }
// function untuk insert data ke tabel tb_product
  public function add_product($name,$price){
if(empty($name) || empty($price) ){
      return $this->empty_response();
    }else{
      $data = array(
        "name"=>$name,
        "price"=>$price  
      );
$insert = $this->db->insert("tb_product", $data);
if($insert){
        $response['status']=200;
        $response['error']=false;
        $response['message']='Add product data.';
        return $response;
      }else{
        $response['status']=502;
        $response['error']=true;
        $response['message']='Product data failed to add';
        return $response;
      }
    }
}
// get all data product
  public function all_product(){
$all = $this->db->get("tb_product")->result();
    $response['status']=200;
    $response['error']=false;
    $response['product']=$all;
    return $response;
}
// delete data product
  public function delete_product($id){
if($id == ''){
      return $this->empty_response();
    }else{
      $where = array(
        "id"=>$id
      );
$this->db->where($where);
      $delete = $this->db->delete("tb_product");
      if($delete){
        $response['status']=200;
        $response['error']=false;
        $response['message']='Delete data product.';
        return $response;
      }else{
        $response['status']=502;
        $response['error']=true;
        $response['message']='Data product failed to add.';
        return $response;
      }
    }
}
// update product
  public function update_product($id,$name,$price){
if($id == '' || empty($name) || empty($price)){
      return $this->empty_response();
    }else{
      $where = array(
        "id"=>$id
      );
$set = array(
        "name"=>$name,
        "price"=>$price
      );
$this->db->where($where);
      $update = $this->db->update("tb_product",$set);
      if($update){
        $response['status']=200;
        $response['error']=false;
        $response['message']='Edit data product.';
        return $response;
      }else{
        $response['status']=502;
        $response['error']=true;
        $response['message']='Data product failed to edit.';
        return $response;
      }
    }
}
}
?>