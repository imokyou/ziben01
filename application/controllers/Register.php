<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {

	public function index()
	{
		$this->loadview('front/register', $this->init_data);
	}

}