<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class login extends MX_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
        $this->output->set_header('Pragma: no-cache');
        $this->load->model('doctor');
        $this->load->library('MY_Form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('username','Username','trim|required|callback_login_check');
        $this->form_validation->set_rules('password','Password','trim|required');
        if($this->form_validation->run($this)===FALSE)
        {
        $data['title']='Login';
        $data['module']='patients';
        $data['view_file']='login';
        echo Modules::run('templates/user_layout',$data);
        }
        else{
            redirect('home');
        }
    }

        public function login_check()
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if(empty($username))
            {
                $this->form_validation->set_message('login_check','Username is required');
                return false;
            }
            $data['docData']=$this->doctor->find_by('username',$username,NULL,TRUE);

            if(empty($data['docData']))
            {
                $this->form_validation->set_message('login_check','Invalid Username or Password');
                return false;
            }
            else{
                $storedpassword = $data['docData']['password'];
                $this->load->library('bcrypt');
                if($this->bcrypt->check_password($password,$storedpassword))
                {
                    $newdata = array(
                        'doc_id'=> $data['docData']['id'],
                        'username'=> $data['docData']['username'],
                        'is_logged_in'=> TRUE
                    );
                    $this->session->set_userdata($newdata);
                    return true;
                }
                else{
                    $this->form_validation->set_message('login_check','Invalid Username or Password');
                return false;
                }
            }
        }
        public function logout()
        {
            $this->session->sess_destroy();
            redirect('login','refresh');
        }

}
