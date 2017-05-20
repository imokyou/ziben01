<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Risk extends CI_Controller {

	public function disclosure()
	{
		$this->loadview('front/risk_disclosure');
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
