<?php

class Template extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
    }



    function admin($data){

        $this->exist_session();
//        $this->exist_list_function();


        if (!isset($data['view_module'])){
            $data['view_module'] = $this->uri->segment(1);
        }
        $this->load->view('admin', $data);
    }

    function exist_session(){

        if ($this->session->userdata('session') == ''){
            redirect(base_url() . 'login');
        }
    }

    function exist_list_function(){
        if (sizeof($this->session->userdata('lst_function')) == 0){
            redirect(base_url() . 'login');
        }
        var_dump(sizeof($this->session->userdata('lst_function')));

    }




}