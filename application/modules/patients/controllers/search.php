<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class search extends MX_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
    $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
    $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
    $this->output->set_header('Pragma: no-cache');
        $this->load->model('patients');
    }
    public function index(){
		$this->form_validation->set_rules('firstname','Firstname','trim|required');
        if($this->form_validation->run()===FALSE)
        {
        $data['title']='Search Patients';
        $data['module']='patients';
        $data['view_file']='search';
        echo Modules::run('templates/user_layout',$data);
		}
}
	public function searchpatients()
	{
		$firstname = $this->input->post('firstname');
		$data['patient_name'] = $this->patients->get_patient($firstname);
		$data['title']='Search Patients';
        $data['module']='patients';
        $data['view_file']='search_patients';
        echo Modules::run('templates/user_layout',$data);
	}
}
