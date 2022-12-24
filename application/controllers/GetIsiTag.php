<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class getIsiTag extends MY_Controller {

  public function index() {  

  
  	$this->data['tag']=$this->input->post('id');
    // $this->data['idKategori']=$this->input->post('idKategori');

    $this->load->view('content/v_getIsiTag.php');   
 
    

  }

}