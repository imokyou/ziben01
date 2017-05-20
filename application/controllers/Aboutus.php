<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {

	public function index()
	{
		$this->loadview('front/aboutus');
	}

	private function loadview($filename) 
	{
		$clang = get_cookie('clang');
		if ($clang == '' || $clang == 'cn') {
			$this->load->view($filename);
		} else {
			$this->load->view($clang.'/'.$filename);
		}
	}

}