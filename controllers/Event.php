<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {
	public function index()
	{
		print_r("expression");exit;
		$this->load->view('welcome_message');
	}
}
