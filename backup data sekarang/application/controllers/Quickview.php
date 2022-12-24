<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quickview extends MY_Controller {

  public function index() {  
  
  	$this->data['id']=$this->input->post('id');

    $this->load->view('content/v_quickview.php');   

    

  }

}