<?php
// extends class Model
class EmployeeM extends CI_Model{
// response jika field ada yang kosong
  public function empty_response(){
    $response['status']=502;
    $response['error']=true;
    $response['message']='No empty field';
    return $response;
  }
// function untuk insert data ke tabel tb_employee
  public function add_employee($name,$address,$phone,$position){
if(empty($name) || empty($address) || empty($phone) || empty($position)){
      return $this->empty_response();
    }else{
      $data = array(
        "name"=>$name,
        "address"=>$address,
        "phone"=>$phone,
        "position"=>$position
      );
$insert = $this->db->insert("tb_employee", $data);
if($insert){
        $response['status']=200;
        $response['error']=false;
        $response['message']='Add employee data.';
        return $response;
      }else{
        $response['status']=502;
        $response['error']=true;
        $response['message']='Employee data failed to add';
        return $response;
      }
    }
}
// get all data employee
  public function all_employee(){
$all = $this->db->get("tb_employee")->result();
    $response['status']=200;
    $response['error']=false;
    $response['product']=$all;
    return $response;
}
// delete data employee
  public function delete_employee($id){
if($id == ''){
      return $this->empty_response();
    }else{
      $where = array(
        "id"=>$id
      );
$this->db->where($where);
      $delete = $this->db->delete("tb_employee");
      if($delete){
        $response['status']=200;
        $response['error']=false;
        $response['message']='Delete data employee.';
        return $response;
      }else{
        $response['status']=502;
        $response['error']=true;
        $response['message']='Data employee failed to add.';
        return $response;
      }
    }
}
// update employee
  public function update_employee($id,$name,$address,$phone,$position){
if($id == '' || empty($name) || empty($address) || empty($phone) || empty($position)){
      return $this->empty_response();
    }else{
      $where = array(
        "id"=>$id
      );
$set = array(
        "name"=>$name,
        "address"=>$address,
        "phone"=>$phone,
        "position"=>$position
      );
$this->db->where($where);
      $update = $this->db->update("tb_employee",$set);
      if($update){
        $response['status']=200;
        $response['error']=false;
        $response['message']='Edit data employee.';
        return $response;
      }else{
        $response['status']=502;
        $response['error']=true;
        $response['message']='Data employee failed to edit.';
        return $response;
      }
    }
}
}
?>