<?php

class StoreAccount extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
    }


    function manage()
    {
        $temp = 0;
        $lst = $this->session->userdata('lst_function');
        for ($i = 0; $i < sizeof($lst); $i++){

            if ($lst[$i]['Name'] == MANAGE_ACCOUNT.'1'){
                $temp ++;
            }
        }
        if ($temp == 1){
            $data['lst_function'] = $lst;
            $data['view_file'] = "manage";
            $this->load->module('template');
            $this->template->admin($data);

        }else{
            $this->load->module('site_security');
            $this->site_security->not_allow();
        }


        $menu = $this->session->userdata('session');




    }


}