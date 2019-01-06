<?php
require APPPATH . 'libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Product extends REST_Controller{
// construct
  public function __construct(){
    parent::__construct();
    $this->load->model('ProductM');
  }
// method index to show all product data using get method
  public function index_get(){
    $response = $this->ProductM->all_product();
    $this->response($response);
  }
// add data product using post method
  public function add_post(){
    $response = $this->ProductM->add_product(
        $this->post('name'),
        $this->post('price')
      );
    $this->response($response);
  }
// update data product using put method
  public function update_put(){
    $response = $this->ProductM->update_product(
        $this->put('id'),
        $this->put('name'),
        $this->put('price')
        
      );
    $this->response($response);
  }
// // delete data product using delete method
  public function delete_delete(){
    $response = $this->ProductM->delete_product(
        $this->delete('id')
      );
    $this->response($response);
  }
}
?>