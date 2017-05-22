<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contract extends MY_Controller {

	public function index()
	{
		$this->loadview('front/contract');
	}

}
