<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	public function index()
	{
		$this->web='content/v_login';
		$this->layout();
	}
}