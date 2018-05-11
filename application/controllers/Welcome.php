<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 *
	 */
	public function index()
	{
	    if(!empty($this->input->get('lang'))){
	        $lang = $this->input->get('lang');
        }else{
	        $lang = 'en';
        }

        if($lang=='en'){
	        $this->lang->load('en_ver', 'en');
        }else{
            $this->lang->load('nl_ver', 'nl');
        }
		$header_data = array('lang'	=>	$lang);

		$this->load->view('main/header', $header_data);

		$this->load->view('main/main');
		$this->load->view('main/footer');
	}
}
