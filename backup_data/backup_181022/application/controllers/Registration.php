<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends MY_Controller {

	public function index()
	{
        $this->load->library('form_validation');

        $this->form_validation->set_rules('first_name', 'First Name', 'required|trim');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_member.email]',[
            'is_unique'=>'This email has already registred!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]',[
            'min_length'=>'Password minimal 6 characters.'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]',[
            'matches'=>'Password dont match!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->web='content/v_registrasi';
            $this->layout();
        } else {
            $data = [
                'first_name' => htmlspecialchars($this->input->post('first_name')),
                'last_name' => htmlspecialchars($this->input->post('last_name')),
                'email' => htmlspecialchars($this->input->post('email')),
                'image' => 'default_user.png',
                'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
                'created_at' => date('Y-m-d H:i:s')
            ];
            $this->db->insert('tbl_member',$data);
            redirect(base_url('login'));
        }

	}

}