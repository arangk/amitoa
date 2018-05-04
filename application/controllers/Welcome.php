<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 *
	 */
	public function index($lang='en')
	{
		$header_data = array('lang'	=>	$lang);

		$this->load->view('main/header', $header_data);

		$this->load->view('main/main');
		$this->load->view('main/footer');
	}
}
