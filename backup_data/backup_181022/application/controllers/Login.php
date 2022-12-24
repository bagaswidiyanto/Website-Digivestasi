<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function index()
	{
        $this->load->library('form_validation');
		
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
			$this->web='content/v_login';
			$this->layout();
		} else {
			$this->_login();
			// redirect(base_url());
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('tbl_member',['email' => $email])->row_array();
		
		if ($user) {
			if (password_verify($password,$user['password'])) {
				$data = [
					'user_id' => $user['id']
				];
				$this->session->set_userdata($data);

				$getUser = $this->db->get_where('tbl_member',['id'=>$this->session->userdata('user_id')])->row_array();
				redirect(base_url());

			} else {
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Wrong password!</div>');
				redirect(base_url('login'));
			}

		} else {
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email is not registered!</div>');
			redirect(base_url('login'));
		}
	}

}