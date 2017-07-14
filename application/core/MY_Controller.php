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
        $this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
        
        $mtime = rand(10, 30);
        if ( ! $member_nums = $this->cache->get('member_nums'))
        {
            $value = 3000;
            $member_nums = array(
                'value' => $value,
                'next_time' => date('YmdHis', strtotime("+{$mtime} minute"))
            );
            $this->cache->save('member_nums', $member_nums, 86400*7);
        } else {
            $value = $member_nums['value'];
            $itime = time() - strtotime($member_nums['next_time']);
            $ntime = ceil($itime / (25*60));
            if ($itime >= 0) {
                $member_nums = array(
                    'value' => $value + $ntime*rand(3, 9),
                    'next_time' => date('YmdHis', strtotime("+{$mtime} minute"))
                );
                $this->cache->save('member_nums', $member_nums, 86400*7);
            }
        }
        return $member_nums['value'];
    }

    protected function gen_member_paid() 
    {
        $this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
        
        $mtime = rand(30, 60);
        if ( ! $member_paid = $this->cache->get('member_paid'))
        {
            $value = 258982.00;
            $member_paid = array(
                'value' => $value,
                'next_time' => date('YmdHis', strtotime("+{$mtime} minute"))
            );
            $this->cache->save('member_paid', $member_paid, 86400*7);
        } else {
            $value = $member_paid['value'];
            $itime = time() - strtotime($member_paid['next_time']);
            $ntime = ceil($itime / (50*60));
            if ($itime >= 0) {
                $member_paid = array(
                    'value' => $value + $ntime*rand(97, 173),
                    'next_time' => date('YmdHis', strtotime("+{$mtime} minute"))
                );
                $this->cache->save('member_paid', $member_paid, 86400*7);
            }
        }
        return $member_paid['value'];
    }

    protected function gen_total_offer() 
    {
        $this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
        
        $mtime = rand(30, 60);
        if ( ! $total_offer = $this->cache->get('total_offer'))
        {
            $value = 214211;
            $total_offer = array(
                'value' => $value,
                'next_time' => date('YmdHis', strtotime("+{$mtime} minute"))
            );
            $this->cache->save('total_offer', $total_offer, 86400*7);
        } else {
            $value = $total_offer['value'];
            $itime = time() - strtotime($total_offer['next_time']);
            $ntime = ceil($itime / (50*60));
            if ($itime >= 0) {
                $total_offer = array(
                    'value' => $value + $ntime*rand(1217, 2316),
                    'next_time' => date('YmdHis', strtotime("+{$mtime} minute"))
                );
                $this->cache->save('total_offer', $total_offer, 86400*7);
            }
        }
        return $total_offer['value'];
    }


}