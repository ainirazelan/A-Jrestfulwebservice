<?php
require APPPATH . 'libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Employee extends REST_Controller{
// construct
  public function __construct(){
    parent::__construct();
    $this->load->model('EmployeeM');
  }
// method index to show all employee data using get method
  public function index_get(){
    $response = $this->EmployeeM->all_employee();
    $this->response($response);
  }
// add data employee using post method
  public function add_post(){
    $response = $this->EmployeeM->add_employee(
        $this->post('name'),
        $this->post('address'),
        $this->post('phone'),
        $this->post('position')
      );
    $this->response($response);
  }
// update data employee using put method
  public function update_put(){
    $response = $this->EmployeeM->update_employee(
        $this->put('id'),
        $this->put('name'),
        $this->put('address'),
        $this->put('phone'),
        $this->put('position')
      );
    $this->response($response);
  }
// delete data employee using delete method
  public function delete_delete(){
    $response = $this->EmployeeM->delete_employee(
        $this->delete('id')
      );
    $this->response($response);
  }
}
?>