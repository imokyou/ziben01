<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->init_data = array(
            'member_nums' => $this->gen_member_num(),
            'member_online' => rand(100, 400),
            'member_hit' => rand(2000, 2500),
            'member_paid' => $this->gen_member_paid(),
            'total_offer' => $this->gen_total_offer(),
        );
    }

    protected function loadview($filename, $data=array())
    {
        $clang = get_cookie('clang');
        if ($clang != 'cn') {
            $clang = 'en';
            $this->load->view($clang.'/'.$filename, $data);
        } else {
            $this->load->view($filename, $data);
        }
    }

    protected function gen_member_num() 
    {
        $member_nums = 30456;
        $member_nums = $member_nums + (intval(date('m')) + intval(date('d')))*10 ;
        return $member_nums;
    }

    protected function gen_member_paid() 
    {
        $member_paid = 258982.00;
        $member_paid = $member_paid + (intval(date('m')) + intval(date('d')))*10;
        return $member_paid;
    }

    protected function gen_total_offer() 
    {
        $total_offer = 21421.25;
        $total_offer = $total_offer + (intval(date('m')) + intval(date('d')))*10;
        return $total_offer;
    }


}