<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends MY_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$param = @$_GET['search'];

		$this->data['tag'] = $this->input->get('id');
		$tag = $this->input->get('id');
		$this->load->library('pagination');

		$this->db->select('tbl_posts.*');
		$this->db->from('tbl_posts');
		$this->db->join('tbl_post_detail f', 'f.headerID = tbl_posts.id', 'left');
		$this->db->where('f.tagID', '1');

		$query =  $this->db->get();;
		$jml = $query->num_rows();
		// $jml = $this->db->count_all('tbl_posts');


		$config['base_url'] = base_url() . 'news/index/';
		$config['uri_segment'] = 3;
		$config['total_rows'] = $jml;
		$config['per_page'] = 6;
		$config['full_tag_open'] = '<center><ul class="pagination pagination-sm no-margin justify-content-center">';
		$config['full_tag_close'] = '</ul></center>';
		$config['cur_tag_open'] = '<li><a><b>';
		$config['cur_tag_close'] = '</b></a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$this->pagination->initialize($config);
		$this->db->select('tbl_posts.*');
		$this->db->from('tbl_posts');
		$this->db->join('tbl_post_detail f', 'f.headerID = tbl_posts.id', 'left');
		$this->db->where('f.tagID', '1');
		$this->db->order_by('created_date', 'desc');
		$this->db->limit($config['per_page']);
		$this->db->offset($page);
		// $this->db->like('Title',$param);


		$berita = $this->db->get();
		$this->data['berita'] = $berita;
		$this->data['pagination'] = $this->pagination->create_links();

		$this->web = 'content/v_news';
		$this->layout();
	}

	public function quickview()
	{
		$this->load->view('content/v_quickview');
	}

	public function detail()
	{

		$this->data['subKat'] = $this->db->get_where('tbl_subkategori', array('aktif' => 'Y'))->row();
		$this->data['id'] = $this->input->post('id');

		$this->web = 'content/v_newsdetail';
		$this->layout();
		$this->viewersPosting();
	}

	public function tag()
	{
		$this->data['tag'] = $this->input->get('id');

		$tag = $this->input->get('id');
		$this->load->library('pagination');

		$this->db->select('tbl_posts.*');
		$this->db->from('tbl_posts');
		$this->db->join('tbl_post_detail f', 'f.headerID = tbl_posts.id', 'left');
		$this->db->where('f.tagID', $tag);

		$query =  $this->db->get();
		$jml = $query->num_rows();
		// $jml = $this->db->count_all('tbl_posts');


		$config['base_url'] = base_url() . 'news/tag/' . $tag . '/index/';
		$config['uri_segment'] = 3;
		$config['total_rows'] = $jml;
		$config['per_page'] = 6;
		$config['full_tag_open'] = '<center><ul class="pagination pagination-sm no-margin justify-content-center">';
		$config['full_tag_close'] = '</ul></center>';
		$config['cur_tag_open'] = '<li><a><b>';
		$config['cur_tag_close'] = '</b></a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$this->pagination->initialize($config);
		$this->db->select('tbl_posts.*');
		$this->db->from('tbl_posts');
		$this->db->join('tbl_post_detail f', 'f.headerID = tbl_posts.id', 'left');
		$this->db->where('f.tagID', $tag);
		$this->db->group_by('id');
		$this->db->order_by('created_date', 'desc');
		$this->db->limit($config['per_page']);
		$this->db->offset($page);
		// $this->db->like('Title',$param);


		$berita = $this->db->get();
		$this->data['berita'] = $berita;
		$this->data['pagination'] = $this->pagination->create_links();

		$this->web = 'content/v_news';
		$this->layout();
	}

	function viewersPosting()
	{
		$ip = $_SERVER['REMOTE_ADDR']; // menangkap ip pengunjung
		$location = $_SERVER['PHP_SELF']; // menangkap server path

		$create_log = $this->db->query("INSERT INTO tbl_posts_counter(ip,location,`timestamp`)VALUES('$ip', '$location',NOW()) ");
	}
}