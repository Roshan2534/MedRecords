<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class home extends MX_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('patients');
    }
    public function index(){
        $data['patients']=$this->patients->get_patients();
        $data['title']='Home';
        $data['module']='patients';
        $data['view_file']='home';
        echo Modules::run('templates/user_layout',$data);
    }
}    