<?php
// import library dari REST_Controller
require APPPATH . 'libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

// extends class dari REST_Controller
class TestApi extends REST_Controller{
// constructor
  public function __construct(){
    parent::__construct();
  }
public function index_get(){
// testing response
    $response['status']=200;
    $response['error']=false;
    $response['message']='Hai from response';
// tampilkan response
    $this->response($response);
}
public function user_get(){
// testing response
    $response['status']=200;
    $response['error']=false;
    $response['user']['username']='ainirazelan';
    $response['user']['email']='airaz96@gmail.com';
    $response['user']['detail']['full_name']='Nurul Aini';
    
//tampilkan response
    $this->response($response);
}
}
?>