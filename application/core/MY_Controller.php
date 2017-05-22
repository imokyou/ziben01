<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    protected function loadview($filename)
    {
        $clang = get_cookie('clang');
        if ($clang != 'cn') {
            $clang = 'en';
            $this->load->view($clang.'/'.$filename);
        } else {
            $this->load->view($filename);
        }
    }
}