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
        $doc_id = $this->session->userdata('doc_id');
        $data['patients']=$this->patients->get_patients($doc_id);
        $data['title']='Home';
        $data['module']='patients';
        $data['view_file']='home';
        echo Modules::run('templates/user_layout',$data);
    }
    
    public function view_patient($id)
    {
        $id = $this->uri->segment(2);
        if(empty($id))
        {
            show_404();
        }
        else{
            $data['view_patient']=$this->patients->get_single_patient($id);
            $data['title']='View Patient';
            $data['module']='patients';
            $data['view_file']='view_patient';
            echo Modules::run('templates/user_layout',$data);
        }
    
    }
    public function edit_patient($id)
    {
        $id = $this->uri->segment(2);
        if(empty($id))
        {
            show_404();
        }
        else{
            $data['edit_patient']=$this->patients->get_single_patient($id);
            $data['title']='Edit Patient';
            $data['module']='patients';
            $data['view_file']='edit_patient';
            echo Modules::run('templates/user_layout',$data);
        }
       }
    public function edit_patientinfo()
    {
        $this->form_validation->set_rules('firstname','Firstname','trim|required');
        $this->form_validation->set_rules('lastname','Lastname','trim|required');
        $this->form_validation->set_rules('email','Email address','trim|valid_email|is_unique[patients.email]');
        $this->form_validation->set_rules('bloodgrp','Blood Group','trim');
        $this->form_validation->set_message('is_unique','The Email you are trying to register is already in use..!!');
        if($this->form_validation->run()===FALSE)
        {   
            $id=$this->input->post('id');
            $data['edit_patient']=$this->patients->get_single_patient($id);
            $data['title']='Edit Patient';
            $data['module']='patients';
            $data['view_file']='edit_patient';
            echo Modules::run('templates/user_layout',$data);
        }
        else{
            $firstname = $this->input->post('firstname');
            $lastname = $this->input->post('lastname');
            $email = $this->input->post('email');
            $age = $this->input->post('age');
            $gender = $this->input->post('gender');
            $address = $this->input->post('address');
            $contact = $this->input->post('contact');
            $bloodgrp = $this->input->post('bloodgrp');
            $allergy = $this->input->post('allergy');
            $significant_history = $this->input->post('significant_history');
            $id=$this->input->post('id');
            $patientData=array(
                'firstname'=>$firstname,
                'lastname'=>$lastname,
                'email'=>$email,
                'age'=>$age,
                'gender'=>$gender,
                'address'=>$address,
                'Contact_no'=>$contact,
                'Bloodgrp'=>$bloodgrp,
                'AllergicTo'=>$allergy,
                'Significant_history'=>$significant_history
                
            );

            $data['update']=$this->patients->save($patientData,$id);
            if($data['update']==$id)
            {
                $this->session->set_flashdata('Patientupdated','Patient Info updated successfully!');
                redirect('home');
            }
            else
            {
                echo 'Profile cannot be updated';
            }

        }
    }
}