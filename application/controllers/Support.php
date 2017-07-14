<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Support extends MY_Controller {

	public function index()
	{
		$this->loadview('front/support', $this->init_data);
	}

}