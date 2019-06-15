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
        $this->load->model('prescriptions');
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
		$patient_id = $this->uri->segment(2);
        if(empty($id))
        {
            show_404();
        }
        else{
            $data['view_patient']=$this->patients->get_single_patient($id);
			$data['view_prescriptions']=$this->prescriptions->get_prescription($patient_id);
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
        $this->form_validation->set_rules('email','Email address','trim|valid_email');
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
    public function edit_patient_pic($id)
    {
        $id = $this->uri->segment(2);
        if(empty($id))
        {
            show_404();
        }
        else{
            $data['edit_patient_pic']=$this->patients->get_single_patient($id);
            $data['title']='Edit Patient Pic';
            $data['module']='patients';
            $data['view_file']='edit_patient_pic';
            echo Modules::run('templates/user_layout',$data);
        }
       }
    
       public function update_profile_pic()
       {
       
         $config['upload_path']         = './assets/images/users/';
         $config['allowed_types']       = 'jpg|jpeg|png';
         $config['max_size']            = 5000;
         $config['overwrite']           = TRUE;
         $config['remove_spaces']       = TRUE;
         $config['encrypt_name']        = TRUE;
       
         $this->load->library('upload', $config);
         $field_name = 'profilefile';
       
         if( ! $this->upload->do_upload($field_name))
         {
             $data['error'] = $this->upload->display_errors();
             $this->session->set_flashdata('UpdateProfilePicError', $data['error']);
             redirect('home');
         }
       
         else
         {
       
            $id=$this->input->post('id');
          
           $data['profile_pic'] = $this->patients->find($id);
           $profile_pic = $data['profile_pic']['profile_pic'];
       
           $image_path = $this->upload->data();
           $data = array(
             'profile_pic' => $image_path[file_name],
           );
       
           $data['update'] = $this->patients->save($data, $id);
       
           if($data['update'] == $id)
           {
             if($profile_pic !== 'male.png' && $profile_pic !== 'female.png')
             {
               unlink(FCPATH . 'assets/images/users/'. $profile_pic);
             }
       
             $this->session->set_flashdata('ProfileImageUpdated',
                                           'Image Updated Successfully');
       
             redirect('home');
       
           }
       
           else {
             echo 'can not update image';
           }
         }
       
       
       }

       public function add_prescription($id)
    {
        $id = $this->uri->segment(2);
        if(empty($id))
        {
            show_404();
        }
        else{
            $data['add_prescription']=$this->patients->get_single_patient($id);
            $data['title']='Add prescription';
            $data['module']='patients';
            $data['view_file']='add_prescription';
            echo Modules::run('templates/user_layout',$data);
        }
	   }
	   
	   public function add_prescription_pic()
	   {
		$config['upload_path']         = './assets/images/users/';
		$config['allowed_types']       = 'jpg|jpeg|png';
		$config['max_size']            = 5000;
		$config['overwrite']           = TRUE;
		$config['remove_spaces']       = TRUE;
		$config['encrypt_name']        = TRUE;
	  
		$this->load->library('upload', $config);
		$field_name = 'profilefile';
	  
		if( ! $this->upload->do_upload($field_name))
		{
			$data['error'] = $this->upload->display_errors();
			$this->session->set_flashdata('UpdatePrescriptionPicError', $data['error']);
			redirect('home');
		}
	  
		else
		{
	  
           $patient_id=$this->input->post('patient_id');
		   echo $patient_id;
		 
		  $data['profile_pic'] = $this->patients->find($patient_id);
		  $profile_pic = $data['profile_pic']['profile_pic'];
	  
		  $image_path = $this->upload->data();
		  $data = array(
			'profile_pic' => $image_path[file_name],
			'patient_id'=>$patient_id,
		  );
	  
		  $data['insert'] = $this->prescriptions->save($data);
	  
		  if(!empty($data['insert']))
            {
                $this->session->set_flashdata('PrescriptionPicadded','You have added the Prescription Successfully');
                redirect('home');
            }
	  
		  else {
			echo 'can not add prescription';
		  }
		}
	  
	  
	  }
	   }

       
          

