<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Risk extends MY_Controller {

	public function disclosure()
	{
		$this->loadview('front/risk_disclosure');
	}

}
