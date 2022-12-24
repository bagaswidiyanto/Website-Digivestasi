<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller 
 { 

   //set the class variable.
   var $template  = array();
   var $data      = array();
   //Load layout    
   public function layout() {
   	date_default_timezone_set("Asia/Jakarta"); 

   	 $this->CI =& get_instance();


     // $this->data['website']=$this->CI->db->get('tbl_navigation')->row();
     $this->data['website']=$this->CI->db->get_where('tbl_navigation',array('id'=>'17'))->row();

     // $this->data['slide']=$this->CI->db->get('tbl_slider');
     $this->data['slider']=$this->db->get('tbl_slider');
     //produk
     $this->data['produk']=$this->db->get('tbl_products');
     //promo
      // $this->data['promo']=$this->db->get_where('tbl_posts',array('id'=>1))->row();
     $this->data['promo']=$this->db->get('tbl_promo')->row();
     //news-exhibit
     $this->data['news']=$this->db->get('tbl_posts', 5);
      // $this->data['news']=$this->db->get_where('tbl_posts',array('id !='=>1));
      //contactus
      $this->data['contactus']=$this->db->get_where('tbl_website', array('id'=> '2'))->row();
       //logo
     // $this->data['logo']=$this->db->get('tbl_website');
      //certificate
      $this->data['certi']=$this->db->get('tbl_certificate');
      //download
      $this->data['download']=$this->db->get('tbl_download');
      //kategori
      $this->data['kategori']=$this->db->get('tbl_categories');

      $this->data['sosmed']=$this->db->get('tbl_sosmed');
      


      //Nav
       $this->data['navb']=$this->db->get_where('tbl_navigation', array('status !='=> 'Y'))->row();



     $this->template['header']   = $this->load->view('layout/header');//, $this->data
 
     $this->template['web'] = $this->load->view($this->web,$this->data);//, $this->data
     $this->template['footer'] = $this->load->view('layout/footer');//, $this->data




    

   }
}