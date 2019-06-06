<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class docadd extends MX_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
    $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
    $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
    $this->output->set_header('Pragma: no-cache');
        $this->load->model('doctor');
    }
    public function index(){
        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required');
        if($this->form_validation->run()===FALSE)
        {
        $data['title']='Add Doc';
        $data['module']='patients';
        $data['view_file']='docadd';
        echo Modules::run('templates/user_layout',$data);
        }
        else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->load->library('bcrypt');
            $hash = $this->bcrypt->hash_password($password);

            $docData=array(
                'username'=>$username,
                'password'=>$hash
            );
            $data['insert'] = $this->doctor->save($docData);
            if(!empty($data['insert']))
            {
                $this->session->set_flashdata('DocRegistered','You have added the Doctor Successfully');
                redirect('login');
            }
        }
    }
}