<?php

class Login extends MX_Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->load->view('login');
    }

    function submit_login(){
        $data['title'] = "Change Password";
        $this->load->view('login',$data);
    }
}