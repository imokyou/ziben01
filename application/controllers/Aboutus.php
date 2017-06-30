<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends MY_Controller {

	public function index()
	{
		$this->loadview('front/aboutus', $this->init_data);
	}

}