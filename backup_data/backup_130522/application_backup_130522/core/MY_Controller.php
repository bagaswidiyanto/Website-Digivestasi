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
      
      $this->data['today']=$this->getCounter('today'); //hari ini
      $this->data['online']=$this->getCounter('online'); //hari ini online
      $this->data['all']=$this->getCounter('all'); //semua visitor
      


      //Nav
       $this->data['navb']=$this->db->get_where('tbl_navigation', array('status !='=> 'Y'))->row();



     $this->template['header']   = $this->load->view('layout/header');//, $this->data
 
     $this->template['web'] = $this->load->view($this->web,$this->data);//, $this->data
     $this->template['footer'] = $this->load->view('layout/footer');//, $this->data
     $this->initCounter(); //insert statistik

   }


		function initCounter() {
 				
      $ip = $_SERVER['REMOTE_ADDR']; // menangkap ip pengunjung
      $location = $_SERVER['PHP_SELF']; // menangkap server path
  
      //membuat log dalam tabel database 'counter'
      $check=$this->db->query("select * from tbl_counter where ip='".$ip."' and date(`timestamp`)=CURDATE()");
      $check2=$check->row();
      if($check->num_rows()>0){

      $create_log = $this->db->query("UPDATE tbl_counter SET `timestamp`=NOW() WHERE id='".$check2->id."'"); 
      }else{
      $create_log = $this->db->query("INSERT INTO tbl_counter(ip,location,`timestamp`)VALUES('$ip', '$location',NOW()) ");
      }
    }

    function getCounter($mode) {
			 
			// if(is_null($location)) {
			//      $location = $_SERVER['PHP_SELF'];
			// }
			if($mode == "today") // query perhitungan IP Address unik
			{
			     $get_res = $this->db->query("SELECT DISTINCT count(ip) as jml FROM tbl_counter where date(`timestamp`)=CURDATE()");
			}else if($mode=="online"){
			     $get_res = $this->db->query("SELECT DISTINCT count(ip) as jml FROM tbl_counter where `timestamp` < DATE_ADD(NOW(), INTERVAL -10 minute) AND date(`timestamp`)=CURDATE()");
			}     else{ // query perhitungan seluruh IP Address (tidak unik)
			     $get_res = $this->db->query("SELECT count(ip) as jml FROM tbl_counter");
			}
			 
			$res = $get_res->row();
			 
			return $res;
			 
		}
}