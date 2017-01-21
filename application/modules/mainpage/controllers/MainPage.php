<?php

class StoreAccount extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $lst = $this->session->userdata('lst_function');
        if (sizeof($lst) > 0){
            $data['view_file'] = "default";
            $this->load->module('template');
            $this->template->admin($data);
        }else{
            $this->load->module('site_security');
            $this->site_security->not_allow();
        }

    }




}