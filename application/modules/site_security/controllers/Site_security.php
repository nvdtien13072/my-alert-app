<?php

//Thay doi ten function SiteSecurity
class Site_security extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function check_session($session){
        $this->load->library('session');

        $data = array(
            'session' => $session,
        );
        $this->session->set_userdata($data);

//        $this->output->set_content_type('application/json')->set_output(json_encode(array('data' => $session)));
    }

    function get_list_function_to_session(){

        $lst = $this->input->post('Name');
        $data = array(
            'lst_function' => $lst,
        );
        $this->session->set_userdata($data);
//        $this->output->set_content_type('application/json')->set_ưoutput(json_encode(array('data' => $lst)));
    }

    function set_list_function(){
        $data = $this->input->post(data);
    }

    function logout(){
        $this->session->unset_userdata('session');
        redirect(base_url().'login');
    }

    function not_allow(){
        $this->load->module('template');
        $data['view_file'] = 'not_allow';
        $data['view_module'] = 'site_security';
        $this->template->admin($data);

    }

}