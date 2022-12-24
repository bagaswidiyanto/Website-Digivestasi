<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShareSosmed extends MY_Controller {

	public function index()
	{
		$id = $this->input->post('id');
		$jenis = $this->input->post('sosmed');
		
		$this->data = $this->db->query("SELECT fb_share,twitter_share,wa_share,telegram_share FROM tbl_posts where id = '".$id."' ")->row();
		$response['jumlah'] = 0;
		if ($jenis=='facebook') {
			$getLast = $this->data->fb_share + 1;
			$updateShare = $this->db->query("UPDATE tbl_posts SET fb_share='".$getLast."' WHERE id='".$id."'"); 
			$countNow = $this->data = $this->db->query("SELECT fb_share FROM tbl_posts where id = '".$id."' ")->row()->fb_share;
		}
		if ($jenis=='twitter') {
			$getLast = $this->data->twitter_share + 1;
			$updateShare = $this->db->query("UPDATE tbl_posts SET twitter_share='".$getLast."' WHERE id='".$id."'"); 
			$countNow = $this->data = $this->db->query("SELECT twitter_share FROM tbl_posts where id = '".$id."' ")->row()->twitter_share;
		}
		if ($jenis=='whatsapp') {
			$getLast = $this->data->wa_share + 1;
			$updateShare = $this->db->query("UPDATE tbl_posts SET wa_share='".$getLast."' WHERE id='".$id."'"); 
			$countNow = $this->data = $this->db->query("SELECT wa_share FROM tbl_posts where id = '".$id."' ")->row()->wa_share;
		}
		if ($jenis=='telegram') {
			$getLast = $this->data->telegram_share + 1;
			$updateShare = $this->db->query("UPDATE tbl_posts SET telegram_share='".$getLast."' WHERE id='".$id."'"); 
			$countNow = $this->data = $this->db->query("SELECT telegram_share FROM tbl_posts where id = '".$id."' ")->row()->telegram_share;
		}
		$response['jumlah'] = $countNow;

		echo json_encode($response);
	}
}
