<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class add extends MX_Controller{
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
        $this->form_validation->set_rules('firstname','Firstname','trim|required');
        $this->form_validation->set_rules('lastname','Lastname','trim|required');
        $this->form_validation->set_rules('email','Email address','trim|valid_email|is_unique[patients.email]');
        $this->form_validation->set_rules('gender','Gender','trim|required');
        $this->form_validation->set_rules('bloodgrp','Blood Group','trim');
        $this->form_validation->set_message('is_unique','The Email you are trying to register is already in use..!!');
        if($this->form_validation->run()===FALSE)
        {
        $data['title']='Add Patient ';
        $data['module']='patients';
        $data['view_file']='add';
        echo Modules::run('templates/user_layout',$data);
        }
        else{
            $doc_id = $this->session->userdata('doc_id');
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

            if($gender==='male')
            {
                $profile_pic='male.png';
            }
            else{
                $profile_pic='female.png';
            }

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
                'Significant_history'=>$significant_history,
                'profile_pic'=>$profile_pic,
                'doc_id'=>$doc_id
            );

            $data['insert'] = $this->patients->save($patientData);

            if(!empty($data['insert']))
            {
                $this->session->set_flashdata('PatientRegistered','You have added the Patient Successfully');
                redirect('home');
            }
        


        }
    }    
}    