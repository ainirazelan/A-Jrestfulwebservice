<?php
// extends class Model
class PersonM extends CI_Model{
// response jika field ada yang kosong
  public function empty_response(){
    $response['status']=502;
    $response['error']=true;
    $response['message']='No empty field';
    return $response;
  }
// function untuk insert data ke tabel tb_person
  public function add_person($name,$address,$phone){
if(empty($name) || empty($address) || empty($phone)){
      return $this->empty_response();
    }else{
      $data = array(
        "name"=>$name,
        "address"=>$address,
        "phone"=>$phone
      );
$insert = $this->db->insert("tb_person", $data);
if($insert){
        $response['status']=200;
        $response['error']=false;
        $response['message']='Add person data.';
        return $response;
      }else{
        $response['status']=502;
        $response['error']=true;
        $response['message']='Person data failed to add';
        return $response;
      }
    }
}
// mengambil semua data person
  public function all_person(){
$all = $this->db->get("tb_person")->result();
    $response['status']=200;
    $response['error']=false;
    $response['person']=$all;
    return $response;
}
// hapus data person
  public function delete_person($id){
if($id == ''){
      return $this->empty_response();
    }else{
      $where = array(
        "id"=>$id
      );
$this->db->where($where);
      $delete = $this->db->delete("tb_person");
      if($delete){
        $response['status']=200;
        $response['error']=false;
        $response['message']='Delete data person.';
        return $response;
      }else{
        $response['status']=502;
        $response['error']=true;
        $response['message']='Data person failed to add.';
        return $response;
      }
    }
}
// update person
  public function update_person($id,$name,$address,$phone){
if($id == '' || empty($name) || empty($address) || empty($phone)){
      return $this->empty_response();
    }else{
      $where = array(
        "id"=>$id
      );
$set = array(
        "name"=>$name,
        "address"=>$address,
        "phone"=>$phone
      );
$this->db->where($where);
      $update = $this->db->update("tb_person",$set);
      if($update){
        $response['status']=200;
        $response['error']=false;
        $response['message']='Edit data person.';
        return $response;
      }else{
        $response['status']=502;
        $response['error']=true;
        $response['message']='Data person failed to edit.';
        return $response;
      }
    }
}
}
?>