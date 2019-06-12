<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class patients extends MY_Model
{
  //the database table
  public $table_name = 'patients';

  //Primary key field
  public $primary_key = 'id';

  //Filter for primary key
  public $primaryFilter = 'intval';

  //Order by field, Default order for this model
  public $order_by = '';

  public function __construct()
  {
    parent::__construct();
  }

  public function get_patients($doc_id){
    $querry=$this->db->select('patients.id,patients.doc_id,patients.firstname,patients.lastname,patients.email,patients.age,patients.gender,
    patients.address,patients.Contact_no,patients.Bloodgrp,patients.AllergicTo,patients.Significant_history,patients.profile_pic,doctor.username')->from('patients')->join('doctor','doctor.id=patients.doc_id')->where(array('patients.doc_id' => $doc_id))->order_by('patients.id','DESC')->get();
    return $querry->result_array();
  }

  public function get_single_patient($id){
    $querry=$this->db->select('patients.id,patients.doc_id,patients.firstname,patients.lastname,patients.email,patients.age,patients.gender,
    patients.address,patients.Contact_no,patients.Bloodgrp,patients.AllergicTo,patients.Significant_history,patients.profile_pic,doctor.username')->from('patients')->join('doctor','doctor.id=patients.doc_id')->where(array('patients.id' => $id))->order_by('patients.id','DESC')->get();
    return $querry->row_array();
  }
}