<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->init_data = array(
            'member_nums' => $this->gen_member_num(),
            'member_online' => rand(300, 500),
            'member_hit' => 12,
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
        $member_nums = 3000;
        $times = intval(date('Ymd')) - 20170704;
        $member_nums = $member_nums + $times * 200 ;
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
        $total_offer = 214211;
        $times = intval(date('Ymd')) - 20170704;
        $total_offer = $total_offer + $times * rand(102011, 156852);
        return $total_offer;
    }


}