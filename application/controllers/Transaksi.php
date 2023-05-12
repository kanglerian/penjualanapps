<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function index()
	{
		$this->load->view('components/header');
		$this->load->view('pages/transaksi/index');
		$this->load->view('components/footer');
	}
}
