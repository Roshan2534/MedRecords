<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class prescriptions extends MY_Model
{
  //the database table
  public $table_name = 'prescriptions';

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

public function get_prescription($patient_id){
	$querry=$this->db->select('prescriptions.id,prescriptions.patient_id,prescriptions.profile_pic,patients.id')->from('prescriptions')->join('patients','patients.id=prescriptions.patient_id')->where(array('prescriptions.patient_id' => $patient_id))->order_by('prescriptions.id','DESC')->get();
	return $querry->result_array();
}

}
