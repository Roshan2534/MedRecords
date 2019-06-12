<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Migration_Add_prescriptions extends CI_Migration{
    public function __construct(){
        parent::__construct();
    }

    public function up()
    {
        $this->dbforge->add_field(array(
            'id'=>array(
                'type'=>'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'patient_id'=> array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE
            ),        
            'profile_pic'=> array(
                'type' => 'VARCHAR',
                'constraint' => 100
            )
            
             ));
        $this->dbforge->add_key('id',TRUE);
        $this->dbforge->create_table('prescriptions');
        
    }
    public function down()
        {
            $this->dbforge->drop_table('prescriptions');
        }
}