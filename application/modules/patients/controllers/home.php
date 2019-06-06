<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class home extends MX_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
    $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
    $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
    $this->output->set_header('Pragma: no-cache');
        $this->load->model('patients');
        if($this->session->userdata('is_logged_in')==FALSE)
        {
            redirect('login');
        }
    }
    public function index(){
        $data['patients']=$this->patients->get_patients();
        $data['title']='Home';
        $data['module']='patients';
        $data['view_file']='home';
        echo Modules::run('templates/user_layout',$data);
    }
    
    public function edit_patient_pic()
    {
        $data['patients']=$this->patients->get_patients();
        $data['title']='Edit Patient Pic';
        $data['module']='patients';
        $data['view_file']='edit_patient_pic';
        $id = $this->session->userdata('user_id');
        $data['patient_profile']=$this->patients->find($id);
        echo Modules::run('templates/user_layout',$data);
    }
}    