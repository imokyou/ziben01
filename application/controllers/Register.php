<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$this->loadview('front/register');
	}

	private function loadview($filename) 
	{
		$clang = get_cookie('clang');
		var_dump($clang); 
		if (!$clang || $clang == 'cn') {
			print 111111;
			$this->load->view($filename);
		} else {
			print 2222222;
			$this->load->view($clang.'/'.$filename);
		}
	}

}