<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends MY_Controller {

	public function index()
	{
        $this->session->unset_userdata('user_id');
        redirect(base_url());
	}
}