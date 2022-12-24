<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends MY_Controller
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

		$this->data['iklan1'] = $this->db->get_where('tbl_iklan', array('posisi' => 1))->result();
		$this->data['iklan2'] = $this->db->get_where('tbl_iklan', array('posisi' => 2))->row();
		$this->data['iklan3'] = $this->db->get_where('tbl_iklan', array('posisi' => 3))->row();
		// $this->data['video'] = $this->db->get('tbl_video_yt')->row();

		$this->db->select('a.*');
		$this->db->from('tbl_video_yt a');
		$this->db->order_by('a.id', 'desc');
		$video = $this->db->get();
		$this->data['video'] = $video->row();

		$this->db->select('a.id,a.slug, a.image, b.kategori, a.Title, a.created_date');
		$this->db->from('tbl_posts a');
		$this->db->join('tbl_subkategori b', 'a.subKategori = b.id', 'left');
		$this->db->order_by('a.id', 'desc');
		$berita_populer = $this->db->get();
		$this->data['berita_populer'] = $berita_populer->result();

		$this->db->select('a.id,a.slug, a.image, b.kategori, a.Title, a.created_date');
		$this->db->from('tbl_posts a');
		$this->db->join('tbl_subkategori b', 'a.subKategori = b.id', 'left');
		$this->db->order_by('a.id', 'desc');
		// $this->db->limit(1);
		$headline = $this->db->get();
		$this->data['headline'] = $headline->row();

		$this->db->select('a.id,a.slug, a.image,a.Title');
		$this->db->from('tbl_posts a');
		$this->db->order_by('a.id', 'desc');
		$this->db->limit(4, 4);
		$headline_second = $this->db->get();
		$this->data['headline_second'] = $headline_second->result();


		$this->db->select('a.id,a.slug, a.image, b.kategori, a.Title, a.created_date');
		$this->db->from('tbl_posts a');
		$this->db->join('tbl_subkategori b', 'a.subKategori = b.id', 'left');
		$this->db->order_by('a.id', 'desc');
		// $this->db->limit(1);
		$side_content = $this->db->get();
		$this->data['side_content'] = $side_content->row();

		$this->db->select('a.id,a.slug, a.image, b.kategori, a.Title, a.created_date');
		$this->db->from('tbl_posts a');
		$this->db->join('tbl_subkategori b', 'a.subKategori = b.id', 'left');
		$this->db->order_by('a.id', 'desc');
		$this->db->limit(3, 3);
		$side_content_second = $this->db->get();
		$this->data['side_content_second'] = $side_content_second->result();

		$this->db->select('a.id,a.slug, a.content, a.image, b.kategori, a.Title, a.created_date');
		$this->db->from('tbl_posts a');
		$this->db->join('tbl_subkategori b', 'a.subKategori = b.id', 'left');
		$this->db->order_by('a.id', 'desc');
		$this->db->limit(5);
		$berita_terkini = $this->db->get();
		$this->data['berita_terkini'] = $berita_terkini->result();

		$this->db->select('a.id,a.slug, a.image, b.kategori, a.Title, a.created_date');
		$this->db->from('tbl_posts a');
		$this->db->join('tbl_subkategori b', 'a.subKategori = b.id', 'left');
		$this->db->order_by('a.id', 'desc');
		$this->db->limit(4);
		$berita_lainnya = $this->db->get();
		$this->data['berita_lainnya'] = $berita_lainnya->result();

		$this->db->select('a.id,a.tag_name');
		$this->db->from('tbl_tag a');
		$this->db->join('tbl_post_detail b', 'a.id = b.tagID', 'left');
		$this->db->group_by('b.tagID');
		$this->db->order_by('a.id', 'desc');
		$tag = $this->db->get();
		$this->data['tag'] = $tag->result();

		$this->db->select('a.id,a.slug,a.content, a.image, b.kategori, a.Title, a.created_date');
		$this->db->from('tbl_posts a');
		$this->db->join('tbl_subkategori b', 'a.subKategori = b.id', 'left');
		$this->db->order_by('a.id', 'desc');
		$this->db->limit(3);
		$recent = $this->db->get();
		$this->data['recent'] = $recent->result();


		$this->db->select('a.id,a.slug,a.content, a.image, b.kategori, a.Title, a.created_date');
		$this->db->from('tbl_posts a');
		$this->db->join('tbl_subkategori b', 'a.subKategori = b.id', 'left');
		$this->db->order_by('a.id', 'asc');
		$this->db->limit(3);
		$trending = $this->db->get();
		$this->data['trending'] = $trending->result();

		$this->db->select('b.id,b.slug,b.content,SUBSTRING(a.location, 24) as location, COUNT( a.id ) AS total, b.image, c.kategori, b.Title, b.created_date');
		$this->db->from('tbl_posts_counter a');
		$this->db->join('tbl_posts b', 'SUBSTRING(a.location, 24) = b.slug', 'left');
		$this->db->join('tbl_subkategori c', 'c.id = b.subKategori', 'left');
		$this->db->order_by('total', 'desc');
		$this->db->limit(5);
		$most_view = $this->db->get();
		$this->data['most_view'] = $most_view->result();




		$this->web = 'content/v_home';
		$this->layout();
	}
}