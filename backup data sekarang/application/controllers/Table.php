<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Table extends MY_Controller {

  public function index() {  

  
  	$this->data['id']=$this->input->post('id');
    // $this->data['idKategori']=$this->input->post('idKategori');

    $this->load->view('content/v_gettable.php');   
 
    

  }

}