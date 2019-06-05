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

  public function get_patients(){
    $querry=$this->db->select('patients.id,patients.firstname,patients.lastname,patients.email,patients.age,patients.gender,
    patients.address,patients.Contact_no,patients.Bloodgrp,patients.AllergicTo,patients.Significant_history')->from('patients')->order_by('patients.id','DESC')->get();
    return $querry->result_array();
  }
}