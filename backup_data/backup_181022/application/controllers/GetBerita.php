<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GetBerita extends MY_Controller {

  public function index() {  

  
  	$this->data['id']=$this->input->post('id');
    $this->data['idKategori']=$this->input->post('idKategori');

    // $this->load->library('pagination');

    // $query = $this->db->where('idKategori', $)->get('tbl_posts');
    // $jml = $query->num_rows();
    // // $jml=$this->db->count_all('tbl_posts');
    // $config['base_url'] = base_url().'hotnews/index/';
    // $config['uri_segment'] = 3;
    // $config['total_rows'] = $jml;
    // $config['per_page'] = 6;
    // $config['full_tag_open'] = '<center><ul class="pagination pagination-sm no-margin justify-content-center">';
    // $config['full_tag_close'] = '</ul></center>';
    // $config['cur_tag_open'] = '<li><a><b>';
    // $config['cur_tag_close'] = '</b></a></li>';
    // $config['num_tag_open'] = '<li>';
    // $config['num_tag_close'] = '</li>';
    // $config['next_tag_open'] = '<li>';
    // $config['next_tag_close'] = '</li>';
    // $config['prev_tag_open'] = '<li>';
    // $config['prev_tag_close'] = '</li>';
    // $config['first_tag_open'] = '<li>';
    // $config['first_tag_close'] = '</li>';
    // $config['last_tag_open'] = '<li>';
    // $config['last_tag_close'] = '</li>';
    // $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    // $this->pagination->initialize($config);
    // $this->db->where('subKategori',);
    // $this->db->order_by('created_date','desc');
    // $this->db->limit($config['per_page']);
    // $this->db->offset($page);
    // $this->db->like('Title',$param);
    // $berita=$this->db->get('tbl_posts');

    $this->load->view('content/v_getberita.php');   
    // $this->layout();
    

  }

}