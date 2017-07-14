<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends MY_Controller {

	public function index()
	{
		$this->loadview('front/video', $this->init_data);
	}

}