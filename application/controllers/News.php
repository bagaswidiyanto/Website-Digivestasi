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
		$this->db->select('a.*,c.kategori, e.tag_name');
		$this->db->from('tbl_posts a');
		$this->db->join('tbl_post_detail b', 'b.headerID = a.id', 'left');
		$this->db->join('tbl_subkategori c', 'c.id = a.subKategori', 'left');
		$this->db->join('tbl_post_detail d', 'd.headerID = a.id', 'left');
		$this->db->join('tbl_tag e', 'd.tagID = e.id', 'left');
		// $this->db->where('f.tagID', '1');
		$this->db->group_by('a.id');
		$this->db->order_by('a.created_date', 'desc');
		$this->db->limit($config['per_page']);
		$this->db->offset($page);
		$this->db->group_start();
		$this->db->like('a.Title', $param);
		$this->db->or_like('c.kategori', $param);
		$this->db->or_like('e.tag_name', $param);
		$this->db->group_end();


		$berita = $this->db->get();
		$this->data['berita'] = $berita;
		$this->data['pagination'] = $this->pagination->create_links();

		$this->db->select('a.id,a.tag_name');
		$this->db->from('tbl_tag a');
		$this->db->join('tbl_post_detail b', 'a.id = b.tagID', 'left');
		$this->db->group_by('b.tagID');
		$this->db->order_by('a.id', 'desc');
		$tag = $this->db->get();
		$this->data['tag'] = $tag->result();

		$this->db->select('a.id,a.slug, a.image,a.Title,a.created_date');
		$this->db->from('tbl_posts a');
		$this->db->order_by('a.id', 'desc');
		$this->db->limit(8);
		$berita_populer = $this->db->get();
		$this->data['berita_populer'] = $berita_populer->result();

		$this->web = 'content/v_news';
		$this->layout();
	}

	public function quickview()
	{
		$this->load->view('content/v_quickview');
	}

	public function detail()
	{

		$id = $this->uri->segment('3');

		$this->data['iklan4'] = $this->db->get_where('tbl_iklan', array('posisi' => 4))->row();
		$this->data['iklan5'] = $this->db->get_where('tbl_iklan', array('posisi' => 5))->row();


		$this->db->select('a.id,a.tag_name');
		$this->db->from('tbl_tag a');
		$this->db->join('tbl_post_detail b', 'a.id = b.tagID', 'left');
		$this->db->group_by('b.tagID');
		$this->db->order_by('a.id', 'desc');
		$tag = $this->db->get();
		$this->data['tag'] = $tag->result();

		$this->db->select('a.id,a.slug, a.content, a.image, b.kategori, a.Title, a.created_date, a.fb_share, a.twitter_share, a.wa_share, a.telegram_share');
		$this->db->from('tbl_posts a');
		$this->db->join('tbl_subkategori b', 'a.subKategori = b.id', 'left');
		$this->db->where('a.slug', $id);
		$news_detail = $this->db->get();
		$this->data['news_detail'] = $news_detail->row();

		$this->db->select('a.id,a.slug, a.image, b.kategori, a.Title, a.created_date');
		$this->db->from('tbl_posts a');
		$this->db->join('tbl_subkategori b', 'a.subKategori = b.id', 'left');
		$this->db->order_by('a.id', 'desc');
		$this->db->limit(6);
		$berita_lainnya = $this->db->get();
		$this->data['berita_lainnya'] = $berita_lainnya->result();




		$this->db->select('a.id,a.slug, a.image,a.Title');
		$this->db->from('tbl_posts a');
		$this->db->order_by('a.id', 'desc');
		$this->db->limit(4);
		$berita_terpopuler = $this->db->get();
		$this->data['berita_terpopuler'] = $berita_terpopuler->result();


		$this->db->select('a.id,a.slug, a.image, b.kategori, a.Title, a.created_date');
		$this->db->from('tbl_posts a');
		$this->db->join('tbl_subkategori b', 'a.subKategori = b.id', 'left');
		$this->db->order_by('a.id', 'desc');
		$this->db->limit(4);
		$berita_untukmu = $this->db->get();
		$this->data['berita_untukmu'] = $berita_untukmu->result();



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
		$id = $this->uri->segment('3');
		$cek = $this->db->query("SELECT * FROM tbl_posts WHERE slug = '" . $id . "'")->row();


		$create_log = $this->db->query("INSERT INTO tbl_posts_counter(ip,location,`timestamp`,post_id)VALUES('$ip', '$location',NOW(), '$cek->id') ");
	}
}