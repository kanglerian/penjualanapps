<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('components/header');
		$this->load->view('pages/dashboard/index');
		$this->load->view('components/footer');
	}
}
