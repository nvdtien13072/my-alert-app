<?php

class YourAccount extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        var_dump('123');
    }

    function manage()
    {
        $temp = 0;
        $lst = $this->session->userdata('lst_function');
        $data['func'] = 'PROFILE';
        $data['title'] = 'Change password';
        $data['view_file'] = "manage";
        $this->load->module('template');
        $this->template->admin($data);
        for ($i = 0; $i < sizeof($lst); $i++) {

            if ($lst[$i]['Name'] == 'Mange Profile'){
                $temp ++;
            }

        }
        if ($temp == 0){
            $data['lst_function'] = $lst;

        }else{
            $data['lst_function'] = $lst;
            $data['view_file'] = "content";
            $this->load->module('template');
            $this->template->admin($data);
        }


        $menu = $this->session->userdata('session');


    }


}